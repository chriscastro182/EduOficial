<?php
    require 'includes/conexion.php';
    $idP = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
    //$idP          = $_REQUEST['id'];

$sql = "DELETE FROM producto WHERE idP = '$idP'";
//echo"Query modificación".$sql;
 $resultado = $mysqli->query($sql);
?>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <?php if($resultado) { ?>
            <h3>REGISTRO Eliminado</h3>
            <div class="alert alert-success">Usuario registrado con éxito.</div>
            <?php
            echo "<script>location.href='perfil.php'</script>";
            } else
            { ?>
            <h3>ERROR AL Eliminar</h3>
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
