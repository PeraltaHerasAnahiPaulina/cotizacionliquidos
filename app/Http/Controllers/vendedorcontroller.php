<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendedorcontroller extends Controller
{
    //
    public function iniciovendedor(){
        return view('vendedor.inicio');
    }


    public function cotizacionreporte(){
        return view('vendedor.cotizacion.cotizacionreporte');
    }
}
