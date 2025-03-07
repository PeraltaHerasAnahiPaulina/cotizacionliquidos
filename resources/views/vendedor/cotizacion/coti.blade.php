@extends('vendedor.layouts.templatep')

@section('contenido')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>Cotizaciones</span>
            </h1>
            <div class="page-header-subtitle">Crear Cotizaciones</div>
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center" style="background-color: #00144F; color: #FFFFFF ;">Formulario de Cotización</h5>
            <form id="cotizacionForm">
            <div class="container">
    <div class="row">
        <!-- Primera fila: 3 columnas -->
        <div class="col-md-4 mb-3">
            <label for="status">Tipo de Cotización:</label>
            <input type="text" class="form-control" id="status" value="Automotriz" readonly>
        </div>
        <div class="col-md-4 mb-3">
            <label for="fecha">Seleccionar Fecha:</label>
            <input type="date" class="form-control" id="fecha">
        </div>
        <div class="col-md-4 mb-3">
            <label for="folio">Folio:</label>
            <input type="text" class="form-control" id="folio" value="AME1-IND-000001-01">
        </div>
    </div>

    <div class="row">
        <!-- Segunda fila: 4 columnas -->
        <div class="col-md-3 mb-3">
            <label for="cliente">Seleccione Cliente:</label>
            <select class="form-select" id="cliente">
                <option>Carlos Ortega Mendez</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="atencion">Atención:</label>
            <select class="form-select" id="atencion">
                <option>Nadia Fonseca</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" id="correo" value="CarlosOrtega@gmail.com">
        </div>
        <div class="col-md-3 mb-3">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" value="7223968475">
        </div>
    </div>

    <div class="row">
        <!-- Tercera fila: 4 columnas -->
        <div class="col-md-3 mb-3">
            <label for="tiempoEntrega">Tiempo de Entrega:</label>
            <select class="form-select" id="tiempoEntrega">
                <option>2 días</option>
                <option>Inmediata</option>
                <option>24 horas</option>
                <option>3 días</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validezOferta">Validez de Oferta:</label>
            <input type="text" class="form-control" id="validezOferta" value="CAMBIOS CON PREVIO AVISO">
        </div>
        <div class="col-md-3 mb-3">
            <label for="moneda">Moneda:</label>
            <select class="form-control" id="moneda">
                <option>MXN</option>
                <option>USD</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label>Forma de Pago:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="formaPago" id="credito" value="credito" checked>
                <label class="form-check-label" for="credito">Crédito</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="formaPago" id="contado" value="contado">
                <label class="form-check-label" for="contado">Contado</label>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let today = new Date().toISOString().split('T')[0]; // Fecha actual en formato YYYY-MM-DD
        document.getElementById("fecha").value = today;
    });
</script>

<br>
<h5 class="text-center mt-4" style="background-color: #00144F; color: #FFFFFF;">Producto</h5>
<form>
    <div class="row">
        <!-- Primera fila con 5 elementos -->
        <div class="col-md-2 mb-3">
            <label for="tipo">Tipo:</label>
            <select class="form-select" id="tipo">
                <option>Tipo 1</option>
                <option>Tipo 2</option>
            </select>
        </div>
        <div class="col-md-2 mb-3">
            <label for="tiempoEntrega">Producto:</label>
            <select class="form-select" id="tiempoEntrega">
                <option>M-JET OIL II CAN 24X1UQL</option>
                <option>M-VACUOLINE 146 DRUM 208L</option>
                <option>M-JET OIL II CAN 24X1UQL</option>
            </select>
        </div>
        <div class="col-md-2 mb-3">
            <label for="presentacion">Presentación:</label>
            <input type="text" class="form-control" id="presentacion" value="Caja 24 pzas">
        </div>
        <div class="col-md-2 mb-3">
            <label for="disponibilidad">Disponibilidad:</label>
            <input type="text" class="form-control" id="disponibilidad" value="FTS">
        </div>
        <div class="col-md-2 mb-3">
            <label for="existencia">Existencia:</label>
            <input type="text" class="form-control" id="existencia" value="46">
        </div>
    </div>

    <div class="row">
        <!-- Segunda fila con 4 elementos y el botón al lado de Precio Total -->
        <div class="col-md-2 mb-3">
    <label for="costoUnitario">Costo Unitario:</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="costoUnitario" step="0.01">
        </div>
    </div>
                        
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let costoInput = document.getElementById("costoUnitario");
        
            // Establece un valor inicial (si es necesario)
            let valorInicial = 821.60; 
            costoInput.value = valorInicial;
        
            // Formatea el valor cuando el usuario deja de escribir
            costoInput.addEventListener("blur", function() {
                let valor = parseFloat(costoInput.value);
                if (!isNaN(valor)) {
                    costoInput.value = valor.toFixed(2); // Asegura dos decimales
                }
            });
        });
    </script>
        <div class="col-md-2 mb-3">
            <label for="descuento">Descuento:</label>
            <div class="input-group">
                <input type="number" class="form-control" id="descuento" value="40">
                <span class="input-group-text">%</span>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" value="10">
        </div>
        



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let precioInput = document.getElementById("precioTotal");

            // Formato inicial (opcional)
            let valorInicial = 8214.60; // Puedes cambiarlo según sea necesario
            precioInput.value = valorInicial;

            // Formato automático al escribir
            precioInput.addEventListener("blur", function() {
                let valor = parseFloat(precioInput.value);
                if (!isNaN(valor)) {
                    precioInput.value = valor.toFixed(2); // Asegura siempre dos decimales
                }
            });
        });
    </script>
   
        <div class="col-md-2 mb-3 d-flex align-items-end">
            <button type="button" class="btn btn-primary w-100">Agregar</button>
        </div>
    </div>
</form>


<br>

<!-- Modal de Edición -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <!-- Primera fila con 5 elementos -->
                        <div class="col-md-6 mb-3">
                            <label for="tipo">Tipo:</label>
                            <select class="form-select" id="tipo">
                                <option>Tipo 1</option>
                                <option>Tipo 2</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="producto">Producto:</label>
                            <select class="form-select" id="producto">
                                <option>M-JET OIL II CAN 24X1UQL</option>
                                <option>M-VACUOLINE 146 DRUM 208L</option>
                                <option>M-JET OIL II CAN 24X1UQL</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="presentacion">Presentación:</label>
                            <input type="text" class="form-control" id="presentacion" value="Caja 24 pzas" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="existencia">Existencia:</label>
                            <input type="text" class="form-control" id="existencia" value="46" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Segunda fila con 4 elementos -->
                        <div class="col-md-6 mb-3">
                            <label for="costoUnitario">Costo Unitario:</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="costoUnitario" step="0.01" value="821.60">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="descuento">Descuento:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="descuento" value="40">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" class="form-control" id="cantidad" value="10">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="precioTotal">Precio Total:</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="precioTotal" step="0.01" readonly value="8,214.60">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>


            <h5 class=" text-center mt-4" style="background-color: #00144F; color: #FFFFFF ;">Productos Agregados</h5>
            <!-- Tabla: Artículos Solicitados -->
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #f5333f; color: white;">
                            <tr>
                                <th colspan="8" class="text-center">Artículos Solicitados</th>
                            </tr>
                        </thead>
                        <thead class="table text-center">
                            <tr>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Cantidad</th>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Código</th>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Nombre</th>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Presentación</th>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Precio Unitario</th>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Precio Total</th>
                                <th style="background-color: #0d6efd; color: #ffffff ;">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$821.60</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$8,214.60</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align:center">
                                <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2 open-modal-btn" id="openModalBtn" data-bs-toggle="modal" data-bs-target="#editModal">
    <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
</button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>

                                   
                            </tr>
                            <tr>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">104765</td>
                                <td style="text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                                <td style="text-align: center;">Caja 24 pzas</td>
                                <td style="text-align: center;">$527.66</td>
                                <td style="text-align: center;">$5,276.60</td>
                                <td style="text-align: center;"> <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2 open-modal-btn" id="openModalBtn" data-bs-toggle="modal" data-bs-target="#editModal">
    <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
</button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button></td>
                            </tr>
                            <tr>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-VACUOLINE 146 DRUM 208L</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$527.66</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$5,276.60</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;"> <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2 open-modal-btn" id="openModalBtn" data-bs-toggle="modal" data-bs-target="#editModal">
                                 <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                </button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button></td>

                            </tr>
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="color: #00144F ;" colspan="5" class="text-end">SUBTOTAL:</th>
                                <td class="text-end">$25,734.20</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="5" class="text-end">IVA 26% :</th>
                                <td class="text-end">$4,117.47</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="5" class="text-end fw-bold">TOTAL:</th>
                                <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$29,851.67</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            <div class="text-center mt-4"><a href="/cotiv2">
                <button class="btn btn-success" id="createCotizacionBtn">Crear Cotización</button></a>
            </div>
        </div>
    </div>
</div>

               </div>
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright 2025 Lubricantes Abamex, Todos los derechos reservados.<br><br>
                     </p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
   </div>

   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
   <style>
      thead input {
         width: 100%;
      }

      button:focus {
         outline: none;
      }

      .btn:focus {
         outline: none;
      }

      .dataTables_wrapper table {
         text-align: center;
      }

      .dataTables_wrapper table thead th {
         text-align: center;
      }

      .hidden {
         display: none;
      }

      .date-table {
         width: auto;
         margin-bottom: 20px;
      }

      .date-table td {
         padding: 5px;
         vertical-align: middle;
      }

      .date-input {
         width: 200px;
         padding: 5px;
         border: 1px solid #ddd;
         background-color: #fff;
         font-size: 14px;
         border-radius: 5px;
      }

      .dataTables_wrapper .dataTables_filter {
         display: none;
      }

      .search-controls {
         width: 650px;
         text-align: right;
      }
   </style>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/scripts.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
   {{--
   <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
   --}}

   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">

   <!-- jQuery -->

   <script src="{{ asset('assets/pluto/js/popper.min.js')}}"></script>
   <script src="{{ asset('assets/pluto/js/bootstrap.min.js')}}"></script>
   <!-- wow animation -->
   <script src="{{ asset('assets/pluto/js/animate.js')}}"></script>
   <!-- select country -->
   <script src="{{ asset('assets/pluto/js/bootstrap-select.js')}}"></script>
   <!-- owl carousel -->
   <script src="{{ asset('assets/pluto/js/owl.carousel.js')}}"></script>
   <!-- chart js -->
   <script src="{{ asset('assets/pluto/js/Chart.min.js')}}"></script>
   <script src="{{ asset('assets/pluto/js/Chart.bundle.min.js')}}"></script>
   <script src="{{ asset('assets/pluto/js/utils.js')}}"></script>
   <script src="{{ asset('assets/pluto/js/analyser.js')}}"></script>
   <!-- nice scrollbar -->
   <script src="{{ asset('assets/pluto/js/perfect-scrollbar.min.js')}}"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="{{ asset('assets/pluto/js/custom.js')}}"></script>
   {{--
   <script src="{{ asset('assets/pluto/js/chart_custom_style1.js')}}"></script> --}}
   <!-- datatable -->



   <!-- Date Range Picker (opcional) -->

   <!-- Date Range Picker (opcional) -->
   <script src="{{ asset('assets/demo/datatables-demo.js')}}"></script>
   
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDesactivation() {
        Swal.fire({
            title: 'Eliminar Productos agregados',
            text: '¿Estas seguro de eliminar los productos agregados?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Aquí puedes agregar la lógica para desactivar al cliente.
                Swal.fire(
                    'Eliminado!',
                    'Los productos han sido eliminados',
                    'success'
                );
            }
        });
    }
</script>

   

</body>

</html>
@endsection