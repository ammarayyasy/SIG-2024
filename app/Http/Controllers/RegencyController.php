<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    public function populasi()
    {
        $provinces = Province::all();
        // return dd($provinces);

        return view('tematik.populasi.index', compact('provinces'));
    }

    public function populasiById($province_id) 
    {
        $province = Province::where('id', $province_id)->first();
        $regencies = Regency::where('province_id', $province_id)->get();
        // return dd($province);
    
        return view('tematik.populasi.detail', compact('regencies', 'province'));
    }
    
}
