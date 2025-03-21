@extends('cargasap.layouts.templatep')


@section('contenido')

<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Exportar Precios PVL</span>
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
            </div> 
            <br><br>
    
           
    
            
            <button class="btn btn-success" id="uploadBtn">Carga de Archivos</button>
            
            <div class="alert alert-info mt-3" id="statusMessage" style="display: none;">
                Se cargaron 13 registros nuevos y se actualizaron 10 registros.
            </div>
        </div>
  
    
        
            <table class="table table-striped mt-3" id="dataTable" style="display: none;">
                <thead class="thead-dark">
                    <tr>
                        <th style="background-color: #00144F; color: white; text-align: center;">Clave SAP</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Producto</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Presentación</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Tamaño</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Viscosidad</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Precio Público</th>

                    </tr>
                </thead>
                <tbody><tr>
                    <td>125018</td>
                    <td>M-MONOGRADO 40 12X0.946L</td>
                    <td>Litro</td>
                    <td>12X0.946 L</td>
                    <td>Standard</td>
                    <td style="text-align: right;">$1,410.95</td>
                </tr>
                <tr>
                    <td>125027</td>
                    <td>M-MONOGRADO 40 4X5L</td>
                    <td>Garrafa</td>
                    <td>4X5 L</td>
                    <td>Standard</td>
                    <td style="text-align: right;">$2,262.12</td>
                </tr>
                <tr>
                    <td>124982</td>
                    <td>M-MONOGRADO 40 PAIL 19L</td>
                    <td>Cubeta</td>
                    <td>19 L</td>
                    <td>Standard</td>
                    <td style="text-align: right;">$2,063.05</td>
                </tr>
                <tr>
                    <td>124985</td>
                    <td>M-MONOGRADO 40 DRUM 208L</td>
                    <td>Tambor</td>
                    <td>208 L</td>
                    <td>Standard</td>
                    <td style="text-align: right;">$18,519.59</td>
                </tr>
                <tr>
                    <td>125028</td>
                    <td>M-MONOGRADO 50 12X0.946L</td>
                    <td>Litro</td>
                    <td>12X0.946 L</td>
                    <td>Standard</td>
                    <td style="text-align: right;">$1,410.95</td>
                </tr>
                <tr>
                    <td>125029</td>
                    <td>M-MONOGRADO 50 4X5L</td>
                    <td>Garrafa</td>
                    <td>4X5 L</td>
                    <td>Standard</td>
                    <td style="text-align: right;">$2,262.12</td>
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