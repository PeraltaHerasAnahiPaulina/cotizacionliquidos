@extends('vendedor.layouts.templatep')

@section('contenido')


    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
        <div class="container-fluid">
            <div class="page-header-content">
                <h1 class="page-header-title">
                    <div class="page-header-icon"><i data-feather="file"></i></div>
                    <span>Alta </span>
                </h1>
                <div class="page-header-subtitle">Alta Cliente</div>
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
                                role="tab" aria-controls="informacion-sap" aria-selected="true">Información contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="informacion-tab" data-toggle="tab" href="#informacion" role="tab"
                                aria-controls="informacion" aria-selected="false">Información de pago</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4" id="formTabsContent">
                        <div class="tab-pane fade show active" id="informacion-sap" role="tabpanel"
                            aria-labelledby="informacion-sap-tab">
                            <form class="needs-validation" novalidate>
                                <div class="border p-4 rounded">
                                    <h4 class="mb-3">Información contacto</h4>
                                    
                                    <div class="container">
                                    <div class="row mb-3">
                                        <!-- Columna izquierda-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="clave" class="form-label">* Clave:</label>
                                                <input type="text" class="form-control" id="clave" placeholder="75455688" required>
                                                <div class="invalid-feedback">Por favor, ingresa la calle.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">* Contacto:</label>
                                                <input type="text" class="form-control" id="contacto" placeholder="Juan Lopez perez" required>
                                                <div class="invalid-feedback">Por favor, ingresa el contacto.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">* Email:</label>
                                                <input type="text" class="form-control" id="email" placeholder="juan@gmail.com" required>
                                                <div class="invalid-feedback">Por favor, ingresa el correo.</div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="calle" class="form-label">*Calle: </label>
                                                <input type="text" class="form-control" id="calle" placeholder="Hidalgo" required>
                                                <div class="invalid-feedback">Por favor, ingresa calle </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="num" class="form-label">*Numero Exterior: </label>
                                                <input type="text" class="form-control" id="num" placeholder="12345" required>
                                                <div class="invalid-feedback">Por favor, ingresa el </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="municipio" class="form-label">*Municipio </label>
                                                <input type="text" class="form-control" id="municipio" placeholder="Toluca" required>
                                                <div class="invalid-feedback">Por favor, ingresa el municipio</div>
                                            </div>
                                        </div>

                                        <!-- Columna derecha -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="razon" class="form-label">* Razón Social</label>
                                                <input type="text" class="form-control" id="razon" placeholder="Refaccionaria Tollocan" required>
                                                <div class="invalid-feedback">Por favor, ingresa razón social.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="telefono" class="form-label">* Teléfono:</label>
                                                <input type="text" class="form-control" id="telefono" placeholder="7291456321" required>
                                                <div class="invalid-feedback">Por favor, ingresa el estado.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="atencion" class="form-label">* Atención:</label>
                                                <input type="text" class="form-control" id="atencion" placeholder="Pedro Sabina" required>
                                                <div class="invalid-feedback">Por favor, ingresa atencion.</div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="numero" class="form-label">*Número Interior :</label>
                                                <input type="text" class="form-control" id="numero" placeholder="215" required>
                                                <div class="invalid-feedback">Por favor, ingresa numero.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="codigo" class="form-label">* Código Postal:</label>
                                                <input type="text" class="form-control" id="codigo" placeholder="52107" required>
                                                <div class="invalid-feedback">Por favor, ingresa el codigo postal.</div>
                                            </div>
                                            <div class="mb-3">
                           <label for="estado" class="form-label">* Estado:</label>
                             <select class="form-control" id="estado" name="estado" required>
                             <option value="Estado de México">Estado de México</option>
                                <option value="Ciudad de México">Ciudad de México</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Puebla">Puebla</option>
                                                </select>
                            <div class="invalid-feedback">Por favor, selecciona un estado.</div>
                                      </div>

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
                        
                        <div class="tab-pane fade" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                            <form class="needs-validation" novalidate>
                                <div class="border p-4 rounded">
                                    <h4 class="mb-3">Información de pago</h4>
                                    
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