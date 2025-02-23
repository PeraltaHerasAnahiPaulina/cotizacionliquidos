@extends('layouts.templatep')


@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla con Modal Mejorado</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .modal-dialog {
      max-width: 90%;
      max-height: 90%;
    }
    .modal-header-container {
      background-color: #f0f0f0;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
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
                                        <div id="botonExcel"></div>
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
                                    <th style="background-color: #323F52; color: #ffffff">Tipo de Producto</th>
                                    <th style="background-color: #323F52; color: #ffffff">Costo</th>
                                    <th style="background-color: #323F52; color: #ffffff; width:25px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>2025-02-13</td>
        <td>F12345</td>
        <td>Juan Pérez</td>
        <td>Electrónico</td>
        <td>$1,500.00</td>
                                   <td>
                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detalleModal">
            <i class="fa fa-eye"></i>
          </button>

                                        
                                    </td>
                                </tr>
                                <td>2025-02-13</td>
        <td>F12345</td>
        <td>Juan Pérez</td>
        <td>Electrónico</td>
        <td>$1,500.00</td>
                              <td>
<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detalleModal">
            <i class="fa fa-eye"></i>
          </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="detalleModal" tabindex="-1" role="dialog" aria-labelledby="detalleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header-container">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <label>Visualizar monto:</label>
            <div>
              <label class="mr-3"><input type="radio" name="monto" value="si"> Sí</label>
              <label><input type="radio" name="monto" value="no"> No</label>
            </div>
          </div>
          <div>
            <label>Visualizar cambio de moneda:</label>
            <div>
           
            </div>
          </div>
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
              <input type="text" class="form-control" value="2025-02-13" readonly>
            </div>
            <div class="form-group">
              <label>Folio</label>
              <input type="text" class="form-control" value="F12345" readonly>
            </div>
            <div class="form-group">
              <label>Cliente</label>
              <input type="text" class="form-control" value="Juan Pérez" readonly>
            </div>
            <div class="form-group">
              <label>Atención</label>
              <input type="text" class="form-control" value="Carlos López" readonly>
            </div>
            <div class="form-group">
              <label>Correo</label>
              <input type="text" class="form-control" value="juan@example.com" readonly>
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
              <input type="text" class="form-control" value="5 días" readonly>
            </div>
            <div class="form-group">
              <label>Validez de oferta</label>
              <input type="text" class="form-control" value="30 días" readonly>
            </div>
            <div class="form-group">
              <label>Moneda</label>
              <input type="text" class="form-control" value="MXN" readonly>
            </div>
            <div class="form-group">
              <label>Forma de pago</label>
              <input type="text" class="form-control" value="Transferencia" readonly>
            </div>
          </div>
          <!-- Sección 3 -->
          <div class="section-container" style="flex: 1;">
            <h5>Productos</h5>
            <div class="form-group">
              <label>Tipo</label>
              <input type="text" class="form-control" value="Electrónico" readonly>
            </div>
            <div class="form-group">
              <label>Producto</label>
              <input type="text" class="form-control" value="Laptop" readonly>
            </div>
            <div class="form-group">
              <label>Disponibilidad</label>
              <input type="text" class="form-control" value="Inmediata" readonly>
            </div>
            <div class="form-group">
              <label>Existencias</label>
              <input type="text" class="form-control" value="10" readonly>
            </div>
            <div class="form-group">
              <label>Costo unitario</label>
              <input type="text" class="form-control" value="$1,500.00" readonly>
            </div>
            <div class="form-group">
              <label>Descuento</label>
              <input type="text" class="form-control" value="10%" readonly>
            </div>
            <div class="form-group">
              <label>Cantidad</label>
              <input type="text" class="form-control" value="2" readonly>
            </div>
            <div class="form-group">
              <label>Precio total</label>
              <input type="text" class="form-control" value="$2,700.00" readonly>
            </div>
          </div>
        </div>
        <hr>
        <!-- Tabla de resumen -->
        <h5>Resumen</h5>
        <table class="table table-bordered table-summary">
          <thead>
            <tr>
              <th>Cantidad</th>
              <th>Código</th>
              <th>Moneda</th>
              <th>Precio Unitario</th>
              <th>Precio Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2</td>
              <td>LP123</td>
              <td>MXN</td>
              <td>$1,500.00</td>
              <td>$2,700.00</td>
            </tr>
          </tbody>
        </table>
        <div class="text-right">
          <p><strong>Subtotal:</strong> $2,700.00</p>
          <p><strong>IVA 16%:</strong> $432.00</p>
          <p><strong>Total:</strong> $3,132.00</p>
        </div>
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
</script>

</body>
</html>



@endsection