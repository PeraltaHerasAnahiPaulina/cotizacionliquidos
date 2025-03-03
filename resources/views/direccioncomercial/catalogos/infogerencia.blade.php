@extends('direccioncomercial.layouts.templatep')

@section('contenido')


<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>GERENTES</span>
            </h1>
            <div class="page-header-subtitle">Reporte de Gerentes</div>
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
                        <table id="TablaEXM" class="table table-striped table-bordered display" style="width: 100%">
                            <thead>
                                <tr style="background-color: #E0E0E0">
                                    
                                    <th style="background-color: #323F52; color: #ffffff">Nombre </th>
                                    <th style="background-color: #323F52; color: #ffffff">Apellido Paterno</th>
                                    <th style="background-color: #323F52; color: #ffffff">Apellido Materno</th>
                                    <th style="background-color: #323F52; color: #ffffff">Correo</th>
                                    <th style="background-color: #323F52; color: #ffffff">Telefono</th>
                                    <th style="background-color: #323F52; color: #ffffff">Sucursal</th>
                                    <th style="background-color: #323F52; color: #ffffff">Giro</th> 
                                    <th style="background-color: #323F52; color: #ffffff">Tipo</th>   
                                    <th style="background-color: #323F52; color: #ffffff; width:25px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><!--↓ Es recomendado usar campos de tipo Text para las fechas en ese caso colocar este codigo!! ↓-->
                                    <td>Luis</td>
                                    <td>Acosta</td>
                                    <td>Camacho</td>
                                    <td>luiscamacho@gmail.com</td>
                                    <td>7245845465</td>
                                    <td>AME 1</td>
                                    <td>Industrial</td>
                                    <td>Gerente de ventas </td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                        <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                    </button>
                                </td>
                                          

                                </tr>
                                <tr>
                                    <td>Samuel</td>
                                    <td>Aguirre</td>
                                    <td>Bautista</td>
                                    <td>sam@gmail.com</td>
                                    <td>7245845461</td>
                                    <td>AME 5</td>
                                    <td>Industrial</td>
                                    <td>Gerente de ventas</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                <tr>
                                    <td>Maria</td>
                                    <td>Camilo</td>
                                    <td>Estrada</td>
                                    <td>maria@gmail.com</td>
                                    <td>7245845468</td>
                                    <td>AME 3</td>
                                    <td>Automotriz</td>
                                    <td>Gerente de ventas</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>Karla</td>
                                    <td>Espinoza </td>
                                    <td>Fernandez</td>
                                    <td>karla@gmail.com</td>
                                    <td>789654185</td>
                                    <td>AME 2</td>
                                    <td>Industrial</td>
                                    <td>Gerente de ventas </td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>Fernando</td>
                                    <td>Juarez</td>
                                    <td>Lara</td>
                                    <td>larafernando@gmail.com</td>
                                    <td>71414157</td>
                                    <td>AME 4</td>
                                    <td>Industriales</td>
                                    <td>Gerente de ventas</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>Carlos</td>
                                    <td>Gomez</td>
                                    <td>Marquez</td>
                                    <td>carlos@gmail.com</td>
                                    <td>7156846954</td>
                                    <td>AME 5</td>
                                    <td>Automotriz</td>
                                    <td>Gerente de ventas</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>Azucena</td>
                                    <td>Gomez</td>
                                    <td>Garcia</td>
                                    <td>azucena@gmail.com</td>
                                    <td>795556311</td>
                                    <td>AME 4</td>
                                    <td>Automotriz</td>
                                    <td>Gerente de ventas</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editgerencia',11) }}'">
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