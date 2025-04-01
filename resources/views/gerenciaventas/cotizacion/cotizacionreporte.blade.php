@extends('gerenciaventas.layouts.templatep')

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
          <div id="list" class="table-responsive">
          <ul class="nav nav-tabs" id="formTabs" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="p-proceso" data-bs-toggle="tab" href="#pedidos-proceso" role="tab"
              aria-controls="pedidos-proceso" aria-selected="true">En Proceso</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="p-concluidos" data-bs-toggle="tab" href="#pedidos-concluidos" role="tab"
              aria-controls="pedidos-concluidos" aria-selected="false">Aprobados</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="p-cancelados" data-bs-toggle="tab" href="#pedidos-cancelados" role="tab"
              aria-controls="pedidos-cancelados" aria-selected="false">Cancelados</a>
            </li>
          </ul>
          <div class="tab-content mt-4" id="formTabsContent">
            <div class="tab-pane fade show active" id="pedidos-proceso" role="tabpanel"
            aria-labelledby="p-proceso">
            @include('gerenciaventas.tabs.proceso')

            </div>
            <div class="tab-pane fade" id="pedidos-concluidos" role="tabpanel" aria-labelledby="p-concluidos">
            @include('gerenciaventas.tabs.concluidos')

            </div>
            <div class="tab-pane fade" id="pedidos-cancelados" role="tabpanel" aria-labelledby="p-cancelados">
            @include('gerenciaventas.tabs.cancelados')

            </div>
          </div>

          </div>
          <script>
          // Función para establecer la fecha de hoy automáticamente
          document.addEventListener("DOMContentLoaded", function () {
            let today = new Date();
            let formattedDate = today.toISOString().split("T")[0]; // Formato YYYY-MM-DD
            document.getElementById("fechaModificacion").value = formattedDate;
          });
          </script>
          <!-- Script para mostrar/ocultar elementos según selección -->






          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
          <script>
          $(document).ready(function() {
    var table1 = $('#documentTable').DataTable();
    var table2 = $('#documentTable2').DataTable();
    var table3 = $('#documentTable3').DataTable();

    
    function setupGlobalSearch(inputSelector, table) {
        $(inputSelector).on('keyup', function() {
            table.search(this.value).draw();
        });
    }

    setupGlobalSearch('#searchInput', table1);
    setupGlobalSearch('#searchInput2', table2);
    setupGlobalSearch('#searchInput3', table3);

  
    function setupColumnSearch(table, tableSelector) {
        $(tableSelector + ' thead tr:eq(1) th').each(function(index) {
            $(this).html('<input type="text" placeholder="Buscar" />');
            $('input', this).on('keyup change', function() {
                if (table.column(index).search() !== this.value) {
                    table.column(index).search(this.value).draw();
                }
            });
        });
    }

    setupColumnSearch(table1, '#documentTable');
    setupColumnSearch(table2, '#documentTable2');
    setupColumnSearch(table3, '#documentTable3');

 
    function exportTableToExcel(table, tableSelector, sheetName, fileName) {
        var data = [];
        data.push([sheetName]);

      
        var headers = [];
        $(tableSelector + ' thead th').each(function() {
            headers.push($(this).text().trim());
        });
        data.push(headers);

     
        table.rows({ search: 'applied' }).every(function() {
            var rowDataArray = [];
            $(this.node()).find('td').each(function() {
                rowDataArray.push($(this).text().trim());
            });
            data.push(rowDataArray);
        });

        var worksheet = XLSX.utils.aoa_to_sheet(data);
        var workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, sheetName);

        XLSX.writeFile(workbook, fileName);
    }

  
    $('#exportButton').on('click', function() {
        exportTableToExcel(table1, '#documentTable', 'Documentos 1', 'Reporte_Documentos1.xlsx');
    });

    $('#exportButton2').on('click', function() {
        exportTableToExcel(table2, '#documentTable2', 'Documentos 2', 'Reporte_Documentos2.xlsx');
    });

    $('#exportButton3').on('click', function() {
        exportTableToExcel(table3, '#documentTable3', 'Documentos 3', 'Reporte_Documentos3.xlsx');
    });

  
    $('#exportAllButton').on('click', function() {
        var workbook = XLSX.utils.book_new();

        var sheet1 = exportTableToExcel(table1, '#documentTable', 'Documentos 1');
        var sheet2 = exportTableToExcel(table2, '#documentTable2', 'Documentos 2');
        var sheet3 = exportTableToExcel(table3, '#documentTable3', 'Documentos 3');

        XLSX.utils.book_append_sheet(workbook, sheet1, 'Documentos 1');
        XLSX.utils.book_append_sheet(workbook, sheet2, 'Documentos 2');
        XLSX.utils.book_append_sheet(workbook, sheet3, 'Documentos 3');

        XLSX.writeFile(workbook, 'Reporte_Completo.xlsx');
    });
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

          <script>
          document.getElementById('descargarBtn').addEventListener('click', function () {
            // Obtener la opción seleccionada
            const seleccion = document.querySelector('input[name="firma"]:checked');

            if (!seleccion) {
            alert('Por favor, selecciona si deseas descargar con o sin firma.');
            return;
            }

            // Enviar el formulario con la selección
            const form = document.getElementById('downloadForm');
            form.submit();
          });
          </script>

  </body>

  </html>
@endsection