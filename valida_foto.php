<?php
  require "includes/conexion.php";
  $nomPro       = $_POST['nomPro']; //isset ($_REQUEST['nomPro']) ? $_REQUEST['nomPro'] : '';
  $img          = $_FILES['img']['name'];
  $ruta         = $_FILES['img']['tmp_name'];
  $destino      = "imagenes/".$img;
  $cst          = $_POST['cst'];
  $ipcion       = $_POST['ipcion'];
  $stock        = $_POST['stock'];
  $tipoProducto = $_POST['tipoProducto'];
  move_uploaded_file($ruta,$destino);

  $sql = "INSERT INTO producto (idP,nomPro, img, cst, ipcion, stock, Tipo_Producto_idTipo_Producto)
          VALUES ('','$nomPro','$destino','$cst','$ipcion','$stock','$tipoProducto')";
  $resultado = $mysqli->query($sql);

  ?>
  <?php if($resultado) {
          echo '<script type="text/javascript">MensajeExito()</script>';
          ?>
          <div id="snackbar">Registro Guardado Exitosamente</div>
          <?php
          header( 'Location: perfil.php' ); } else { ?>
          <h3>ERROR AL GUARDAR</h3>
          <?php echo $sql ?>
        <?php } ?>
