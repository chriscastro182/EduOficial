<?php
    require 'includes/conexion.php';

    $idP          = $_REQUEST['id'];
    $nomPro       = $_POST['nomPro'];
    $img          = $_FILES['img']['name'];
    $ruta         = $_FILES['img']['tmp_name'];
    $destino      = "imagenes/".$img;
    $cst          = $_POST['cst'];
    $ipcion       = $_POST['ipcion'];
    $stock        = $_POST['stock'];
    $tipoProducto = $_POST['tipoProducto'];
    move_uploaded_file($ruta,$destino);

$sql = "UPDATE producto SET idP='$idP',nomPro='$nomPro',img='$destino',cst='$cst',ipcion='$ipcion'
,stock='$stock',Tipo_Producto_idTipo_Producto='$tipoProducto' WHERE idP = '$idP'";
//echo"Query modificación".$sql;
 $resultado = $mysqli->query($sql);
?>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado) { ?>
            <h3>REGISTRO MODIFICADO</h3>
            <div class="alert alert-success">Usuario registrado con éxito.</div>
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
