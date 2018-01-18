<?php
//$asunto = $_POST["asunto"];
//$nom = $_POST["nom"];
//$cel = $_POST["cel"];
//$corr = $_POST["corr"];
//$comentarios = $_POST["comentarios"];
$destino="edutronika@gmail.com";
$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$cel = isset($_POST['cel']) ? $_POST['cel'] : '';
$corr = isset($_POST['corr']) ? $_POST['corr'] : '';
$comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
//envio
$contenido = "Asunto:     ".$asunto.
             "\nNombre:     ".$nom.
             "\nTelefono:     ".$cel.
             "\nCorreo:     ".$corr.
             "\nComentarios:     ".$comentarios;
if(mail($destino,'Contacto',$contenido)){
  echo '<script>alert("Gracias por sus comentarios")</script> ';
  echo "<script>location.href='conta.php'</script>";
}else {
  echo "Mensaje no enviado";
}
?>
