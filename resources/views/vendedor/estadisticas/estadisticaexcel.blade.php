@extends('vendedor.layouts.templatep')


@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #00144F;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .welcome-container {
            background: white;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            max-width: 2000px; 
            width: 95%; 
            margin: 40px auto; 
        }
        .welcome-title {
            font-size: 50px;
            color: #00144F;
            margin-bottom: 30px;
        }
        .welcome-image {
            width: 100%;
            max-width: 1000px; 
            height: auto;
            border-radius: 15px;
        }
        #container {
    height: 400px;
}
    </style>
</head>
<body>

    <div class="welcome-container">
        <div class="row">
            <div class="col-md-12 text-center">
                <label for="monthSelect" class="d-block mb-2" style="font-size: 1.2rem; font-weight: bold;">
                    <i class="fas fa-calendar-alt" style="color: #007bff; margin-right: 8px;"></i>Selecciona el año:
                </label>
                <div class="input-group" style="max-width: 300px; margin: 0 auto;">
                    <select id="monthSelect" class="form-control" onchange="updateCharts()">
                        <option value="" selected disabled>Escoge el año deseado </option>
                        <option value="1">2024</option>
                        <option value="2">2025</option>
                        
                    </select>
                </div>
            </div>
        </div>
        <div id="chartsContainer" style="display: none;">
            <div class="container mt-4">
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
                              aria-controls="pedidos-proceso" aria-selected="true">Cotizado VS Facturado</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="p-concluidos" data-bs-toggle="tab" href="#pedidos-concluidos" role="tab"
                              aria-controls="pedidos-concluidos" aria-selected="false">Litos vendidos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="p-cancelados" data-bs-toggle="tab" href="#pedidos-cancelados" role="tab"
                              aria-controls="pedidos-cancelados" aria-selected="false">Status de Cotizaciones</a>
                            </li>
                          </ul>
                          <div class="tab-content mt-4" id="formTabsContent">
                            <div class="tab-pane fade show active" id="pedidos-proceso" role="tabpanel"
                            aria-labelledby="p-proceso">
                            @include('vendedor.tabs.cotizadofacturas')
                
                            </div>
                            <div class="tab-pane fade" id="pedidos-concluidos" role="tabpanel" aria-labelledby="p-concluidos">
                            @include('vendedor.tabs.litrosvendidos')
                
                            </div>
                            <div class="tab-pane fade" id="pedidos-cancelados" role="tabpanel" aria-labelledby="p-cancelados">
                            @include('vendedor.tabs.statuscotiz')
                
            </div>   
        </div>
        
    </div>

</body>
<script>
    function updateCharts() {
        var selectedMonth = document.getElementById("monthSelect").value;
        if (selectedMonth) {
            document.getElementById("chartsContainer").style.display = "block";
            console.log("Año seleccionado: ", selectedMonth);
         }
    }
</script>
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
          exportTableToExcel(table1, '#documentTable', 'Documentos 1', 'Litros vendidos.xlsx');
      });
  
      $('#exportButton2').on('click', function() {
          exportTableToExcel(table2, '#documentTable2', 'Documentos 2', 'Cotizado VS Facturado.xlsx');
      });
  
      $('#exportButton3').on('click', function() {
          exportTableToExcel(table3, '#documentTable3', 'Documentos 3', 'Status cotizacion .xlsx');
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
  
  
  
</html>



    @endsection