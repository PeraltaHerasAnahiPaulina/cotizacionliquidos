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
                <h5 class=" text-center mt-4" style="background-color: #00144F; color: #FFFFFF ;">Producto</h5>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="tipo">Tipo:</label>
                        <select class="form-select" id="tipo">
                            <option>Tipo 1</option>
                            <option>Tipo 2</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="producto">Producto:</label>
                        <input type="text" class="form-control" id="producto">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="presentacion">Presentación:</label>
                        <input type="text" class="form-control" id="presentacion">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="disponibilidad">Disponibilidad:</label>
                        <input type="text" class="form-control" id="disponibilidad">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="existencia">Existencia:</label>
                        <input type="text" class="form-control" id="existencia">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="costoUnitario">Costo Unitario:</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="costoUnitario">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="descuento">Descuento:</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="descuento">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cantidad">Precio Total:</label>
                        <input type="text" class="form-control" id="cantidad">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    
                    <button type="button" class="btn btn-primary">Agregar</button>
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
                                <th style="color: #00144F ;">Producto</th>
                                <th style="color: #00144F ;">Cantidad</th>
                                <th style="color: #00144F ;">Unidad</th>
                                <th style="color: #00144F ;">No. SKU</th>
                                <th style="color: #00144F ;">Descripción</th>
                                <th style="color: #00144F ;">Valor Unitario</th>
                                <th style="color: #00144F ;">Descuento</th>
                                <th style="color: #00144F ;">Importe</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td> <img src="{{ asset('img/filtrosfram.jpg')}}" alt="Producto" class="me-md-3 mb-3 mb-md-0" style="width: 80px; height: auto; border-radius: 4px;"></td>
                                <td>1</td>
                                <td>H87</td>
                                <td>15208-65F00</td>
                                <td>Filtro Aceite Golf Jetta<br><small> A2 A3 A4 A5 A6 87-18 Cordoba Fram</small></td>
                                <td>$628.25</td>
                                <td></td>
                                <td>$628.25</td>
                            </tr>
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="color: #00144F ;" colspan="7" class="text-end">SUBTOTAL:</th>
                                <td class="text-end">$628.25</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="7" class="text-end">IVA:</th>
                                <td class="text-end">$89.75</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="7" class="text-end fw-bold">TOTAL:</th>
                                <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$718.00</td>
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
            