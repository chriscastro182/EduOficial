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
    <h2>Categorías</h2>
    <p><strong>Nota:</strong> El siguiente material es proporcionado por parte de la empresa Edutronika con la finalidad de compartir el conocimiento. </p>
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Drivers</a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="col-sm-4 col-md-4 col-lg-4" style="align:center;">
              <a href="descargas/MasterPROG_Software.rar" download="driversMasterProg.rar">
                <img border="0" src="fonts/dscrg.png" alt="drviersMP.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="50%" >
                  <h4>Controladores para el MasterProg en S.O. Windows</h4>
                  <p>Arqutecturas x86 y x64</p>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" >
              <a href="descargas/ArduinoNANO.rar" download="ArduinoNANO.rar">
                <img border="0" src="fonts/dscrg2.ico" alt="drviersMP.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="50%" >
                  <h4>Controladores para el Arduino Nano en S.O. Windows</h4>
                  <p>(Genérico) x86</p>
                </a>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Manuales y Fichas técnicas </a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="col-sm-4 col-md-4 col-lg-4" style="align:center;">
              <a href="descargas/Manuales/MPASM Assembler Manual.pdf" download="ManualAssembler.pdf">
                <img border="0" src="fonts/btn3dl.png" alt="manual assembler.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="60%" >
                  <h4>Manual de Assembler</h4>
                  <p>(Manuales)</p>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" >
              <a href="descargas/Manuales/MPLAB IDE QUICK START GUIDE.pdf" download="MPLAB IDE QUICK START GUIDE.pdf">
                <img border="0" src="fonts/btn3dl.png" alt="drviersMP.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="60%" >
                  <h4>MP LAB Guía rápida</h4>
                  <p>(Manuales)</p>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" >
              <a href="descargas/Manuales/MPLAB IDE.pdf" download="MPLAB IDE.pdf">
                <img border="0" src="fonts/btn3dl.png" alt="drviersMP.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="60%" >
                  <h4>MPLAB IDE</h4>
                  <p>(Manuales)</p>
                </a>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Software</a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="col-sm-4 col-md-4 col-lg-4" style="align:center;">
              <a href="descargas/Software/Proteus.rar" download="Proteus.rar">
                <img border="0" src="fonts/btn4dl.png" alt="manual assembler.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="60%" >
                  <h4>Proteus</h4>
                  <p>(Instalador)</p>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" >
              <a href="descargas/Software/MPLAB.rar" download="MPLAB.rar">
                <img border="0" src="fonts/btn4dl.png" alt="drviersMP.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="60%" >
                  <h4>MP LAB </h4>
                  <p>(Instalador)</p>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" >
              <a href="descargas/Software/PIC-Simulator.rar" download="PIC-Simulator.rar">
                <img border="0" src="fonts/btn4dl.png" alt="drviersMP.rar" style="display: block;  margin-left: auto;  margin-right: auto;" width="60%" >
                  <h4>PIC - Simulator</h4>
                  <p>(Instalador)</p>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- old content -->

</div>
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
