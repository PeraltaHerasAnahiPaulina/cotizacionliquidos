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

Route::get('/reporte', [cargararchivoscontroller::class, 'reporte'])->name('reporte');
Route::get('/client',  [cargararchivoscontroller::class, 'client'])->name('client');
Route::get('/edicion', [cargararchivoscontroller::class,'edicion'])->name('edicion');
Route::get('/userventas', [cargararchivoscontroller::class,'userventas'])->name('userventas');
Route::get('/consultaventa', [cargararchivoscontroller::class,'consultaventa'])->name('consultaventa');


