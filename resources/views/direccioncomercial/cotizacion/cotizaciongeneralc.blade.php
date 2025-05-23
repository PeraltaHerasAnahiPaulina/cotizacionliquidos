@extends('direccioncomercial.layouts.templatep')

@section('contenido')


    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
        <div class="container-fluid">
            <div class="page-header-content">
                <h1 class="page-header-title">

                    <div class="page-header-icon"><i data-feather="file"></i></div>
                    <span>General Cotizaciones</span>
                </h1>
                <div class="page-header-subtitle">Reporte General Cotizaciones</div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-n10">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="list" class="table-responsive">
                            <label>Fecha Inicio: <input type="text" id="min-date" placeholder="DD-MM-YYYY" /></label>
                            <label>Fecha Fin: <input type="text" id="max-date" placeholder="DD-MM-YYYY" /></label>
                            <!-- ↓Id de la tabla (Es importante colocar un id) ↓ -->
                            <!--↓Quitar cuando se acomode dentro de un div bueno↓-->
                            <table id="miTabla" class="table table-striped table-bordered display" style="width: 100%">
                                <thead>
                                    <tr style="background-color: #E0E0E0">
                                        <th style="background-color: #323F52; color: #ffffff">Fecha</th>
                                        <th style="background-color: #323F52; color: #ffffff">Folio </th>
                                        <th style="background-color: #323F52; color: #ffffff">Cliente</th>
                                        <th style="background-color: #323F52; color: #ffffff">Sucursal</th>
                                        <th style="background-color: #323F52; color: #ffffff">Vendedor</th>
                                        <th style="background-color: #323F52; color: #ffffff">Gerente</th>
                                        <th style="background-color: #323F52; color: #ffffff">Forma Pago</th>
                                        <th style="background-color: #323F52; color: #ffffff">Codigo</th>
                                        <th style="background-color: #323F52; color: #ffffff">Linea</th>
                                        <th style="background-color: #323F52; color: #ffffff">Producto</th>
                                        <th style="background-color: #323F52; color: #ffffff">Moneda</th>
                                        <th style="background-color: #323F52; color: #ffffff">Cantidad</th>
                                        <th style="background-color: #323F52; color: #ffffff">Costo U</th>
                                        <th style="background-color: #323F52; color: #ffffff">Dscto</th>
                                        <th style="background-color: #323F52; color: #ffffff">Total</th>
                                        <th style="background-color: #323F52; color: #ffffff">Estatus cte</th>
                                        <th style="background-color: #323F52; color: #ffffff">Estatus Gcia</th>
                                        <th style="background-color: #323F52; color: #ffffff">Estatus SAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>19-02-2025</td>
                                        <td>AME1-00001-01</td>
                                        <td>Ind ABC</td>
                                        <td>AME-1</td>
                                        <td>Juan Lara</td>
                                        <td>Juan Lira</td>
                                        <td>Credito</td>
                                        <td>47488</td>
                                        <td>PVL</td>
                                        <td>Mobil DTE 26 tam</td>
                                        <td>MXN</td>
                                        <td>2</td>
                                        <td>$34.34</td>
                                        <td>25%</td>
                                        <td>$51.51</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #ff8e2f">Pendiente Aprobacion</td>
                                        <td>NA</td>
                                    </tr>
                                    <tr>
                                        <td>18-02-2025</td>
                                        <td>AME1-00001-01</td>
                                        <td>Ind ABC</td>
                                        <td>AME-1</td>
                                        <td>Juan Lara</td>
                                        <td>Juan Lira</td>
                                        <td>Credito</td>
                                        <td>43747</td>
                                        <td>PVL</td>
                                        <td>Mobil XHP 222 cub</td>
                                        <td>MXN</td>
                                        <td>3</td>
                                        <td>$23.24</td>
                                        <td>0%</td>
                                        <td>$52.29</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #ff8e2f">Pendiente Aprobacion</td>
                                        <td>NA</td>
                                    </tr>
                                    <tr>
                                        <td>18-02-2025</td>
                                        <td>AME1-00001-01</td>
                                        <td>Flota K</td>
                                        <td>AME-1</td>
                                        <td>Juan Lara</td>
                                        <td>Juan Lira</td>
                                        <td>Credito</td>
                                        <td>42436</td>
                                        <td>PVL</td>
                                        <td>DTE 25 tam</td>
                                        <td>MXN</td>
                                        <td>2</td>
                                        <td>$35.34</td>
                                        <td>30%</td>
                                        <td>$53.01</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #ff8e2f">Pendiente Aprobacion</td>
                                        <td>NA</td>
                                    </tr>
                                    <tr>
                                        <td>18-02-2025</td>
                                        <td>AME1-00002-01</td>
                                        <td>Flota K</td>
                                        <td>AME-1</td>
                                        <td>Pedro Lopez</td>
                                        <td>Juan Lira</td>
                                        <td>Contado</td>
                                        <td>45677</td>
                                        <td>CVL</td>
                                        <td>Mobil Monogrado 40 tam</td>
                                        <td>MXN</td>
                                        <td>23</td>
                                        <td>$35.23</td>
                                        <td>0%</td>
                                        <td>$607.72</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #29af1f">Aprobado Gerente</td>
                                        <td style="color: #29af1f">Archivo Sap Generado</td>
                                    </tr>
                                    <tr>
                                        <td>18-02-2025</td>
                                        <td>AME1-00001-05</td>
                                        <td>Flota K</td>
                                        <td>AME-1</td>
                                        <td>Pedro Lopez</td>
                                        <td>Juan Lira</td>
                                        <td>contado</td>
                                        <td>456747</td>
                                        <td>CVL</td>
                                        <td>Mobil DELVAC CP tam</td>
                                        <td>USD</td>
                                        <td>4</td>
                                        <td>$53.23</td>
                                        <td>17%</td>
                                        <td>$159.69</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #29af1f">Aprobado Gerente</td>
                                        <td style="color: #29af1f">Archivo Sap Generado</td>
                                    </tr>
                                    <tr>
                                        <td>19-02-2025</td>
                                        <td>AME1-00002-01</td>
                                        <td>Juan Perez</td>
                                        <td>AME-1</td>
                                        <td>Pedro Lopez</td>
                                        <td>Juan Lira</td>
                                        <td>Credito</td>
                                        <td>45745</td>
                                        <td>PVL</td>
                                        <td>Mobil DELVAC FP cub</td>
                                        <td>MXN</td>
                                        <td>2</td>
                                        <td>$23.40</td>
                                        <td>0%</td>
                                        <td>$35.10</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #29af1f">Aprobado Gerente</td>
                                        <td>NA</td>
                                    </tr>
                                    <tr>
                                        <td>18-02-2025</td>
                                        <td>AME2-00002-01</td>
                                        <td>Maquinados A</td>
                                        <td>AME-2</td>
                                        <td>Maria Rodriguez</td>
                                        <td>Pablo Ramirez</td>
                                        <td>Credito</td>
                                        <td>745845</td>
                                        <td>CVL</td>
                                        <td>Mobil Vactra 2 tam</td>
                                        <td>USD</td>
                                        <td>3</td>
                                        <td>$23.34</td>
                                        <td>20%</td>
                                        <td>$52.52</td>
                                        <td style="color: #ff8e2f">Pendiente Aprobado Cliente</td>
                                        <td style="color: #29af1f">Autorizado Gerente</td>
                                        <td>NA</td>
                                    </tr>
                                    <tr>
                                        <td>18-02-2025</td>
                                        <td>AME2-00001-02</td>
                                        <td>Minera B</td>
                                        <td>AME-2</td>
                                        <td>Maria Rodriguez</td>
                                        <td>Pablo Ramirez</td>
                                        <td>Credito</td>
                                        <td>347347</td>
                                        <td>CVL</td>
                                        <td>Mobilgear XP 460 cub</td>
                                        <td>MXN</td>
                                        <td>5</td>
                                        <td>$24.23</td>
                                        <td>0%</td>
                                        <td>$90.86</td>
                                        <td style="color: #29af1f">Aprobado Cliente</td>
                                        <td style="color: #29af1f">Aprobado Gerente</td>
                                        <td style="color: #29af1f">Archivo Sap Generado</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <!-- Buttons Extension -->
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

        <!-- Datepicker (opcional) -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

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
            $(document).ready(function () {

                $("#min-date, #max-date").datepicker({
                    dateFormat: "dd-mm-yy"
                });

                function parseFecha(fechaStr) {
                    var partes = fechaStr.split("-");
                    return new Date(partes[2], partes[1] - 1, partes[0]);
                }


                $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
                    var min = $('#min-date').val();
                    var max = $('#max-date').val();
                    var fecha = data[0];

                    if (fecha) {
                        var fechaActual = parseFecha(fecha);
                        var minFecha = min ? parseFecha(min) : null;
                        var maxFecha = max ? parseFecha(max) : null;

                        if ((minFecha === null || fechaActual >= minFecha) &&
                            (maxFecha === null || fechaActual <= maxFecha)) {
                            return true;
                        }
                    }

                    return false;
                });


                var table = $('#miTabla').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            title: 'Cotizacion General',
                            exportOptions: {
                                columns: ':visible'
                            }
                        }
                    ]
                });


                $('#min-date, #max-date').change(function () {
                    table.draw();
                });
            });
        </script>



@endsection