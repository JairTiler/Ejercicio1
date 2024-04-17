<?php

include_once("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];


    // Consulta SQL para buscar al usuario en la base de datos
    $query = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' AND contraseña='$contraseña'";
   // $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        // Usuario autenticado, iniciar sesión
        $_SESSION['nombre_usuario'] = $nombre_usuario;
        header('Location: inicio.php');
    } else {
        // Usuario no encontrado o contraseña incorrecta
        echo "Nombre de usuario o contraseña incorrectos.";
    }

    $mysqli->close();
}
?>
