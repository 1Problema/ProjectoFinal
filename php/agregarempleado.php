
<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$empleados = getEmployees();
?>
<div class="row">
    <div class="col-12">
    <p> </p>
        <h1 class="text-center">AGREGAR EMPLEADOS</h1>
    </div>

    <div class="col-12">
        <form action="guardarempleado.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" placeholder="Nombre" type="text" id="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input name="apellido" placeholder="Apellido" type="text" id="apellido" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input name="correo" placeholder="Correo" type="text" id="correo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="puesto">Puesto</label>
                <select name="puesto" id="puesto" class="form-control" required>
                    <option value="Producción">Producción</option>
                    <option value="RRHH">RRHH</option>
                    <option value="Dirección">Dirección</option>
                    <option value="Transporte">Transporte</option>
                </select>
            </div>
            
            <div class="form-group">
                <button class="btn btn-success">
                    Guardar <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include_once "footer.php";
