<?php
$servidor = "db688637200.db.1and1.com"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "dbo688637200"; //El usuario que acabamos de crear en la base de datos
$contrasenha = "RFVBNHYT1"; //La contraseña del usuario que utilizaremos
$db = "db688637200"; //El nombre de la base de datos
$mysqli= new mysqli($servidor,$usuario,$contrasenha,$db);
if($mysqli->connect_error){
    die('Error en la conexion'.$mysqli->connect_error);
}

?>
