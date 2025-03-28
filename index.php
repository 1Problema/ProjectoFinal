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
    <link rel="icon" type="image/x-icon" href="./Imagenes/TrLogo.png"/>
    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./Imagenes/TrLogo.png" width="100" height="100">
            </a>
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
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal0">
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
                    <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" aria-labelledby="portfolioModal0" aria-hidden="true">
                        
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
            

        <!-- Sección Servicios-->
        <section class="page-section portfolio" id="servicios">
            <div class="container">
                <!-- Titulo Sección Servicios-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Opcions Acadèmiques</h2>
                <!-- Icono separador-->
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
                            <img class="img-fluid" src="./Imagenes/ESO.png" alt="..." />
                        </div>
                    </div>
                    <!-- Servicios Item 1-->
                    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Servicios Item1 Titulo-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">ESO</h2>
                                    <!-- Icono separador-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Servicios Item1 Imagen-->
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/ESO.png" alt="..." />
                                    <!-- Servicios Item1 Texto-->
                                    <p class="mb-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu varius sem. Donec ut tellus a quam venenatis vehicula et semper felis. Nunc metus velit, euismod et varius vel, consequat at nisl. Etiam tempus urna venenatis, ultricies erat eget, facilisis mi. Mauris nec auctor mauris, sed vestibulum sapien. Praesent ut rutrum lorem, eu interdum mauris. Duis condimentum vitae justo vel congue. Quisque id consectetur tellus.

                                        Maecenas pretium condimentum orci a volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam et nisi dapibus, vulputate erat ac, lobortis nisi. Cras pretium dapibus lorem at ultricies. Vivamus faucibus nulla quis bibendum sagittis. Curabitur id lorem ac metus accumsan vestibulum.
                                        
                                        Vivamus porta ex id enim cursus viverra. Etiam dignissim, ligula et faucibus luctus, lectus diam hendrerit arcu, id tristique sapien elit eget mauris. Nulla facilisi. Nunc eget ultricies erat, quis porta nunc. Sed accumsan risus dui, non semper nisl tristique ut. Etiam id lorem at augue mollis tristique vel a ex. Ut non felis tempus, interdum erat at, rhoncus quam. Vestibulum sit amet erat non diam pulvinar congue. In finibus neque eu bibendum vulputate. </p>
                                        <div class="col-12 text-center mb-4">
                                            <a href="ESO/horarioeso.php" class="btn btn-primary m-2">Horario</a>
                                            <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                            <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                            <a href="salidas-laborales.php" class="btn btn-primary m-2">Salidas Laborales</a>
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
                    <!-- Servicios Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                         <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="./Imagenes/CFGM.png" alt="..." />
                        </div>
                    </div>
                    <!-- Servicios Item 2-->
                    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Servicios Item2 Titulo-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">CFGM</h2>
                                    <!-- Icono separador-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Servicios Item2 Imagen-->
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/CFGM.png" alt="..." />
                                    <!-- Servicios Item2 Texto-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu varius sem. Donec ut tellus a quam venenatis vehicula et semper felis. Nunc metus velit, euismod et varius vel, consequat at nisl. Etiam tempus urna venenatis, ultricies erat eget, facilisis mi. Mauris nec auctor mauris, sed vestibulum sapien. Praesent ut rutrum lorem, eu interdum mauris. Duis condimentum vitae justo vel congue. Quisque id consectetur tellus.

                                        Maecenas pretium condimentum orci a volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam et nisi dapibus, vulputate erat ac, lobortis nisi. Cras pretium dapibus lorem at ultricies. Vivamus faucibus nulla quis bibendum sagittis. Curabitur id lorem ac metus accumsan vestibulum.
                                        
                                        Vivamus porta ex id enim cursus viverra. Etiam dignissim, ligula et faucibus luctus, lectus diam hendrerit arcu, id tristique sapien elit eget mauris. Nulla facilisi. Nunc eget ultricies erat, quis porta nunc. Sed accumsan risus dui, non semper nisl tristique ut. Etiam id lorem at augue mollis tristique vel a ex. Ut non felis tempus, interdum erat at, rhoncus quam. Vestibulum sit amet erat non diam pulvinar congue. In finibus neque eu bibendum vulputate.</p>
                                        <div class="col-12 text-center mb-4">
                                            <a href="CFGM/horariocfgm.php" class="btn btn-primary m-2">Horario</a>
                                            <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                            <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                            <a href="salidas-laborales.php" class="btn btn-primary m-2">Salidas Laborales</a>
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
                    <!-- Servicios Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                         <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="./Imagenes/CFGS.png" alt="..." />
                        </div>
                    </div>
                    <!-- Servicios Item 3-->
                    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Servicios Item3 Titulo-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">CFGS</h2>
                                    <!-- Icono separador-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Servicios Item3 Imagen-->
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/CFGS.png" alt="..." />
                                    <!-- Servicios Item3 Texto-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu varius sem. Donec ut tellus a quam venenatis vehicula et semper felis. Nunc metus velit, euismod et varius vel, consequat at nisl. Etiam tempus urna venenatis, ultricies erat eget, facilisis mi. Mauris nec auctor mauris, sed vestibulum sapien. Praesent ut rutrum lorem, eu interdum mauris. Duis condimentum vitae justo vel congue. Quisque id consectetur tellus.

                                        Maecenas pretium condimentum orci a volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam et nisi dapibus, vulputate erat ac, lobortis nisi. Cras pretium dapibus lorem at ultricies. Vivamus faucibus nulla quis bibendum sagittis. Curabitur id lorem ac metus accumsan vestibulum.
                                        
                                        Vivamus porta ex id enim cursus viverra. Etiam dignissim, ligula et faucibus luctus, lectus diam hendrerit arcu, id tristique sapien elit eget mauris. Nulla facilisi. Nunc eget ultricies erat, quis porta nunc. Sed accumsan risus dui, non semper nisl tristique ut. Etiam id lorem at augue mollis tristique vel a ex. Ut non felis tempus, interdum erat at, rhoncus quam. Vestibulum sit amet erat non diam pulvinar congue. In finibus neque eu bibendum vulputate.</p>
                                        <div class="col-12 text-center mb-4">
                                            <a href="CFGM/horariocfgm.php" class="btn btn-primary m-2">Horario</a>
                                            <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                            <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                            <a href="salidas-laborales.php" class="btn btn-primary m-2">Salidas Laborales</a>
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
                    <!-- Servicios Item 3-->
                
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                           <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                               <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="./Imagenes/PFI.png" alt="..." />
                       </div>
                   </div>
                   <!-- Servicios Item 3-->
                   <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
                   <div class="modal-dialog modal-xl">
                   <div class="modal-content">
                   <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                   <div class="modal-body text-center pb-5">
                       <div class="container">
                           <div class="row justify-content-center">
                               <div class="col-lg-8">
                                   <!-- Servicios Item3 Titulo-->
                                   <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">PFI</h2>
                                   <!-- Icono separador-->
                                   <div class="divider-custom">
                                       <div class="divider-custom-line"></div>
                                       <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                       <div class="divider-custom-line"></div>
                                   </div>
                                   <!-- Servicios Item3 Imagen-->
                                   <img class="img-fluid rounded mb-5" src="./Imagenes/PFI.png" alt="..." />
                                   <!-- Servicios Item3 Texto-->
                                   <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu varius sem. Donec ut tellus a quam venenatis vehicula et semper felis. Nunc metus velit, euismod et varius vel, consequat at nisl. Etiam tempus urna venenatis, ultricies erat eget, facilisis mi. Mauris nec auctor mauris, sed vestibulum sapien. Praesent ut rutrum lorem, eu interdum mauris. Duis condimentum vitae justo vel congue. Quisque id consectetur tellus.

                                       Maecenas pretium condimentum orci a volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam et nisi dapibus, vulputate erat ac, lobortis nisi. Cras pretium dapibus lorem at ultricies. Vivamus faucibus nulla quis bibendum sagittis. Curabitur id lorem ac metus accumsan vestibulum.
                                       
                                       Vivamus porta ex id enim cursus viverra. Etiam dignissim, ligula et faucibus luctus, lectus diam hendrerit arcu, id tristique sapien elit eget mauris. Nulla facilisi. Nunc eget ultricies erat, quis porta nunc. Sed accumsan risus dui, non semper nisl tristique ut. Etiam id lorem at augue mollis tristique vel a ex. Ut non felis tempus, interdum erat at, rhoncus quam. Vestibulum sit amet erat non diam pulvinar congue. In finibus neque eu bibendum vulputate.</p>
                                       <div class="col-12 text-center mb-4">
                                        <a href="horario.php" class="btn btn-primary m-2">Horario</a>
                                        <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                        <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                        <a href="salidas-laborales.php" class="btn btn-primary m-2">Salidas Laborales</a>
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
                
            
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                   <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                       <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                   </div>
                   <img class="img-fluid" src="./Imagenes/BACH.png" alt="..." />
               </div>
           </div>
           <!-- Servicios Item 4-->
           <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
           <div class="modal-dialog modal-xl">
           <div class="modal-content">
           <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
           <div class="modal-body text-center pb-5">
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <!-- Servicios Item4 Titulo-->
                           <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Bachillerato</h2>
                           <!-- Icono separador-->
                           <div class="divider-custom">
                               <div class="divider-custom-line"></div>
                               <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                               <div class="divider-custom-line"></div>
                           </div>
                           <!-- Servicios Item4 Imagen-->
                           <img class="img-fluid rounded mb-5" src="./Imagenes/BACH.png" alt="..." />
                           <!-- Servicios Item4 Texto-->
                           <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu varius sem. Donec ut tellus a quam venenatis vehicula et semper felis. Nunc metus velit, euismod et varius vel, consequat at nisl. Etiam tempus urna venenatis, ultricies erat eget, facilisis mi. Mauris nec auctor mauris, sed vestibulum sapien. Praesent ut rutrum lorem, eu interdum mauris. Duis condimentum vitae justo vel congue. Quisque id consectetur tellus.

                               Maecenas pretium condimentum orci a volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam et nisi dapibus, vulputate erat ac, lobortis nisi. Cras pretium dapibus lorem at ultricies. Vivamus faucibus nulla quis bibendum sagittis. Curabitur id lorem ac metus accumsan vestibulum.
                               
                               Vivamus porta ex id enim cursus viverra. Etiam dignissim, ligula et faucibus luctus, lectus diam hendrerit arcu, id tristique sapien elit eget mauris. Nulla facilisi. Nunc eget ultricies erat, quis porta nunc. Sed accumsan risus dui, non semper nisl tristique ut. Etiam id lorem at augue mollis tristique vel a ex. Ut non felis tempus, interdum erat at, rhoncus quam. Vestibulum sit amet erat non diam pulvinar congue. In finibus neque eu bibendum vulputate.</p>
                               <div class="col-12 text-center mb-4">
                                <a href="horario.php" class="btn btn-primary m-2">Horario</a>
                                <a href="excursiones.php" class="btn btn-primary m-2">Excursiones</a>
                                <a href="materias.php" class="btn btn-primary m-2">Materias</a>
                                <a href="salidas-laborales.php" class="btn btn-primary m-2">Salidas Laborales</a>
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
           
        </section>
        <section class="Informacion">
                        <h2 class="ColumnasCentradas" id="FAQ">Preguntas Frecuentes</h2>
                        <div class="masthead-subheading font-weight-light mb-0">
                            
                            <div class="ColumnasCentradas">
                                
                                <div>
                                    <h4>Que Horario Tiene Secretaria.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum iaculis sapien, eget tristique ex euismod eu. Nulla nec ornare eros. Vestibulum at magna ac dui molestie tristique ut at justo. Nunc ultricies hendrerit sodales. Maecenas aliquet lacinia ante, non pretium nibh. Vivamus ipsum urna, maximus vel sapien sed, interdum suscipit nisi. Fusce id vehicula mauris. Pellentesque pretium molestie orci, at faucibus urna lacinia eu. Suspendisse sagittis, dolor ac tempor gravida, est ex pellentesque metus, quis facilisis est ex at justo. Vestibulum non vehicula neque. Duis faucibus, odio sed porta elementum, diam velit mattis tortor, sed scelerisque tortor dui sit amet turpis. Vivamus justo risus, fringilla ut est malesuada, rhoncus euismod enim. In at convallis libero.
                                        
                                        </p>
                                </div>
                                <div>
                                    
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/HSecretaria.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="masthead-subheading font-weight-light mb-0">
                            
                            <div class="ColumnasCentradas">
                                <div>
                                    
                                    <img class="img-fluid rounded mb-5" src="./Imagenes/IFuturo.jpeg" alt="..." width="200%"/>
                                </div>
                                <div>
                                    <h4>Proggreso e inversion en las instalaciones.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum iaculis sapien, eget tristique ex euismod eu. Nulla nec ornare eros. Vestibulum at magna ac dui molestie tristique ut at justo. Nunc ultricies hendrerit sodales. Maecenas aliquet lacinia ante, non pretium nibh. Vivamus ipsum urna, maximus vel sapien sed, interdum suscipit nisi. Fusce id vehicula mauris. Pellentesque pretium molestie orci, at faucibus urna lacinia eu. Suspendisse sagittis, dolor ac tempor gravida, est ex pellentesque metus, quis facilisis est ex at justo. Vestibulum non vehicula neque. Duis faucibus, odio sed porta elementum, diam velit mattis tortor, sed scelerisque tortor dui sit amet turpis. Vivamus justo risus, fringilla ut est malesuada, rhoncus euismod enim. In at convallis libero.
                                        
                                        </p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="masthead-subheading font-weight-light mb-0">
                            
                            <div class="ColumnasCentradas">
                                
                                <div>
                                    <h4>Innovacion y implicacion</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum iaculis sapien, eget tristique ex euismod eu. Nulla nec ornare eros. Vestibulum at magna ac dui molestie tristique ut at justo. Nunc ultricies hendrerit sodales. Maecenas aliquet lacinia ante, non pretium nibh. Vivamus ipsum urna, maximus vel sapien sed, interdum suscipit nisi. Fusce id vehicula mauris. Pellentesque pretium molestie orci, at faucibus urna lacinia eu. Suspendisse sagittis, dolor ac tempor gravida, est ex pellentesque metus, quis facilisis est ex at justo. Vestibulum non vehicula neque. Duis faucibus, odio sed porta elementum, diam velit mattis tortor, sed scelerisque tortor dui sit amet turpis. Vivamus justo risus, fringilla ut est malesuada, rhoncus euismod enim. In at convallis libero.
                                        
                                        </p>
                                </div>
                                <div>
                                    
                                    <video loop autoplay muted controls>
                                        <source src="./Imagenes/ConoceVid.mp4" type="video/mp4">
                                        <source src="./Imagenes/ConoceVid.webm" type="video/webm">
                                        Tu navegador no admite la etiqueta de video.
                                    </video>
                                </div>
                            </div>
                        </div>
<br>
                        <div class="ColumnasCentradas fondodiv">
                                
                            <div>
                                <h3>Equip directiu</h3>
            <ul>
                <li><b>Directora:</b> Montse Arias </li>
                <li><b>Cap d’estudis Adjunt i coordinació general:</b> <br>David Roda </li>
                <li><b>Cap d’Estudis ESO:</b> María Ferrando </li>
                <li><b>Cap d’Estudis Batxillerat:</b> Montse Ochoteco </li>
                <li><b>Cap d’Estudis Cicles Formatius:</b> Marta Estévez </li>
                <li><b>Administrador:</b> Manel Lorente</li>
                <li><b>Coordinadora Pedagògica:</b> Davinia Montesinos </li>
            </ul></div>
            <div>
            <h3>Equip de Coordinació</h3>
            <ul>
                <li><b>Coordinació d’ESO:</b> Isabel Díaz</li>
                <li><b>Coordinació de Batxillerat:</b> Olga Soler</li>
                <li><b>Riscos Laborals i manteniment d’infraestructures:</b> Carolina Madrid</li>
                <li><b>Convivència i inclusió:</b> Gemma Cubells</li>
                <li><b>Coordinadors d’Informàtica:</b> <br>Alejandro Fortuna i Javier Garcia</li>
                <li><b>Coordinador FCT/DUAL:</b> Maria Vidal</li>
            </ul></div>
                            
                            <div>
                                
                                <img class="img-fluid rounded mb-5" src="https://st2.depositphotos.com/1017986/10904/i/450/depositphotos_109042064-stock-photo-businesswoman-with-glasses-with-team.jpg" alt="..." />
                            </div>
                        </div>
                        
                        <div class="ColumnasCentradas">
                            
                            <div id="infoContainer"></div>

                            <script src="script.js"></script>
                        </div>
                        <div class="ColumnasCentradas">
                                
                            
                            <div>
                                <img class="img-fluid rounded mb-5" src="./Imagenes/Teeam.png" alt="..." width="200%"/>
                                
                            </div>
                            
                        </div>

                        

        </section>

        <!-- Sección Contactanos-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Titulo Sección Contactanos-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacte</h2>
                <!-- Icono separador-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Formulario Sección Contactanos-->

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form method="POST" action="https://formspree.io/f/mldjredb" class="needs-validation" novalidate>
                        
                            <div class="container mt-5">
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validarNombre">Nombre:<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="validarNombre" name="validarNombre" required>
                                    </div>
                                </div>
                        
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validarApellidos">Apellidos:<span class="red">*</span></label>
                                        <input type="text" class="form-control" id="validarApellidos" name="validarApellidos" required>
                                    </div>
                                </div>
                        
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validarEmail">Email:<span class="red">*</span></label>
                                        <input type="email" class="form-control" id="validarEmail" name="validarEmail" required>
                                    </div>
                                </div>
                        
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validarTelefono">Teléfono:</label>
                                        <input type="number" class="form-control" id="validarTelefono" name="validarTelefono" max="999999999">
                                    </div>
                                </div>
                        
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validarTema">Tema:<span class="red">*</span></label>
                                        <select class="custom-select" id="validarTema" name="validarTema" required>
                                            <option selected disabled value="">Selecciona...</option>
                                            <option value="Contacta con secretaria">Contacta con secretaria</option>
                                            <option value="Propuesta de colaboración/mejora">Propuesta de colaboración/mejora</option>
                                            <option value="Eliminar mis Datos">Eliminar mis Datos</option>
                                            <option value="Otras cuestiones">Otras cuestiones</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validarAsunto">Asunto:</label>
                                        <input type="text" class="form-control" id="validarAsunto" name="validarAsunto" required>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label for="validationMensaje">Mensaje:<span class="red">*</span></label>
                                    <textarea class="form-control" id="validationMensaje" name="validationMensaje" rows="4" required></textarea>
                                </div>
                        
                                <div class="form-group mb-3">
                                    <button class="btn btn-primary" type="submit" name="submit">Enviar</button>
                                    <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
                                </div>
                            </div>
                        
                        </form>
                        
                        
                        
                    </div>
                
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
