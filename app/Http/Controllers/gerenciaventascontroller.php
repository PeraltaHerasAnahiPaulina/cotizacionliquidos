<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gerenciaventascontroller extends Controller
{
    //
    public function iniciogerencia(){
        return view('gerenciaventas.inicio');
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
