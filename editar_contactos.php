<?php

include_once("conexion.php");
  $ID = $_POST['ID'];
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];

  $sql = "UPDATE contactos SET nombre = :nombre, telefono = :telefono, correo = :correo WHERE ID = :ID";
  $stmt = $conexion->prepare($sql);
  $stmt->bindParam(':ID', $ID, PDO::PARAM_INT);
  $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
  $stmt->bindParam(':telefono', $telefono, PDO::PARAM_INT);
  $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);

  try {
      $stmt->execute();
      echo "<script>alert ('Contacto actualizado exitosamente.')</script>";
      # Redireccionar a la página listar contactos para ver los contactos después de actualizarlo
      header('Location: listar_contactos.php');
  } catch (PDOException $e) {
      echo "Error al actualizar contacto: " . $e->getMessage();
  }




?>