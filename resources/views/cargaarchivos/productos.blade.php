@extends('cargasap.layouts.templatep')


@section('contenido')


<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Exportar Productos CVL</span>
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
                Se cargaron 13 registros nuevos y se actualizaron 10 registros.
            </div>
        
            <table class="table table-striped mt-3" id="dataTable" style="display: none;">
                <thead class="thead-dark">
                    <tr>
                        <th style="background-color: #00144F; color: white; text-align: center;">Clave SAP</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Producto</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Empaque</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Capacidad</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Especificación</th>
                        <th style="background-color: #00144F; color: white; text-align: center;">Precio Público</th>
                    </tr>
                </thead>
                <tbody><tr>
                    <td>126128</td>
                    <td>M-DELVAC MODERN 15W-40 ADV PRO V1 BULK</td>
                    <td>Granel</td>
                    <td>1 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$236.90</td>
                </tr>
                <tr>
                    <td>126129</td>
                    <td>M-DEL MODERN 15W40 ADV PRO V1 DRUM 208L</td>
                    <td>Tambor</td>
                    <td>208 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$52,244.56</td>
                </tr>
                <tr>
                    <td>126138</td>
                    <td>M-DELVAC MODERN 10W-30 FE DRUM 208L</td>
                    <td>Tambor</td>
                    <td>208 L</td>
                    <td>SAE 10W-30</td>
                    <td style="text-align: right;">$46,804.97</td>
                </tr>
                <tr>
                    <td>126131</td>
                    <td>M-DELVAC MODERN 15W-40 FP BULK</td>
                    <td>Granel</td>
                    <td>1 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$203.34</td>
                </tr>
                <tr>
                    <td>125152</td>
                    <td>M-DELVAC MODERN 15W-40 FP, Súper Protección BULK</td>
                    <td>Granel</td>
                    <td>1 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$203.34</td>
                </tr>
                <tr>
                    <td>126136</td>
                    <td>M-DELVAC MODERN 15W-40 FP TOTE 1000 L</td>
                    <td>Tote</td>
                    <td>1000 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$211,110.67</td>
                </tr>
                <tr>
                    <td>126183</td>
                    <td>M-DEL MODERN 15W-40 FP CARTON TOTE 1000L</td>
                    <td>Tote</td>
                    <td>1000 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$211,110.67</td>
                </tr>
                <tr>
                    <td>126135</td>
                    <td>M-DELVAC MODERN 15W-40 FP DRUM 208L</td>
                    <td>Tambor</td>
                    <td>208 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$44,354.57</td>
                </tr>
                <tr>
                    <td>126134</td>
                    <td>M-DELVAC MODERN 15W-40 FP PAIL 19L</td>
                    <td>Cubeta</td>
                    <td>19 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$3,616.11</td>
                </tr>
                <tr>
                    <td>126133</td>
                    <td>M-DELVAC MODERN 15W-40 FP CASE 4X5L</td>
                    <td>Caja</td>
                    <td>4X5 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$3,636.14</td>
                </tr>
                <tr>
                    <td>126132</td>
                    <td>M-DELVAC MODERN 15W-40 FP CASE 12X0.946L</td>
                    <td>Caja</td>
                    <td>12X0.946 L</td>
                    <td>SAE 15W-40</td>
                    <td style="text-align: right;">$2,083.54</td>
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