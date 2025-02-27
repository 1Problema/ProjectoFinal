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
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- De Cembo123 - Trabajo propio, CC BY-SA 4.0, https://commons.wikimedia.org/w/index.php?curid=3727875-->
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><a href="index.html"><img src="./Imagenes/TrLogo.png" width="100" height="100"></a></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                       

                
                        
                <!-- Menú desplegable --><!-- Menú desplegable --><!-- Menú desplegable --><!-- Menú desplegable --><!-- Menú desplegable -->
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" a href="index.html">Pagina principal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Formulario-->
        <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="./Imagenes/TrLogo.png" th:src="@{/img/user.png}"/>
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
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                <button class="g-recaptcha" 
                                    data-sitekey="6Lc1eeMqAAAAANwJh2TfyXasFwmHu21-KQIaVYOm" 
                                    data-callback='onSubmit' 
                                    data-action='submit'>Submit</button>
                                    <script src="https://www.google.com/recaptcha/api.js?render=6Lc1eeMqAAAAANwJh2TfyXasFwmHu21-KQIaVYOm"></script>

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
