<?php
    require 'includes/conexion.php';
    //$idP          = isset($_REQUEST['idP']) ? $_POST['idP'] : '';
    $idP          = $_REQUEST['idP'];
    $nomPro       = $_POST['nomPro'];
    //$img          = isset($_POST['img']);
    $img          = $_POST['img'];
    $imag         = $_FILES['imag']['name'];
    $ruta         = $_FILES['imag']['tmp_name'];
    $destino      = "imagenes/".$imag;
    $cst          = $_POST['cst'];
    $ipcion       = $_POST['ipcion'];
    $stock        = $_POST['stock'];
    $tipoProducto = $_POST['tipoProducto'];
    $tipoProd     = $_POST['tipoProducto'];
    move_uploaded_file($ruta,$destino);

if ($imag!=NULL) {
  $sql = "UPDATE producto SET idP='$idP',nomPro='$nomPro',img='$destino ',cst='$cst',ipcion='$ipcion'
  ,stock='$stock',Tipo_Producto_idTipo_Producto='$tipoProducto' WHERE idP = '$idP'";
  $resultado = $mysqli->query($sql);
}else{
$sql2 = "UPDATE producto SET idP='$idP',nomPro='$nomPro',img='$img',cst='$cst',ipcion='$ipcion'
,stock='$stock',Tipo_Producto_idTipo_Producto='$tipoProducto' WHERE idP = '$idP'";
$resultado = $mysqli->query($sql2);
}
//echo"Query modificación".$sql;
//echo"Query modificación".$sql2;

?>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado) { ?>
            <h3>REGISTRO MODIFICADO</h3>
            <div class="alert alert-success">Producto modificado con éxito.</div>
            <?php
            echo "<script>location.href='perfil.php'</script>";
            } else
            { ?>
            <h3>ERROR AL MODIFICAR</h3>
            <div class="alert alert-danger">Error: Usuario no registrado exitosamente.
                <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                    &times;
                </button>
            </div>
            <a href="signUp.php" class="btn btn-primary">Regresar</a>
            <?php }

    ?>

        </div>
    </div>
</div>
