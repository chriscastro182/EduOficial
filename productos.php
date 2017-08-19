<?php
require 'includes/conexion.php';
$sql = "SELECT * FROM producto ORDER BY idP";
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
    <meta name="author" content="C & D Software">

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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
          <div class="col-md-2">
            <p class="lead">Es ingeniería al límite</p>
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Categorías</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                  <?php
                  $sqlTip = "SELECT * FROM tipo_producto";
                    $resul = $mysqli->query($sqlTip);
                    while($rows = $resul->fetch_array(MYSQLI_ASSOC)){
                    ?>
                    <ul  class="nav nav-pills nav-stacked" style="text-align: center;">

                      <li><a href="productosFiltro.php?id=<?php echo $rows['idTipo_Producto']; ?>">
      									<!-- <span class="badge pull-right">42</span> -->
      									<?php echo $rows['nomTip']; ?></a>
      								</li>
      							</ul>
                  <?php } ?>
                </div>
            </div>
          </nav>
        </div>

          <?php
					while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
						?>
            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo $row['img'];?>" alt="">
                    <?php $id=$row['idP']; ?>
                    <a href="#<?php echo $id;?>" class="btn btn-info btn-md" data-toggle="modal">Ampliar</a>

                    <div class="modal fade" id="<?php echo $id; ?>">
                        <div class="modal-dialog">
                          <?php
                          $sql1 = "SELECT * FROM producto WHERE idP = '$id'";
                          	$resultadoPOP = $mysqli->query($sql1);
                          	$rowP = $resultadoPOP->fetch_array(MYSQLI_ASSOC);
                						?>
                            <div class="modal-content">
                                <!-- Encabezado de la ventana -->
                                <div class="modal-header">
                                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3 class="modal-tittle">
                                        <?php echo $rowP['nomPro'];?>
                                    </h3>
                                </div>
                                <!-- Contenido de la ventana -->
                                <div class="modal-body">
                                    <p>
                                      <h4>  <?php echo $rowP['ipcion'];?>
                                      </h4>
                                    </p>
                                    <img src="<?php echo $rowP['img'];?>" alt="">
                                </div>
                                <!-- Pie de pagina de la ventana -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="caption">
                    <!--    <h4 class="pull-right">$<?php echo $row['cst'];?></h4> -->
                        <h4><a href="#"><?php echo $row['nomPro'];?></a>

                        </h4>
                        <p><?php echo $row['ipcion'];?> </p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">12 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
						</div>
						<?php } ?>

          </div>
        </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->

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

  </div>
    <!-- /.container -->
</body>

</html>
