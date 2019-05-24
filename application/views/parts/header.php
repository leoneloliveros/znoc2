<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $this->load->helper('camilo');
    date_default_timezone_set("America/Bogota");
    $hoy = date("Y-m-d");
    ?>
    <!--   ICONO PAGINA    -->
    <link rel="icon" href="<?= base_url('assets/img/logo_zte.png'); ?>">
    <!-- STYLES HEADER FOOTER  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles_header.css?v=' . validarEnProduccion()); ?>">
    <!-- sidebar -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/sidebar.css?v=' . validarEnProduccion()); ?>">
    <!-- Estilos variados -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style_all.css?v=' . validarEnProduccion()); ?>">
    <!-- helper -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/helper-class.css?v=' . validarEnProduccion()); ?>">
    <!-- utils -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css?v=' . validarEnProduccion()); ?>">
    <!-- tooltip -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/tooltip.css?v=' . validarEnProduccion()); ?>">

    <!--    para poder utilizar server side dtatables-->
    
      <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>

      <script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
      <script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
      <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
      <script type="text/javascript"src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script>
      <script src="http://momentjs.com/downloads/moment.min.js"></script>
      

      
    <!--    para poder utilizar server side dtatables-->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" />

    <!-- NUEVO FAVICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="<?= base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>" /> -->

    <!-- STYLES DATATABLES CAMILO -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datatables_camilo.css?v=' . validarEnProduccion()); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styleModalCami.css?v=' . validarEnProduccion()); ?>">
    <!-- STYLES  FOOTER  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles_footer.css'); ?>">
    <!--stylos modal loadinformation-->
    <link rel="stylesheet" href="<?= base_url('assets/css/input_file/component.css?v=' . validarEnProduccion()) ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/input_file/demo.css?v=' . validarEnProduccion()) ?>" />

    <?php if ($this->uri->segment(1) == 'Mannagement' || $this->uri->segment(1) == 'User') : ?>
    <!-- STYLES  INTERRUPTOR  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/interruptor.css?v=' . validarEnProduccion()) ?>">
    <?php endif ?>
    <?php if ($this->uri->segment(1) == 'User' && $this->uri->segment(2) == 'principal' && $this->uri->segment(3) == 'ingeniero') : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ingeniero.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" type="text/css" href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <script src="<?= base_url("assets/plugins/sweetalert2/sweetalert2.all.js") ?>"></script>
    <?php endif ?>
    <!-- Estilos para modulo "Editar puntos" -->
    <?php if ($this->uri->segment(1) == 'Editarpuntos' && $this->uri->segment(2) == 'puntos') : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/editarpuntos.css?v=' . validarEnProduccion()) ?>">
    <?php endif ?>

    <?php if ($this->uri->segment(1) == 'FormulariosAcces') : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/accessFormu.css?v=' . validarEnProduccion()); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datetimepicker-master/build/jquery.datetimepicker.min.css'); ?>">
    <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js") ?>"></script>

    <?php endif ?>

    <?php if ($this->uri->segment(1) == 'Consultas_simples' && $this->uri->segment(2) =='creacion_ticket'):?>
      <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datetimepicker-master/build/jquery.datetimepicker.min.css'); ?>">
      <script src="<?= base_url("assets/plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js") ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/accessFormu.css?v=' . validarEnProduccion()); ?>">
    <?php endif ?>

    
    <?php if ($this->uri->segment(1) == 'Bitacoras') : ?>
        <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
        <link rel="stylesheet" href="<?= base_url("assets/css/bitacoras.css")?>">
    <?php endif ?>
    <?php if ($this->uri->segment(1) == 'Consultas_simples' && $this->uri->segment(2) == 'prueba') : ?>
      <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datetimepicker-master/build/jquery.datetimepicker.min.css'); ?>">
      <script src="<?= base_url("assets/plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js") ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/accessFormu.css?v=' . validarEnProduccion()); ?>">
    <?php endif ?>


    <?php if ($this->uri->segment(1) == 'Welcome' && $this->uri->segment(2) == 'showUsers') : ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/styleTableUsers.css'); ?>">
    <?php endif ?>


    <?php if ($this->uri->segment(1) == 'StartActivitiesReport' && $this->session->userdata('role') == 'lider') : ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/stylesReporteInicioActividades.css?v=' . validarEnProduccion()); ?>">
    <?php endif ?>


    <!-- stylesReporteInicioActividades -->
</head>

<body data-base="<?= base_url() ?>">

  <!-- Sidebar -->

  <div class="style_container_slide w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
      <button onclick="w3_close()" class="w3-bar-item w3-large boton_cerrar">
          <img class="logo2" src="<?= base_url('assets/img/logo2.png') ?>" alt="cerrar">
          <img src="<?= base_url('assets/img/espalda.png') ?>" alt="cerrar">
      </button>
      <a href="<?= base_url('User/principal/' . $this->session->userdata('role')) ?>" class='w3-bar-item w3-button'><i class="fa fa-home"></i> Home</a>

      <?php
      if ($this->session->userdata('role') == 'ingeniero') {
        echo "<a href='" . base_url('Check_list') . "' id='' class='w3-bar-item w3-button'><i class='fa fa-check-square-o'></i> Actividades</a>";
      } ?>
      <!-- <div id="reportesExport" style="display: none;">
      <button href="<?= base_url('Reporte/reporteonair') ?>" class="w3-bar-item w3-button" id="r_onair"><i class="glyphicon glyphicon-export"></i> Reporte OnAir</button>
      <button href="<?= base_url('Reporte/reporte_comentarios') ?>" class="w3-bar-item w3-button" id="r_comentarios"><i class="glyphicon glyphicon-export"></i> Reporte Comentarios</button>
      </div> -->

      <?php
      if ($this->session->userdata('role') == 'lider') {

          echo "<a id='' data-toggle='modal' data-target='#exampleModalCenter' class='w3-bar-item w3-button'><i class='fa fa-cloud'></i> Actualizar Data</a>";
          echo "<a href='" . base_url('Mannagement') . "' class='w3-bar-item w3-button '><i class='fa fa-line-chart'></i> ¿Cómo vamos?</a>";
          echo "<a id='' data-toggle='modal' data-target='#ModalLoadAssignments' class='w3-bar-item w3-button'> <i class='fa fa-upload'></i> Asignación Excel</a>";
          /*echo "<a href='" . base_url('Reporte/reporteonair') . "' class='w3-bar-item w3-button'><i class='glyphicon glyphicon-export'></i> Exportar reporte ONAIR</a>";
              echo "<a href='" . base_url('Reporte/reporte_comentarios') . "' class='w3-bar-item w3-button'><i class='glyphicon glyphicon-export'></i> Exportar reporte comentarios</a>";*/
          echo "<button onclick='abrir_reportes()' id='exportar_reportes' class='w3-bar-item w3-button'><i class='fa fa-caret-square-o-down'></i> Exportar reporte</button>";
          echo "<button id='menuReportes' class='w3-bar-item w3-button'><i class='fa fa-building-o fa-rotate-180' aria-hidden='true'></i> &nbsp;Reportes</button>";

          echo "<a href='" . base_url('Check_list') . "' id='' class='w3-bar-item w3-button'><i class='fa fa-check-square-o'></i> Actividades</a>";
      }
      ?>

        <?php
        if ($this->session->userdata('role') == 'lider' && $this->session->userdata('id') == 1024492738) {
            echo "<a href='" . base_url('Welcome/showUsers') . "' class='w3-bar-item w3-button'><i class='fa fa-user'></i>Usuarios</a>";
        }


        if ($this->session->userdata('role') == 'lider' && $this->session->userdata('id') == 1024492738) {
            echo "<a href='" . base_url('Editarpuntos/puntos') . "' class='w3-bar-item w3-button'><i class='fa fa-pencil'></i> Editar puntos</a>";
        }

        if ($this->session->userdata('role') == 'cliente') {
            echo "<a href='" . base_url('Reporte/reporteEscalamientos') . "' class='w3-bar-item w3-button'><i class='fa fa-area-chart'></i> Reporte 30 - 60 días Escalados - Seguimientos</a>";
            echo "<a href='" . base_url('Reporte/reporteSemanalEscSeg') . "' class='w3-bar-item w3-button'><i class='fa fa-area-chart'></i> Reporte Semanal Escalados - Seguimientos</a>";
        }
        ?>

        <?php if ($this->session->userdata('role') != 'cliente') {  ?>
            <a href="<?= base_url('Malla/crear_malla') ?>" class='w3-bar-item w3-button'><i class="fa fa-edit"></i> Malla</a>
            <a href="<?= base_url('OneCloud/show_data') ?>" class='w3-bar-item w3-button'><i class="fa fa-envelope"></i> Almacenamiento de evidencias</a>
        <?php } ?>
        <a id="a_mdl_conf_user" class="w3-bar-item w3-button "><i class="fas fa-cogs"></i> Configuración</span></a>
    </div>

    <div id="reportesExport">
        <a href="<?= base_url('Reporte/reporteonair') ?>" class="w3-bar-item w3-button" id="r_onair"><i class="glyphicon glyphicon-export"></i> Reporte On Air</a>
        <a href="<?= base_url('Reporte/reporte_comentarios') ?>" class="w3-bar-item w3-button" id="r_comentarios"><i class="glyphicon glyphicon-export"></i> Reporte Comentarios</a>
        <a href="<?= base_url('Reporte/Reporte_On_Air_Envio') ?>" class="w3-bar-item w3-button" id="r_onair_envio"><i class="glyphicon glyphicon-export"></i> Reporte On Air (Envío)</a>
        <a href="<?= base_url('Reporte/Reporte_cantinges') ?>" class="w3-bar-item w3-button" id="r_cantinges"><i class="glyphicon glyphicon-export"></i> Reporte Diario Ingenieros</a>
    </div>

    <div id="ReportesMain">
        <a href='<?= base_url('TasksReport') ?>' id="taskReportBtn" class='w3-bar-item w3-button '><i class='fa fa-tasks' aria-hidden='true'></i> Reporte de Tareas</a>
        <a href='<?= base_url('StartActivitiesReport') ?>' id="taskReporActivitiestBtn" class='w3-bar-item w3-button '><i class='fa fa-hourglass-half' aria-hidden='true'></i> Reporte de Inicio de Actividades</a>
        <a href='<?= base_url('Reporte/reporte_bitacoras') ?>' class='w3-bar-item w3-button '><i class='fa fa-list-alt' aria-hidden='true'></i> Reporte Bitacoras</a>

    </div>

    <div class="telmexVIP_header ">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid menu_nav_header">
                <div class="navbar-header">
                    <!-- Page Content -->
                        <span id="btn_menu_lateral" class="logo_header" onclick="w3_open()"><img class="m-t-10" src="<?= base_url('assets/img/LogoZTENav.png'); ?>" style="cursor:pointer;"> </span>
                </div>


                <ul class="nav navbar-nav">
                    <!-- <h2 style="color: #fff;" id="hora_actualizacion" class="style_title-nav_hora"></h2> -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Crear Bitácoras<span class="caret"></span></a>
                        <ul class="dropdown-menu logBooks">
                            <li>
    
                                <a href="<?= base_url('Bitacoras/ccihfc') ?>">
                                <h4 class="style_title-nav">CCI Y HFC</h4>
                            </a>
                            </li>
                            <li>
                                    <a href="<?= base_url('Bitacoras/frontEndBookLogs') ?>">
                                    <h4 class="style_title-nav">FrontEnd</h4>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span><b> Welcome <?php $cargo = $this->session->userdata('role'); if ($cargo == 'lider') { echo 'líder '.$this->session->userdata('name');} else { echo $this->session->userdata('role') . ' ' . $this->session->userdata('name');} ?> </b> </a></li>
                    <li><a href="<?= base_url('User/logout') ?>"><span class="glyphicon glyphicon-log-in"></span> Sign out</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container" style="min-height: 85vh;">
        <!-- modal para configuracion de password e email -->
        <div class="modales_cami">
            <div id="mdl_conf_user" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header font_modal_conf">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
                            <h3 class="modal-title" id="modal_title">Configuracion de cuenta</h3>
                        </div>

                        <div class="modal-body p-35">
                            <div class="div_mdl_conf_user_style_1">
                                <h4>¿Qué desea actualizar?</h4>
                                <h4><span>E-mail</span></h4>
                                <label class="label">
                                    <input type="checkbox" id="mail_check" class="label__checkbox mdl_config_checks" value="mail_check">
                                    <span class="label__text">
                                        <span class="label__check">
                                            <i class="fa fa-check icon"></i>
                                        </span>
                                    </span>
                                </label>
                                <h4><span>Password</span></h4>
                                <label class="label">
                                    <input type="checkbox" id="pass_check" class="label__checkbox mdl_config_checks" value="pass_check">
                                    <span class="label__text">
                                        <span class="label__check">
                                            <i class="fa fa-check icon"></i>
                                        </span>
                                    </span>
                                </label>
                            </div>


                            <form id="mdl_update_config_user" action="<?= base_url('User/Update_pass_or_email') ?>" method="POST">
                                <!-- este es el input para la validacion de la contraseña para poder cambiar lo que necesita -->
                                <div class="last_pass">
                                    <h4><span>Contraseña Actual</span></h4>
                                    <input class="form-control inputs_mdl_update" type="password" name="last_pass" id="last_pass" placeholder="Contraseña">
                                </div>
                                <!-- valida si la contraseña es la correcta -->
                                <div class="alert alert-danger alert-dismissible fade in">
                                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Danger!</strong> Primero debe ingresar su contraseña actual
                                </div>
                                <button id="valid_pss" type="button" class="title_mdl_update btn btn-success">validar</button>
                                <div class="div_mdl_conf_user_style">
                                    <div class="new_email_div">
                                        <h4><span class="title_mdl_update">Email</span></h4>
                                        <input class="form-control inputs_mdl_update" type="text" id="new_email" name="new_email" value="<?php echo $this->session->userdata('email') ?>">
                                    </div>
                                    <div class="update_data_user">
                                        <h4><span class="title_mdl_update">Nueva Contraseña</span></h4>
                                        <input class="form-control inputs_mdl_update" type="password" id="new_pass" name="new_pass" minlength="5">
                                    </div>
                                    <div class="update_data_user">
                                        <h4><span class="title_mdl_update">Confirmar Contraseña</span></h4>
                                        <input class="form-control inputs_mdl_update" type="password" id="confir_pss_mdl_confg" minlength="5">
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer font_modal_conf">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="modal_cancelar"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
                        <button type="button" form="mdl_update_config_user" class="btn btn-success" id="modal_enviar"><i class='glyphicon glyphicon-send'></i>&nbsp;enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--*********************** modal actualizacion de la data*********************** -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal-load">
                    <div class="content">
                        <form method="post" enctype="multipart/form-data" id="formFileUpload">
                            <div class="box">
                                <input type="file" name="idarchivo" id="file-5" class="inputfile inputfile-4 hidden" data-multiple-caption="{count} files selected" multiple accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
                                <label for="file-5">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" /></svg></figure> <span>Choose a file...</span>
                                </label>
                            </div>
                            <button class="btn-cami_cool2" id="btn_subir_excel-data" type="submit"> Subir Archivo <span class="glyphicon glyphicon-ok"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--*********************** modal actualizacion asignacion por excel*********************** -->
    <div class="modal fade" id="ModalLoadAssignments" tabindex="-1" role="dialog" aria-labelledby="ModalLoadAssignmentsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal-load-2">
                    <div class="content">
                        <div class="form-group">
                            <label for="fecha_programacion" class="col-md-3 control-label clr_white">Fecha Asignación:</label>
                            <div class="col-md-9 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="date" name="fecha_programacion" id="fecha_programacion" class="form-control" value="<?= $hoy; ?>" min="<?= $hoy; ?>">
                                </div>
                            </div>
                        </div><br>
                        <form method="post" enctype="multipart/form-data" id="formFileUploadAssign">
                            <div class="box">
                                <input type="file" name="idarchivo" id="file-assign" class="inputfile inputfile-4 hidden" data-multiple-caption="{count} files selected" multiple accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
                                <label for="file-assign">
                                    <figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" /></svg></figure> <span>Choose a file...</span>
                                </label>
                            </div>
                            <button class="btn-cami_cool2" id="btn_subir_asignaciones-data" type="submit"> Subir Archivo <span class="glyphicon glyphicon-ok"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('keypress', function(e) {
            var comb = e.keyCode;

            if (comb == 10 && e.ctrlKey == true) {
                $('#btn_menu_lateral').click();
            }
            (function(e, t, n) {
                var r = e.querySelectorAll("html")[0];
                r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
            })(document, window, 0);
        });
    </script>