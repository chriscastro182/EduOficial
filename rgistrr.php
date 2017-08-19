<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="Image/edut.ico"/>
    <title>Edutronika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
	  <link href="css/loginFrontend.css" rel="stylesheet">
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

      footer {
          background-color: #040739;
          position: fixed;
          width: 100%;
          height: auto;
          bottom: 0px;
      }
  </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Edutronika</a>
            </div>
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
                                echo ' <li><a href="sesion.php">Perfil</a></li> ';
                        }
                            else{
                                echo ' <li><a href="ini.php"><span class="glyphicon glyphicon-user"></span> Mi Cuenta</a></li>';
                            }
                    }
                    ?>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- formulario registro -->

        <div class="main">
            <form action="ok.php" id="formlg" method="POST">
				<label style="font-size:14pt"><b>Ingresa tu Nombre</b></label>
                <input type="text" name="nom" placeholder="Nombre" required />

				<label style="font-size:14pt"><b>Ingresa tus apellidos</b></label>
                <input type="text" name="ape" placeholder="Apellidos" required />

				<label style="font-size:14pt"><b>Ingresa tu Usuario</b></label>
                <input type="text" name="usr" placeholder="Usuario" required />

				<label style="font-size:14pt"><b>Ingresa tu Telefono</b></label>
                <input type="text" name="fon" placeholder="telefono" required />

				<label style="font-size:14pt"><b>Ingresa tu direccion</b></label>
                <input type="text" name="dirr" placeholder="direccion" required />

				<label style="font-size:14pt"><b>Ingresa tu Email</b></label>
                <input type="text" name="eml" placeholder="tuemail@email.com" required />

				<label style="font-size:14pt"><b>Ingresa tu Contraseña</b></label>
                <input type="password" name="pass" placeholder="Contraseña" required />

				<label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      			<input type="password" name="rpass" class="form-control" placeholder="repite contraseña" />
                <input type="submit" name="botonlg" value="Registrate" />
            </form>
        </div>

</div>

<!--Fin formulario registro -->



<footer class="container-fluid text-center">
        <div class="tblanc">
            <h4>Edutronika 2017</h4>
            <p>Todos los derechos reservados.</p>
            <form class="form-inline">
              <p>Desarrollado por:
                <br>
                C&D Software</p>
            </form>
        </div>
    </footer>

    </body>
    </html>
