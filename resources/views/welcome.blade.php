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
 
 <body class="inner_page login">
       <div class="full_container">
          <div class="container">
             <div class="center verticle_center full_height">
                <div class="login_section">
                   <div class="logo_login">
                      <div class="center">
                         <img width="210" src="{{ asset('assets/img/logo.png')}}" alt="#" />
                      </div>
                   </div>
                   <div class="login_form">
                      <form>
                         <fieldset>
                            <div class="field">
                               <label class="label_field">Correo</label>
                               <input type="email" name="email" placeholder="Gmail" />
                            </div>
                            <div class="field">
                               <label class="label_field">Contraseña</label>
                               <input type="password" name="password" placeholder="Contraseña" />
                            </div>
                            <div class="field">
                               <label class="label_field hidden">hidden label</label>
                               <label class="form-check-label"><input type="checkbox" class="form-check-input"> Recordar contraseña</label>
                               <a class="forgot" href="">Olvidaste contraseña?</a>
                            </div>
                            <div class="field margin_0">
                               <label class="label_field hidden">hidden label</label>
                               <button class="main_bt">Iniciar</button>
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- jQuery -->
       <script src="js/jquery.min.js"></script>
       <script src="js/popper.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <!-- wow animation -->
       <script src="js/animate.js"></script>
       <!-- select country -->
       <script src="js/bootstrap-select.js"></script>
       <!-- nice scrollbar -->
       <script src="js/perfect-scrollbar.min.js"></script>
       <script>
          var ps = new PerfectScrollbar('#sidebar');
       </script>
       <!-- custom js -->
       <script src="js/custom.js"></script>
    </body>