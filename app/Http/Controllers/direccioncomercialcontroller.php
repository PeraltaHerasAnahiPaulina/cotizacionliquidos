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

    public function coti3(){
        return view('direccioncomercial.cotizacion.coti3');
    }

    public function usuario(){
        return view ('direccioncomercial.catalogos.usuario');
    }
    
    public function infogerencia(){
        return view ('direccioncomercial.catalogos.infogerencia');
    }
    public function editgerencia(){
        return view ('direccioncomercial.catalogos.editgerencia');
    }

}
