<?php
function getEmployeesWithAttendanceCount($inicio, $fin)
{
    $selectcont = "select empleados.nombre, 
sum(case when estado = 'presence' then 1 else 0 end) as Contador_Asistencias,
sum(case when estado = 'absence' then 1 else 0 end) as Contador_Faltas 
 from empleados_asistencia
 inner join empleados on empleados.id = empleados_asistencia.empleados_id
 where fecha >= ? and fecha <= ?
 group by empleados_id;";
    $db = getDatabase();
    $statement = $db->prepare($selectcont);
    $statement->execute([$inicio, $fin]);
    return $statement->fetchAll();
}

function saveAttendanceData($fecha, $empleados)
{
    deleteAttendanceDataByDate($fecha);
    $db = getDatabase();
    $db->beginTransaction();
    $statement = $db->prepare("INSERT INTO empleados_asistencia(empleados_id, fecha, estado) VALUES (?, ?, ?)");

    foreach ($empleados as $empleado) {
        $statement->execute([$empleado->id, $fecha, $empleado->estado]);
    }

    $db->commit();
    return true;
}

function deleteAttendanceDataByDate($fecha)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM empleados_asistencia WHERE fecha = ?");
    return $statement->execute([$fecha]);
}
function getAttendanceDataByDate($fecha)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT empleados_id, estado FROM empleados_asistencia WHERE fecha = ?");
    $statement->execute([$fecha]);
    return $statement->fetchAll();
}


function deleteEmployee($id)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM empleados WHERE id = ?");
    return $statement->execute([$id]);
}

function actualizarempleado($nombre, $apellido, $puesto, $correo, $id)
{
    $db = getDatabase();

    $statement = $db->prepare("UPDATE empleados SET nombre = ?, apellido = ?, puesto = ?, correo = ? WHERE id = ?");
    
    // Bind parameters
    $statement->bindParam(1, $nombre);
    $statement->bindParam(2, $apellido);
    $statement->bindParam(3, $puesto);
    $statement->bindParam(4, $correo);
    $statement->bindParam(5, $id);

    // Execute the update
    return $statement->execute();
}

function obtenerporID($id)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT * FROM empleados WHERE id = ?");
    $statement->execute([$id]);
    return $statement->fetchObject();
}

function guardarEmpleadoN($nombre, $apellido, $correo, $puesto)
{
    $db = getDatabase();

    $statement = $db->prepare("INSERT INTO `empleados` (`nombre`, `apellido`, `correo`, `puesto`) VALUES (?, ?, ?, ?)");

    return $statement->execute([$nombre, $apellido, $correo, $puesto]);
}

function saveEmployee($nombre,$apellido,$correo,$puesto)
{
    $db = getDatabase();
    $statement = $db->prepare("INSERT INTO empleados(nombre,apellido,correo,puesto) VALUES (?)");
    return $statement->execute([$nombre,$apellido,$correo,$puesto ,]);
}

function getEmployees()
{
    $db = getDatabase();
    $statement = $db->query("SELECT id,nombre,apellido,correo,puesto FROM empleados");
    return $statement->fetchAll();
}

function getVarFromEnvironmentVariables($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("The environment file ($file) does not exists. Please create it");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("The specified key (" . $key . ") does not exist in the environment file");
    }
}
function getUsers() {
    include "db.php"; // Asegúrate de que este archivo tenga la conexión a la base de datos

    $query = "SELECT * FROM login"; // Cambia "login" por el nombre correcto de la tabla si es necesario
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    return $users;
}
function guardarUsuario($username, $password) {
    // Conectar a la base de datos
    $conn = new mysqli("localhost", "root", "", "mi_base_de_datos");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
function getDatabase()
{
    $password = getVarFromEnvironmentVariables("MYSQL_PASSWORD");
    $user = getVarFromEnvironmentVariables("MYSQL_USER");
    $dbName = getVarFromEnvironmentVariables("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
