@extends('layouts.templatep')

@section('contenido')

<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="file"></i></div>
                <span>REPORTE</span>
            </h1>
            <div class="page-header-subtitle">Información Usuario</div>
        </div>
    </div>
</div>

<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-body">
            <div class="container mt-5">
                <ul class="nav nav-tabs" id="formTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="informacion-tab" data-toggle="tab" href="#informacion" role="tab"
                            aria-controls="informacion" aria-selected="true">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="foto-tab" data-toggle="tab" href="#foto" role="tab"
                            aria-controls="foto" aria-selected="false">Foto</a>
                    </li>
                </ul>

                <div class="tab-content mt-4" id="formTabsContent">
                    <!-- Información Tab -->
                    <div class="tab-pane fade show active" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                        <form class="needs-validation" novalidate>
                            <div class="border p-4 rounded">
                                <h4 class="mb-3">Información</h4>
                                
                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <label for="apellidoP">* Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="apellidoP" required>
                                        <div class="invalid-feedback">Por favor, ingresa el apellido.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="apellidoM">* Apellido Materno:</label>
                                        <input type="text" class="form-control" id="apellidoM" required>
                                        <div class="invalid-feedback">Por favor, ingresa el apellido.</div>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <label for="correo">* Correo:</label>
                                        <input type="email" class="form-control" id="correo" required>
                                        <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono">* Teléfono:</label>
                                        <input type="text" class="form-control" id="telefono" required>
                                        <div class="invalid-feedback">Por favor, ingresa un teléfono.</div>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <label for="contraseña">* Contraseña:</label>
                                        <input type="password" class="form-control" id="contraseña" required>
                                        <div class="invalid-feedback">Por favor, ingresa una contraseña.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="confirm">* Confirmar Contraseña:</label>
                                        <input type="password" class="form-control" id="confirm" required>
                                        <div class="invalid-feedback">Por favor, confirma la contraseña.</div>
                                    </div>
                                </div>

                                <div class="border p-4 rounded mt-4">
                            <h4 class="mb-3">Sucursal y Tipo de Empleado</h4>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="sucursal" class="form-label">* Sucursal:</label>
                                    <select class="form-select" id="sucursal" required>
                                        <option value="">Selecciona una sucursal</option>
                                        <option value="AME1">Ame1</option>
                                        <option value="AME2">Ame2</option>
                                        <option value="AME3">Ame3</option>
                                        <option value="AME4">Ame4</option>
                                        <option value="AME5">Ame5</option>
                                    </select>
                                    <div class="invalid-feedback">Por favor, selecciona una sucursal.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="tipo" class="form-label">* Tipo:</label>
                                    <select class="form-select" id="tipo" required>
                                        <option value="">Selecciona el tipo de empleado</option>
                                        <option value="vendedor">Vendedor</option>
                                        <option value="gerente_ventas">Gerente de Ventas</option>
                                        <option value="administrador">Administrador</option>
                                    </select>
                                    <div class="invalid-feedback">Por favor, selecciona un tipo de empleado.</div>
                                </div>
                            </div>
                        </div>
                                

                                <div class="form-row justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary mx-2">Guardar</button>
                                    <button type="reset" class="btn btn-secondary mx-2">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Foto Tab -->
                    <div class="tab-pane fade" id="foto" role="tabpanel" aria-labelledby="foto-tab">
                        <form class="needs-validation" novalidate>
                            <div class="border p-4 rounded">
                                <h4 class="mb-3">FOTO</h4>
                                <div class="card-body">
                            <h5 class="card-title">Foto del Usuario</h5><br>
                             <div class="file-container">
                            <label for="fileInput">Subir archivo:</label>
                                 <input type="file" class="form-control" id="fileInput">
        </div>                          
                                    </div>
                                </div>

                                <div class="form-row justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary mx-2">Guardar</button>
                                    <button type="reset" class="btn btn-secondary mx-2">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
