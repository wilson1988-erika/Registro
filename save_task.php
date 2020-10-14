<?php

include("dbr.php");

if(isset($_POST['guardar_registro'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];

    $query = "INSERT INTO registro (nombre, apellido, email, contrasena, departamento, ciudad, telefono)
               VALUES ('$nombre', '$apellido', '$email', '$contrasena', '$departamento','$ciudad', '$telefono')";
    $result = mysqli_query($conn, $query);
    
    $_SESSION['message'] = 'Registro guardado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("location:index.php");
    

}
