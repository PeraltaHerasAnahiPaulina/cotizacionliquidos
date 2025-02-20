@extends('gerenciaventas.layouts.templatep')


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
                    <input class="form-check-input" type="radio" name="tipo" id="industrias" value="Industrias">
                    <label class="form-check-label" for="industrias">Industrias</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="gracias" value="Grasas">
                    <label class="form-check-label" for="gracias">Grasas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="alimentacion" value="Alimentación y aviación">
                    <label class="form-check-label" for="alimentacion">Alimentación y aviación</label>
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
                        <th style="background-color: #00144F; color: white;">Clave SAP</th>
                        <th style="background-color: #00144F; color: white;">Producto</th>
                        <th style="background-color: #00144F; color: white;">Presentación</th>
                        <th style="background-color: #00144F; color: white;">Tamaño</th>
                        <th style="background-color: #00144F; color: white;">Viscosidad</th>
                        <th style="background-color: #00144F; color: white;">Precio Público</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>122652</td>
                        <td>M-DTE 27 DRUM</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>ISO 100</td>
                        <td>$332,423.00</td>
                    </tr>
                    <tr>
                        <td>122626</td>
                        <td>M-DTE EXCEL 32 DRUM</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>ISO 32</td>
                        <td>$67,756.37</td>
                    </tr>
                    <tr>
                        <td>122624</td>
                        <td>M-DTE EXCEL 46 DRUM</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>ISO 46</td>
                        <td>$67,756.37</td>
                    </tr>
                    <tr>
                        <td>100687</td>
                        <td>M-DTE EXCEL 46</td>
                        <td>Granel</td>
                        <td>1 L</td>
                        <td>ISO 46</td>
                        <td>$310.20</td>
                    </tr>
                    <tr>
                        <td>122623</td>
                        <td>M-DTE EXCEL 68 DRUM</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>ISO 68</td>
                        <td>$67,756.37</td>
                    </tr>
                    <tr>
                        <td>125454</td>
                        <td>MOBIL DTE 24 ULTRA PAIL</td>
                        <td>Cubeta</td>
                        <td>19 L</td>
                        <td>ISO 46</td>
                        <td>$5,401.27</td>
                    </tr>
                    <tr>
                        <td>125453</td>
                        <td>MOBIL DTE 24 ULTRA</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>ISO 46</td>
                        <td>$53,753.40</td>
                    </tr>
                    <tr>
                        <td>125432</td>
                        <td>MOBIL DTE 24 ULTRA</td>
                        <td>Granel</td>
                        <td>1 L</td>
                        <td>ISO 46</td>
                        <td>$234.44</td>
                    </tr>
                    <tr>
                        <td>125456</td>
                        <td>MOBIL DTE 25 ULTRA PAIL</td>
                        <td>Cubeta</td>
                        <td>19 L</td>
                        <td>ISO 46</td>
                        <td>$5,401.27</td>
                    </tr>
                    <tr>
                        <td>125457</td>
                        <td>MOBIL DTE 25 ULTRA</td>
                        <td>Tambor</td>
                        <td>208 L</td>
                        <td>ISO 46</td>
                        <td>$53,753.40</td>
                    </tr>
                    <tr>
                        <td>125533</td>
                        <td>MOBIL DTE 25 ULTRA</td>
                        <td>Granel</td>
                        <td>1 L</td>
                        <td>ISO 46</td>
                        <td>$234.44</td>
                    </tr>
                    <tr>
                        <td>125458</td>
                        <td>MOBIL DTE 26 ULTRA PAIL</td>
                        <td>Cubeta</td>
                        <td>19 L</td>
                        <td>ISO 68</td>
                        <td>$5,401.27</td>
                    </tr>
                    <tr>
                        <td>125534</td>
                        <td>MOBIL DTE 26 ULTRA</td>
                        <td>Granel</td>
                        <td>1 L</td>
                        <td>ISO 68</td>
                        <td>$234.44</td>
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