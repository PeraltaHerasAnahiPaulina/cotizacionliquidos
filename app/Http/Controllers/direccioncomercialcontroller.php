<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class direccioncomercialcontroller extends Controller
{
    //
    public function iniciodireccion(){
        return view('direccioncomercial.inicio');
    }
    public function cotizacionreporte(){
        return view('direccioncomercial.cotizacion.cotizacionreporte');
    }
}
