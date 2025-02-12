@extends('layouts.templatep')


@section('contenido')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Exportar Precios</span>
            </h1>
     
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Selecciona el archivo de precios</h5><br>
             <div class="file-container">
            <label for="fileInput">Subir archivo:</label>
            <input type="file" class="form-control" id="fileInput">
        </div><br><br>
            <button class="btn btn-success" id="uploadBtn">Carga de Archivos</button>
            
            <div class="alert alert-info mt-3" id="statusMessage" style="display: none;">
                Se cargaron 20 registros nuevos y se actualizaron 10 registros.
            </div>
        
            <table class="table table-striped mt-3" id="dataTable" style="display: none;">
                <thead class="thead-dark">
                    <tr>
                        <th>Clave </th>
                        <th>Nombre</th>
                        <th>Presentación </th>
                        <th>Viscosidad</th>
                        <th>Precio publico </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>02885</td>
                        <td>Nombre 1 </td>
                        <td>Premium</td>
                        <td>Alta</td>
                        <td>$25.03</td>
                    </tr>
                    <tr>
                        <td>67890</td>
                        <td>Nombre 2</td>
                        <td>Premium</td>
                        <td>Alta</td>
                        <td>$86.23</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <script>
            document.getElementById("uploadBtn").addEventListener("click", function() {
                document.getElementById("statusMessage").style.display = "block";
                document.getElementById("dataTable").style.display = "table";
            });
        </script>
        
    </div>

    @endsection