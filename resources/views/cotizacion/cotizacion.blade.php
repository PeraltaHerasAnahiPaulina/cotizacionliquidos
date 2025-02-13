@extends('layouts.templatep')

@section('contenido')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>COTIZACIÓN</span>
            </h1>
        </div>
    </div>
</div>

<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center" style="background-color: #00144F; color: #FFFFFF ;">Formulario de Cotización</h5>
            <form id="cotizacionForm">
                <div class="row">
                    <!-- Primera fila -->
                    <div class="col-md-3 mb-3">
                        <label for="fecha">Seleccionar Fecha:</label>
                        <input type="date" class="form-control" id="fecha">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="folio">Folio:</label>
                        <input type="text" class="form-control" id="folio">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cliente">Seleccione Cliente:</label>
                        <select class="form-select" id="cliente">
                            <option>Cliente 1</option>
                            <option>Cliente 2</option>
                            <option>Cliente 3</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="atencion">Atención:</label>
                        <select class="form-select" id="atencion">
                            <option>Atención 1</option>
                            <option>Atención 2</option>
                        </select>
                    </div>

                    <!-- Segunda fila -->
                    <div class="col-md-3 mb-3">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="tiempoEntrega">Tiempo de Entrega:</label>
                        <select class="form-select" id="tiempoEntrega">
                            <option>2 días</option>
                            <option>Inmediata</option>
                            <option>24 horas</option>
                            <option>3 días</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validezOferta">Validez de Oferta:</label>
                        <input type="text" class="form-control" id="validezOferta">
                    </div>

                    <!-- Tercera fila -->
                    <div class="col-md-3 mb-3">
                        <label for="moneda">Moneda:</label>
                        <select class="form-control" id="moneda">
                            <option>MXN</option>
                            <option>USD</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Forma de Pago:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formaPago" id="credito" value="credito">
                            <label class="form-check-label" for="credito">Crédito</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formaPago" id="contado" value="contado">
                            <label class="form-check-label" for="contado">Contado</label>
                        </div>
                    </div>
                </div>
<br>
<h5 class="text-center mt-4" style="background-color: #00144F; color: #FFFFFF;">Producto</h5>
<form>
    <div class="row">
        <!-- Primera fila con 5 elementos -->
        <div class="col-md-2 mb-3">
            <label for="tipo">Tipo:</label>
            <select class="form-select" id="tipo">
                <option>Tipo 1</option>
                <option>Tipo 2</option>
            </select>
        </div>
        <div class="col-md-2 mb-3">
            <label for="tiempoEntrega">Producto:</label>
            <select class="form-select" id="tiempoEntrega">
                <option>M-JET OIL II CAN 24X1UQL</option>
                <option>M-VACUOLINE 146 DRUM 208L</option>
                <option>M-JET OIL II CAN 24X1UQL</option>
            </select>
        </div>
        <div class="col-md-2 mb-3">
            <label for="presentacion">Presentación:</label>
            <input type="text" class="form-control" id="presentacion">
        </div>
        <div class="col-md-2 mb-3">
            <label for="disponibilidad">Disponibilidad:</label>
            <input type="text" class="form-control" id="disponibilidad">
        </div>
        <div class="col-md-2 mb-3">
            <label for="existencia">Existencia:</label>
            <input type="text" class="form-control" id="existencia">
        </div>
    </div>

    <div class="row">
        <!-- Segunda fila con 4 elementos y el botón al lado de Precio Total -->
        <div class="col-md-2 mb-3">
            <label for="costoUnitario">Costo Unitario:</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" id="costoUnitario">
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="descuento">Descuento:</label>
            <div class="input-group">
                <input type="number" class="form-control" id="descuento">
                <span class="input-group-text">%</span>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad">
        </div>
        <div class="col-md-2 mb-3 d-flex align-items-end">
            <div class="w-100">
                <label for="precioTotal">Precio Total:</label>
                <input type="text" class="form-control" id="precioTotal">
            </div>
        </div>
        <div class="col-md-2 mb-3 d-flex align-items-end">
            <button type="button" class="btn btn-primary w-100">Agregar</button>
        </div>
    </div>
</form>


<br>
            <h5 class=" text-center mt-4" style="background-color: #00144F; color: #FFFFFF ;">Productos Agregados</h5>
            <!-- Tabla: Artículos Solicitados -->
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #f5333f; color: white;">
                            <tr>
                                <th colspan="8" class="text-center">Artículos Solicitados</th>
                            </tr>
                        </thead>
                        <thead class="table text-center">
                            <tr>
                                <th style="background-color: #0d6efd; color: #000000 ;">Producto</th>
                                <th style="background-color: #0d6efd; color: #000000 ;">Cantidad</th>
                                <th style="background-color: #0d6efd; color: #000000 ;">Código</th>
                                <th style="background-color: #0d6efd; color: #000000 ;">Nombre</th>
                                <th style="background-color: #0d6efd; color: #000000 ;">Presentación</th>
                                <th style="background-color: #0d6efd; color: #000000 ;">Precio Unitario</th>
                                <th style="background-color: #0d6efd; color: #000000 ;">Precio Total</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td style="text-align: center;"> <img src="{{ asset('img/Mobil.jpg')}}" alt="Producto" class="me-md-3 mb-3 mb-md-0" style="width: 80px; height: auto; border-radius: 4px;"></td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">10</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">104765</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">Caja 24 pzas</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">$821,60</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">$8.214,60</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;"> <img src="{{ asset('img/Mobil.jpg')}}" alt="Producto" class="me-md-3 mb-3 mb-md-0" style="width: 80px; height: auto; border-radius: 4px;"></td>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">104765</td>
                                <td style="text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                                <td style="text-align: center;">Caja 24 pzas</td>
                                <td style="text-align: center;">$527,66</td>
                                <td style="text-align: center;">$5.276,60</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;"> <img src="{{ asset('img/mibi.png')}}" alt="Producto" class="me-md-3 mb-3 mb-md-0" style="width: 80px; height: auto; border-radius: 4px;"></td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">10</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">104765</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">M-VACUOLINE 146 DRUM 208L</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">Caja 24 pzas</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">$527,66</td>
                                <td style="background-color: #8c8c8c8c; text-align: center;">$5.276,60</td>
                            </tr>
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="color: #00144F ;" colspan="6" class="text-end">SUBTOTAL:</th>
                                <td class="text-end">$25.734,20</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="6" class="text-end">IVA 26% :</th>
                                <td class="text-end">$4.117,47</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="6" class="text-end fw-bold">TOTAL:</th>
                                <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$29.851</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            <div class="text-center mt-4">
                <button class="btn btn-success" id="createCotizacionBtn">Crear Cotización</button>
            </div>
        </div>
    </div>
</div>



    @endsection
            