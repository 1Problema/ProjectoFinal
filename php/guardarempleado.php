<?php

if (!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["correo"]) || !isset($_POST["puesto"])) {
    exit("No data provided");
}

include_once "functions.php";

$nombre = htmlspecialchars($_POST["nombre"]);
$apellido = htmlspecialchars($_POST["apellido"]);
$correo = htmlspecialchars($_POST["correo"]);
$puesto = htmlspecialchars($_POST["puesto"]);

GuardarempleadoN($nombre, $apellido, $correo, $puesto);

header("Location: index.php");
?>

