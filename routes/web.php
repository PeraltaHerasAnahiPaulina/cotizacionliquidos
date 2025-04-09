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
Route::get('/preciosPVL',  [cargararchivoscontroller::class, 'preciosPVL'])->name('preciosPVL'); 
Route::get('/precios',  [cargararchivoscontroller::class, 'precios'])->name('precios'); 
Route::get('/inventario',  [cargararchivoscontroller::class, 'inventario'])->name('inventario'); 
Route::get('/cotizacion',  [cargararchivoscontroller::class, 'cotizacion'])->name('cotizacion'); 

Route::get('/reporte', [gerenciaventascontroller::class, 'reporte'])->name('reporte');
Route::get('/client',  [gerenciaventascontroller::class, 'client'])->name('client');
Route::get('/edicion', [gerenciaventascontroller::class,'edicion'])->name('edicion');
Route::get('/userventas', [gerenciaventascontroller::class,'userventas'])->name('userventas');
Route::get('/consultaventa', [gerenciaventascontroller::class,'consultaventa'])->name('consultaventa');
Route::get('/edituser',[gerenciaventascontroller::class, 'edituser'])->name('edituser');
Route::get('/cliente', [vendedorcontroller::class,'cliente'])->name('cliente');
Route::get('/altaclient',[vendedorcontroller::class, 'altaclient'])->name('altaclient');
Route::get('/editarv',[vendedorcontroller::class,'editarv'])->name('editarv');
Route::get('/usuario',[direccioncomercialcontroller::class, 'usuario'])->name('usuario');
Route::get('/infogerencia',[direccioncomercialcontroller::class, 'infogerencia'])->name('infogerencia');
Route::get('/editgerencia',[direccioncomercialcontroller::class, 'editgerencia'])->name('editgerencia');

Route::post('/descargar-pdf', [gerenciaventascontroller::class, 'descargar'])->name('descargar.pdf');




//Interfas Vendedor
Route::get('/iniciovendedor',  [vendedorcontroller::class, 'iniciovendedor'])->name('iniciovendedor'); 
Route::get('/cotizacionreportev',  [vendedorcontroller::class, 'cotizacionreporte'])->name('cotizacionreportev'); 
Route::get('/coti',  [vendedorcontroller::class, 'coti'])->name('coti'); 
Route::get('/cotiv2',  [vendedorcontroller::class, 'cotiv2'])->name('cotiv2'); 
Route::get('/graficasv',  [vendedorcontroller::class, 'graficasv'])->name('graficasv'); 
Route::get('/estadisticasexcel',  [vendedorcontroller::class, 'estadisticasexcel'])->name('estadisticasexcel'); 
//Interfas Gerencia de ventas
Route::get('/iniciogerencia',  [gerenciaventascontroller::class, 'iniciogerencia'])->name('iniciogerencia'); 
Route::get('/cotizacionreporteg',  [gerenciaventascontroller::class, 'cotizacionreporte'])->name('cotizacionreporteg');
Route::get('/coti2',  [gerenciaventascontroller::class, 'coti2'])->name('coti2');  
Route::get('/graficas',  [gerenciaventascontroller::class, 'graficas'])->name('graficas');  

//Interfas Direccion Comercial
Route::get('/iniciodireccion',  [direccioncomercialcontroller::class, 'iniciodireccion'])->name('iniciodireccion');
Route::get('/cotizacionreportec',  [direccioncomercialcontroller::class, 'cotizacionreporte'])->name('cotizacionreportec');
Route::get('/coti3',  [direccioncomercialcontroller::class, 'coti3'])->name('coti3');
Route::get('/graficasd',  [direccioncomercialcontroller::class, 'graficasd'])->name('graficasd');   
//Interfas Carga Sap
Route::get('/iniciosap',  [cargasapcontroller::class, 'iniciosap'])->name('iniciosap');
Route::get('/cotizacionreportes',  [cargasapcontroller::class, 'cotizacionreporte'])->name('cotizacionreportes'); 
Route::get('/coti4',  [cargasapcontroller::class, 'coti4'])->name('coti4'); 

