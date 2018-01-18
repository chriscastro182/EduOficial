<?php
require 'includes/conexion.php';
$id = $_GET['id'];

$sql = "SELECT * FROM producto WHERE Tipo_Producto_idTipo_Producto = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="C&D Software">
		<link rel="icon" type="image/ico" href="Image\edut.ico"/>
    <title>Edutronika</title>
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
								<!--<ul class="nav navbar-nav navbar-right">
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
						</ul>-->
            </div>
        </div>
    </nav>

    <!-- Page Content -->

		<div class="container">
				<div class="page-header">
					<h1>Edutronika <small class="tittles-pages-logo">Es ingeniería al límite</small></h1>
				</div>
				<br><br>
				<div class="row">
						<div class="col-xs-12">
								<ul id="store-links" class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="productos.php" >Todos los productos</a></li>
									<li role="presentation" class="dropdown active">
										<a href="#categorias" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Categorías <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
											<!-- ==================== Lista categorias =============== -->
											<?php
		                  $sqlTip = "SELECT * FROM tipo_producto";
		                    $resul = $mysqli->query($sqlTip);
		                    while($rows = $resul->fetch_assoc()){
													$activo = "";
													if($rows['idTipo_Producto']== $id)
													{
														$activo="class=\"active\"";
													}
		                    ?>
		                    <ul  class="nav nav-pills nav-stacked" style="text-align: center;">

		                      <li <?php echo $activo ?>><a href="productosFiltro.php?id=<?php echo $rows['idTipo_Producto']; ?>">
		      									<!-- <span class="badge pull-right">42</span> -->
		      									<?php echo $rows['nomTip']; ?></a>
		      								</li>
		      							</ul>
		                  <?php } ?>

											<!-- ==================== Fin lista categorias =============== -->
										</ul>
									</li>
								</div>
							</div>
							<?php
							foreach ($resultado as $row){

							//while($row = $resultado->fetch_assoc()){
								?>
		            <div class="col-sm-3 col-lg-3 col-md-3">
		                <div class="thumbnail">
		                    <img src="<?php echo $row['img'];?>" alt="">
												<?php $id=$row['idP']; ?>
		        <div class="" id="<?php echo $id; ?>">
		        </div>
		                    <div class="caption">
		                      
		                        <h4><a href="#"><?php echo $row['nomPro'];?></a>
														</h4>
		                        <p><?php echo $row['ipcion'];?> </p>
		                    </div>

		                </div>
								</div>
								<?php } ?>
		          </div>
    <!-- /.container -->
    <div class="container">
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
