@extends('gerenciaventas.layouts.templatep')

@section('contenido')


    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
        <div class="container-fluid">
            <div class="page-header-content">
                <h1 class="page-header-title">
                    <div class="page-header-icon"><i data-feather="file"></i></div>
                    <span>REPORTE</span>
                </h1>
                <div class="page-header-subtitle">Informacion Cliente</div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-n10">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <ul class="nav nav-tabs" id="formTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="informacion-sap-tab" data-toggle="tab" href="#informacion-sap"
                                role="tab" aria-controls="informacion-sap" aria-selected="true">Información SAP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="informacion-tab" data-toggle="tab" href="#informacion" role="tab"
                                aria-controls="informacion" aria-selected="false">Informacion Sistema</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4" id="formTabsContent">
                        <div class="tab-pane fade show active" id="informacion-sap" role="tabpanel"
                            aria-labelledby="informacion-sap-tab">
                            <form class="needs-validation" novalidate>
                                <div class="border p-4 rounded">
                                    <h4 class="mb-3">Información SAP</h4>
                                    <div class="form-row mb-3">
                                        <div class="col-md-6">
                                            <label for="clave" class="form-label">* Clave:</label>
                                            <input type="text" class="form-control" id="clave" placeholder="7545688" required>
                                            <div class="invalid-feedback">Por favor, ingresa la clave.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="clave" class="form-label">* Razon social:</label>
                                            <input type="text" class="form-control" id="clave" placeholder="Persona Moral" required>
                                            <div class="invalid-feedback">Por favor, ingresa Razon social.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-producto" class="form-label">*Contacto:</label>
                                            <input type="text" class="form-control" id="contacto" placeholder="45681566"required>
                                            <div class="invalid-feedback">Por favor, ingresa Contacto.</div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col-md-6">
                                            <label for="nombre" class="form-label">* Direccion:</label>
                                            <input type="text" class="form-control" id="contacto" placeholder="Calle Hidalgo" required>
                                            <div class="invalid-feedback">Por favor, ingresa direccion.</div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-row justify-content-center mt-4">
                                        <button type="submit" class="btn btn-primary mx-2">Guardar</button>
                                        <button type="reset" class="btn btn-secondary mx-2">Cancelar</button>
                                     </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                            <form class="needs-validation" novalidate>
                                <div class="border p-4 rounded">
                                    <h4 class="mb-3">Información Sistema</h4>
                                    <div class="form-row mb-3">
                                        <div class="col-md-6">
                                            <label for="atencion" class="form-label">* Atencion:</label>
                                            <input type="text" class="form-control" id="atencion" placeholder="" required>
                                            <div class="invalid-feedback">Por favor, ingresa atencion.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">* Email:</label>
                                            <input type="text" class="form-control" id="email" placeholder="juan@gmail.com" required>
                                            <div class="invalid-feedback">Por favor, ingresa email.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="telefono" class="form-label">*Telefono:</label>
                                            <input type="text" class="form-control" id="telefono"  placeholder="7894561558" required>
                                            <div class="invalid-feedback">Por favor, ingresa un telefono.</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <label class="form-label">* Moneda:</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="moneda"
                                                        id="activo-mxn" value="mxn" checked id="activo-mxn" required>
                                                    <label class="form-check-label" for="activo-si">MXN </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="moneda"
                                                        id="activo-usd" value="usd" required>
                                                    <label class="form-check-label" for="activo-no">USD</label>
                                                </div>
                                                <div class="col-md-6">
                                            <label class="form-label">* Forma de Pago:</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pago"
                                                        id="activo-credito" value="credito" checked id="activo-creditp" required >
                                                    <label class="form-check-label" for="activo-credito">Credito </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pago"
                                                        id="activo-contado" value="contado" required>
                                                    <label class="form-check-label" for="activo-contado">Contado</label>
                                                </div>
                                </div>
        
                            </form>
                        </div>
                        
                    <div class="form-row justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary mx-2" >Guardar</button>
                        <button type="reset" class="btn btn-secondary mx-2">Cancelar</button>
                    </div>
                </div>

                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function () {
                            var output = document.getElementById('preview');
                            output.src = reader.result;
                            output.classList.remove('d-none');
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>

            </div>
        </div>



@endsection