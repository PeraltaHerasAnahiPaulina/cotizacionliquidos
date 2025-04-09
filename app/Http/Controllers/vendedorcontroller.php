<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendedorcontroller extends Controller
{
    //
    public function estadisticasexcel(){
        return view('vendedor.estadisticas.estadisticaexcel');
    }
    public function graficasv(){
        return view('vendedor.estadisticas.estadisticas');
    }
    public function iniciovendedor(){
        return view('vendedor.inicio');
    }


    public function cotizacionreporte(){
        return view('vendedor.cotizacion.cotizacionreporte');
    }

    public function coti(){
        return view('vendedor.cotizacion.coti');
    }
    public function cotiv2(){
        return view('vendedor.cotizacion.cotiv2');
    }
    public function altaclient(){
        return view('vendedor.catalogo.altaclient');
    }
    public function cliente(){
        return view('vendedor.catalogo.cliente');
    }
    public function editarv(){
        return view('vendedor.catalogo.editarv');
    }
}
