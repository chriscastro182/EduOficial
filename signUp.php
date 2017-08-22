<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="Image\edut.ico"/>
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
                                echo ' <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Mi Cuenta</a></li>';
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
        <form class="form-horizontal" action="register.php" id="formlg" method="POST">
            <div class="form-group">
                <label for="nom" class="col-sm-5 control-label">Ingresa tu Nombre</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nombre" required />
                </div>
            </div>
            <div class="form-group">
                <label for="ape" class="col-sm-5 control-label">Ingresa tus Apellidos </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ape" name="ape" placeholder="Apellidos" required />
                </div>
            </div>
            <div class="form-group">
                <label for="usr" class="col-sm-5 control-label">Ingresa tu Usuario</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="usr" name="usr" placeholder="Usuario" required />
                </div>
            </div>
            <div class="form-group">
                <label for="fon" class="col-sm-5 control-label">Ingresa tu Telefono</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fon" name="fon" placeholder="telefono" required />
                </div>
            </div>
            <div class="form-group">
                <label for="dirr" class="col-sm-5 control-label">Ingresa tu direccion</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="dirr" name="dirr" placeholder="direccion" required />
                </div>
            </div>
            <div class="form-group">
                <label for="eml" class="col-sm-5 control-label">Ingresa tu Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" id="eml" name="eml" placeholder="tuemail@email.com" required />
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="col-sm-5 control-label">Contraseña</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required />
                </div>
            </div>
            <div class="form-group">
                <label for="rpass" class="col-sm-5 control-label">Repite tu contraseña</label>
                <div class="col-sm-7">
                    <input type="password" name="rpass" id="rpass" class="form-control" placeholder="repite contraseña" />
                </div>
            </div>
            <input type="submit" name="botonlg" value="Registrate" />
        </form>
    </div>


    <!--Fin formulario registro -->



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
