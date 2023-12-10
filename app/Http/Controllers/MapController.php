<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function mostrarFormulario()
    {
        return view('map-form');
    }

    public function procesarFormulario(Request $request)
    {
        $latitud = $request->input('latitud');
        $longitud = $request->input('longitud');
    

        return view('map', compact('latitud', 'longitud'));
    }
}
