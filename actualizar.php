<?php
    require 'includes/conexion.php';
    $idP = $_POST['id'];
    $nomPro = $_POST['nomPro'];
    $img = $_POST['img'];
    $cst = $_POST['cst'];
    $ipcion = $_POST['ipcion'];
    $stock = $_POST['stock'];
    $tipoProducto = $_POST['tipoProducto'];

$sql = "UPDATE producto SET idP='$idP',nomPro='$nomPro',img='$img',cst='$cst',ipcion='$ipcion'
,stock='$stock',Tipo_Producto_idTipo_Producto='$tipoProducto' WHERE idP = '$idP'";
//echo"Query modificación".$sql;
 $resultado = $mysqli->query($sql);
?>

    <html>
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administracion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
    <div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="AdminProductos.php" class="btn btn-primary">Regresar a modificar productos</a>
                    <a href="index.php" class="btn btn-info">Ir al inicio</a>
					
				</div>
			</div>
		</div>
    </body>

    </html>