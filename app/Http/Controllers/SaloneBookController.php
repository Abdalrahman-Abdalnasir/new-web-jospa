<?php

namespace App\Http\Controllers;

use App\Models\HomeBookService;
use App\Models\ServiceHome;
use App\Models\StaffHome;
use Illuminate\Http\Request;
use App\Models\ServiceGroupHome;
use Modules\Package\Models\Package;
use Modules\Package\Models\PackageService;
use Illuminate\Support\Facades\DB;

class SaloneBookController extends Controller
{


  public function show($id)
{
    // جلب بيانات الباكيج
    $package = DB::table('packages')->where('id', $id)->first();

    if (!$package) {
        return response()->json(['message' => 'Package not found'], 404);
    }

    // تحويل الباكيج إلى مصفوفة
    $package = (array) $package;
    $package['name'] = json_decode($package['name'], true);

    // جلب الخدمات المرتبطة بالباكيج
    $services = DB::table('package_services')
        ->join('services', 'package_services.service_id', '=', 'services.id')
        ->select(
            'package_services.id as package_service_id',
            'package_services.service_price',
            'package_services.discounted_price',
            'services.id as service_id',
            'services.name as service_name',
            'services.duration_min',
            'services.default_price'
        )
        ->where('package_services.package_id', $id)
        ->get();

    // تعريب اسم الخدمة حسب اللغة الحالية
    $currentLocale = app()->getLocale();
    $services->transform(function ($service) use ($currentLocale) {
        $service->service_name = json_decode($service->service_name, true)[$currentLocale] ?? '';
        return $service;
    });

    // حساب الإجمالي
    $totalServicePrice = $services->sum('service_price');
    $totalDiscountedPrice = $services->sum('discounted_price');

    // إرجاع JSON منسق
    return response()->json([
        'package' => $package,
        'services' => $services,
        'total_service_price' => $totalServicePrice,
        'total_discounted_price' => $totalDiscountedPrice
    ]);
}

}    
