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
				<link rel="icon" type="image/ico" href="Image\edut.ico"/>
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
                <h3 style="text-align:center">ELIMINAR ARTÍCULO</h3>
            </div>
            <div class="thumbnail" class="col-sm-10">
                <img src="<?php echo $row['img'];?>" alt="" class="img-rounded">
            </div>
             </form>
            <form class="form-group" method="POST" action="eliminar.php" enctype="multipart/form-data" autocomplete="off">
							<div class="form-center">
									<div class="col-sm-10">
											<label class="col-sm-12 control-label">¿Esta seguro de querer eliminar este producto? </label>
									</div>
							</div>



                <div class="form-group">

                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="nomPro" name="nomPro" placeholder="Nombre o modelo" value="<?php echo $row['nomPro'];?>" disabled>
                    </div>
                </div>

								<div class="form-group">

									<div class="col-sm-10">
                	<input type="hidden" id="img" name="img" placeholder="img" value="<?php echo $row['img'];?>" />
                <input type="hidden" id="id" name="id" placeholder="id" value="<?php echo $row['idP']; ?>" />
							</div>
						</div>

                <div class="form-group">

                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="cst" name="cst" placeholder="Costo en pesos" value="<?php echo $row['cst'];?>" disabled>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-sm-10">
                        <input class="hidden" rows="5" id="ipcion" name="ipcion" placeholder="Descripción" value="<?php echo $row['ipcion'];?>" disabled></input>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="stock" name="stock" placeholder="Cantidad" value="<?php echo $row['stock'];?>" disabled>
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

                        <div class="col-sm-10" disa>
                            <select class="hidden" id="tipoProducto" name="tipoProducto" disabled>
                         <option value="<?php echo $tipo['idTipo_Producto'];?>"> <?php echo $tipo['nomTip'];?> </option>
                          <?php while($rows=$resul->fetch_assoc()){ ?>
                          <option value="<?php echo $rows['idTipo_Producto']; ?>"> <?php echo $rows['nomTip']; ?></option>

                          <?php } ?>
                        </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="AdminProductos.php" class="btn btn-default">Regresar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
														<br><br>
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
