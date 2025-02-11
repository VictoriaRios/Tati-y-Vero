<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/tatiyvero/resurces/css/style.css">
</head>
<body>
    <?php session_start(); ?>
<header class="sticky-top py-3">
    <nav class="container d-flex justify-content-between align-items-center">
       
        <!-- Logo -->
        <a class="navbar-brand" href="/tatiyvero/index.php?action=inicio">
            <img src="../../resurces/img/logo-veroytati.svg" alt="Logo" class="img-fluid" style="background-color: white;">
        </a>
        <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <!-- Menú de navegación -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="/tatiyvero/index.php?action=inicio">Inicio</a>
            </li>

            <li class="nav-item dropdown">
                <li class=" dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu text-center">
                        <li><a class="dropdown-item nav-link" href="/tatiyvero/index.php?action=pestañas">Pestañas</i></a></li>
                        <li><a class="dropdown-item nav-link" href="/tatiyvero/index.php?action=cejas"><i>Cejas</i></a></li>
                        <li><a class="dropdown-item nav-link" href="/tatiyvero/index.php?action=uñas"><i>Uñas</i></a></li>
                    </ul>
                </li>
                
            <li class="nav-item">
                <a class="nav-link text-white" href="/tatiyvero/index.php?action=nosotras">Nosotras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/tatiyvero/index.php?action=contacto">Contacto</a>
            </li>
        </ul>
    </nav>
</header>
    <section class="sectionHeader justify-content-center align-items-center">
        <h1 class="text-white text-center">Tati y Vero</h1>
    </section>
    
    <!-- <script src="../../reurces/js/menu.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/tatiyvero/resurces/js/menu.js"></script>
</body>
</html>