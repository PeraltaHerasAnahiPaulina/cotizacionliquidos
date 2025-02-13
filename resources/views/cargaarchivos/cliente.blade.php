@extends('layouts.templatep')


@section('contenido')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Exportar Clientes</span>
            </h1>
     
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Selecciona el archivo de cliente</h5><br>
             <div class="file-container">
            <label for="fileInput">Subir archivo:</label>
            <input type="file" class="form-control" id="fileInput">
        </div><br><br>
            <button class="btn btn-success" id="uploadBtn">Carga de Archivos</button>
            
            <div class="alert alert-info mt-3" id="statusMessage" style="display: none;">
                Se cargaron 20 registros nuevos y se actualizaron 10 registros.
            </div>
        
            <table class="table table-striped mt-3" id="dataTable" style="display: none; background-color: #00144F; color: white;">
                <thead class="thead-dark">
                        <tr>
                            <th>Clave SAP</th>
                            <th>Razón Social</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02885</td>
                            <td>Razón Social 1</td>
                            <td>Juan Pérez</td>
                            <td>Calle Hidalgo 123</td>
                        </tr>
                        <tr>
                            <td>67890</td>
                            <td>Razón Social 2</td>
                            <td>Ana López</td>
                            <td>Avenida Viva 742</td>
                        </tr>
                        <tr>
                            <td>12345</td>
                            <td>Razón Social 3</td>
                            <td>Pedro Ramírez</td>
                            <td>Bolívar 456</td>
                        </tr>
                        <tr>
                            <td>54321</td>
                            <td>Razón Social 4</td>
                            <td>María Fernández</td>
                            <td>Reforma 987</td>
                        </tr>
                        <tr>
                            <td>98765</td>
                            <td>Razón Social 5</td>
                            <td>José Gómez</td>
                            <td>Insurgentes 654</td>
                        </tr>
                        <tr>
                            <td>11223</td>
                            <td>Razón Social 6</td>
                            <td>Laura Sánchez</td>
                            <td>Morelos 321</td>
                        </tr>
                        <tr>
                            <td>33445</td>
                            <td>Razón Social 7</td>
                            <td>Carlos Ortega</td>
                            <td>Juárez 159</td>
                        </tr>
                        <tr>
                            <td>55667</td>
                            <td>Razón Social 8</td>
                            <td>Andrea Ríos</td>
                            <td>Madero 753</td>
                        </tr>
                        <tr>
                            <td>77889</td>
                            <td>Razón Social 9</td>
                            <td>Fernando Castro</td>
                            <td>Revolución 258</td>
                        </tr>
                        <tr>
                            <td>99100</td>
                            <td>Razón Social 10</td>
                            <td>Patricia Méndez</td>
                            <td>Allende 852</td>
                        </tr>
                        <tr>
                            <td>10101</td>
                            <td>Razón Social 11</td>
                            <td>Roberto Flores</td>
                            <td>Zaragoza 369</td>
                        </tr>
                        <tr>
                            <td>20202</td>
                            <td>Razón Social 12</td>
                            <td>Elena Ruiz</td>
                            <td>Matamoros 741</td>
                        </tr>
                        <tr>
                            <td>30303</td>
                            <td>Razón Social 13</td>
                            <td>Mario Jiménez</td>
                            <td>Guerrero 528</td>
                        </tr>
                        <tr>
                            <td>40404</td>
                            <td>Razón Social 14</td>
                            <td>Lucía Vargas</td>
                            <td>Lázaro Cárdenas 987</td>
                        </tr>
                        <tr>
                            <td>50505</td>
                            <td>Razón Social 15</td>
                            <td>Ricardo Torres</td>
                            <td>5 de Mayo 753</td>
                        </tr>
                        <tr>
                            <td>60606</td>
                            <td>Razón Social 16</td>
                            <td>Sofía Navarro</td>
                            <td>Francisco Villa 321</td>
                        </tr>
                        <tr>
                            <td>70707</td>
                            <td>Razón Social 17</td>
                            <td>Javier Salazar</td>
                            <td>Constitución 963</td>
                        </tr>
                        <tr>
                            <td>80808</td>
                            <td>Razón Social 18</td>
                            <td>Verónica Herrera</td>
                            <td>Independencia 741</td>
                        </tr>
                        <tr>
                            <td>90909</td>
                            <td>Razón Social 19</td>
                            <td>Gustavo Peña</td>
                            <td>Venustiano Carranza 528</td>
                        </tr>
                        <tr>
                            <td>10010</td>
                            <td>Razón Social 20</td>
                            <td>Isabel Gutiérrez</td>
                            <td>Adolfo López Mateos 369</td>
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