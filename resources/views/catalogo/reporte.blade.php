@extends('layouts.templatep')

@section('contenido')

<div class="container">
    <h1 class="mb-4">Lista de clientes</h1>
    
    <table class="table table-striped">
        
        <tbody>
            
            <tr>
                        <td>67890</td>
                        <td>Razón </td>
                        <td>Ana López</td>
                        <td>Avenida Viva 742</td>
                <td>
                    <!-- Botón para abrir el modal y cargar datos -->
                    <button type="button" class="btn btn-warning btn-sm"
                        onclick="editarCliente"
                        data-bs-toggle="modal" data-bs-target="#editarModal">
                        ✏️ Editar
                    </button>

                    <!-- Botón para eliminar con alerta de confirmación -->
                    <button type="button" class="btn btn-danger btn-sm" onclick="mostrarAlerta()">
                        🗑️ Eliminar
                    </button>

                    
                </td>
            </tr>
           
        </tbody>

        <thead>
            <tr>
                <th>Clave </th>
                <th>Razon Social</th>
                <th>Contacto</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                        <td>02885</td>
                        <td>Razón </td>
                        <td>Juan Pérez</td>
                        <td>Calle Hidalgo 123</td>
                <td>
                    <!-- Botón para abrir el modal y cargar datos -->
                    <button type="button" class="btn btn-warning btn-sm"
                        onclick="editarCliente"
                        data-bs-toggle="modal" data-bs-target="#editarModal">
                        ✏️ Editar
                    </button>

                    <!-- Botón para eliminar con alerta de confirmación -->
                    <button type="button" class="btn btn-danger btn-sm" onclick="mostrarAlerta()">
                        🗑️ Eliminar
                    </button>

                    
                </td>
            </tr>
           
        </tbody>
    </table>
</div>

<h1>Informacion del cliente</h1>
<div class="row px-xl-5">
    <div class="col">
        <div class="bg-primary p-30 text-white">
            <div class="nav nav-tabs mb-4">
                <a class="nav-item nav-link text-white active" data-toggle="tab" href="#tab-pane-1">Informacion de Sap</a>
                <a class="nav-item nav-link text-white" data-toggle="tab" href="#tab-pane-2">Informacion de Sistema</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">INFO</th>
                        <th scope="col">DETALLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Clave Sap</td>
                        <td>67890</td>
                        
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Razon Social</td>
                        <td>Razon</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Contacto</td>
                            <td>Juan</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Dirección</td>
                            <td>Avenida Viva 742</td>
                        </tr>
                        
                    </tbody>
                    </table>
                
                     
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">INFO</th>
                        <th scope="col">DETALLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Atencion</td>
                        <td>N/A</td>
                        
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Emmail</td>
                        <td>Juan@gmail.com</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Telefono</td>
                            <td>7894561278</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Moneda </td>
                            <td> 
                             <input class="check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                            <label class="check-label" for="flexRadioDisabled">
                                💰MXN
                            </label>
                            
                            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            💵USD
                            </label>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Forma de pago </td>
                            <td> 
                             <input class="check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                            <label class="check-label" for="flexRadioDisabled">
                              💳 Credito
                            </label>
                            
                            <input class="form-check-input" type="radio" name="contadoRadioCheckedDisabled" id="contadoRadioCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="contadoRadioCheckedDisabled">
                            💴  Contado
                            </label>
                            </td>
                        </tr>
                        
                    </tbody>
                    </table>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Edición -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditarCliente" method="POST">
                   

                    <input type="hidden" id="cliente_id" name="cliente_id">

                    <div class="mb-3">
                        <label>Clave Sap</label>
                        <input type="text" id="clave_sap" name="clave_sap" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Razon Social</label>
                        <input type="text" id="razon_social" name="razon_social" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Contacto</label>
                        <input type="text" id="contacto" name="contacto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Direccion</label>
                        <input type="text" id="direccion" name="direccion" class="form-control">
                    </div>

                    <button type="button" class="btn btn-success">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .bg-client-info {
        background-color:rgb(202, 206, 211);
        padding: 30px;
        border-radius: 10px;
    }
    .tab-content {
        background-color:  #ffffff;
        padding: 20px;
        border-radius: 10px;
    }

    .nav-tabs .nav-link {
        color: white; 
    }

    .nav-tabs .nav-link.active {
        background-color: #14273a; 
    }

    .text-white {
        color: white;
    }

    
    
</style>
<script>
    function mostrarAlerta() {
        Swal.fire({
            title: "¿Estás seguro?",
                text: "Esta acción eliminará al cliente permanentemente.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar"

        });
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endsection
