<?php

session_start();
require ("includes/conexion.php");
require("includes/encoder.php");

$usuario=$_POST['usuario'];
$contrasena=encryptAndEncode($_POST['contrasena']);

$proceso = $mysqli->query("SELECT * FROM usuario WHERE sru='$usuario' AND ctr='$contrasena' ");

    if($f=mysqli_fetch_assoc($proceso)){
      if($contrasena==$f['ctr']){
         $_SESSION['u_usuario']=$f['sru'];
         $_SESSION['idUsuario']=$f['idUsuario'];
          $_SESSION['tipo_usr_idtipo_usr']=$f['tipo_usr_idtipo_usr'];
          $_SESSION['nomUsr']=$f['nomUsr'];

          echo '<script>alert("BIENVENIDO")</script> ';
          echo "<script>location.href='perfil.php'</script>";
      }else{
          echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
          echo "<script>location.href='index.php'</script>";
      }
    }else{

        echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

        echo "<script>location.href='index.php'</script>";

    }

?>
