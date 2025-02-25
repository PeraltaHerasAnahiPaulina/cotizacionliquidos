<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Admin</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
   <!-- site css -->
   <link rel="stylesheet" href=" {{ asset('assets/pluto/style.css')}}" />
   <!-- responsive css -->
   <link rel="stylesheet" href="{{ asset('assets/pluto/css/responsive.css')}}" />
   <!-- color css -->
   <!-- select bootstrap -->
   <!-- scrollbar css -->
   <link rel="stylesheet" href="{{ asset('assets/pluto/css/perfect-scrollbar.css')}}" />
   <!-- custom css -->
   <script src="https://kit.fontawesome.com/219a919c01.js" crossorigin="anonymous"></script>

   {{-- datatable --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

   <!-- DataTables CSS -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

   <!-- DataTables JS -->
   <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

   <!-- Moment.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>

   <!-- DateTimePicker JS -->
   <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>

   <!-- DataTables Buttons JS -->
   <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

   <!-- DateTimePicker Rendering JS -->
   <script src="//cdn.datatables.net/plug-ins/1.13.6/dataRender/datetime.js"></script>

   <!-- Sorting by Moment JS -->
   <script src="https://cdn.datatables.net/plug-ins/1.11.6/sorting/datetime-moment.js"></script>

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <!-- DataTables CSS for Buttons -->
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

   <!-- DateTimePicker CSS -->
   <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('assets/img/logos/abamex.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('assets/pluto/images/layout_img/user_img.jpg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>Pedro Sanabria</h6>
                        </div>
                     </div>
                  </div>
               </div>

             

               <div class="sidebar_blog_2">
               <h4>Vendedor</h4>
               <h4>Catalogos</h4>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="#dashboard1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fa-solid fa-person'></i> <span>Clientes</span></a>
                     <ul class="collapse list-unstyled" id="dashboard1">
                        <li>
                           <a href="#"> <span> Reportes</span></a>
                        </li>
                        
                     </ul>
                  </li>
               </ul>
               </div>

               <div class="sidebar_blog_2">
                  <h4>Cotización</h4>
                     <ul class="list-unstyled components">
                        <li>
                           <a href="#cotizacionMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-receipt blue1_color"></i> <span>Cotización</span></a>
                           <ul class="collapse list-unstyled" id="cotizacionMenu">
                              <li><a href="/cotizacion"> <span> Crear</span></a></li>
                              <li><a href="/cotizacionreportev"> <span> Reporte de cotizacion</span></a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>

            </nav>

         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">


            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                           class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.html"><img class="img-responsive"
                              src="{{ asset('assets/img/logos/abamex.png')}}" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul>
                              <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>

                           </ul>
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img
                                       class="img-responsive rounded-circle"
                                       src="{{ asset('assets/pluto/images/layout_img/user_img.jpg')}}" alt="#" /><span
                                       class="name_user">Pedro Sanabria</span><h6>Automotriz</h6></a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><span>Cerrar Sesion</span> <i
                                          class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
               <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>COTIZACIÓN</span>
            </h1>
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
                <option>Cliente 1</option>
                <option>Cliente 2</option>
                <option>Cliente 3</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="atencion">Atención:</label>
            <select class="form-select" id="atencion">
                <option>Atención 1</option>
                <option>Atención 2</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" id="correo" value="JohnDavid@gmail.com">
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
            <input type="text" class="form-control" id="validezOferta" value="Terminado">
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
                <input class="form-check-input" type="radio" name="formaPago" id="credito" value="credito">
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
        <div class="col-md-2 mb-3">
    <label for="precioTotal">Precio Total:</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="precioTotal" step="0.01">
        </div>
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
                            </tr>
                        </thead>
                        <tbody>
                         
                            <tr>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$821,60</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$8.214,60</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">104765</td>
                                <td style="text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                                <td style="text-align: center;">Caja 24 pzas</td>
                                <td style="text-align: center;">$527,66</td>
                                <td style="text-align: center;">$5.276,60</td>
                            </tr>
                            <tr>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-VACUOLINE 146 DRUM 208L</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$527,66</td>
                                <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">$5.276,60</td>
                            </tr>
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="color: #00144F ;" colspan="5" class="text-end">SUBTOTAL:</th>
                                <td class="text-end">$25.734,20</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="5" class="text-end">IVA 26% :</th>
                                <td class="text-end">$4.117,47</td>
                            </tr>
                            <tr>
                                <th style="color: #00144F ;" colspan="5" class="text-end fw-bold">TOTAL:</th>
                                <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$29.851,67</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            <div class="text-center mt-4">
                <button class="btn btn-success" id="createCotizacionBtn">Crear Cotización</button>
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

</body>

</html>