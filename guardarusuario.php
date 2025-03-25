<?php
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    exit("No data provided");
}

include_once "functions.php"; // Asegúrate de incluir las funciones necesarias

// Capturar los datos del formulario y prevenir inyecciones XSS
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

// Verificar que los datos no estén vacíos
if (empty($username) || empty($password)) {
    exit("Username or password cannot be empty");
}

// Función para guardar el usuario en la base de datos
if (guardarUsuario($username, $password)) {
    // Redirigir al index después de guardar
    header("Location: index.php");
    exit;
} else {
    exit("Error saving user");
}
?>