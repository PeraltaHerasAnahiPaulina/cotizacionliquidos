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

Route::get('/reporte', [gerenciaventascontroller::class, 'reporte'])->name('reporte');
Route::get('/client',  [gerenciaventascontroller::class, 'client'])->name('client');
Route::get('/edicion', [gerenciaventascontroller::class,'edicion'])->name('edicion');
Route::get('/userventas', [gerenciaventascontroller::class,'userventas'])->name('userventas');
Route::get('/consultaventa', [gerenciaventascontroller::class,'consultaventa'])->name('consultaventa');


//Interfas Vendedor
Route::get('/iniciovendedor',  [vendedorcontroller::class, 'iniciovendedor'])->name('iniciovendedor'); 
//Interfas Gerencia de ventas
Route::get('/iniciogerencia',  [gerenciaventascontroller::class, 'iniciogerencia'])->name('iniciogerencia'); 
//Interfas Direccion Comercial
Route::get('/iniciodireccion',  [direccioncomercialcontroller::class, 'iniciodireccion'])->name('iniciodireccion');
//Interfas Carga Sap
Route::get('/iniciosap',  [cargasapcontroller::class, 'iniciosap'])->name('iniciosap');
