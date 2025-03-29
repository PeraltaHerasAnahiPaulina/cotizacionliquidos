<div class="panel panel-default">
    <div class="panel-body">
        <div id="list" class="table-responsive">

        <table border="0" cellspacing="5" cellpadding="5" class="date-table">
        <tbody>
            <tr>
                <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-right: 10px;">Fecha Inicial:</td>
                <td><input class="date-input" type="text" id="min" name="min"></td>
                <td class="label-cell" style="font-size: 14px; font-weight:bold; padding-left: 20px; padding-right: 10px;">Fecha Final:</td>
                <td><input class="date-input" type="text" id="max" name="max"></td>
                <td style="padding-left: 20px;">
                    <!-- Botón Excel -->
                    <button class="btn btn-success btn-sm" id="exportButton" onclick="exportToExcel()">
                    <i class="fa fa-file-excel"></i> Exportar Excel
                </button>
                </td>
                <td class="search-controls" style="font-size: 14px; font-weight:bold;">
                Buscar: <input type="text" id="searchInput" placeholder="Buscar...">
                </td>
            
            </tr>
        </tbody>
    </table>
    <table id="documentTable" class="table table-striped table-bordered display" style="width: 100%">
        <thead>
            <tr style="background-color: #E0E0E0">
                <th style="background-color: #323F52; color: #ffffff; width: 80px">Fecha</th>
                <th style="background-color: #323F52; color: #ffffff; width: 180px; ">Folio</th>
                <th style="background-color: #323F52; color: #ffffff; width: 320px;">Cliente</th>
                <th style="background-color: #323F52; color: #ffffff">Monto</th>
                <th style="background-color: #323F52; color: #ffffff;  width:250px;" >Estatus Cliente</th>
                <th style="background-color: #323F52; color: #ffffff;  width:250px;" >Estatus Gerencia</th>
                <th style="background-color: #323F52; color: #ffffff;  width:250px;" >Estatus Carga Sap</th>
                <th style="background-color: #323F52; color: #ffffff; width:120px">Acciones</th>
            </tr>
            <tr>
      <th><input type="text" placeholder="Buscar Fecha"></th>
      <th><input type="text" placeholder="Buscar Folio"></th>
      <th><input type="text" placeholder="Buscar Cliente"></th>
      <th><input type="text" placeholder="Buscar Monto"></th>
      <th><input type="text" placeholder="Buscar Estatus Cliente"></th>
      <th><input type="text" placeholder="Buscar Estatus Gerencia"></th>
      <th><input type="text" placeholder="Buscar Estatus Carga Sap "></th>
      <th></th>
    </tr>
        </thead>
        <tbody>
            <tr>
                  <td>21-02-2025</td>
                <td>AME1-IND-00001-01</td>
                <td>NUEVA GENERACION AERONAUTICA</td>
                <td>$17,654.01</td>
                <td style="text-align: center;">
                  <div style="margin-bottom: 10px; text-align: center;">Aceptada por el Cliente</div>
                </td>
                </td>
                <td style="text-align: center">Aprobada por Gerente</td>
                <td style="text-align: center;">
                  <div style="margin-bottom: 10px; text-align: center;">Archivo SAP cargado</div>
                </td>
                <td>

                    <button class="btn btn-info btn-sm" onclick="showDetails(1)">
                        <i class="fa fa-eye"></i>
                    </button>

                </td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</div>

<div id="details-1" class="details-container">
                    <div class="d-flex justify-content-between align-items-center">
                  <div class="form-group">
  
        </div>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-between">
          <!-- Sección 1 -->
          <div class="section-container" style="flex: 1; margin-right: 10px;">
            <h5>Cotización</h5>
            <div class="form-group">
              <label>Fecha</label>
              <input type="date" class="form-control" value="2025-02-21" readonly>
            </div>
            <div class="form-group">
              <label>Folio</label>
              <input type="text" class="form-control" value="F12345" readonly>
            </div>
            <div class="form-group">
              <label>Cliente</label>
              <input type="text" class="form-control" value="NUEVA GENERACION AERONAUTICA" readonly>
            </div>
            <div class="form-group">
              <label>Atención</label>
              <input type="text" class="form-control" value="NADIA FONSECA" readonly>
            </div>
            <div class="form-group">
              <label>Correo</label>
              <input type="text" class="form-control" value="NADIA@example.com" readonly>
            </div>
            <div class="form-group">
              <label>Teléfono</label>
              <input type="text" class="form-control" value="123-456-7890" readonly>
            </div>
          </div>
          <!-- Sección 2 -->
          <div class="section-container" style="flex: 1; margin-right: 10px;">
            <h5>Cotización de Venta</h5>
            <div class="form-group">
              <label>Tiempo de entrega</label>
              <input type="text" class="form-control" value="DE ACUERDO A DISPONIBILIDAD DE PRODUCTO" readonly>
            </div>
            <div class="form-group">
              <label>Validez de oferta</label>
              <input type="text" class="form-control" value="CAMBIO CON PREVIO AVISO" readonly>
            </div>
            <div class="form-group">
              <label>Moneda</label>
              <input type="text" class="form-control" value="MXN" readonly>
            </div>
            <div class="form-group">
              <label>Forma de pago</label>
              <input type="text" class="form-control" value="CREDITO" readonly>
            </div>
          </div>
          <!-- Sección 3 -->
          <div class="section-container" style="flex: 1;">
          <div class="form-group">
  <label>Autorizo Cliente</label>
  Sí<input type="radio" id="html1" name="fav_language_cliente" value="si" checked readonly >
  No<input type="radio" id="html2" name="fav_language_cliente" value="no" readonly disabled>
</div>
<div class="form-group">
  <label>Fecha Autorizacion Cliente</label>
  <input type="Date" class="form-control" value="2025-02-21" readonly>
</div>
<div class="form-group">
  <label>Autorizo Gerente</label>
  Sí<input type="radio" id="html3" name="fav_language_gerente" value="si" checked readonly >
  No<input type="radio" id="html4" name="fav_language_gerente" value="no" readonly disabled>
</div>
<div class="form-group">
  <label>Fecha Autorizacion Gerente</label>
  <input type="Date" class="form-control" value="2025-02-21" readonly>
</div>
<div class="form-group">
  <label>Nombre</label>
  <input type="text" class="form-control" value="Jesus Peñaloza Cruz" readonly>
</div>
<div class="form-group">
<label>División</label>
<input type="text" class="form-control" value="Industrial" readonly>
</div>
<div class="form-group">
  <label>Observaciones</label>
  <input type="text" class="form-control" value="Sin Observaciones" readonly>
</div>
<div class="form-group">
  <label>Formato LSMW</label>
  Sí<input type="radio" id="html9" name="fav_language_lsmw" value="si" checked readonly >
  No<input type="radio" id="html10" name="fav_language_lsmw" value="no" readonly disabled>
</div>
<div class="form-group">
  <label>Fecha de generación de archivo</label>
  <input type="Date" class="form-control" value="2025-02-21" readonly>
</div>
          </div>
        </div>
        <hr>
        <!-- Tabla de resumen -->
       <h5 class=" text-center mt-4" style="background-color: #00144F; color: #FFFFFF ;">Productos Agregados</h5>
        <!-- Tabla: Artículos Solicitados -->
        <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background-color: #f5333f; color: white;">
                        <tr>
                            <th colspan="8" class="text-center">Artículos Solicitados</th>
                        </tr>
                    </thead>
                    <thead class="table text-center">
                        <tr>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Cantidad</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Código</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Nombre</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Presentación</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Precio Unitario</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Descuento</th>
                            <th style="background-color: #0d6efd; color: #ffffff ;">Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                        <tr>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja 24 pzas</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$821,60</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">10%</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$4,929.60</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10</td>
                            <td style="text-align: center;">104765</td>
                            <td style="text-align: center;">M-JET OIL II CAN 24X1UQL</td>
                            <td style="text-align: center;">Caja 24 pzas</td>
                            <td style="text-align: right;">$527.66</td>
                            <td style="text-align: right;">0%</td>
                            <td style="text-align: right;">$5,276.60</td>
                        </tr>
                        <tr>
                        <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">10</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">104765</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">M-VACUOLINE 146 DRUM 208L</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: center;">Caja de 24 Pzas</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$527.66</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">5%</td>
                            <td style="background-color: rgba(185, 185, 185, 0.55); text-align: right;">$5,012.77</td>
                        </tr>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="color: #00144F ;" colspan="6" class="text-end">SUBTOTAL:</th>
                            <td class="text-end">$15,218.97</td>
                        </tr>
                        <tr>
                            <th style="color: #00144F ;" colspan="6" class="text-end">IVA 26% :</th>
                            <td class="text-end">$2,435.04</td>
                        </tr>
                        <tr>
                            <th style="color: #00144F ;" colspan="6" class="text-end fw-bold">TOTAL:</th>
                            <td class="text-end fw-bold text-white" style="background-color: #f5333f;">$17,654.01</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        <button class="btn btn-danger" onclick="closeDetails(1)">Cerrar</button>
      </div>
</div>
