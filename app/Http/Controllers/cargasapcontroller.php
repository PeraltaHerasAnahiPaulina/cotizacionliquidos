<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cargasapcontroller extends Controller
{
    //
    public function iniciosap(){
        return view('cargasap.inicio');
    }
    public function cotizacionreporte(){
        return view('cargasap.cotizacion.cotizacionreporte');
    }

    public function coti4(){
        return view('cargasap.cotizacion.coti4');
    }
}
