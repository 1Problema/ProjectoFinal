<?php

if (!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["puesto"]) || !isset($_POST["correo"]) || !isset($_POST["id"])) {
    exit("No data provided");
}

include_once "functions.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$puesto = $_POST["puesto"];
$correo = $_POST["correo"];
$id = $_POST["id"];

actualizarempleado($nombre, $apellido, $puesto, $correo, $id);

header("Location: index.php");
