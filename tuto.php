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
        position: static;
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
               <!-- <ul class="nav navbar-nav navbar-right">
                    <?php
                  //  if(session_start());{
                   /*     if(isset($_SESSION['u_usuario'])){
                                echo ' <li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>';
                                echo ' <li><a href="sesion.php">Perfil</a></li> ';
                        }
                            else{
                                echo ' <li><a href="ini.php"><span class="glyphicon glyphicon-user"></span> Mi Cuenta</a></li>';
                            }
                    } */
                    ?>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
                </ul> -->
            </div>
        </div>
    </nav>


    <div class="container">
          <h1>Tutoriales</h1>
          <h2 class="text-jistify">
          En este apartado encontrarás algunos videos tutoriales sobre el uso del MasterProg y otros dispositivos
          que se hallarás en nuestra tienda.
          </h2>
          <br>
    </div>

          <div class="container">
            <section class="main row">
                <article class="col-xs-12 col-sm-12 col-md-6">
                    <p class="responsive">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/6JjNCBfRIvQ" frameborder="0"></iframe>
                        <p>
                            Escribiendo en un PIC 16F887 con el programador de Edutronika "MASTER PROG".
                        </p>

                    </p>
                </article>

                <aside class="col-xs-12 col-sm-12 col-md-6">
                    <p class="text-justify">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/j2Q1IxUp-Bs" frameborder="0" allowfullscreen></iframe>
                        <p>En el presente video se muestra como compilar y programar en el PIC16F84A, utilizando el puerto ICSP e instrucciones en lenguaje C.
                            </p>
                    </p>
                </aside>
            </section>

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
