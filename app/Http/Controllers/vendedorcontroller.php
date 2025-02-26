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

    public function coti(){
        return view('vendedor.cotizacion.coti');
    }
    public function altaclient(){
        return view('vendedor.catalogo.altaclient');
    }
    public function cliente(){
        return view('vendedor.catalogo.cliente');
    }
}
