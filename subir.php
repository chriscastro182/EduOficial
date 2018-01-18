<?php
require 'includes/conexion.php';
session_start();
if (@!$_SESSION['idUsuario']) {
	header("Location:index.php");
}elseif ($_SESSION['tipo_usr_idtipo_usr']==2) {
	header("Location:sesion.php");
}
$id = isset($_GET['id']) ? $_GET['id'] : '';
//$id = $_GET['id'];

	$sql = "SELECT * FROM producto WHERE idP = '$id'";

	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
    $idTipP = $row['Tipo_Producto_idTipo_Producto'];
?>
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
    <link href="css/loginFrontend.css" rel="stylesheet">
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
									<li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>
									<li><a href="perfil.php">Perfil</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Prodcuto -->
        <div class="main">
          <label for=""><h2><strong>Ingresar Nuevo Producto</strong></h2></label>
            <form class="form-horizontal" action="valida_foto.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomPro" class="col-sm-5 control-label">Nombre del producto</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nomPro" name="nomPro" placeholder="Nombre" required />
                    </div>
                </div>
                <div class="form-group">
                  <label for="img" class="col-sm-5 control-label">Imagen</label>
                  <div class="col-sm-7">
                  <input type="file" class="form-control" id="img" name="img"></td>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cst" class="col-sm-5 control-label">Costo del producto</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="cst" name="cst" placeholder="Costo" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="ipcion" class="col-sm-5 control-label">Descripción</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="ipcion" name="ipcion" placeholder="Descripción" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="stock" class="col-sm-5 control-label">Stock</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" required />
                    </div>
                </div>
								<?php
                  $sqlTip = "SELECT * FROM tipo_producto ORDER BY tipo_producto.idTipo_Producto ASC";
                    $resul = $mysqli->query($sqlTip);
                $sqlNomTip = "SELECT * FROM tipo_producto WHERE '$idTipP'";
                    $resu = $mysqli->query($sqlNomTip);
                    $tipo=$resu->fetch_assoc()

                    ?>
                    <div class="form-group">
                        <label for="stock" class="col-sm-2 control-label">Categorías: </label>
                        <div class="col-sm-10">
                            <select class="form-control" id="tipoProducto" name="tipoProducto">
                         <option value="<?php echo $tipo['idTipo_Producto'];?>"> <?php echo $tipo['nomTip'];?> </option>
                          <?php while($rows=$resul->fetch_assoc()){ ?>
                          <option value="<?php echo $rows['idTipo_Producto']; ?>"> <?php echo $rows['nomTip']; ?></option>

                          <?php } ?>
                        </select>
                        </div>
                    </div>
                <td colspan="2" align="center" bgcolor="skyblue">
									<input type="submit" name="enviar" value="enviar"></td>
            </form>
        </div>
        <script>
      $("#file-3").fileinput({
      showCaption: false,
      browseClass: "btn btn-primary btn-lg",
      fileType: "any"
      });
      </script>
      </body>
      </html>
