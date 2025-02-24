<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ProjectoPHP</title>
        <link rel="icon" type="image/x-icon" href="assets/logo3.png" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link href="css/stylesiniciar.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavpolitica">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/nav-logo.png" alt="..." width="80" /></a>
                <a href="index.html">Volver</a>
            </div>
        </nav>
        <!--Formulario-->
        <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="https://github.com/1Problema/ProjectoFinal/blob/66b0daca421e7dab98adaaef75f10c461006ca17/Imagenes/TrLogo.png" th:src="@{/img/user.png}"/>
                </div>
                    <form class="col-12" action="conexion_bd.php" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Acceder </button>
                    </form>   
                    <!-- Pueba -->
                    <?php
                    session_start();
                    if(isset($_SESSION['error'])) {
                        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="boton-modal1">
                        <label for="btn-modal1">
                            Olvidé mi contraseña
                        </label>
                    </div>
                    <input type="checkbox" id="btn-modal1">
                    <div class="container-modal1">
                        <div class="content-modal1">
                            <h2>Recuperar Contraseña</h2>
                            <p>Para recuperar la contraseña deberás rellenar el siguiente formulario.<br><br>En unos dias se pondrá en contacto contigo el administrador del sistema.</p>
                                <form action="https://formspree.io/f/mjvnyegd" id="recuperarForm" method="POST">
                                <!-- Nombre-->
                                <input name="Nombre" type="text" placeholder="Nombre y Apellidos" required>
                                <!-- Email-->
                                <input name="Email" type="email" placeholder="Correo electrónico" required>
                                <!-- Telefono-->
                                <input name="teléfono" type="phone" placeholder="Número de Teléfono" required>
                                <!-- Submit Button-->
                                <button type="submit">Enviar</button>

                                <div class="btn-cerrar">
                                    <label for="btn-modal1">Cerrar</label>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
