@extends('gerenciaventas.layouts.templatep')


@section('contenido')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>CLIENTES</span>
            </h1>
            <div class="page-header-subtitle">Reporte de clientes</div>
        </div>
    </div>
</div>
<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">




            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="list" class="table-responsive">
                           
                        <!-- ↓Id de la tabla (Es importante colocar un id) ↓ -->
                        <!--↓Quitar cuando se acomode dentro de un div bueno↓-->
                        <table id="mytable" class="table table-striped table-bordered display" style="width: 100%">
                            <thead>
                                <tr style="background-color: #E0E0E0">
                                    <th style="background-color: #323F52; color: #ffffff">Clave Sap</th>
                                    <th style="background-color: #323F52; color: #ffffff">Razon Social</th>
                                    <th style="background-color: #323F52; color: #ffffff">Contacto</th>
                                    <th style="background-color: #323F52; color: #ffffff">Direccion</th>
                                    <th style="background-color: #323F52; color: #ffffff; width:25px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><!--↓ Es recomendado usar campos de tipo Text para las fechas en ese caso colocar este codigo!! ↓-->
                                    <td>123434</td>
                                    <td>Persona Fisica</td>
                                    <td>722254522</td>
                                    <td>Calle Aventura #10</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                        <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                    </button>
                                </td>
                                          

                                </tr>
                                <tr>
                                    <td>456789</td>
                                    <td>Persona Fisica</td>
                                    <td>722222454</td>
                                    <td>Calle Hidalgo #702</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                <tr>
                                    <td>245675</td>
                                    <td>Persona Fisica</td>
                                    <td>556475211</td>
                                    <td>Calle libre #099</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                        
                                </tr>
                                <tr>
                                    <td>245678</td>
                                    <td>Persona Fisica</td>
                                    <td>7894523451</td>
                                    <td>Calle Soledad #304</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>245678</td>
                                    <td>Persona Fisica </td>
                                    <td>775566999</td>
                                    <td>Calle San Lorenzo #123</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>212678</td>
                                    <td>Persona Fisica</td>
                                    <td>758468255</td>
                                    <td>Calle La Esperanza #108</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>233378</td>
                                    <td>Persona Fisica</td>
                                    <td>7894663112</td>
                                    <td>Calle Potrero #200</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>773378</td>
                                    <td>Persona Fisica </td>
                                    <td>722236914</td>
                                    <td>Calle Altamirano #504</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>888378</td>
                                    <td>Persona Fisica </td>
                                    <td>775828512</td>
                                    <td>Calle del Carmen</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>111378</td>
                                    <td>Persona Fisica</td>
                                    <td>729645882</td>
                                    <td>Calle Madero #222</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>111378</td>
                                    <td>Persona Fisica </td>
                                    <td>7285645681</td>
                                    <td>Calle 16 de Septiembre </td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('edicion',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>

<script>
    function confirmDesactivation() {
        Swal.fire({
            title: 'Desactivar Usuario',
            text: 'Al desactivar el usuario este dejará de tener acceso al sistema.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Desactivar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Aquí puedes agregar la lógica para desactivar al cliente.
                Swal.fire(
                    'Desactivado!',
                    'El usuario ha sido desactivado.',
                    'success'
                );
            }
        });
    }
</script>



    @endsection