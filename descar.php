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
                  <li><a href="#"><span class="glyphicon glyphicon-search"></span></a><li>
                     <?php
                    if(session_start());{
                        if(isset($_SESSION['u_usuario'])){
                                echo ' <li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>';
                                echo ' <li><a href="sesion.php">Perfil</a></li> ';
                        }
                            else{
                                echo ' <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>';
                                echo ' <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>';
                            }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

<div id="main" class="wrapper style1">
  <div class="container">
    <header class="major">
      <h1>Descargas</h1>
    </header>
  <h2>Drivers </h2>
    <div class="row" style="text-align:center">
      <div class="col-sm-3">
        <a href="descargas/MasterPROG_Software.rar" download="driversMasterProg.rar">
          <img border="0" src="fonts/dscrg.png" alt="drviersMP.rar" width="100%" height="100%">
            <h4>Controladores para el MasterProg en S.O. Windows</h4>
            <p>Arqutecturas x86 y x64</p>
          </a>
      </div>
         <div class="col-sm-3">
        <a href="descargas/ArduinoNANO.rar" download="ArduinoNANO.rar">
          <img border="0" src="fonts/dscrg2.ico" alt="drviersMP.rar" width="100%" height="100%">
            <h4>Controladores para el Arduino Nano en S.O. Windows</h4>
            <p>(Genérico) x86</p>
          </a>
      </div>
    </div>
  </div>
</div>
  </body>
  </html>
