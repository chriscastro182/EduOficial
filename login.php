<?php
require 'includes/conexion.php';

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
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
                        <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>

        <!-- frm -->
        <div class="main">
            <form action="prso.php" id="formlg" method="POST">
                <input type="text" name="usuario" placeholder="Usuario" required />
                <input type="password" name="contrasena" placeholder="Contraseña" required />
                <input type="submit" name="botonlg" value="Iniciar Sesión" />
            </form>
        </div>

        <!-- Footer -->

        <footer class="container-fluid text-center">
            <div class="tblanc">
                <h4>Edutronika 2017</h4>
                <p>Todos los derechos reservados.</p>
                <form class="form-inline">
                    <p>Desarrollado por:
                        <br> C&D Software</p>
                </form>
            </div>
        </footer>

        </div>
        <!-- /.container -->
    </body>

    </html>
