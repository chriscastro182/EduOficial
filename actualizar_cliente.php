<?php
    require 'includes/conexion.php';
    require 'includes/encoder.php';
    $idUsuario = $_POST['idUsuario'];
    $nomUsr = $_POST['nomUsr'];
    $apellidosUsr = $_POST['apellidosUsr'];
    $sru = $_POST['sru'];
    $crr = $_POST['crr'];
    $tl = $_POST['tl'];
    $ccion = $_POST['ccion'];

$sql = "UPDATE usuario SET nomUsr='$nomUsr',apellidosUsr='$apellidosUsr',sru='$sru', crr= '$crr'
,tl='$tl',ccion='$ccion' WHERE idUsuario = '$idUsuario'";
//echo"Query modificación".$idUsuario;
$resultado = $mysqli->query($sql);
?>
<html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="Image/edut.ico" />
    <title>Edutronika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
		#footer{
			height: 60px;
			background: #040739;
			color: #FDFDFD;
		}

  </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Edutronika</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="productos.php">Productos</a></li>
                  <li><a href="tuto.php">Tutoriales</a></li>
                  <li><a href="descar.php">Descargas</a></li>
                  <li><a href="conta.php">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(session_start());{
                        if(isset($_SESSION['u_usuario'])){
                                echo ' <li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>';
                                echo ' <li><a href="perfil.php">Perfil</a></li> ';
                        }
                            else{
                                echo ' <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>';
                                echo ' <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>';
                            }
                    }

                    ?>
                          <!--<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>-->
                    </ul>
								<!--  <ul class="nav navbar-nav navbar-right">
	                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mi Cuenta</a></li>
	                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
	                </ul>
								-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<body>
<div class="container">
            <div class="row">
                <div class="row" style="text-align:center">
                    <?php if($resultado) { ?>
                        <h3>REGISTRO MODIFICADO</h3>
                        <?php } else { ?>
                        <h3>ERROR AL MODIFICAR</h3>
                    <?php } ?>
                    <a href="perfil.php" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <hr>
            <!-- Footer -->
    				<div class="container-fluid text-center">
    					<div id="footer">
    						<h4>Edutronika 2017</h4><br>
    						<p>Todos los derechos reservados.</p>
    									<div style="clear: both"></div>
    							</div>
    							<div id="footer">
    								<p>Desarrollado por:
    									<br>
    									C&D Software</p>
    						</div>
    				</div>
      </div>
</body>
</html>
