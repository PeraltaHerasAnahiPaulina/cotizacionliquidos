@extends('gerenciaventas.layouts.templatep')


@section('contenido')


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
                        <table id="TablaEXL" class="table table-striped table-bordered display" style="width: 100%">
                            <thead>
                                <tr style="background-color: #E0E0E0">
                                    <th style="background-color: #323F52; color: #ffffff">Clave </th>
                                    <th style="background-color: #323F52; color: #ffffff">Contacto</th>
                                    <th style="background-color: #323F52; color: #ffffff">Email</th>
                                    <th style="background-color: #323F52; color: #ffffff">Razon Social</th>
                                    <th style="background-color: #323F52; color: #ffffff; width:25px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><!--↓ Es recomendado usar campos de tipo Text para las fechas en ese caso colocar este codigo!! ↓-->
                                    <td>123434</td>
                                    <td>Juan Pedroza </td>
                                    <td>juanpedro@gmail.com</td>
                                    <td>Refaccionaria Tollocan  </td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                        <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                    </button>
                                </td>
                                          

                                </tr>
                                <tr>
                                    <td>456789</td>
                                    <td>Jazmin Gonzalez</td>
                                    <td>jaz@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                <tr>
                                    <td>245675</td>
                                    <td>Emmanuel Lopez</td>
                                    <td>emmanuel@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                        
                                </tr>
                                <tr>
                                    <td>245678</td>
                                    <td>Julia Fierro</td>
                                    <td>julia@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>245678</td>
                                    <td>Luis Mendez </td>
                                    <td>luis@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>212678</td>
                                    <td>Rosa Cruz</td>
                                    <td>rosa@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>233378</td>
                                    <td>Gisella Sánchez</td>
                                    <td>gisella@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>773378</td>
                                    <td>Francisco Hernández</td>
                                    <td>fran@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>888378</td>
                                    <td>Carlos Gomez</td>
                                    <td>carlos@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>111378</td>
                                    <td>Anahi Flores</td>
                                    <td>ana@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
                                        <i class="fa-solid fa-pencil" style="color: #FFD43B;"></i>
                                    </button><button class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#desactivarModal" onclick="confirmDesactivation()">
                                            <i class="fa-solid fa-ban" style="color: #ff0000;"></i>
                                        </button>
                                </tr>
                                <tr>
                                    <td>111378</td>
                                    <td>Zahid Herrera</td>
                                    <td>zahid@gmail.com</td>
                                    <td>Refaccionaria Tollocan</td>
                                    <td><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" 
                                        onclick="window.location='{{ route('editarv',11) }}'">
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