<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    session_start();
    if (!isset($_SESSION['dni'])) {
    header('Location: login.php');
    exit();
}; ?>
    ?> -->
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <!-- <img src="../../resources/img/logo-veroytati.svg" alt="Logo de Tati y Verp" class="img-fluid w-25 m-auto"> -->
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active fs-5" aria-current="page" href="/tatiyvero/admin/index.php?action=home">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="/tatiyvero/admin/index.php?action=turnos">Turnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="/tatiyvero/admin/index.php?action=uñas">Uñas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="/tatiyvero/admin/index.php?action=pestañas">Pestañas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="/tatiyvero/admin/index.php?action=cejas">Cejas</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 btn btn-danger mt-2" href="/tatiyvero/admin/index.php?action=logout">Cerrar Sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
