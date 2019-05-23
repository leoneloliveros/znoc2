<!-- módulo de las pestañas de la vista del ingeniero en donde podra encontrar los tiquets que se encuentran asignados a el -->
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#id_section_engineering">Asignados</a></li>
    <li class=""><a data-toggle="tab" href="#section_record">Realizadas</a></li>
</ul>

<!-- Contendio de las pestañas de la vista del documentador -->

<div class="tab-content" id="section_engineering">
    <div id="id_section_engineering" class="tab-pane fade in active">
        <h3>Tickets Asignados</h3>
        <table id="engineering_table" class="table table-hover table-bordered table-striped dataTable_camilo">
            <button type="button" class="dt-button btn-cami_warning assign_btn">Extender</button>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th style=" width: 28px;"></th>
                    <th data-algo='aoooo'></th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div id="section_record" class="tab-pane fade">
        <h3>Realizados</h3>

        <div align="center">
            <div class="form-inline">
                <div class="form-group">
                    <label for="search_date_asignadas">Fecha Asignación:</label>
                    <input type="date" class="form-control" id="search_date_asignadas" value="<?= date('Y-m-d') ?>" >
                    <button class="btn btn-success" id="btn_search_asignadas"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </div><br>

        <table id="realizadas_table" class="table table-hover table-bordered table-striped dataTable_camilo">
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<!------------------------------------------ modal ordenes seleccionadas Asignar ------------------------------->
<div class="modales_cami">
    <div id="mdl_block" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
                    <h3 class="modal-title" id="mdl-title-block"></h3>
                </div>
                <div class="modal-body">
                    <table id="table_selected" class="table table-hover table-bordered table-striped dataTable_camilo" width="100%"></table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="mdl-cierre-cerrar" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp;Cancelar</button>
                    <button type="button" class="btn btn-success" id="mdl-block-act"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Extender&nbsp;&nbsp;</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-----------------------------------------Modal Informe Bitacora----------------------------------------->
<div class="modales_cami">
    <div class="modal fade" id="informeBitacora" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h4 class="modal-title" id="myModalLabel">Bitacora</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal">
                        <input type="hidden" name="ticketBitacora" id="ticketBitacora">
                        <input type="hidden" name="bitacoraAction" id="bitacoraAction">
                        <div class="form-group">
                            <label for="estado_inicial" class="col-sm-2 control-label">Estado inicial:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="estado_inicial">
                                    <option value="PRECHECK">PRECHECK</option>
                                    <option value="SEGUIMIENTO 12H">SEGUIMIENTO 12H</option>
                                    <option value="SEGUIMIENTO 24H">SEGUIMIENTO 24H</option>
                                    <option value="SEGUIMIENTO 36H">SEGUIMIENTO 36H</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estado_final" class="col-sm-2 control-label">Estado final:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="estado_final">
                                    <option value="PRECHECK">PRECHECK</option>
                                    <option value="SEGUIMIENTO 12H">SEGUIMIENTO 12H</option>
                                    <option value="SEGUIMIENTO 24H">SEGUIMIENTO 24H</option>
                                    <option value="SEGUIMIENTO 36H">SEGUIMIENTO 36H</option>
                                    <option value="PRODUCCION">PRODUCCION</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exitoso" class="col-sm-2 control-label">Exitoso:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="exitoso">
                                    <option value="EXITOSO">EXITOSO</option>
                                    <option value="NO EXITOSO">NO EXITOSO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="standby" class="col-sm-2 control-label">Standby:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="standby">
                                    <option value="N/A">N/A</option>
                                    <option value="STANDBY">STANDBY</option>
                                    <option value="PRORROGA">PRORROGA</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success wth-70" id="guardarBitacora">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------FIn Modal Informe Bitacora----------------------------------------->
<?php
$msj = $this->session->flashdata('msj');
$subido = $this->session->flashdata('subido');
if ($msj == 'error') {
    ?>
    <script> swal('Error!', `El formato de la evidencia debe ser .msg`, 'error');</script>
<?php } elseif ($msj == 'error2') { ?>
    <script type="text/javascript"> swal('Error!', `No se pudo subir el archivo`, 'error');</script>
    <?php
}
if ($subido == 'ok') {
    ?>
    <script type="text/javascript"> swal('OK!', "En Documentación ", 'success')</script>
    <?php
}
