<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";

$empleados = getEmployees();

// Verificar si se ha enviado un formulario de filtro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado el formulario para restablecer el filtro
    if (isset($_POST["reset"])) {
        // Si se ha enviado, volver a obtener todos los empleados sin filtrar
        $empleados = getEmployees();
    } else {
        $filtro_puesto = $_POST["filtro_puesto"];
        // Filtrar empleados por puesto
        $empleados = array_filter($empleados, function ($empleado) use ($filtro_puesto) {
            return $empleado->puesto == $filtro_puesto;
        });
    }
}
?>
<div class="row">
    <div class="col-12">
        <p> </p>
        <h1 class="text-center">EMPLEADOS</h1>
        <div class="col-12">
            <!-- Formulario de filtro -->
            <form method="post">
                <label for="filtro_puesto">Filtrar por puesto:</label>
                <select name="filtro_puesto" id="filtro_puesto">
                    <!-- Opciones de puestos, puedes obtenerlas de tu base de datos o definirlas manualmente -->
                    <option>---</option>
                    <option value="Producción">Producción</option>
                    <option value="RRHH">RRHH</option>
                    <option value="Dirección">Dirección</option>
                    <option value="Transporte">Transporte</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                <button type="submit">Filtrar</button>
                <button type="submit" name="reset">Restablecer filtro</button>
            </form>
    <div class="col-12">

        <button  onclick="redireccionar()">Agregar Usuario</button>

        <script>
                function redireccionar() {
                // Redirigir a la página "agregarempleado.php" cuando se hace clic en el botón
                window.location.href = "agregarempleado.php";
                }
        </script>

        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correos</th>
                        <th>Puesto</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($empleados as $empleado) { ?>
                        <tr>
                            <td>
                                <?php echo $empleado->id ?>
                            </td>
                            <td>
                                <?php echo $empleado->nombre ?>
                            </td>
                            <td>
                                <?php echo $empleado->apellido ?>
                            </td>
                            <td>
                                <?php echo $empleado->correo ?>
                            </td>
                            <td>
                                <?php echo $empleado->puesto ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="editarempleado.php?id=<?php echo $empleado->id ?>">
                                Editar <i class="fa fa-edit"></i>
                            </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="borrarempleado.php?id=<?php echo $empleado->id ?>">
                                Borrar <i class="fa fa-trash"></i>
                            </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once "./footer.php";