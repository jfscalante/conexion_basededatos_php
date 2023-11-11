<?php
include 'conexion.php';

//obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

//insertar datos en la base de datos 
$sql = "INSERT INTO datos (nombre,email,telefono) VALUES ('$nombre', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
    header("location: mostrar.php");
}else{
    echo"Error: " . $sql . "<br>" .$conn->error;
}

$conn->close();
?>