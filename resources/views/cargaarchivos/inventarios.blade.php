@extends('gerenciaventas.layouts.templatep')

@section('contenido')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Exportar Inventarios</span>
            </h1>
     
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Selecciona el archivo de inventarios</h5><br>
             <div class="file-container">
            <label for="fileInput">Subir archivo:</label>
            <input type="file" class="form-control" id="fileInput">
        </div><br><br>
            <button class="btn btn-success" id="uploadBtn">Carga de Archivos</button>
            
            <div class="alert alert-info mt-3" id="statusMessage" style="display: none;">
                Se cargaron 24 registros nuevos y se actualizaron 10 registros.
            </div>
        
            <table class="table table-striped mt-3" id="dataTable" style="display: none;">
                <thead class="thead-dark">
                    <thead>
                        <tr>
                            <th style="background-color: #00144F; color: white;">Clave </th>
                            <th style="background-color: #00144F; color: white;">Nombre</th>
                            <th style="background-color: #00144F; color: white;">Unidad de medida</th>
                            <th style="background-color: #00144F; color: white;">Existencia </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>100606</td>
                            <td>MOBIL DTE PM [220]</td>
                            <td>TAM</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>100691</td>
                            <td>MOBILTAC [375 ISO 5000]</td>
                            <td>TAM</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>100942</td>
                            <td>MOBIL VACUUM PUMP [ISO 68]</td>
                            <td>TAM</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>101617</td>
                            <td>MOBIL SPARTAN [150]</td>
                            <td>L</td>
                            <td>3186.566</td>
                        </tr>
                        <tr>
                            <td>101885</td>
                            <td>MOBILTRANS HD [50]</td>
                            <td>TAM</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>101923</td>
                            <td>MOBIL 600W SUP CYL [ISO 460]</td>
                            <td>CUB</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>101932</td>
                            <td>MOBIL VACTRA [1 ISO 32]</td>
                            <td>TAM</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>102723</td>
                            <td>MOBILUX EP [0 NLGI 0]</td>
                            <td>TAM</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>102743</td>
                            <td>MOBIL UNIREX [N-3]</td>
                            <td>CUB</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>103012</td>
                            <td>TOYOTA GENUINE ATF WS [CJ 12/.946]</td>
                            <td>CJ</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>103209</td>
                            <td>MOBILUX EP [0 NLGI 0]</td>
                            <td>CUB</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>103211</td>
                            <td>MOBILUX EP [1 NLGI 1]</td>
                            <td>CUB</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>103405</td>
                            <td>MOBIL AVIATION GREASE SHC [100]</td>
                            <td>CUB</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>103471</td>
                            <td>MOBILITH SHC [1000 NGLI 2]</td>
                            <td>CUB</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>103576</td>
                            <td>MOBILGREASE XHP [322 C-Li / NLGI 2 M]</td>
                            <td>TAM</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>103610</td>
                            <td>MOBIL DELVAC XTREME [Cli / NLGI 2]</td>
                            <td>CUB</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>103746</td>
                            <td>MOBILGEAR 600 XP [150]</td>
                            <td>TAM</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>103747</td>
                            <td>MOBILGEAR 600 XP [150]</td>
                            <td>CUB</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>103748</td>
                            <td>MOBILGEAR 600 XP [220]</td>
                            <td>TAM</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>103749</td>
                            <td>MOBILGEAR 600 XP [220]</td>
                            <td>CUB</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>103750</td>
                            <td>MOBILGEAR 600 XP [320]</td>
                            <td>TAM</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>103751</td>
                            <td>MOBILGEAR 600 XP [320]</td>
                            <td>CUB</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>103752</td>
                            <td>MOBILGEAR 600 XP [460]</td>
                            <td>TAM</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>103753</td>
                            <td>MOBILGEAR 600 XP [68]</td>
                            <td>TAM</td>
                            <td>1</td>
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
            