@extends('layouts.templatep')


@section('contenido')


<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Exportar Productos</span>
            </h1>
     
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Selecciona el archivo de productos</h5><br>
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
                        <th>Clave SAP</th>
                        <th>Producto</th>
                        <th>Empaque</th>
                        <th>Capacidad</th>
                        <th>Especificación</th>
                        <th>Precio Público</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" style="background-color: #00144F; color: white; font-weight: bold;">Lubricantes Monogrados para Motor</td>
                    </tr>
                    <tr>
                        <td>125018</td>
                        <td>M-MONOGRADO 40</td>
                        <td>Litro</td>
                        <td>12X0.946 L</td>
                        <td>Standard</td>
                        <td>$1,410.95</td>
                    </tr>
                    <tr>
                        <td>125027</td>
                        <td>M-MONOGRADO 40</td>
                        <td>Garrafa</td>
                        <td>4X5 L</td>
                        <td>Standard</td>
                        <td>$2,262.12</td>
                    </tr>
                    <tr>
                        <td>124982</td>
                        <td>M-MONOGRADO 40</td>
                        <td>Cubeta</td>
                        <td>19 L</td>
                        <td>Standard</td>
                        <td>$2,063.05</td>
                    </tr>
                    <tr>
                        <td>124985</td>
                        <td>M-MONOGRADO 40</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>Standard</td>
                        <td>$18,519.59</td>
                    </tr>
                    <tr>
                        <td>125028</td>
                        <td>M-MONOGRADO 50</td>
                        <td>Litro</td>
                        <td>12X0.946 L</td>
                        <td>Standard</td>
                        <td>$1,410.95 </td>
                    </tr>
                    <tr>
                        <td>125029</td>
                        <td>M-MONOGRADO 50</td>
                        <td>Garrafa</td>
                        <td>4X5 L</td>
                        <td>Standard</td>
                        <td>$2,262.12</td>
                    </tr>
                
                    <tr>
                        <td colspan="6" style="background-color: #00144F; color: white; font-weight: bold;">Lubricantes con Tecnología Sintética para Motor</td>
                    </tr>
                    <tr>
                        <td>125025</td>
                        <td>M-SUPER ANTI-FRICTION 5W-20</td>
                        <td>Litro</td>
                        <td>12X0.946 L</td>
                        <td>Tec. Sint.</td>
                        <td>$2,003.96</td>
                    </tr>
                    <tr>
                        <td>M125026</td>
                        <td>M-SUPER ANTI-FRICTION 5W-20</td>
                        <td>Garrafa</td>
                        <td>4X5 L</td>
                        <td>Tec. Sint.</td>
                        <td>$3,212.82</td>
                    </tr>
                    <tr>
                        <td>125024</td>
                        <td>M-SUPER ANTI-FRICTION 5W-20</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>Tec. Sint.</td>
                        <td>$30,407.46</td>
                    </tr>
                    <tr>
                        <td>125000</td>
                        <td>M-SUPER ANTI-FRICTION 5W-30</td>
                        <td>Litro</td>
                        <td>12X0.946 L</td>
                        <td>Tec. Sint.</td>
                        <td>$2,003.96</td>
                    </tr>
                    <tr>
                        <td>125001</td>
                        <td>M-SUPER ANTI-FRICTION 5W-30</td>
                        <td>Garrafa</td>
                        <td>4X5 L</td>
                        <td>Tec. Sint.</td>
                        <td>$3,212.82</td>
                    </tr>
                    <tr>
                        <td>124989</td>
                        <td>M-SUPER ANTI-FRICTION 5W-30</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>Tec. Sint.</td>
                        <td>$30,407.46</td>
                    </tr>
                    <tr>
                        <td>126972</td>
                        <td>MOBIL SUPER ANTI-FRICTION 5W-30</td>
                        <td>Tote</td>
                        <td>1000 L</td>
                        <td>Tec. Sint.</td>
                        <td>$140,794.61</td>
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



    @stop