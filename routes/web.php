<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cargararchivoscontroller;
use App\Http\Controllers\vendedorcontroller;
use App\Http\Controllers\gerenciaventascontroller;
use App\Http\Controllers\direccioncomercialcontroller;
use App\Http\Controllers\cargasapcontroller;
use App\Http\Controllers\adminventascontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',  [cargararchivoscontroller::class, 'productos'])->name('productos'); 
Route::get('/clientes',  [cargararchivoscontroller::class, 'clientes'])->name('clientes'); 
Route::get('/precios',  [cargararchivoscontroller::class, 'precios'])->name('precios'); 
Route::get('/inventario',  [cargararchivoscontroller::class, 'inventario'])->name('inventario'); 
Route::get('/cotizacion',  [cargararchivoscontroller::class, 'cotizacion'])->name('cotizacion'); 

Route::get('/reporte', [cargararchivoscontroller::class, 'reporte'])->name('reporte');
Route::get('/client',  [cargararchivoscontroller::class, 'client'])->name('client');
Route::get('/edicion', [cargararchivoscontroller::class,'edicion'])->name('edicion');
Route::get('/userventas', [cargararchivoscontroller::class,'userventas'])->name('userventas');
Route::get('/consultaventa', [cargararchivoscontroller::class,'consultaventa'])->name('consultaventa');


//Interfas Vendedor
Route::get('/iniciovendedor',  [vendedorcontroller::class, 'iniciovendedor'])->name('iniciovendedor'); 
Route::get('/cotizacionreportev',  [vendedorcontroller::class, 'cotizacionreporte'])->name('cotizacionreportev'); 
//Interfas Gerencia de ventas
Route::get('/iniciogerencia',  [gerenciaventascontroller::class, 'iniciogerencia'])->name('iniciogerencia'); 
Route::get('/cotizacionreporteg',  [gerenciaventascontroller::class, 'cotizacionreporte'])->name('cotizacionreporteg'); 
//Interfas Direccion Comercial
Route::get('/iniciodireccion',  [direccioncomercialcontroller::class, 'iniciodireccion'])->name('iniciodireccion');
Route::get('/cotizacionreportec',  [direccioncomercialcontroller::class, 'cotizacionreporte'])->name('cotizacionreportec'); 
//Interfas Carga Sap
Route::get('/iniciosap',  [cargasapcontroller::class, 'iniciosap'])->name('iniciosap');
Route::get('/cotizacionreportes',  [cargasapcontroller::class, 'cotizacionreporte'])->name('cotizacionreportes'); 
