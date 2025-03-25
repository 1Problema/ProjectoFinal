<head>
    <title>RFID M4CHINE</title>
    <!-- Favicon-->        
    <link rel="icon" type="image/x-icon" href="assets/logo3.png" />
</head>
<link href="/css/styles.css" rel="stylesheet" />
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavpolitica">
            <div class="container">
                <a class="navbar-brand" href="../index.html"><img src="/assets/img/nav-logo.png" alt="..." width="80" /></a>
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link"  href="/rfidweb/php/index.php">Empleados</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/rfidweb/php/actual.php">Registros de Entrada</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/rfidweb/php/empleados_rfid.php">Tarjetas RFID</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/rfidweb/php/agregarempleado.php">Agregar Empleados</a></li>
                    <li class="nav-item"><a class="nav-link"  href="/index.html#contacto">Ayuda & Asistencia</a></li>
		    <li class="nav-item separator"></li>
		    <?php
		    session_start();
		    if(isset($_SESSION['username'])) {
			echo '<li class="nav-item"><span class="nav-link">' . $_SESSION['username'] . '</span></li>'; //Muestra el nombre de usuario
		    }
		    ?>
		    <li class="nav-item"><a class="nav-link" href="/iniciar.php">Salir</a></li>
                </ul>
            </div>
</nav>
