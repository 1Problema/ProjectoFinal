<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";

if (!isset($_GET["id"])) {
    exit("No id provided");
}

$id = $_GET["id"];

$empleado = obtenerporID($id);

?>

<div class="row">
    <div class="col-6, col-12">
        <h1 class="text-center ">DATOS DEL EMPLEADO</h1>
        <ul>
            <li>Nombre: <?php echo $empleado->nombre ?></li>
            <li>Apellido: <?php echo $empleado->apellido ?></li>
            <li>Puesto: <?php echo $empleado->puesto ?></li>
            <li>Correo: <?php echo $empleado->correo ?></li>
            
        </ul>
    </div>

    <div class="col-6,col-12">
        <h1 class="text-center">EDITAR EMPLEADO</h1>
        <form action="actualizarempleado.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $empleado->id ?>">
            <div class="form-group">
                <label for="nombre">Nuevo Nombre</label>
                <input value="<?php echo $empleado->nombre ?>" name="nombre" placeholder="Nombre" type="text" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellido">Nuevo Apellido</label>
                <input value="<?php echo $empleado->apellido ?>" name="apellido" placeholder="apellido" type="text" id="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="puesto">Nuevo Puesto</label>
                <select name="puesto" id="puesto" class="form-control" required>
                    <option value="Producción">Producción</option>
                    <option value="RRHH">RRHH</option>
                    <option value="Dirección">Dirección</option>
                    <option value="Transporte">Transporte</option>
                </select>
            </div>
            <div class="form-group">
                <label for="correo">Nuevo Correo</label>
                <input value="<?php echo $empleado->correo ?>" name="correo" placeholder="correo" type="text" id="correo" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar <i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>
</div>

<?php
include_once "footer.php";
?>

