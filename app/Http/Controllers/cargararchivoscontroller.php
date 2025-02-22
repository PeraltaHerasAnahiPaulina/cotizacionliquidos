<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cargararchivoscontroller extends Controller
{
    // 
    public function productos(){
    return view('cargaarchivos.productos');
}
    public function clientes(){
        return view('cargaarchivos.cliente');
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

    public function reporte(){
        return view('catalogo.reporte');
    }

    public function client(){
        return view('catalogo.client');
    }
    public function edicion(){
        return view ('catalogo.edicion');
    }

    public function consultaventa(){
        return view ('catalogo.consultaventa');
    }
    public function userventas(){
        return view ('catalogo.userventas');
    }


}
