<?php
require 'includes/conexion.php';

session_start();
if (@!$_SESSION['idUsuario']) {
	header("Location:index.php");
}elseif ($_SESSION['tipo_usr_idtipo_usr']==1) {
	header("Location:sesion.php");
}
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
    <script src="peticionAdmin.js"></script>
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
                        <?php
                        if(isset($_SESSION['idUsuario'])){
                                echo ' <li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>';
                                echo ' <li><a href="sesion.php">Perfil</a></li> ';
                        }
                            else{
                                echo ' <li><a href="ini.php"><span class="glyphicon glyphicon-user"></span> Mi Cuenta</a></li>';
                            }
                    ?>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

		<?php
		////Obteniendo registros de la base de datos a traves de una consulta SQ
		$consulta = "SELECT nomPro, ipcion, cst, img FROM producto ORDER BY idP";
		$resultado = $mysqli->query($consulta);
		while($row=mysqli_fetch_array($resultado)){
		echo "nombre: ".$row[0]."<br> ";
		echo "Descripcion: ".$row[1]."<br>";
		echo "costo: ".$row[2]."<br>";
		echo "Imagen: ".$row[3]."<br><br>";
		//echo "<img src='<?php echo $row['$img']";
		}
		?>

		<?php
								$id=$_GET['id'];
								$sql = "SELECT * FROM nomPro, ipcion, cst, img WHERE idP='$id'";
										$result = mysql_query($sql);
										while ($registro = mysql_fetch_array($result)){ ?>

										<div id="cuadro-productos">
										<table>
										<tr><td rowspan="3"><img src="productos/<?php echo $registro['imagen'];?>"></td>
									 <td><p class="PortatilImagen"><?php echo $registro['nombre'];?></p></td></tr>
											<tr><td><p class="descripcionPortatil"><?php echo $registro['descripcion'];?></p></td></tr>
											<tr><td><p class="precioPortatil"> $ <?php echo $registro['precios'];?></p></td></tr>
										</table>
										</div>
						<?php }?>


<div class="container-fluid">
		<hr>
		<!-- Footer -->
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
    <!-- /.container -->
</html>
