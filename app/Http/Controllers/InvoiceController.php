<?php

namespace App\Http\Controllers;

use Modules\Booking\Models\Booking;
use Modules\Promotion\Models\Coupon;
use Modules\Booking\Models\BookingService;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $module_action = 'List';
        $module_title = 'Invoice Cards';
        
        $invoices = Invoice::all();

        return view('backend.invoice.index_datatable', compact('module_action', 'invoices' , 'module_title'));
    }
    
    public function validateCoupon(Request $request)
    {
        $couponCode = $request->query('coupon_code');
        $serviceId = $request->query('service_id');
        $bookingId = $request->query('booking_id');
    
        $coupon = Coupon::where('coupon_code', $couponCode)
            ->where('is_expired', 0)
            ->where('use_limit', '>=', 1)
            ->first();    

        if ($coupon && in_array((int)$serviceId, $coupon->services)) {
        
            // خصم من اليوز ليميت
            $coupon->decrement('use_limit');
        
            // احسب قيمة الخصم
            $bookingService = BookingService::where('booking_id', $bookingId)->whereNull('coupon_code')->first();
            $price = $bookingService->service_price ?? 0;
        
            $discountAmount = $coupon->discount_type === 'percent'
                ? ($price * $coupon->discount_percentage / 100)
                : $coupon->discount_amount;
        
            // احفظ الكوبون في السطر
            $bookingService->update([
                'coupon_code' => $coupon->coupon_code,
                'discount_amount' => $discountAmount,
            ]);
        
            return response()->json([
                'valid' => true,
            ]);
        }

        return response()->json(['valid' => false]);
    }
    
    public function validateInvoiceCoupon(Request $request)
    {
        $couponCode = $request->query('coupon_code');
    
        $coupon = Coupon::where('coupon_code', $couponCode)
                        ->where('is_expired', 0)
                        ->where('use_limit', '>=', 1)
                        ->first();
    
        // غير صالح لو مش موجود أو مربوط بخدمة معينة
        if (!$coupon || $coupon->services != 0) {
            return response()->json(['valid' => false]);
        }
        
        $coupon->decrement('use_limit');
    
        return response()->json([
            'valid' => true,
            'discount_amount' => $coupon->discount_amount ?? 0
        ]);
    }


}
