<div class="panel panel-default">
    <div class="panel-body">
        <div id="list" class="table-responsive">

            <table border="0" cellspacing="5" cellpadding="5" class="date-table">
                <tbody>
                    <tr>
                        <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-right: 10px;">Fecha
                            Inicial:</td>
                        <td><input class="date-input" type="text" id="min" name="min"></td>
                        <td class="label-cell"
                            style="font-size: 14px; font-weight:bold; padding-left: 20px; padding-right: 10px;">Fecha
                            Final:</td>
                        <td><input class="date-input" type="text" id="max" name="max"></td>
                        <td style="padding-left: 20px;">
                            <!-- Botón Excel -->
                            <button class="btn btn-success btn-sm" id="exportButton2" onclick="exportToExcel()">
                                <i class="fa fa-file-excel"></i> Exportar Excel
                            </button>
                        </td>
                        <td class="search-controls" style="font-size: 14px; font-weight:bold;">
                            Buscar: <input type="text" id="searchInput2" placeholder="Buscar...">
                        </td>

                    </tr>
                </tbody>
            </table>
            
            <table id="documentTable2" class="table table-striped table-bordered display" style="width: 100%">
                <thead>
                    <h3 style="background-color: #323F52; color: #ffffff; padding: 10px; width: fit-content; border-radius: 5px;">
                        Vendedor: Pablo Ramirez Lopez
                    </h3>
                    <tr style="background-color: #E0E0E0">
                        <th style="background-color: #323F52; color: #ffffff; width: 80px">Mes</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 180px; ">Monto cotizado</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 320px;">Monto facturado</th>
                       
                    </tr>
                    
                    <tr>
                        <th><input type="text" placeholder="Buscar Mes"></th>
                        <th><input type="text" placeholder="Buscar Monto cotizado"></th>
                        <th><input type="text" placeholder="Monto facturado"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >Enero</td>
                        <td style="text-align: right;">$345.00</td>
                        <td style="text-align: right;">$234.00</td>
                    </tr>
                    <tr>
                        <td >Febreo</td>
                        <td style="text-align: right;">$23.00</td>
                        <td style="text-align: right;">$346.00</td>
                    </tr>
                    <tr>
                        <td >Marzo</td>
                        <td style="text-align: right;">$324.00</td>
                        <td style="text-align: right;">$234.00</td>
                    </tr>
                    <tr>
                        <td >Abril</td>
                        <td style="text-align: right;">$23.00</td>
                        <td style="text-align: right;">$347.00</td>
                    </tr>
                    <tr>
                        <td >Mayo</td>
                        <td style="text-align: right;">$45.00</td>
                        <td style="text-align: right;">$634.00</td>
                    </tr>
                    <tr>
                        <td >Junio</td>
                        <td style="text-align: right;">$324.00</td>
                        <td style="text-align: right;">$34.00</td>
                    </tr>
                    <tr>
                        <td >Julio</td>
                        <td style="text-align: right;">$6,324.00</td>
                        <td style="text-align: right;">$63.00</td>
                    </tr>
                    <tr>
                        <td >Agosto</td>
                        <td style="text-align: right;">$324.00</td>
                        <td style="text-align: right;">$34,634.00</td>
                    </tr>
                    <tr>
                        <td >Septiembre</td>
                        <td style="text-align: right;">$555.00</td>
                        <td style="text-align: right;">$5.00</td>
                    </tr>
                    <tr>
                        <td >Octubre</td>
                        <td style="text-align: right;">$56.00</td>
                        <td style="text-align: right;">$4,357.00</td>
                    </tr>
                    <tr>
                        <td >Noviembre</td>
                        <td style="text-align: right;">$45,457.00</td>
                        <td style="text-align: right;">$568.00</td>
                    </tr>
                    <tr>
                        <td >Diciembre</td>
                        <td style="text-align: right;">$56.00</td>
                        <td style="text-align: right;">$565.00</td>
                    </tr>
                    <tr > 
                        <td style="background-color: #323F52;  color: #ffffff;"><strong>Total</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>$53,857.00</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>$42,021.00</strong></td> 
                    </tr>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div id="list" class="table-responsive">

            <table border="0" cellspacing="5" cellpadding="5" class="date-table">
                <tbody>
                    <tr>
                        <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-right: 10px;">Fecha
                            Inicial:</td>
                        <td><input class="date-input" type="text" id="min" name="min"></td>
                        <td class="label-cell"
                            style="font-size: 14px; font-weight:bold; padding-left: 20px; padding-right: 10px;">Fecha
                            Final:</td>
                        <td><input class="date-input" type="text" id="max" name="max"></td>
                        <td style="padding-left: 20px;">
                            <!-- Botón Excel -->
                            <button class="btn btn-success btn-sm" id="exportButton4" onclick="exportToExcel()">
                                <i class="fa fa-file-excel"></i> Exportar Excel
                            </button>
                        </td>
                        <td class="search-controls" style="font-size: 14px; font-weight:bold;">
                            Buscar: <input type="text" id="searchInput4" placeholder="Buscar...">
                        </td>

                    </tr>
                </tbody>
            </table>
            
            <table id="documentTable4" class="table table-striped table-bordered display" style="width: 100%">
                <thead>
                    <h3 style="background-color: #323F52; color: #ffffff; padding: 10px; width: fit-content; border-radius: 5px;">
                        Vendedor: Carlos Lopez Lara
                    </h3>
                    <tr style="background-color: #E0E0E0">
                        <th style="background-color: #323F52; color: #ffffff; width: 80px">Mes</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 180px; ">Monto cotizado</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 320px;">Monto facturado</th>
                       
                    </tr>
                    
                    <tr>
                        <th><input type="text" placeholder="Buscar Mes"></th>
                        <th><input type="text" placeholder="Buscar Monto cotizado"></th>
                        <th><input type="text" placeholder="Monto facturado"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >Enero</td>
                        <td style="text-align: right;">$345.00</td>
                        <td style="text-align: right;">$234.00</td>
                    </tr>
                    <tr>
                        <td >Febreo</td>
                        <td style="text-align: right;">$23.00</td>
                        <td style="text-align: right;">$346.00</td>
                    </tr>
                    <tr>
                        <td >Marzo</td>
                        <td style="text-align: right;">$324.00</td>
                        <td style="text-align: right;">$234.00</td>
                    </tr>
                    <tr>
                        <td >Abril</td>
                        <td style="text-align: right;">$23.00</td>
                        <td style="text-align: right;">$347.00</td>
                    </tr>
                    <tr>
                        <td >Mayo</td>
                        <td style="text-align: right;">$45.00</td>
                        <td style="text-align: right;">$634.00</td>
                    </tr>
                    <tr>
                        <td >Junio</td>
                        <td style="text-align: right;">$324.00</td>
                        <td style="text-align: right;">$34.00</td>
                    </tr>
                    <tr>
                        <td >Julio</td>
                        <td style="text-align: right;">$6,324.00</td>
                        <td style="text-align: right;">$63.00</td>
                    </tr>
                    <tr>
                        <td >Agosto</td>
                        <td style="text-align: right;">$324.00</td>
                        <td style="text-align: right;">$34,634.00</td>
                    </tr>
                    <tr>
                        <td >Septiembre</td>
                        <td style="text-align: right;">$555.00</td>
                        <td style="text-align: right;">$5.00</td>
                    </tr>
                    <tr>
                        <td >Octubre</td>
                        <td style="text-align: right;">$56.00</td>
                        <td style="text-align: right;">$4,357.00</td>
                    </tr>
                    <tr>
                        <td >Noviembre</td>
                        <td style="text-align: right;">$45,457.00</td>
                        <td style="text-align: right;">$568.00</td>
                    </tr>
                    <tr>
                        <td >Diciembre</td>
                        <td style="text-align: right;">$56.00</td>
                        <td style="text-align: right;">$565.00</td>
                    </tr>
                    <tr > 
                        <td style="background-color: #323F52;  color: #ffffff;"><strong>Total</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>$53,857.00</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>$42,021.00</strong></td> 
                    </tr>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
