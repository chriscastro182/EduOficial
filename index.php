<?php
require 'includes/conexion.php';
$sql = "SELECT * FROM producto WHERE idP = 5";
$sql1 = "SELECT * FROM producto WHERE idP = 13";
$sql2 = "SELECT * FROM producto WHERE idP = 170";
$sql3 = "SELECT * FROM producto WHERE idP = 83";
$sql4 = "SELECT * FROM producto WHERE idP = 37";
$sql5 = "SELECT * FROM producto WHERE idP = 66";
	$resultado = $mysqli->query($sql);
	$resultado1 = $mysqli->query($sql1);
	$resultado2 = $mysqli->query($sql2);
	$resultado3 = $mysqli->query($sql3);
	$resultado4 = $mysqli->query($sql4);
	$resultado5 = $mysqli->query($sql5);
	$row = $resultado->fetch_assoc();
	$row1 = $resultado1->fetch_assoc();
	$row2 = $resultado2->fetch_assoc();
	$row3 = $resultado3->fetch_assoc();
	$row4 = $resultado4->fetch_assoc();
	$row5 = $resultado5->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="Image/edut.ico"/>
    <title> Edutronika</title>
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
            <!--    <ul class="nav navbar-nav navbar-right">
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
									</ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- <p class="lead">Es ingeniería al límite</p> -->
                <img src="image/perfilEdu.jpg" class="img-thumbnail">

                <h5>
                <p class="text-justify">
									EDUTRONIKA nace hace más de 10 años como un proyecto personal del Ing. Fermín Enrique Zamora Zarco.
									<br><br>
								El nombre de EDUTRONIKA lo definió al ver la necesidad de obtener conocimiento para poder desarrollar proyectos
								 y prácticas por parte de los técnicos, ingenieros, profesionales de la electrónica y ramas afines, así como
								 profesores y estudiantes, principalmente, quienes eran dirigidos por el mismo ingeniero Fermín.
								<br><br>
								Desde muy pequeño, Fermín Enrique Zamora Zarco fue autodidacta y dedicó mucho tiempo a la investigación,
								con conocimientos de electricidad, electrónica y demás.
								<br><br>
								Fruto de su arduo trabajo surge el programador conocido como MASTER PROG. EL ORIGINAL, el cual, desde su
								comienzo, ha tenido nombres diferentes como:
								<br><br>
								PIC-PROG, que fue uno de los primeros programadores elaborados y diseñados con la ingeniería de EDUTRONIKA, hasta llegar a ser el MASTER PROG actual, el cual está bien posicionado en México y en otros países de América Latina. Este programador fue basado en MICROCHIP y fue la inspiración y resultado de años de trabajo por parte del Ing. Fermín.
            </div></h5></p>
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="image/Banner1-Edu.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/Banner2-Edu.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/Banner3-Edu.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
													<img src="<?php echo $row['img'];?>" alt="">
													<div class="caption">
															<!-- <h4 class="pull-right">$<?php echo $row['cst'];?></h4> -->
															<h4><a href="#"><?php echo $row['nomPro'];?></a>
															</h4>
															<p><?php echo $row['ipcion'];?> </p>
													</div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $row1['img'];?>" alt="">
                            <div class="caption">
                              <!--  <h4 class="pull-right">$<?php echo $row1['cst'];?></h4> -->
                                <h4><a href="#"><?php echo $row1['nomPro'];?></a>
                                </h4>
                                <p><?php echo $row1['ipcion'];?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
													<img src="<?php echo $row2['img'];?>" alt="">
													<div class="caption">
														<!--  <h4 class="pull-right">$<?php echo $row2['cst'];?></h4> -->
															<h4><a href="#"><?php echo $row2['nomPro'];?></a>
															</h4>
															<p><?php echo $row2['ipcion'];?> </p>
													</div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
													<img src="<?php echo $row3['img'];?>" alt="">
													<div class="caption">
														<!--  <h4 class="pull-right">$<?php echo $row3['cst'];?></h4> -->
															<h4><a href="#"><?php echo $row3['nomPro'];?></a>
															</h4>
															<p><?php echo $row3['ipcion'];?> </p>
													</div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
													<img src="<?php echo $row4['img'];?>" alt="">
													<div class="caption">
														<!--  <h4 class="pull-right">$<?php echo $row4['cst'];?></h4> -->
															<h4><a href="#"><?php echo $row4['nomPro'];?></a>
															</h4>
															<p><?php echo $row4['ipcion'];?> </p>
													</div>
                        </div>
                    </div>

                            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
													<img src="<?php echo $row5['img'];?>" alt="">
													<div class="caption">
														<!--  <h4 class="pull-right">$<?php echo $row5['cst'];?></h4> -->
															<h4><a href="#"><?php echo $row5['nomPro'];?></a>
															</h4>
															<p><?php echo $row5['ipcion'];?> </p>
													</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

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
    <!-- /.container -->
</body>

</html>
