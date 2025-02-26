@extends('vendedor.layouts.templatep')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla con Detalles Expandidos</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .section-container {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
    }
    .form-group {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .form-group label {
      flex: 1;
      margin-right: 10px;
    }
    .form-group input {
      flex: 2;
      background-color: #e9ecef;
      border: 1px solid #ccc;
    }
    .details-container {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      display: none;
    }
    .details-container h5 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Cotizaciones</span>
            </h1>
            <div class="page-header-subtitle">Consulta de Cotizaciones</div>
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-body">
                <div id="list" class="table-responsive">
    <table border="0" cellspacing="5" cellpadding="5" class="date-table">
        <tbody>
            <tr>
                <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-right: 10px;">Fecha Inicial:</td>
                <td><input class="date-input" type="text" id="min" name="min"></td>
                <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-left: 20px; padding-right: 10px;">Fecha Final:</td>
                <td><input class="date-input" type="text" id="max" name="max"></td>
                <td style="padding-left: 20px;">
                    <!-- Botón Excel -->
                    <button class="btn btn-success btn-sm" onclick="exportToExcel()">
                        <i class="fa fa-file-excel"></i> Exportar Excel
                    </button>
                </td>
                <td class="search-controls" style="font-size: 14px; font-weight:bold;">
                    Buscar:
                </td>
                <td><div id="searchContainer"></div></td>
            </tr>
        </tbody>
    </table>
    <table id="TablaEX" class="table table-striped table-bordered display" style="width: 100%">
        <thead>
            <tr style="background-color: #E0E0E0">
                <th style="background-color: #323F52; color: #ffffff">Fecha</th>
                <th style="background-color: #323F52; color: #ffffff">Folio</th>
                <th style="background-color: #323F52; color: #ffffff">Cliente</th>
                <th style="background-color: #323F52; color: #ffffff">Monto</th>
                <th style="background-color: #323F52; color: #ffffff">Estatus Cliente</th>
                <th style="background-color: #323F52; color: #ffffff">Estatus Gerencia</th>
                <th style="background-color: #323F52; color: #ffffff; width:25px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                  <td>21-02-2025</td>
                <td>AME1-IND-00001-01</td>
                <td>NUEVA GENERACION AERONAUTICA</td>
                <td>$28,263.52</td>
                <td style="text-align: center;">
                  <div style="margin-bottom: 10px; text-align: center;">Activo</div>
                    <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#estadoModal">
                     <i class="fa fa-refresh"></i>
                  </button>
                </td>
                </td>
                <td>Activo</td>
                <td>

                    <button class="btn btn-danger btn-sm" onclick="exportToPDF()">
                        <i class="fa fa-file-pdf"></i> 
                    </button>
                    <button class="btn btn-info btn-sm" onclick="showDetails(1)">
                        <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-warning btn-sm" onclick="editItem(1)">
                        <i class="fa fa-pencil"></i>
                    </button>
                </td>
            </tr>
            <tr>
                  <td>21-02-2025</td>
                <td>AME1-IND-00001-01</td>
                <td>NUEVA GENERACION AERONAUTICA</td>
                <td>$28,263.52</td>
                <td style="text-align: center;">
                  <div style="margin-bottom: 10px; text-align: center;">Activo</div>
                    <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#estadoModal">
                     <i class="fa fa-refresh"></i>
                  </button>
                </td>
                <td>Activo</td>
                <td>
                    <!-- Botón PDF -->
                    <button class="btn btn-danger btn-sm" onclick="exportToPDF()">
                        <i class="fa fa-file-pdf"></i> 
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
        </tbody>
    </table>
</div>

                    <!-- Detalles debajo de la tabla -->
                    <div id="details-1" class="details-container">
                    <div class="d-flex justify-content-between align-items-center">
          <div>
          <div>
            <button class="btn btn-primary"><i class="fa fa-download"></i> Descargar PDF</button>
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
  Sí<input type="radio" id="html1" name="fav_language_cliente" value="si" checked readonly >
  No<input type="radio" id="html2" name="fav_language_cliente" value="no" readonly disabled>
</div>
<div class="form-group">
  <label>Fecha Autorizacion Cliente</label>
  <input type="Date" class="form-control" value="2025-02-21" readonly>
</div>
<div class="form-group">
  <label>Autorizo Gerente</label>
  Sí<input type="radio" id="html3" name="fav_language_gerente" value="si" checked readonly >
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
  Sí<input type="radio" id="html9" name="fav_language_lsmw" value="si" checked readonly >
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
                            <th style="background-color: #0d6efd; color: #ffffff ;">Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                        <tr>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$821,60</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$8.214,60</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10</td>
                            <td style="text-align: center;">104765</td>
                            <td style="text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                            <td style="text-align: center;">Caja 24 pzas</td>
                            <td style="text-align: right;">$527,66</td>
                            <td style="text-align: right;">$5.276,60</td>
                        </tr>
                        <tr>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">5</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">122728</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-VACUOLINE 146 DRUM 208L</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Tambor</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$2,448.80</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$12,243.00</td>
                        </tr>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="color: #00144F ;" colspan="5" class="text-end">SUBTOTAL:</th>
                            <td class="text-end">$25.734,20</td>
                        </tr>
                        <tr>
                            <th style="color: #00144F ;" colspan="5" class="text-end">IVA 26% :</th>
                            <td class="text-end">$4.117,47</td>
                        </tr>
                        <tr>
                            <th style="color: #00144F ;" colspan="5" class="text-end fw-bold">TOTAL:</th>
                            <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$29.851,67</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        <button class="btn btn-danger" onclick="closeDetails(1)">Cerrar</button>
      </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="estadoModal" tabindex="-1" role="dialog" aria-labelledby="estadoModalLabel" aria-hidden="true">
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
            <select class="form-control" id="estadoSelect">
              <option value="">Seleccione un estado</option>
              <option value="entregado">Entregado</option>
              <option value="pendiente">Pendiente</option>
              <option value="cancelado">Cancelado</option>
              <option value="recibido">Recibido</option>
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
            <textarea class="form-control" id="observaciones" rows="3"></textarea>
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



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });

  function showDetails(id) {
    // Comprobar si el detalle ya está visible
    var detailContainer = $("#details-" + id);
    
    if (detailContainer.is(":visible")) {
      // Si está visible, lo ocultamos
      detailContainer.hide();
    } else {
      // Si no está visible, ocultamos todos los demás detalles y mostramos el correspondiente
      $(".details-container").hide(); 
      detailContainer.show();
    }
  }

  function closeDetails(id) {
    // Ocultar el detalle correspondiente
    $("#details-" + id).hide();
  }
</script>



</body>
</html>
@endsection
