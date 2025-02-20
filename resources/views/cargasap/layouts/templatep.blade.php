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
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('assets/img/logo.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('assets/pluto/images/layout_img/user_img.jpg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>Juan</h6>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="sidebar_blog_2">
                  <h4>Carga SAP</h4>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="#cargaArchivos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-briefcase blue1_color"></i> <span>Reporte</span></a>
                        <ul class="collapse list-unstyled" id="cargaArchivos">
                           <li><a href="#"> <span> Reporte de cotizaciones</span></a></li>
                         
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
                              src="{{ asset('assets/img/Abamex_Pylsa_Ne.png')}}" alt="#" /></a>
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
                                       class="name_user">John David</span></a>
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
                  @yield('contenido')
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