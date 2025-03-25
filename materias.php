<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IES TorreRoja</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" a href="./Imagenes/TrLogo.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navegación-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><a href="index.php"><img src="./Imagenes/TrLogo.png" width="100" height="100"></a></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Recursos">Recursos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#servicios">Opcions Acadèmiques</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#FAQ">FAQ</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contacte</a></li>
                
                        <?php if (isset($_SESSION['username'])): ?>
                        <!-- Si el usuario ha iniciado sesión -->
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded">Bienvenido, <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Cerrar Sesión</a>
                        </li>
                    <?php else: ?>
                        <!-- Si el usuario NO ha iniciado sesión -->
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="iniciar.php">Iniciar Sesión</a>
                        </li>
                    <?php endif; ?>
                <!-- Menú desplegable --><!-- Menú desplegable --><!-- Menú desplegable --><!-- Menú desplegable --><!-- Menú desplegable -->
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Sección Portada-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Imagen Portada-->
                <img class="masthead-avatar mb-5" src="./Imagenes/TrLogo.png" alt="..." />
                <!-- Titulo Portada-->
                <h1 class="masthead-heading text-uppercase mb-0">Institut Torre Roja</h1>
                <!-- Icono separador-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class ="fas fa-user-circle"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Subtitulo Portada-->
                <p class="masthead-subheading font-weight-light mb-0">Centre Educatiu<b>ESO/BATCH/CFGM/CFGS/PFI</b></p>
            </div>
        </header>
         <!-- Sección Servicios-->
         <section class="page-section portfolio" id="Recursos">
            <div class="container">
                <!-- Titulo Sección Servicios-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Recursos de la pagina</h2>
                <!-- Icono separador-->
                 <div>
                    
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Servicios posición-->
                <div class="row justify-content-center">
                    <!-- Servicios Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="./Imagenes/enlazes.png" alt="..." />
                        </div>
                    </div>
                    <!-- Servicios Item 1-->
                    <div>
                        <ul>
                            <div class="col-12 text-center mb-4">
                                <a href="./quiensomos.php" class="btn btn-primary m-2">L'Institut</a>
                                <a href="./ESO/horarioeso.php" class="btn btn-primary m-2">Horario</a>
                                <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                
                            </div>
                        </ul>

                    </div>
                    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                        
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        
                        <div class="container">
                            
                            <div class="row justify-content-center">
                                
                                <div class="col-lg-8">
                                    
                                    <!-- Servicios Item1 Titulo-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">L'Institut i altres enllaços de la Web</h2>
                                    <!-- Icono separador-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Servicios Item1 Imagen-->
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/Cabezera_TR.png" alt="..." />
                                    <!-- Servicios Item1 Texto-->
                                        <div class="col-12 text-center mb-4">
                                            <a href="./quiensomos.php" class="btn btn-primary m-2">L'Institut</a>
                                            <a href="./ESO/horarioeso.php" class="btn btn-primary m-2">Horario</a>
                                            <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                            <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                            
                                        </div>
                                        <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            
        <section class="Informacion">
                        <h2 class="ColumnasCentradas" id="FAQ">Materias</h2>
                        <div class="masthead-subheading font-weight-light mb-0">
                            
                            <div class="ColumnasCentradas">
                                
                                <div>
                                    <h4>Eso</h4>
                                    <p>Cada institución educativa impartirá como mínimo 30 horas a la semana para que los estudiantes alcancen los conocimientos académicos necesarios.
                                        <br>
                                        En el caso de Matemáticas, y Lengua y Literatura serán seis horas de clase cada una; y para Ciencias Naturales y Estudios Sociales, cuatro.
                                        <br>
                                        Inglés se mantendrá con tres horas a la semana; mientras que Educación Artística y Cultural; y Educación Física serán dos.
                                        <br>
                                        Las demás materias como Cívica, Acompañamiento vocacional y Animación a la lectura tendrán una hora a la semana.                    
                                        </p>
                                        <a href="https://www.primicias.ec/sociedad/todas-materias-y-horas-clase-tendran-alumnos-ano-lectivo-2024-2025-ecuador-77509/" class="btn btn-primary m-2">Fuente = Primicias.ec</a>
                                </div>
                                <div>
                                    
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/HorasEso.png" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="masthead-subheading font-weight-light mb-0">
                            
                            <div class="ColumnasCentradas">
                                <div class="ColumnasCentradas">
                                    <div>
                                        
                                        <img class="img-fluid rounded mb-5" src="./Imagenes/HorasBachi.png" alt="..." />
                                    </div>
                                    <div>
                                        <h4>Bachillerato</h4>
                                        <p>Para los dos primeros años de este Bachillerato los colegios destinarán como mínimo 35 horas a la semana para fortalecer las competencias de los estudiantes en las áreas comunicacionales, matemáticas, digitales y socioemocionales.
                                            <br>
                                            Las materias que tendrán mayor carga horaria serán Matemáticas y Lengua y Literatura, con cinco horas semanales cada una.
                                            <br>
                                            Mientras que Física, Química, Biología e Inglés se dictarán durante tres horas. Con dos horas aparecen Historia, Educación para la Ciudadanía, Filosofía, Educación Artística y Cultural; Educación Física; y Gestión para el Emprendimiento.
                                            <br>
                                            Por último estará Cívica con una hora.               
                                            </p>
                                            <a href="https://www.primicias.ec/sociedad/todas-materias-y-horas-clase-tendran-alumnos-ano-lectivo-2024-2025-ecuador-77509/" class="btn btn-primary m-2">Fuente = Primicias.ec</a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="masthead-subheading font-weight-light mb-0">
                            
                            <div class="ColumnasCentradas">
                                
                                <div class="ColumnasCentradas">
                                
                                    <div>
                                        <h4>Ciclo</h4>
                                        <p>A diferencia del Bachillerato en Ciencias, estos alumnos recibirán al menos 40 horas semanales de clases.
                                            <br>
                                            Los alumnos de esta modalidad de estudios recibirán tres horas semanales de Matemáticas, Inglés, y Lengua y Literatura.
                                            <br>
                                            Se sumarán dos horas de Física; Química; Biología; Historia; Educación para la Ciudadanía; Filosofía; Educación Artística y Cultural; Educación Física; y Emprendimiento y Gestión.
                                            <br>
                                            Con la inclusión de Cívica en la malla curricular, estos estudiantes también la estudiarán una hora a la semana.
                                            <br>
                                            Debido a que se trata de Bachillerato Técnico, se establecen otras 12 horas para fortalecer los conocimientos de cada área que ofrece el Ministerio. Entre ellas están: Agropecuaria, Industrial, Servicios, Artística, Deportiva y Tecnologías de la Información y las Comunicaciones.
                                        </p>
                                            <a href="https://www.primicias.ec/sociedad/todas-materias-y-horas-clase-tendran-alumnos-ano-lectivo-2024-2025-ecuador-77509/" class="btn btn-primary m-2">Fuente = Primicias.ec</a>
                                    </div>
                                    <div>
                                        
                                        <img class="img-fluid rounded mb-5" src="./Imagenes/HorasTec.png" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="ColumnasCentradas">
                            
                            <div id="infoContainer"></div>

                            <script src="script.js"></script>
                        </div>
                       
                        

        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Localización-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localización</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                
                    <!-- Footer RedesSociales Iconos-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Texto-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">RFID M4CHINE</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Sección Copyright-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
