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
<script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
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
<script src="<?= base_url("assets/plugins/jquery.mask.js") ?>" type="text/javascript"></script>


<!--**********************************************FIN NO TOUCH   END DON'T TOCAR********************************************** -->

<script src="<?= base_url("assets/js/utils/app.global.js?v=1.2") ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/js/utils/app1.global.js?v=1.2") ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/js/utils/app.dom.js") ?>" type="text/javascript"></script>


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
