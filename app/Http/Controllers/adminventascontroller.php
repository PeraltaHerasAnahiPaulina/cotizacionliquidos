<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminventascontroller extends Controller
{
    //
    public function inicioventas(){
        return view('adminventas.inicio');
    }
}
