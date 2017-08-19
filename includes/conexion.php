<?php
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "phpUserB"; //El usuario que acabamos de crear en la base de datos
$contrasenha = "yallegue"; //La contraseña del usuario que utilizaremos
$db = "edutronika"; //El nombre de la base de datos
$mysqli= new mysqli($servidor,$usuario,$contrasenha,$db);
if($mysqli->connect_error){
    die('Error en la conexion'.$mysqli->connect_error);
}

?>
