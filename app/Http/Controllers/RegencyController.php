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

        return view('tematik.populasi.index', compact('provinces'));
    }

    public function populasiById($province_id) 
    {
        $province = Province::where('id', $province_id)->first();
        $regencies = Regency::where('province_id', $province_id)->get();
    
        return view('tematik.populasi.detail', compact('regencies', 'province'));
    }

    public function pernikahan()
    {
        $provinces = Province::all();

        return view('tematik.pernikahan.index', compact('provinces'));
    }

    public function pernikahanById($province_id) 
    {
        $province = Province::where('id', $province_id)->first();
        $regencies = Regency::where('province_id', $province_id)->get();
    
        return view('tematik.pernikahan.detail', compact('regencies', 'province'));
    }

    public function perceraian()
    {
        $provinces = Province::all();

        return view('tematik.perceraian.index', compact('provinces'));
    }

    public function perceraianById($province_id) 
    {
        $province = Province::where('id', $province_id)->first();
        $regencies = Regency::where('province_id', $province_id)->get();
    
        return view('tematik.perceraian.detail', compact('regencies', 'province'));
    }

    public function kelahiran()
    {
        $provinces = Province::all();

        return view('tematik.kelahiran.index', compact('provinces'));
    }

    public function kelahiranById($province_id) 
    {
        $province = Province::where('id', $province_id)->first();
        $regencies = Regency::where('province_id', $province_id)->get();
    
        return view('tematik.kelahiran.detail', compact('regencies', 'province'));
    }
    
}
