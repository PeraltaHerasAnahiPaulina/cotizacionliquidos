<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cargararchivoscontroller extends Controller
{
    // 
    public function productos(){
    return view('cargaarchivos.productos');
}
    public function preciosPVL(){
        return view('cargaarchivos.preciospvl');
    }
    public function precios(){
        return view('cargaarchivos.precios');
    }
    public function inventario(){
        return view('cargaarchivos.inventarios');
    }
    public function cotizacion(){
        return view('cotizacion.cotizacion');
    }

   

}
