<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Datos de conexión
    $host = "localhost";
    $dbusername = "admin";
    $dbpassword = "Phppass";  // Asegúrate de que coincide con tu usuario de la BD
    $dbname = "phpProyect";

    // Conectar a la base de datos
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Verificar credenciales
    $query = $conn->prepare("SELECT * FROM login WHERE username=? AND password=?");
    $query->bind_param("ss", $username, $password);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows == 1) {
        // Login exitoso
        $_SESSION['username'] = $username;
        header("Location: ./index.php"); // Redirige a la página principal
        exit();
    } else {
        // Error en login
        $_SESSION['error'] = "Usuario o Contraseña incorrectos";
        header("Location: iniciar.php"); // Regresa a la página de login
        exit();
    }
}
?>
