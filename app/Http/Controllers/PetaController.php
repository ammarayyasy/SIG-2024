<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index() 
    {
        $provinces = Province::all();
        // return dd($provinces);

        return view('peta.index', compact('provinces'));
    }
}
