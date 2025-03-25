<?php
$host = "localhost"; // Cambia si es un servidor diferente
$user = "admin";      // Tu usuario de MariaDB
$password = "tu_contraseña";      // Tu contraseña de MariaDB
$database = "phpProyect"; // Nombre de tu base de datos

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
