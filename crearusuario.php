<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "./php/header.php";
include_once "./php/nav.php";
include_once "./php/functions.php";


// Obtener usuarios en lugar de empleados
$usuarios = getUsers();
?>


<div class="row">
    <div class="col-12">
        <h1 class="text-center">AGREGAR USUARIO</h1>
    </div>

    <div class="col-12">
    <form action="guardarusuario.php" method="POST">
    <div class="form-group">
        <label for="username">Nombre de Usuario</label>
        <input name="username" placeholder="Nombre de Usuario" type="text" id="username" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input name="password" placeholder="Contraseña" type="password" id="password" class="form-control" required>
    </div>

    <div class="form-group">
        <button class="btn btn-success">
            Guardar Usuario <i class="fa fa-check"></i>
        </button>
    </div>
</form>

    </div>
</div>

<?php
include_once "footer.php";
?>
