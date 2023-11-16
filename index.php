<?php
   ob_start();
   session_start();
   require_once('inc/config.php');
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <title>Cotowers 3.0 Online - Servidor Clásico v5095</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/fa-regular.css">
        <link rel="stylesheet" type="text/css" href="fonts/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="css/slicknav.css">
        <link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

    </head>

    <body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="215786008463229"
  logged_in_greeting="¡Hola! Bienvenido a Cotowers."
  logged_out_greeting="¡Hola! Bienvenido a Cotowers.">
</div>

            <?php
		$id = ($_GET['id']) ? $_GET['id'] : $_POST['id'];
		switch($id)
		{
		default:
		require 'pages/inicio.php';
		break;

		case 'registro':
		require 'pages/registro.php';
		break;

		case 'descargar':
		require 'pages/descargar.php';
		break;

		case 'comprar':
		require 'pages/comprar.php';
		break;

		case 'sesion':
		require 'pages/sesion.php';
		break;

		case 'perfil':
		require 'pages/perfil.php';
		break;

		case 'clan':
		require 'pages/clan.php';
		break;

		case 'eventogm':
		require 'pages/eventogm.php';
		break;

		case 'cerrar':
		require 'pages/cerrar.php';
		break;

		case 'olvide':
		require 'pages/olvide.php';
		break;

		case 'panel':
		require 'pages/panel.php';
		break;

		case 'email':
		require 'pages/email.php';
		break;

		case 'datos':
		require 'pages/datos.php';
		break;

		case 'eliminado':
		require 'pages/eliminado.php';
		break;

		case 'topjugador':
		require 'pages/topjugador.php';
		break;

		case 'torneospk':
		require 'pages/torneospk.php';
		break;

		case 'puntos':
		require 'pages/puntos.php';
		break;

		case 'sorteo':
		require 'pages/sorteos.php';
		break;

		case 'puntero':
		require 'pages/puntero.php';
		break;
		}
            ?>

                <footer class="footer-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-text text-center">
                                    <ul class="social-icon">
                                        <li>
                                            <a class="facebook" href="https://www.facebook.com/groups/Cotowers/"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                    <p>Copyright © 2018 | Cotowers 3.0 Online</p>
                                    <ul class="nav nav-inline justify-content-center ">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Acerca de Cotowers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terminos y Condiciones</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Preguntas Frecuentes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#https://www.facebook.com/CarlosG93">Contacto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <script src="js/jquery-min.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.countdown.min.js"></script>
                <script src="js/jquery.counterup.min.js"></script>
                <script src="js/jquery.parallax.js"></script>
                <script src="js/waypoints.min.js"></script>
                <script src="js/wow.js"></script>
                <script src="js/owl.carousel.min.js"></script>
                <script src="js/jquery.slicknav.js"></script>
                <script src="js/nivo-lightbox.js"></script>
                <script src="js/jquery.slicknav.js"></script>
                <script src="js/main.js"></script>
                <script src="js/form-validator.min.js"></script>
                <script src="js/map.js"></script>
                <script src="fonts/fa-regular.js"></script>

    </body>
</html>
<?php
ob_end_flush();
?>