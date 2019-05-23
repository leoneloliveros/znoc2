<!DOCTYPE html>
<html >
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta charset="UTF-8">
        <title>ZOLID ON DILO LOGIN</title>
        <!--   ICONO PAGINA    -->
        <link rel="icon" href="<?= base_url('assets/images/title_icon.png'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.css'); ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/reset.min.css'); ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/stylelogin.css'); ?>">
        <script type="text/javascript" src="<?= base_url('assets/plugins/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>
        <script type="text/javascript" charset="utf-8" async defer>
            //Funcion para mostrar mensaje de error de validacion de datos
            function showMessage(tit = "Error de autentificación!", text = "Por favor verificar los datos", tipo = 'error') {
                swal({
                    title: tit,
                    text: text,
                    type: tipo,
                    confirmButtonText: "Ok"
                });
            }
        </script>
        <meta name="google-site-verification" content="WhAcdVW7RfnExt7-QUmS5OBhTaa-qhM-PDL5p6USSAA" />
    </head>
    <body>
        <div id="warp">
            <H2></H2>
            <form id="formu" method="post">
                <div class="admin">
                    <div class="rota">
                        <h1>ZOLID</h1>
                        <input id="id_usuario" type="number" name="username" value="" placeholder="# Identificación" required/><br/>
                        <input id="password" type="password" name="contrasena" value="" placeholder="Password" required/>

                    </div>
                </div>
                <div class="cms">
                    <div class="roti">
                        <h1>ZTE</h1>
                        <button type="submit" class="button" id="valid" name="valid" onclick = "this.form.action = '<?= base_url('User'); ?>'">Login</button><br />

             <p><a href="#">ZTE</a> <a>And</a> <a href="#">ZTE Colombia</a></p>

                    </div>
                </div>
            </form>
        </div>

        <?php
        if (isset($mensaje)) {
            echo "<script type='text/javascript'>showMessage('$mensaje','$texto','$tipo');</script>";
        }
        ?>
        <?php $msj = $this->session->flashdata('msj'); ?>
        <!--   ANIMACION DE LOGIN   -->
        <script src="<?= base_url('assets/js/index.js'); ?>"></script>
    </body>
</html>
