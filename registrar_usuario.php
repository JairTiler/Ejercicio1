<?php

include_once("conexion.php");



    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];

    
    if ($contraseña != $confirmar_contraseña) {
       echo "Las contraseñas no coinciden.";
       exit();
    }

    
  $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios  (nombre_usuario,contraseña) VALUES(:nombre_usuario, :contraseña)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
    $stmt->bindParam(':contraseña',$contraseña, PDO::PARAM_STR);

    try {
      $stmt->execute();
       echo "<script>alert ('Usuario agregado exitosamente.')</script>";
      
        header('Location: listar_contactos.php');
    }catch (PDOException $e) {
     echo "Error al agregar contacto: " . $e->getMessage();
    }

    


?>
