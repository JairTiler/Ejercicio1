<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_contacto";

try {
    // Creamos la conexión utilizando PDO
    $conn = new PDO("mysql:host=$servername;db_contacto=$database", $username, $password);
    // Establecemos el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    // En caso de error, mostramos un mensaje de error
    echo "Error de conexión: " . $e->getMessage();
}
?>
