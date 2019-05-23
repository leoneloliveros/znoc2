<!-- CIERRE CONTAINER-->
</div>
<!-- INICIO FOOTER-->
<div class="footerF">
    <p class="margenDelFooter">©1998-2018 ZTE Corporation - ZTE Colombia. All rights reserved</p>
</div>

<script>
    var click = true;
    var clickreportes = true
    var user_in_session = <?php echo json_encode($this->session->userdata()); ?>;
    var base_url = "<?= base_url(); ?>";
    var formato_fecha = new Date();
    const meses_anual = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var fecha_actual = formato_fecha.getDate() + " de " + meses_anual[formato_fecha.getMonth()] + " de " + formato_fecha.getFullYear();
    function w3_open() {
        $('#mySidebar').show(200);
    }
    function w3_close() {
        $('#mySidebar').hide(200);
        click = false;
        <?php if ($this->session->userdata('role') == 'lider'): ?>
            abrir_reportes();
            clickreportes = false;
            abrirOcerrarReportesNormales();
        <?php endif ?>

    }




</script>

<!--************************************************* NO TOUCH     DON'T TOCAR ************************************************* -->

<?php if ($this->uri->segment(1) == 'FormulariosAcces'): ?>
    <script src="<?= base_url("assets/js/modules/Access.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(2) != 'crear_malla' && $this->uri->segment(1) != 'FormulariosAcces' && $this->uri->segment(1) != 'Consultas_simples' ): ?>
    <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
<?php endif ?>
<script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.min.js") ?>"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<!-- **********************************************datatables *********************************************-->
<script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>

<!-- ********************************************** SWEET ALERT 2 *********************************************-->
<script src="<?= base_url("assets/plugins/sweetalert2/sweetalert2.all.js") ?>"></script>
<!-- ********************************************** HELPER FUNCVIONES GLOBALES *********************************************-->
<script src="<?= base_url("assets/js/modules/helper.js?v=" . validarEnProduccion()) ?>"></script>
<script src="<?= base_url("assets/js/modules/configuracion_user.js?v=" . validarEnProduccion()) ?>"></script>
<script src="<?= base_url("assets/plugins/jquery.mask.js") ?>" type="text/javascript"></script>

<script type="text/javascript">
    $.post(base_url + 'Temp/getLastDateTemp', {}, function(data) {
        const hour = JSON.parse(data);
        $('#hora_actualizacion').append('<h6 class="h6-il">última actualización </h6>' + hour);
    });
</script>



<!--**********************************************FIN NO TOUCH   END DON'T TOCAR********************************************** -->


<?php if ($this->session->userdata('role') == 'lider'): ?>
    <!--******************************** SI ES LIDER:  JS PARA CARGAR LA DATA ********************************-->
    <script src="<?= base_url("assets/js/modules/custom-file-input.js?v=" . validarEnProduccion()) ?>"></script>
    <script src="<?= base_url("assets/js/modules/loadExcel/actualizar_data.js?v=" . validarEnProduccion()) ?>"></script>
    <script src="<?= base_url("assets/js/modules/loadExcel/loadAssignments.js?v=" . validarEnProduccion()) ?>"></script>
    <!--******************************** FIN SI ES LIDER:  JS PARA CARGAR LA DATA ********************************-->
<?php endif ?>

<?php if ($this->uri->segment(1) == 'TasksReport' && $this->session->userdata('role') == 'lider'): ?>
    <script src="<?= base_url("assets/js/reporteTareas.js?v=". validarEnProduccion()) ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
    <?php endif ?>

<?php if ($this->uri->segment(1) == 'StartActivitiesReport' && $this->session->userdata('role') == 'lider'): ?>
    <script src="<?= base_url("assets/js/inicioActividadesReport.js?v=". validarEnProduccion()) ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1)=='Reporte' && $this->uri->segment(2)=='Reporte_cantinges' && $this->session->userdata('role') == 'lider'):?>
     <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/reporte_de_ingenieros.js?v=". validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Malla' && $this->uri->segment(2) == 'crear_malla'): ?>
        <script src="<?= base_url("assets/js/modules/loadExcel/loadMalla.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'User' && $this->session->userdata('role') == 'lider'): ?>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
  <script src="<?= base_url("assets/js/modules/lider.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'User' && $this->session->userdata('role') == 'documentador'): ?>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
    <script src="<?= base_url("assets/js/modules/documentador.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'User' && $this->session->userdata('role') == 'ingeniero'): ?>
    <script src="<?= base_url('assets/js/ingeniero_vista_drive.js'); ?>"></script>
    <script src="<?= base_url("assets/js/modules/ingeniero.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Reporte' && $this->uri->segment(2) == 'reporteEscalamientos' && $this->session->userdata('role') == 'cliente'): ?>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
  <script src="<?= base_url("assets/js/modules/reporte_escalamientos.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'User' && $this->session->userdata('role') == 'cliente'): ?>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
  <script src="<?= base_url("assets/js/modules/cliente.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Reporte' && $this->uri->segment(2) == 'reporteSemanalEscSeg' && $this->session->userdata('role') == 'cliente'): ?>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
  <script src="<?= base_url("assets/js/modules/semanal_esc_seg.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Reporte' && $this->uri->segment(2) == 'detalleReporte' && $this->session->userdata('role') == 'cliente'): ?>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
  <script src="<?= base_url("assets/js/modules/reporte_dias_detalle.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>


<!-- **********************************************datatables plus (excel ... ) *********************************************-->
<?php if ($this->uri->segment(1) == 'User' || $this->uri->segment(2) == 'allTickets'): ?>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>

<?php endif ?>

<?php if ($this->uri->segment(1) == 'Mannagement' && !$this->uri->segment(2)): ?>
    <script src="<?= base_url('assets/js/modules/comoVamos/graficas.js'); ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(2) == 'allTickets'): ?>
    <script src="<?= base_url('assets/js/modules/all_tickets.js'); ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Migrar_data'): ?>
    <script src="<?= base_url('assets/js/modules/loadExcel/migrar_data.js'); ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(2) == 'reporte_bitacoras' && $this->session->userdata('role') == 'lider'): ?>
    <script src="<?= base_url("assets/js/modules/reporte_bitacoras.js?v=". validarEnProduccion()) ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
<?php endif ?>

<?php if ($this->session->userdata('role') == 'lider'): ?>
    <script>

        function abrir_reportes(){
            if (click) {
                $('#exportar_reportes').css({'background': '#084C6F',
                    'color': 'white'
                    });
                $('#reportesExport').show(200);
                clickreportes = false;
                abrirOcerrarReportesNormales();
                click = false;
            } else {
                $('#exportar_reportes').css({'background': 'white',
                    'color': '#084C6F'
                    });
                $('#reportesExport').hide(200);
                click = true;
            }
            // $('#ReportesMain').hide(200);
        }
        function abrirOcerrarReportesNormales() {
            if (clickreportes) {
                $('#menuReportes').css({'background': '#084C6F',
                    'color': 'white'
                    });
                $('#ReportesMain').show(200);
                clickreportes = false;
                click = false;
                abrir_reportes();
            } else {
                $('#menuReportes').css({'background': 'white',
                    'color': '#084C6F'
                    });
                $('#ReportesMain').hide(200);
                clickreportes = true;
            }
            // $('#reportesExport').hide(200);
         }
        $('#menuReportes').click(abrirOcerrarReportesNormales)


    </script>
<?php endif ?>




<script src="<?= base_url("assets/js/utils/app.global.js?v=1.2") ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/js/utils/app1.global.js?v=1.2") ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/js/utils/app.dom.js") ?>" type="text/javascript"></script>

<?php if ($this->uri->segment(1) == 'Consultas_simples' && $this->uri->segment(2) =='creacion_ticket'):?>
  <script src="<?= base_url("assets/js/existentes.js?v" . validarEnProduccion()) ?>"></script>
  <script src="<?= base_url("assets/js/creacion_ticket.js?v" . validarEnProduccion()) ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>

<?php endif ?>

<?php if ($this->uri->segment(1) == 'Consultas_simples' && $this->uri->segment(2) =='prueba'):?>
  <script src="<?= base_url("assets/js/existentes.js") ?>"></script>
  <script src="<?= base_url("assets/js/creacion_ticket.js") ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>

<?php endif ?>


<?php if ($this->uri->segment(1) == 'Editarpuntos' && $this->uri->segment(2) =='puntos'):?>
    <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>
    <script src="<?= base_url("assets/js/modules/editar_puntos.js?v" . validarEnProduccion()) ?>"></script>
<?php endif ?>


<!-- COLVIs PARA MOSTRAR U OCULTAR COLUMNAS -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script> -->

<?php if ($this->uri->segment(1) == 'Welcome' && $this->uri->segment(2) =='showUsers'):?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/ConfigTableUsers.js'); ?>"></script>
<?php endif ?>
</body>
</html>
