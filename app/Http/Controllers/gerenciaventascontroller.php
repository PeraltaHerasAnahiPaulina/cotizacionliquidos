<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gerenciaventascontroller extends Controller
{
    //
    public function iniciogerencia(){
        return view('gerenciaventas.inicio');
    }
}
