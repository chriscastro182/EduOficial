<?php
$asunto = $_POST['asunto'];
$nombre = $_POST['nom'];
$celular = $_POST['cel'];
$correo = $_POST['corr'];
$coment = $_POST['comentarios'];

echo $nombre.  " Enviado <br>".$mensaje;

mail('edutronika@gmail.com',$asunto, $mensaje);
?>
