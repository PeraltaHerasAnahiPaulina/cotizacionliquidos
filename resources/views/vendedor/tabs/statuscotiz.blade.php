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
                            <button class="btn btn-success btn-sm" id="exportButton3" onclick="exportToExcel()">
                                <i class="fa fa-file-excel"></i> Exportar Excel
                            </button>
                        </td>
                        <td class="search-controls" style="font-size: 14px; font-weight:bold;">
                            Buscar: <input type="text" id="searchInput3" placeholder="Buscar...">
                        </td>

                    </tr>
                </tbody>
            </table>
            <table id="documentTable3" class="table table-striped table-bordered display" style="width: 100%">
                <thead>
                    <tr style="background-color: #E0E0E0">
                        <th style="background-color: #323F52; color: #ffffff; width: 80px">Mes</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 180px; ">Autorizados</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 320px;">No Autorizados</th>
                        <th style="background-color: #323F52; color: #ffffff; width: 320px;">En Proceso </th>
                       
                    </tr>
                    <tr>
                        <th><input type="text" placeholder="Buscar Mes"></th>
                        <th><input type="text" placeholder="Autorizados"></th>
                        <th><input type="text" placeholder="No Autorizados"></th>
                        <th><input type="text" placeholder="En Proceso "></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >Enero</td>
                        <td style="text-align: right;">2</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">5</td>
                    </tr>
                    <tr>
                        <td >Febreo</td>
                        <td style="text-align: right;">5</td>
                        <td style="text-align: right;">5</td>
                        <td style="text-align: right;">6</td>
                    </tr>
                    <tr>
                        <td >Marzo</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">234</td>
                        <td style="text-align: right;">4</td>
                    </tr>
                    <tr>
                        <td >Abril</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">43</td>
                        <td style="text-align: right;">2</td>
                    </tr>
                    <tr>
                        <td >Mayo</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">5</td>
                        <td style="text-align: right;">35</td>
                    </tr>
                    <tr>
                        <td >Junio</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">5</td>
                    </tr>
                    <tr>
                        <td >Julio</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">63</td>
                        <td style="text-align: right;">3</td>
                    </tr>
                    <tr>
                        <td >Agosto</td> 
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">4</td>
                    </tr>
                    <tr>
                        <td >Septiembre</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">5</td>
                        <td style="text-align: right;">3</td>
                    </tr>
                    <tr>
                        <td >Octubre</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">2</td>
                    </tr>
                    <tr>
                        <td >Noviembre</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">3</td>
                        <td style="text-align: right;">3</td>
                    </tr>
                    <tr>
                        <td >Diciembre</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">4</td>
                        <td style="text-align: right;">5</td>
                    </tr>
                    <tr > 
                        <td style="background-color: #323F52;  color: #ffffff;"><strong>Total</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>42</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>376</strong></td> 
                        <td style="text-align: right; background-color: #323F52;  color: #ffffff;"><strong>77</strong></td> 
                    </tr>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
