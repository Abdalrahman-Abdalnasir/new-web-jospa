<?php

namespace App\Http\Controllers;

use App\Imports\ServicesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);
    
        Excel::import(new ServicesImport, $request->file('file'));
    
        return back()->with('success', 'تم استيراد الخدمات بنجاح!');
    }

}


