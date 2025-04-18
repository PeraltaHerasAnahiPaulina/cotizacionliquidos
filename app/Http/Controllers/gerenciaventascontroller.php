<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


class gerenciaventascontroller extends Controller
{
    //
    public function estadisticasexcelv(){
        return view('gerenciaventas.estadisticas.estadisticasexcelv');
    }
    public function graficas(){
        return view('gerenciaventas.estadisticas.estadisticas');
    }
    public function iniciogerencia(){
        return view('gerenciaventas.inicio');
    }

    public function reporte(){
        return view('gerenciaventas.catalogo.reporte');
    }

    public function client(){
        return view('gerenciaventas.catalogo.client');
    }
    public function edicion(){
        return view ('gerenciaventas.catalogo.edicion');
    }

    public function consultaventa(){
        return view ('gerenciaventas.catalogo.consultaventa');
    }
    public function userventas(){
        return view ('gerenciaventas.catalogo.userventas');
    }

    public function cotizacionreporte(){
        return view('gerenciaventas.cotizacion.cotizacionreporte');
    }
    public function edituser(){
        return view('gerenciaventas.catalogo.edituser');
    }

    public function coti2(){
        return view('gerenciaventas.cotizacion.coti2');
    }

     
    public function descargar(Request $request)
   {
    
    $tipoFirma = $request->input('firma');

    
    if ($tipoFirma == 'con_firma') {
        $filePath = 'pdfs/cotizacion.pdf';  
    } else {
        $filePath = 'pdfs/cotizacion1.pdf';  
    }

    
    if (Storage::disk('public')->exists($filePath)) {
        
        return response()->download(storage_path("app/public/{$filePath}"));
    } else {
        
        return redirect()->back()->with('error', 'El archivo solicitado no existe.');
    } 
  }
}
