@extends('cargasap.layouts.templatep')


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
            </div> 
            <br><br>
    
            <div class="form-group">
                <label><strong>Tipo:</strong></label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="industrias" value="Industrias" checked>
                    <label class="form-check-label" for="industrias">Industria</label>
                </div>                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="gracias" value="Grasas">
                    <label class="form-check-label" for="gracias">Grasas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="alimentacion" value="Alimentación y aviación">
                    <label class="form-check-label" for="alimentacion">Alimentación marinos y aviación</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="nutos" value="Nutos">
                    <label class="form-check-label" for="nutos">Nutos</label>
                </div>
            </div>
    
            <br>
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
                <tbody>
                    <tr>
                        <td style="text-align: center;">122652</td>
                        <td>M-DTE 27 DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 100</td>
                        <td style="text-align: right;">$53,255.32</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">122626</td>
                        <td>M-DTE EXCEL 32 DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 32</td>
                        <td style="text-align: right;">$67,756.37</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">122624</td>
                        <td>M-DTE EXCEL 46 DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 46</td>
                        <td style="text-align: right;">$67,756.37</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">100687</td>
                        <td>M-DTE EXCEL 46</td>
                        <td style="text-align: center;">Granel</td>
                        <td style="text-align: center;">1 L</td>
                        <td style="text-align: center;">ISO 46</td>
                        <td style="text-align: right;">$310.20</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">122623</td>
                        <td>M-DTE EXCEL 68 DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 68</td>
                        <td style="text-align: right;">$67,756.37</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125454</td>
                        <td>MOBIL DTE 24 ULTRA PAIL 19L</td>
                        <td style="text-align: center;">Cubeta</td>
                        <td style="text-align: center;">19 L</td>
                        <td style="text-align: center;">ISO 32</td>
                        <td style="text-align: right;">$5,401.27</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125453</td>
                        <td>MOBIL DTE 24 ULTRA DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 32</td>
                        <td style="text-align: right;">$53,753.04</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125332</td>
                        <td>MOBIL DTE 24 ULTRA BULK</td>
                        <td style="text-align: center;">Granel</td>
                        <td style="text-align: center;">1 L</td>
                        <td style="text-align: center;">ISO 32</td>
                        <td style="text-align: right;">$234.44</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125456</td>
                        <td>MOBIL DTE 25 ULTRA PAIL 19L</td>
                        <td style="text-align: center;">Cubeta</td>
                        <td style="text-align: center;">19 L</td>
                        <td style="text-align: center;">ISO 46</td>
                        <td style="text-align: right;">$5,401.27</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125455</td>
                        <td>MOBIL DTE 25 ULTRA DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 46</td>
                        <td style="text-align: right;">$53,753.04</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125333</td>
                        <td>MOBIL DTE 25 ULTRA BULK</td>
                        <td style="text-align: center;">Granel</td>
                        <td style="text-align: center;">1 L</td>
                        <td style="text-align: center;">ISO 46</td>
                        <td style="text-align: right;">$234.44</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125458</td>
                        <td>MOBIL DTE 26 ULTRA PAIL 19L</td>
                        <td style="text-align: center;">Cubeta</td>
                        <td style="text-align: center;">19 L</td>
                        <td style="text-align: center;">ISO 68</td>
                        <td style="text-align: right;">$5,401.27</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125457</td>
                        <td>MOBIL DTE 26 ULTRA DRUM 208L</td>
                        <td style="text-align: center;">Tambor</td>
                        <td style="text-align: center;">208 L</td>
                        <td style="text-align: center;">ISO 68</td>
                        <td style="text-align: right;">$53,753.04</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">125334</td>
                        <td>MOBIL DTE 26 ULTRA BULK</td>
                        <td style="text-align: center;">Granel</td>
                        <td style="text-align: center;">1 L</td>
                        <td style="text-align: center;">ISO 68</td>
                        <td style="text-align: right;">$234.44</td>
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