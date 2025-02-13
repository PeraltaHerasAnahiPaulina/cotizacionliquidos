<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cargararchivoscontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',  [cargararchivoscontroller::class, 'productos'])->name('productos'); 
Route::get('/clientes',  [cargararchivoscontroller::class, 'clientes'])->name('clientes'); 
Route::get('/precios',  [cargararchivoscontroller::class, 'precios'])->name('precios'); 
Route::get('/inventario',  [cargararchivoscontroller::class, 'inventario'])->name('inventario'); 
Route::get('/cotizacion',  [cargararchivoscontroller::class, 'cotizacion'])->name('cotizacion'); 

