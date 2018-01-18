<?php
require 'includes/conexion.php';
session_start();
if (@!$_SESSION['idUsuario']) {
	header("Location:index.php");
}elseif ($_SESSION['tipo_usr_idtipo_usr']==2) {
	header("Location:sesion.php");
}
$id = $_GET['id'];

	$sql = "SELECT * FROM producto WHERE idP = '$id'";

	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_assoc();
  $idTipP = $row['Tipo_Producto_idTipo_Producto'];
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
				<link rel="icon" type="image/ico" href="Image/edut.ico"/>
        <title>Administracion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="js/fileinput.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h3 style="text-align:center">MODIFICAR ARTÍCULO</h3>
            </div>
            <div class="thumbnail" class="col-sm-10">
                <img src="<?php echo $row['img'];?>" alt="" class="img-rounded">
            </div>
             </form>
            <form class="form-horizontal" method="POST" action="actualizar.php" enctype="multipart/form-data" autocomplete="off">
										<input type="hidden" id="idP" name="idP" placeholder="idP" value="<?php echo $row['idP']; ?>" />
                <div class="form-group">
                    <label for="nomPro" class="col-sm-2 control-label">Nombre del artículo: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomPro" name="nomPro" placeholder="Nombre o modelo" value="<?php echo $row['nomPro'];?>" required>
                    </div>
                </div>



								<div class="form-group">
										<label for="img" class="col-sm-2 control-label">Subir archivo</label>
											<div class="col-sm-10">
												<input type="file" id="imag" name="imag"/>
								        <input type="hidden" class="form-control" id="img" name="img" value="<?php echo $row['img'];?>"/>
											</div>
								</div>

                <div class="form-group">
                    <label for="cst" class="col-sm-2 control-label">Costo: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cst" name="cst" placeholder="Costo en pesos" value="<?php echo $row['cst'];?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ipcion" class="col-sm-2 control-label">Descripción: </label>
                    <div class="col-sm-10">
                        <input class="form-control" rows="5" id="ipcion" name="ipcion" placeholder="Descripción" value="<?php echo $row['ipcion'];?>" required></input>
                    </div>
                </div>

                <div class="form-group">
                    <label for="stock" class="col-sm-2 control-label">Cantidad: </label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Cantidad" value="<?php echo $row['stock'];?>" required>
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


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="index.php" class="btn btn-default">Regresar</a>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
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
