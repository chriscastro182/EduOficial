<?php
require 'includes/conexion.php';
session_start();
$id = $_SESSION['idUsuario'];
$sql = "SELECT * FROM usuario WHERE idUsuario = '$id'";
  $resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="Image\edut.ico" />
    <title>Edutronika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .navbar {
          margin-bottom: 5px;
          border-radius: 0;
      }
      .jumbotron {
          margin-bottom: 0;
      }
      .center1 {
          position: absolute;
          left: 0;
          top: 5%;
          width: 100%;
          text-align: center;
          font-size: 16px;
          z-index: 1;
          color: #FFFFFF;
      }
      .tblanc {
          color: #FFFFFF;
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


                        if(isset($_SESSION['u_usuario'])){
                                echo ' <li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>';
                                echo ' <li><a href="perfil.php">Perfil</a></li> ';
                        }
                            else{
                                header("Location: index.php");
                            }
                    ?>
								-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <div class="container">
            <div class="row">
                <?php

                if($_SESSION['tipo_usr_idtipo_usr']==1){
                        echo '<H1> Hola ';
                        echo $_SESSION['nomUsr'];
                        echo ', Bienvenido Administrador </H1>';
                        echo "<br><a href=\"AdminProductos.php\" class=\"btn btn-primary\">Modificar productos</a>";

                }
                    else{
                        echo '<H1> Hola ';
                        echo $_SESSION['nomUsr'];
                    }
                ?>
            </div>

            <form class="form-horizontal" method="POST" action="actualizar_cliente.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomUsr" name="nomUsr" placeholder="Nombre" value="<?php echo $row['nomUsr']; ?>" required>
                    </div>
                </div>
                <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>" />
                <input type="hidden" id="crr" name="crr" value="<?php echo $row['crr'] ?>" />
                <div class="form-group">
                    <label for="apellidosUsr" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellidosUsr" name="apellidosUsr" placeholder="Apellidos" value="<?php echo $row['apellidosUsr']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="sru" class="col-sm-2 control-label">Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sru" name="sru" placeholder="Usuario" value="<?php echo $row['sru']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="tl" name="tl" placeholder="Telefono" value="<?php echo $row['tl']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion" class="col-sm-2 control-label">direccion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ccion" name="ccion" placeholder="Direccion" value="<?php echo $row['ccion']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="perfil.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="container-fluid text-center">
					<div id="contenedor">
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
    </body>
</html>
