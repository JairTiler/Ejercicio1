<?php
$dsn = 'mysql:host=localhost; dbname=bd_Contactos';
$usuario = 'root';
$contaseña = '';

try{
    $conexion = new PDO($dsn,$usuario,$contaseña);
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo 'Error de conexion:'.$e->getMessage();
    die();
}


?>