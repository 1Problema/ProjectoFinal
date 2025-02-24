<?php
include_once "functions.php";
$empleados = getEmployees();
echo json_encode($empleados);
