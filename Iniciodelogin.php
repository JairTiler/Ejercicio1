<?php

include_once("conexion.php");
$usuario = $_POST ['nombre_usuario'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO Usuarios (contraseña ,nombre_usuario) VALUES (:contraseña, :nombre_usuario,)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre_usuario', $usuario, PDO::PARAM_STR);
$stmt->bindParam(':contraseña',$contraseña, PDO::PARAM_INT);

try {
    $stmt->execute();
    echo "<script>alert ('usuario agregado exitosamente.')</script>";
    # Redireccionar a la página listar contactos para ver los contactos después de agregarlo
    header('Location: listar_contactos.php');
} catch (PDOException $e) {
  echo "Error al agregar contacto: " . $e->getMessage();
}



?>
