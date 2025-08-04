<?php

namespace App\Http\Controllers;
use App\Models\BookingCart;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Booking\Models\Booking;
use Modules\Booking\Models\BookingService;
use Modules\Wallet\Models\Wallet;
use App\Models\LoyaltyPoint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;



class BookingCartController extends Controller
{


    public function index(Request $request)
    {
        $cartItems = Booking::with('service.service', 'service.employee')
            ->where('created_by', auth()->user()->id)
            ->where('payment_status', 0)
            ->get();
    
        $totalPrice = $cartItems->sum(fn($item) =>
            $item->services->sum(fn($s) => $s->service_price ?? 0)
        );
    
        $discountTotal = $cartItems->sum(fn($item) =>
            $item->services->sum(fn($s) => $s->discount_amount ?? 0)
        );
    
        $finalPrice = $totalPrice - $discountTotal;
    
        $wallet = Wallet::where('user_id', auth()->id())->first();
        $balance = $wallet ? $wallet->amount : 0.00;
    
        if ($request->wantsJson()) {
            return response()->json([
                'cart_items' => $cartItems,
                'final_price' => $finalPrice,
                'wallet_balance' => $balance,
            ]);
        } else {
            return view('components.frontend.cart', compact('cartItems', 'finalPrice', 'balance' , 'discountTotal'));
        }
}

    public function store(Request $request)
    {
        try {
            Log::info('Booking data before validated', $request->all());

            $data = $request->validate([
                'n_name'            => 'required|string|max:255',
                'customer_id'       => 'nullable|integer',
                'mobile_no'         => 'required|string|max:20',
                'neighborhood'      => 'required|string|max:255',
                'gender'            => 'required|in:men,women',
                'service_group_id'  => 'required',
                'service_id'        => 'required',
                'date'              => 'required|date',
                'time'              => 'required|string',
                'branch'            => 'nullable',
                'staff_id'          => 'required',
                'status'            => 'nullable|string',
                'agreed'            => 'nullable|boolean',
                'auto_change_staff' => 'nullable|boolean',
            ]);
            
            $user = auth()->user();

            // 🟢 احسب التاريخ والوقت للحجز
            $startDateTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i', $data['date'] . ' ' . $data['time']);

            // 🟢 إنشاء الحجز
            $booking = new Booking();
            $booking->note = 'العميل: ' . $data['n_name'] .
                '، الجوال: ' . $data['mobile_no'] .
                '، الحي: ' . $data['neighborhood'] .
                '، الجنس: ' . $data['gender'] .
                '، مجموعة الخدمة: ' . $data['service_group_id'] .
                '، الخدمة: ' . $data['service_id'];
            $booking->start_date_time = $startDateTime;
            $booking->user_id         = $user->id;
            $booking->branch_id       = 1;
            $booking->created_by      = auth()->id(); // أو 1 كما في الأصل
            $booking->status          = 'pending';
            $booking->save();
            

            // 🟢 إنشاء السطر المرتبط في جدول booking_services
            $bookingService = new BookingService();
            $bookingService->booking_id       = $booking->id;
            $bookingService->service_id       = $data['service_id'];
            $bookingService->employee_id      = $data['staff_id'];
            $bookingService->start_date_time  = $startDateTime;
            $bookingService->service_price    = \Modules\Service\Models\Service::find($data['service_id'])->default_price ?? 0;
            $bookingService->duration_min     = 30; // لو عندك قيمة ثابتة أو تحسبها حسب نوع الخدمة
            $bookingService->sequance         = 1; // أو عدّدهم لو عندك أكثر من خدمة
            $bookingService->created_by       = auth()->id(); // أو 1
            $bookingService->save();
            $pointsToAdd = 10;

            LoyaltyPoint::updateOrCreate(
                ['user_id' => $data['staff_id']],
                ['points' => DB::raw('points + ' . $pointsToAdd)]
            );
            return redirect()->route('cart.page')->with('success', 'تم إضافة الحجز إلى السلة بنجاح.');
        } catch (\Exception $e) {
            Log::error('Booking Store Error: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request_data' => $request->all(),
            ]);

            return response()->json([
                'message' => 'حدث خطأ أثناء حفظ الحجز',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    
    public function destroy($id)
    {
        $booking = Booking::find($id);
        
        if (!$booking) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }
        
        $booking->delete();
        BookingService::where('booking_id', $id)->delete();
        
        return redirect()->back()->with('success', 'تم حذف العنصر من السلة');
    }
    
    public function cartPay(Request $request)
    {
        $user = auth()->user();

        $discountAmount = $request->discount_amount;
        $loyaltyDiscount = $request->loyalty_discount;
        $finalTotal = $request->final_total;

        session([ 'discountAmount' => $discountAmount   ,   'loyaltyDiscount' => $loyaltyDiscount   ,   'finalTotal' => $finalTotal ]);

        if ($request->pay == 'card') {
            $total = $request->final_total;

            try {
                $apiKey1 = env('TAP_SECRET_KEY');
                $response = Http::withHeaders([
                    'Authorization' => "Bearer $apiKey1",
                    'Content-Type' => 'application/json',
                ])->post('https://api.tap.company/v2/charges', [
                    "amount" => $total,
                    "currency" => "SAR",
                    "threeDSecure" => true,
                    "save_card" => false,
                    "description" => "طلب دفع",
                    "statement_descriptor" => "Jospa Store",
                    "customer" => [
                        "first_name" => auth()->user()->first_name,
                        "email" => auth()->user()->email ,
                    ],
                    "source" => [
                        "id" => "src_all"
                    ],
                    "redirect" => [
                        "url" => url("/success-py-invoice")
                    ]
                ]);

                $data = $response->json();
        
                if (isset($data['transaction']['url'])) {
                    return redirect()->to($data['transaction']['url']);
                }
        
                return view('components.frontend.status.ERPAY');

            } catch (\Exception $e) {
                return redirect()->back()->with('error', __('messages.payment_failed'))->withInput();
            }

        } else {
            $wallet = Wallet::where('user_id', $user->id)->first();
            $balance = $wallet ? $wallet->amount : 0.00;
            $amountToPay = $finalTotal;

            if ($balance >= $amountToPay) {
                // خصم المبلغ
                $wallet->amount -= $amountToPay;
                $wallet->save();

                $cartIds = Booking::where('user_id', $user->id)
                    ->where('payment_status', 0)
                    ->pluck('id')
                    ->toArray();
                    
                    if ($loyaltyDiscount > 0) {
                    DB::table('loyalty_points')
                        ->where('user_id', $user->id)
                        ->where('points', '>=', $loyaltyDiscount)
                        ->decrement('points', $loyaltyDiscount);
                    }

                $this->addLoyaltyPoints($user->id, $amountToPay);
                $this->storeInvoice($user->id, $discountAmount, $loyaltyDiscount, $finalTotal, $cartIds);

                Booking::where('user_id', $user->id)
                    ->where('payment_status', 0)
                    ->update(['payment_status' => 1]);

                return redirect()->back()->with('success', __('messages.wallet_payment_success'));
            } else {
                return redirect()->back()->with('error', __('messagess.wallet_insufficient_balance')); 
            }
        }
    }

    public function handlePaymentResult(Request $request)
    {
        $tapId = $request->get('tap_id');

        if (!$tapId) {
            return view('components.frontend.status.ERPAY')->with('error', 'No tap_id provided.');
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TAP_SECRET_KEY'),
        ])->get("https://api.tap.company/v2/charges/{$tapId}");

        $charge = $response->json();

        if (isset($charge['status']) && $charge['status'] === 'CAPTURED') {
            $user = auth()->user();

            $discountAmount = session('discountAmount', 0);
            $loyaltyDiscount = session('loyaltyDiscount', 0);
            $finalTotal = session('finalTotal', 0);

            $cartIds = Booking::where('user_id', $user->id)
                        ->where('payment_status', 0)
                        ->pluck('id')
                        ->toArray();
                        
            if ($loyaltyDiscount > 0) {
                DB::table('loyalty_points')
                    ->where('user_id', $user->id)
                    ->where('points', '>=', $loyaltyDiscount)
                    ->decrement('points', $loyaltyDiscount);
            }

            $this->addLoyaltyPoints($user->id, $charge['amount']);
            $this->storeInvoice($user->id, $discountAmount, $loyaltyDiscount, $finalTotal, $cartIds);

            Booking::where('user_id', $user->id)
                ->where('payment_status', 0)
                ->update(['payment_status' => 1]);

            return view('components.frontend.status.CAPTURED');
        } else {
            return view('components.frontend.status.FAILED');
        }
    }

    public function addLoyaltyPoints($userId, $paidAmount)
    {
        $pointsToAdd = floor($paidAmount / 100) * 5;

        if ($pointsToAdd <= 0) {
            return;
        }

        $loyalty = LoyaltyPoint::firstOrNew(['user_id' => $userId]);
        $loyalty->points = ($loyalty->points ?? 0) + $pointsToAdd;
        $loyalty->save();
    }

    private function storeInvoice($userId, $discountAmount, $loyaltyDiscount, $finalTotal, $cartIds)
    {
        Invoice::create([
            'user_id' => $userId,
            'cart_ids' => json_encode($cartIds),
            'discount_amount' => $discountAmount,
            'loyalty_points_discount' => $loyaltyDiscount,
            'final_total' => $finalTotal,
        ]);
    }

    public function checkLoyaltyPoints(Request $request)
    {
        $user = auth()->user();
        $points = LoyaltyPoint::where('user_id', $user->id)->value('points') ?? 0;

        return response()->json([
            'points' => $points,
        ]);
    }
    
}

