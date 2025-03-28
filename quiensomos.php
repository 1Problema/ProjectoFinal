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
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>IES Torreroja</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" a href="logo3.png"/>
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
                        <li class="nav-item mx-0 mx-lg-1 Aumento"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inici</a></li>
                        <li class="nav-item mx-0 mx-lg-1 Aumento"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Origenes">Origen</a></li>
                        <li class="nav-item mx-0 mx-lg-1 Aumento"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Onde">Donde estamos</a></li>
                        <li class="nav-item mx-0 mx-lg-1 Aumento"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#llegar">Como llegar</a></li>
                        <?php if (isset($_SESSION['username'])): ?>
                        <!-- Si el usuario ha iniciado sesión -->
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded Aumento">Bienvenido, <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded Aumento" href="logout.php">Cerrar Sesión</a>
                        </li>
                    <?php else: ?>
                        <!-- Si el usuario NO ha iniciado sesión -->
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded Aumento" href="iniciar.php">Iniciar Sesión</a>
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
                 <div>
                <img class="masthead-avatar mb-5" src="./Imagenes/TrLogo.png" alt="..." />
                <img class="masthead-avatar mb-5" src="./Imagenes/escut_Vila.png" alt="..." />
                </div>
                <!-- Titulo Portada-->
                <h1 class="masthead-heading text-uppercase mb-0">Ies Torreroja</h1>
                <!-- Icono separador-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class ="fas fa-user-circle"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Subtitulo Portada-->
                <p class="masthead-subheading font-weight-light mb-0 Aumento">L'Institut</p>
            </div>
        </header>
                <!-- Quien Somos Texto-->
                 <div class="container">
                    <div class="row">
                        
                        <div id="Origenes"><p class="lead">
                            <h2>Orígens</h2>
                        <p class="Aumento">

                            L’Institut Torre Roja és un centre públic de secundària que està situat a la localitat de Viladecans i que ofereix els seus serveis educatius als barris de la Torre-roja i Campreciós.
                            seu nom és originari d’una fortificació medieval situada a Viladecans, el nom de la qual era Torre Burguesa, perquè era des d’on es controlava la Cuadra Burguesa, controlada per jurisdicció del territori del Castell Eramprunyà.
                            <br> Se li va donar el sobrenom de Roja pel color vermell característic de les roques del territori de l’Eramprunyà amb les quals està construïda.
                            <br>
                            </p>
                        
                            <div class="container" style="max-width: 600px;"> <!-- Reduce el tamaño del contenedor -->
                                <br>
                                <div id="theCarousel" class="carousel slide" data-ride="carousel" style="max-width: 500px; margin: auto;"> <!-- Reduce el tamaño del carrusel -->
                                  <!-- Indicadores -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#theCarousel" data-slide-to="1"></li>
                                    <li data-target="#theCarousel" data-slide-to="2"></li>
                                  </ol>
                              
                                  <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img src="./Imagenes/Torre1.jpeg" alt="Torre 1">
                                    </div>
                                    <div class="item">
                                      <img src="./Imagenes/Torre2.jpeg" alt="Torre 2">
                                    </div>
                                    <div class="item">
                                      <img src="./Imagenes/Torre3.jpeg" alt="Torre 3">
                                    </div>
                                  </div>
                              
                                  <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                  </a>
                                  <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Siguiente</span>
                                  </a>
                                </div>
                              </div>
                              
                              
                        </div>
                        <div class=""><p class="lead">
                            <h2>Situacion</h2>
                        <p class="Aumento">

                            L’Institut Torre Roja acull actualment al voltant de 1.000 alumnes d’ESO, Batxillerat, PFI i FP. Aquest alumnat es distribueix en 4 línies pels nivells de 1r, 2n i 3r de l’ESO i 6 línies de 4t d’ESO. També compta amb 3 grups de 1r de batxillerat i 2 grups de 2n de batxillerat.<br>
                            A més s’hi imparteixen cicles formatius de grau mig d’atenció a les persones amb situació de dependència, sistemes microinformàtics i xarxes, gestió administrativa i activitats comercials. Aquest últim cicle de comerç ofereix la continuïtat amb un grau superior de gestió de vendes i espais comercials.<br>
                            <br>
                            Per a l’alumnat que no ha graduat a l’ESO, l’institut disposa d’un programa de formació inicial (PFI) d’auxiliar de pintura. Igualment, el centre compta amb un grup de suport intensiu per a l’escolarització inclusiva (SIEI[1], antigues USEE) i una aula d’acollida (AA) per a acompanyar l’alumnat nouvingut.
                            <br>
                            <br>
                            El nostre centre fa més de 15 anys que treballa en un model propi d’atenció a la diversitat en què l’orientació educativa (abans psicopedagogia) és un dels eixos vertebradors del projecte educatiu de centre (PEC). Aquest model aposta per estratègies psicològiques, pedagògiques, organitzatives i de gestió que treballen de forma entrellaçada per oferir un servei educatiu centrat en la diversitat i la inclusió.<br>
                            <br>
<img src="https://agora.xtec.cat/iestorreroja/wp-content/uploads/usu1423/2023/03/TR2-1024x301.png">
<br>
<br>
En ple segle XXI el nostre centre aposta per un treball en xarxa i multidisciplinar. L’institut treballa coordinadament amb serveis externs com el Centre de Salut Mental Infantil i Juvenil (CSMIJ), l’Hospital de Dia d’Adolescents (HDA), la Unitat de Crisi d’Adolescents (UCA), la Unitat d’Escolarització Compartida (UEC), les escoles de primària, l’Ajuntament (departaments d’educació, promoció econòmica, serveis socials, policia local, etc.), les ONG, el Centre d’Atenció Primària o ambulatori pediàtric (CAP), l’Equip d’Atenció a la Infància i l’Adolescència (EAIA), l’ONCE, les fundacions, les empreses i comerços, els Mossos d’Esquadra, etc.<br>
<br>
L’institut Torre Roja és des de fa anys un centre formador que acull futurs docents que fan el màster de professorat. Entenem que tot allò que fem per a la millora de la formació inicial dels docents a les universitats revertirà tard o d’hora en els centres educatius de Catalunya. Actualment comptem amb un 12% del nostre professorat que participa del programa d’innovació de centres formadors de pràctiques del Màster Universitari de Formació del Professorat de Secundària (MUFPS).    
                        
                        </p>

                        
                        
                              
                        </div>
                        <h2>Conoce el Centro</h2>
                        <div class="ColumnasCentradas Aumento">
                            
                            <div>
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
                    <div class="Aumento" id="Onde"><p class="lead">
                        <h2>Donde Estamos</h2>
                        </div><p class="Aumento">Institut Torre Roja
                            L’IES Torre Roja: està situat al Parc de la Torre Roja de Viladecans.<br> Podeu veure la seva situació al mapa:</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1942.9281360958444!2d2.020056819035026!3d41.321814135188966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49cf2aaf19807%3A0x2736ab5b46fbd471!2sInstitut%20Torre%20Roja!5e0!3m2!1ses!2ses!4v1739214023531!5m2!1ses!2ses" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                        <div id="llegar" class="Aumento">
                            <h2>Com Arribar-hi?</h2>
                            <dl>
                            <dt>Transporte Publico (Renfe)</dt>
                                <dd>Si veniu amb RENFE, heu de d’agafar la línea R2 o R2 sud i parar a l’estació de Viladecans. Teniu en compte que no tots els trens tenen parada a Viladecans. Veieu els horaris. Un cop arribeu a l’estació de Viladecans, disposeu de tres línies d’autobús que us aproparan a la ciutat, el Vilabús 1 (VB1), el Vilabús 2 (VB2) i el L88, que uneix Viladecans amb Sant Climent de Llobregat.</dd>
                                <dt>Transporte Publico (Bus)</dt>
                                <dd>Tant si agafeu el VB1 o com el VB2, podeu parar a la parada “Calaceit – Marià Sanjuan” o “Pompeu Fabra – Marià Sanjuan”. Des de qualsevol d’aquestes parades al nostre institut hi ha 5 minuts caminant. Podeu consultar la situació de l’IES al següent mapa (l’IES Torre Roja es troba a la intersecció entre el carrer Marià Sanjuan Cuchi i l’avinguda Jocs Olímpics).</dd> <br>
                                <dd>Si agafeu el L88, disposeu d’una parada a la mateixa porta de l’institut. El nom de la parada és “Marià Sanjuan Cuchi – Av. Jocs Olímpics”.</dd>
                                <img src="./Imagenes/FotoSat.png">
                                <dd><b>BUS. Depenent d’on veniu, teniu la possibilitat d’agafar una d’aquestes línies d’autobús.</b></dd> <br>
                                <dd>L80. Gavà (Rambla Pompeu Fabra) – Barcelona (Plaça d’Espanya)</dd>
                                <dd>L81. Gavà (Rambla Pompeu Fabra) – Barcelona (Plaça d’Espanya)</dd> 
                                <dd>L82. Gavà (Rambla Pompeu Fabra) – L’Hospitalet de Llobregat (Santa Eulàlia)</dd> 
                                <dd>L85. Gavà (Av. Joan Carles I / Av. Eramprunyà) – L’Hospitalet de Llobregat (Santa Eulàlia)</dd><br>
                                <dd>L86. Viladecans (Av. Can Palmer) – Barcelona (Av. Paral·lel / Plaça d’Espanya)</dd> 
                                <dd>L87. Viladecans (Av. Can Palmer) – Barcelona (Av. Paral·lel / Plaça d’Espanya)</dd><br>
                                <dd>L96. Sant Boi de Llobregat (J. Torras i Bages – “Estació FGC Sant Boi”) – Castelldefels (“Bellamar” – Av. Eucaliptus)</dd><br>
                                <dd>L97. Barcelona (Plaça Reina M. Cristina) – Castelldefels (“Bellamar” – Av. Eucaliptus)</dd> <br>
                                
                                
                            <dt>Transporte Privado</dt>
                            <dd>Si veniu des de Barcelona amb transport privat (cotxe, moto…), agafeu la C-32 direcció Castelldefels – Tarragona. Preneu la Sortida 51 (Viladecans Nord). Continueu fins que arribeu al primer semàfor (Av. Generalitat) i gireu a la dreta. Continueu per Av. Generalitat fins que arribeu a una rodona. Preneu la tercera sortida (és a dir, gireu a l’esquerra) i continueu per l’Avinguda Francesc Macià i el Carrer Marià Sanjuan. Quan arribeu a la rodona, veureu l’institut a la vostra dreta.</dd>
                            <img src="./Imagenes/SatCar.png">
                        </dl>
                            </div>
                    </div>
                </div>


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