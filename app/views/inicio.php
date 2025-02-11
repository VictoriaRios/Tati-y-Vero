<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../resurces/css/style.css">
    <link rel="shortcut icon" href="../../resurces/img/logo-veroytati.svg" type="image/x-icon">
    <title>Inicio</title>
</head>
<body>
    <?php require 'header.php'; ?>
    

    <section class="container my-5">
    <div class="row text-center">
        <!-- Tarjeta UÑAS -->
        <div class="col-lg-4 ">
            <div class="card  position-relative">
                <img src="../../resurces/img/manicura.jpg" class="card-img-top" alt="Uñas">
                <div class="card-img-overlay   justify-content-between">
                    <h3 class="card-title text-center">UÑAS</h3>
                    <a href="/tatiyvero/index.php?action=uñas">
                        <button class="btn mx-auto position-relative" type="submit">Ver más</button>
                    </a>
                        

                    
                </div>
            </div>
        </div>
        <!-- Tarjeta PESTAÑAS -->
        <div class="col-lg-4 ">
            <div class="card  position-relative">
                <img src="../../resurces/img/pestañas.jpg" class="card-img-top" alt="Pestañas">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <h3 class="card-title text-center">PESTAÑAS</h3>
                    <a href="/tatiyvero/index.php?action=pestañas">
                        <button class="btn mx-auto position-relative" type="submit">Ver más</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Tarjeta CEJAS -->
        <div class="col-lg-4 ">
            <div class="card position-relative">
                <img src="../../resurces/img/cejas.jpg" class="card-img-top" alt="Cejas">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                    <h3 class="card-title text-center">CEJAS</h3>
                    <a href="/tatiyvero/index.php?action=cejas">
                        <button class="btn mx-auto position-relative" type="submit">Ver más</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    

    <?php require 'footer.php'; ?>

    <!--SCRIPTS-->
    <script src="../../resurces/js/menu.js"></script>  
</body>
</html>