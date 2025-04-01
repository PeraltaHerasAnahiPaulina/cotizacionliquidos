<div class="panel panel-default">
    <div class="panel-body">
        <div id="list" class="table-responsive">

            <table border="0" cellspacing="5" cellpadding="5" class="date-table">
                <tbody>
                    <tr>
                        <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-right: 10px;">Fecha
                            Inicial:</td>
                        <td><input class="date-input" type="text" id="min" name="min"></td>
                        <td class="label-cell"
                            style="font-size: 14px; font-weight:bold; padding-left: 20px; padding-right: 10px;">Fecha
                            Final:</td>
                        <td><input class="date-input" type="text" id="max" name="max"></td>
                        <td style="padding-left: 20px;">
                            <!-- Botón Excel -->
                            <button class="btn btn-success btn-sm" id="exportButton" onclick="exportToExcel()">
                                <i class="fa fa-file-excel"></i> Exportar Excel
                            </button>
                        </td>
                        <td class="search-controls" style="font-size: 14px; font-weight:bold;">
                            Buscar: <input type="text" id="searchInput" placeholder="Buscar...">
                        </td>

                    </tr>
                </tbody>
            </table>
            <table id="documentTable" class="table table-striped table-bordered display" style="width: 100%">
                <thead>
                    <tr style="background-color: #E0E0E0">
                        <th style="background-color: #323F52; color: #ffffff; width: 80px">Fecha</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 180px; ">Folio</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 320px;">Cliente</th>
                        <th style="background-color: #323F52; color: #ffffff">Monto</th>
                        <th style="background-color: #323F52; color: #ffffff;  width:250px;">Estatus Cliente</th>
                        <th style="background-color: #323F52; color: #ffffff;  width:250px;">Estatus Gerencia</th>
                        <th style="background-color: #323F52; color: #ffffff;  width:250px;">Estatus Carga Sap</th>
                        <th style="background-color: #323F52; color: #ffffff; width:120px">Acciones</th>
                    </tr>
                    <tr>
                        <th><input type="text" placeholder="Buscar Fecha"></th>
                        <th><input type="text" placeholder="Buscar Folio"></th>
                        <th><input type="text" placeholder="Buscar Cliente"></th>
                        <th><input type="text" placeholder="Buscar Monto"></th>
                        <th><input type="text" placeholder="Buscar Estatus Cliente"></th>
                        <th><input type="text" placeholder="Buscar Estatu Gerencia"></th>
                        <th><input type="text" placeholder="Buscar Estatus Carga Sap "></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>18-02-2025</td>
                        <td>AME1-IND-00001-01</td>
                        <td>NUEVA GENERACION AERONAUTICA</td>
                        <td>$17,654.01</td>
                        <td style="text-align: center;">
                            <div style="margin-bottom: 10px; text-align: center;color: #f1e30f">Pendiente aceptacion
                                Cliente</div>
                            <button type="button" class="btn btn-primary text-center" data-toggle="modal"
                                data-target="#estadoModal">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </td>
                        <td style="text-align: center;color: #f1e30f">Pendiente de autorizacion por Gerente</td>
                        <td style="text-align: center; color: #f1e30f">Archivo SAP pendiente
                            Generar</td>

                        <td>

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal2">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <!-- Botón Ver -->
                            <button class="btn btn-info btn-sm" onclick="showDetails(1)">
                                <i class="fa fa-eye"></i>
                            </button>
                            <!-- Botón Editar (libretita) -->
                            <button class="btn btn-warning btn-sm" onclick="editItem(1)">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>25-09-2025</td>
                        <td>xd-dlD-00001</td>
                        <td>Taller Automotriz A</td>
                        <td>$15,923.12</td>
                        <td style="text-align: center;">
                            <div style="margin-bottom: 10px; text-align: center;color: #f1e30f">Pendiente aceptacion
                                Cliente</div>
                            <button type="button" class="btn btn-primary text-center" data-toggle="modal"
                                data-target="#estadoModal">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </td>
                        <td style="text-align: center;color: #f1e30f">Pendiente de autorizacion por Gerente</td>
                        <td style="text-align: center; color: #f1e30f">Archivo SAP pendiente
                            Generar</td>

                        <td>

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal2">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <!-- Botón Ver -->
                            <button class="btn btn-info btn-sm" onclick="showDetails()">
                                <i class="fa fa-eye"></i>
                            </button>
                            <!-- Botón Editar (libretita) -->
                            <button class="btn btn-warning btn-sm" onclick="editItem(1)">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>19-07-2024</td>
                        <td>CDI2-3303-00031</td>
                        <td>Taller Tollocan</td>
                        <td>$18,263.32</td>
                        <td style="text-align: center;">
                            <div style="margin-bottom: 10px; text-align: center;color: #f1e30f">Pendiente aceptacion
                                Cliente</div>
                            <button type="button" class="btn btn-primary text-center" data-toggle="modal"
                                data-target="#estadoModal">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </td>
                        <td style="text-align: center;color: #f1e30f">Pendiente de autorizacion por Gerente</td>
                        <td style="text-align: center; color: #f1e30f">Archivo SAP pendiente
                            Generar</td>

                        <td>

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal2">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <!-- Botón Ver -->
                            <button class="btn btn-info btn-sm" onclick="showDetails()">
                                <i class="fa fa-eye"></i>
                            </button>
                            <!-- Botón Editar (libretita) -->
                            <button class="btn btn-warning btn-sm" onclick="editItem(1)">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>19-02-2025</td>
                        <td>AME1-IND-00001-01</td>
                        <td>PROSPECTO NUEVA GENERACION AERONAUTICA <br> <div class="container mt-4">
    <!-- Botón para abrir el modal -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCotizacion_123">
        <i class="fas fa-file-invoice"></i>
    </button>
</div>
</td>

<!-- Modal -->
<div class="modal fade" id="modalCotizacion_123" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Hacemos el modal más amplio -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Asignación Cotización a Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Primera fila: Cotización, Fecha, Vendedor -->
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Cotización:</label>
                            <input type="text" class="form-control" value="AMEL-IND-00002-01" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Fecha:</label>
                            <input type="date" class="form-control" value="2025-02-21" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Vendedor:</label>
                            <input type="text" class="form-control" value="Pedro Sanabria" readonly>
                        </div>
                    </div>

                    <!-- Segunda fila: Tiempo de entrega, Validez Oferta, Moneda con checkboxes -->
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tiempo de entrega:</label>
                            <input type="text" class="form-control" value="2 días">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Validez Oferta:</label>
                            <input type="text" class="form-control" value="Cambios con previo aviso">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label d-block">Moneda Forma de Pago:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="monedaMXN" checked>
                                <label class="form-check-label" for="monedaMXN">MXN</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="monedaCredito">
                                <label class="form-check-label" for="monedaCredito">Crédito</label>
                            </div>
                        </div>
                    </div>

                    <!-- Campos alineados uno debajo del otro -->
                    <div class="mb-2">
                        <label class="form-label">Seleccione Cliente:</label>
                        <select class="form-select">
                            <option selected>321981 - Taller La Paz</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Atención:</label>
                        <select class="form-select">
                            <option selected>Carlos Lopez</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Correo:</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Teléfono:</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Guardar Cambio</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

                        <td>$15,923.12</td>
                        <td style="text-align: center;">
                            <div style="margin-bottom: 10px; text-align: center;color: #f1e30f">Pendiente aceptacion
                                Cliente</div>
                            <button type="button" class="btn btn-primary text-center" data-toggle="modal"
                                data-target="#estadoModal">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </td>
                        <td style="text-align: center;color: #f1e30f">Pendiente de autorizacion por Gerente</td>
                        <td style="text-align: center; color: #f1e30f">Archivo SAP pendiente
                            Generar</td>

                        <td>

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal2">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <!-- Botón Ver -->
                            <button class="btn btn-info btn-sm" onclick="showDetails()">
                                <i class="fa fa-eye"></i>
                            </button>
                            <!-- Botón Editar (libretita) -->
                            <button class="btn btn-warning btn-sm" onclick="editItem(1)">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Tabla dentro del modal -->
                <table class="table table-bordered">
                    <thead style="background-color: #f5333f; color: white;">
                        <tr>
                            <th colspan="8" class="text-center" style="background-color: #00144F; color: #FFFFFF ;">
                                Reporte de Cardex de Cotización AME1.IND-00001</th>
                        </tr>
                    </thead>
                    <thead class="table text-center">
                        <tr>
                            <th style="background-color: #0d6efd; color: #ffffff ;">FECHA MOVIMIENTO</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">VERSIÓN DE COTIZACIÓN</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">STATUS ANTERIOR</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">STATUS NUEVO</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">USUARIO HIZO CAMBIO</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">PERFIL</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">OBSERVACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">19/02/2025</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">
                                AME1-IND-00001-01</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Pendiente
                                aprobación gerencia</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Aprobada
                                gerencia</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Miguel Escutia
                            </td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Gerente ventas
                            </td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Sin cambio</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">20/02/2025</td>
                            <td style="text-align: center;">AME1-IND-00001-01</td>
                            <td style="text-align: center;">Aprobada gerencia</td>
                            <td style="text-align: center;">Pendiente aprobación cliente</td>
                            <td style="text-align: center;">Pedro sanabria</td>
                            <td style="text-align: center;">Vendedor</td>
                            <td style="text-align: center;">Se envia a cliente para revisión</td>
                        </tr>
                        <tr>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">21/02/2025</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">
                                AME1-IND-00001-01</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Pendiente
                                aprobación cliente</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Aprobada por
                                cliente</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Pedro sanabria
                            </td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Vendedor</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">El cliente
                                aprueba la cotización</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">21/02/2025</td>
                            <td style="text-align: center;">AME1-IND-00001-02</td>
                            <td style="text-align: center;">Aprobada por cliente</td>
                            <td style="text-align: center;">Pendiente de descarga de archivo LSW</td>
                            <td style="text-align: center;">Pedro Sanabria</td>
                            <td style="text-align: center;">Vendedor</td>
                            <td style="text-align: center;"></td>
                        </tr>
                        <tr>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">22/02/2025</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">
                                AME1-IND-0001-03</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Pendiente de
                                descarga de archivo LSW</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Archivo LSW
                                cargado</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Ana Mendez</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Carga Sap</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Archivo cargado
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>




<div id="details-1" class="details-container">
    <div class="d-flex justify-content-between align-items-center">
        <div class="form-group">
            <div>
                <div class="card">
                    <div class="card-body">
                        <form id="downloadForm" method="POST" action="{{ route('descargar.pdf') }}"
                            class="d-flex align-items-center">
                            @csrf
                            <button type="button" id="descargarBtn" class="btn btn-primary me-3">
                                <i class="fa fa-download"></i> Descargar PDF
                            </button>
                            <div class="d-flex flex-column me-3">
                                <strong>Firma</strong>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <input type="radio" name="firma" id="con_firma" value="con_firma" class="me-1"
                                            checked>
                                        <label for="con_firma">Sí</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="firma" id="sin_firma" value="sin_firma" class="me-1">
                                        <label for="sin_firma">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column">
                                <strong>Descuento</strong>
                                <div class="d-flex align-items-center">
                                    <div class="me-2">
                                        <input type="radio" name="descuento" id="descuento_si" value="si" class="me-1"
                                            checked>
                                        <label for="descuento_si">Sí</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="descuento" id="descuento_no" value="no" class="me-1">
                                        <label for="descuento_no">No</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal-body">
        <div class="d-flex justify-content-between">
            <!-- Sección 1 -->
            <div class="section-container" style="flex: 1; margin-right: 10px;">
                <h5>Cotización</h5>
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" value="2025-02-21" readonly>
                </div>
                <div class="form-group">
                    <label>Folio</label>
                    <input type="text" class="form-control" value="F12345" readonly>
                </div>
                <div class="form-group">
                    <label>Cliente</label>
                    <input type="text" class="form-control" value="NUEVA GENERACION AERONAUTICA" readonly>
                </div>
                <div class="form-group">
                    <label>Atención</label>
                    <input type="text" class="form-control" value="NADIA FONSECA" readonly>
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" value="NADIA@example.com" readonly>
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" class="form-control" value="123-456-7890" readonly>
                </div>
            </div>
            <!-- Sección 2 -->
            <div class="section-container" style="flex: 1; margin-right: 10px;">
                <h5>Cotización de Venta</h5>
                <div class="form-group">
                    <label>Tiempo de entrega</label>
                    <input type="text" class="form-control" value="DE ACUERDO A DISPONIBILIDAD DE PRODUCTO" readonly>
                </div>
                <div class="form-group">
                    <label>Validez de oferta</label>
                    <input type="text" class="form-control" value="CAMBIO CON PREVIO AVISO" readonly>
                </div>
                <div class="form-group">
                    <label>Moneda</label>
                    <input type="text" class="form-control" value="MXN" readonly>
                </div>
                <div class="form-group">
                    <label>Forma de pago</label>
                    <input type="text" class="form-control" value="CREDITO" readonly>
                </div>
            </div>
            <!-- Sección 3 -->
            <div class="section-container" style="flex: 1;">
                <div class="form-group">
                    <label>Autorizo Cliente</label>
                    Sí<input type="radio" id="html1" name="fav_language_cliente" value="si" checked readonly>
                    No<input type="radio" id="html2" name="fav_language_cliente" value="no" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Fecha Autorizacion Cliente</label>
                    <input type="Date" class="form-control" value="2025-02-21" readonly>
                </div>
                <div class="form-group">
                    <label>Autorizo Gerente</label>
                    Sí<input type="radio" id="html3" name="fav_language_gerente" value="si" checked readonly>
                    No<input type="radio" id="html4" name="fav_language_gerente" value="no" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Fecha Autorizacion Gerente</label>
                    <input type="Date" class="form-control" value="2025-02-21" readonly>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" value="Jesus Peñaloza Cruz" readonly>
                </div>
                <div class="form-group">
                    <label>División</label>
                    <input type="text" class="form-control" value="Industrial" readonly>
                </div>
                <div class="form-group">
                    <label>Observaciones</label>
                    <input type="text" class="form-control" value="Sin Observaciones" readonly>
                </div>
                <div class="form-group">
                    <label>Formato LSMW</label>
                    Sí<input type="radio" id="html9" name="fav_language_lsmw" value="si" checked readonly>
                    No<input type="radio" id="html10" name="fav_language_lsmw" value="no" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Fecha de generación de archivo</label>
                    <input type="Date" class="form-control" value="2025-02-21" readonly>
                </div>
            </div>
        </div>
        <hr>
        <!-- Tabla de resumen -->
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
                        <th style="background-color: #0d6efd; color: #ffffff ;">Cantidad</th>
                        <th style="background-color: #0d6efd; color: #ffffff ;">Código</th>
                        <th style="background-color: #0d6efd; color: #ffffff ;">Nombre</th>
                        <th style="background-color: #0d6efd; color: #ffffff ;">Presentación</th>
                        <th style="background-color: #0d6efd; color: #ffffff ;">Precio Unitario</th>
                        <th style="background-color: #0d6efd; color: #ffffff ;">Descuento</th>
                        <th style="background-color: #0d6efd; color: #ffffff ;">Precio Total</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-JET OIL II CAN
                            24X1UQL</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$821,60</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">10%</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$4,929.60</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">10</td>
                        <td style="text-align: center;">104765</td>
                        <td style="text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                        <td style="text-align: center;">Caja 24 pzas</td>
                        <td style="text-align: right;">$527.66</td>
                        <td style="text-align: right;">0%</td>
                        <td style="text-align: right;">$5,276.60</td>
                    </tr>
                    <tr>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-VACUOLINE 146
                            DRUM 208L</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja de 24 Pzas
                        </td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$527.66</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">5%</td>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$5,012.77</td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th style="color: #00144F ;" colspan="6" class="text-end">SUBTOTAL:</th>
                        <td class="text-end">$15,218.97</td>
                    </tr>
                    <tr>
                        <th style="color: #00144F ;" colspan="6" class="text-end">IVA 26% :</th>
                        <td class="text-end">$2,435.04</td>
                    </tr>
                    <tr>
                        <th style="color: #00144F ;" colspan="6" class="text-end fw-bold">TOTAL:</th>
                        <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$17,654.01</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <button class="btn btn-danger" onclick="closeDetails(1)">Cerrar</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="estadoModal" tabindex="-1" role="dialog" aria-labelledby="estadoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="estadoModalLabel">Actualizar Estado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Select de estado -->
                    <div class="form-group">
                        <label for="estadoSelect" class="d-block">Estado</label>
                        <select class="form-control custom-select" id="estadoSelect">
                            <option value="">Seleccione un estado</option>
                            <option value="pendiente">Pendiente aceptación cliente</option>
                            <option value="aceptada" selected>Aceptada por cliente</option>
                            <option value="cancelada">Cancelada por Cliente</option>
                        </select>
                    </div>

                    <!-- Fecha de modificación -->
                    <div class="form-group" id="fechaGroup">
                        <label for="fechaModificacion" class="d-block">Fecha de Cambio de Estado</label>
                        <input type="date" class="form-control" id="fechaModificacion">
                    </div>

                    <!-- Observaciones -->
                    <div class="form-group" id="observacionesGroup">
                        <label for="observaciones" class="d-block">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3">Se acepta</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>