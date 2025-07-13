<?php
$servername = "localhost"; // Nombre del servidor de MySQL (por lo general "localhost")
$username = "yo"; // Nombre de usuario de MySQL
$password = "1234"; // Contraseña de MySQL
$database = "producto"; // Nombre de tu base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>