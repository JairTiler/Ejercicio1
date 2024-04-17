<?php

include_once("conexion.php");
$ID = $_POST['ID'];
$sql = "DELETE FROM contactos WHERE ID = :ID";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':ID', $ID, PDO::PARAM_INT);

try {
    $stmt->execute();
    echo "<script>alert ('Contacto eliminado exitosamente.')</script>";
    # Redireccionar a la página listar contactos para ver los contactos después de eliminarlo
    header('Location: listar_contactos.php');
} catch (PDOException $e) {
    echo "Error al eliminar contacto: " . $e->getMessage();
}




?>