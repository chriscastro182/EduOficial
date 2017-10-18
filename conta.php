<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="Image\edut.ico"/>
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
      html
      {
          position: relative;
          min-height: 100%;
      }
        body
        {
            margin: 0 0 65px;
        }

  </style>
</head>

<body>

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
                    </ul>
                        </div>
            <!-- /.navbar-collapse -->
            </div>
        <!-- /.container -->
        </nav>

    <div class="row">
      <div class="col-sm-5">
        <h1>Contáctanos </h1>
          <div class="responsive">
            <form method="post" action="enviar.php">
              <div class="form-group">
                <label for="usr">Nombre Completo:</label>
                <input type="text" class="form-control" placeholder="Escribe tu nombre" id="nom" maxlength="50"  autocomplete autofocus required>
              </div>
              <div class="form-group">
                <label for="usr">Celular:</label>
                <input type="text" class="form-control" placeholder="Teléfono" id="cel" maxlength="15" placeholder="Telefono" autocomplete autofocus required>
              </div>
              <div class="form-group">
                <label for="usr">Correo Electronico:</label>
                <input type="text" class="form-control" placeholder="micorreo@correo.com" id="corr" maxlength="50"  autocomplete autofocus required>
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="usr">Asunto:</label>
                <input type="text" class="form-control" placeholder="Asunto del correo electrónico" id="asunto" maxlength="30"  autocomplete autofocus required>
              </div>
                <div class="form-group">
                  <label for="comment">Comentarios:</label>
                  <textarea class="form-control" rows="5" id="comentarios"></textarea>
                </div>
                <a href="enviar.php" class="btn btn-default">Enviar comentarios </a>
            </form>
            <div class="well well-sm">
              <br>Email: edutronika@gmail.com<br>
              Tel:017717912375<br>
              Cel:0447717461128<br>
              Dirección: Calle San Antonio #8
              Col. Carboneras. A espaldas del
              Polideportivo de la UAEH</br>
              Horario de servicio: Lunes a Viernes de 10:00am a 7:00pm<br>
            </div>
          </div>
      </div>
      <div class="col-sm-7">
        <h1>Conoce nuestra ubicación</h1>

              <div class="8u 12u$(medium)">
                <p align="center" class="Estilo1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.000091744856!2d-98.7087336853925!3d20.092283024461956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDA1JzMyLjIiTiA5OMKwNDInMjMuNiJX!5e0!3m2!1ses!2smx!4v1447988564653" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

                </p>
              </div>

      </div>
    </div>
    <br>
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
