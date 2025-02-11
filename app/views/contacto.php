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
    <title>Contacto</title>
</head>
<body>
<?php require 'header.php'; 

if (isset($_SESSION['mensaje'])): 
    $tipoMensaje = isset($_SESSION['tipo_mensaje']) ? $_SESSION['tipo_mensaje'] : 'alert-primary';
?>
    <div class="d-flex justify-content-center mt-3">
        <div id="autoDismissAlert" class="alert <?= $tipoMensaje; ?> alert-dismissible fade show text-center w-50" role="alert">
            <?= $_SESSION['mensaje']; ?>
        </div>
    </div>
    <?php 
    unset($_SESSION['mensaje'], $_SESSION['tipo_mensaje']); 
    ?>
<?php endif; ?>

    <section class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="row">
            <form action="/tatiyvero/index.php" method="post" >
                <h1 class="text-center text-decoration-underline h1Contacto">Pedi tu turno</h1>
                <div class="row mb-3">
                    <label for="nombre" class="form-label col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10 ">
                        <input type="text" name="nombre" class="form-control inputContacto " id="nombre" placeholder="Jane" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="apellido" class="form-label col-sm-2 col-form-label">Apellido:</label>
                    <div class="col-sm-10">
                        <input type="text" name="apellido" id="apellido" class="form-control inputContacto" placeholder="Doe" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telefono" class="form-label col-sm-2 col-form-label">Teléfono:</label>
                    <div class="col-sm-10">
                        <input type="tel" name="telefono" id="telefono" class="form-control inputContacto" placeholder="1133996688" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="fecha_nacimiento" class="form-label col-sm-2 col-form-label" >Fecha:</label>
                    <div class="col-sm-10">
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control inputContacto" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="servicio" class="form-label col-sm-2 col-form-label">Servicio:</label>
                    <div class="col-sm-10">
                        <select name="servicio" id="servicio" class="form-select inputContacto" required>
                            <option value="" hidden>Seleccionar</option>
                            <option value="Uñas">Uñas</option>
                            <option value="Pestañas">Pestañas</option>
                            <option value="Cejas">Cejas</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="turno" class="form-label col-sm-2 col-form-label">Turno:</label>
                    <div class="col-sm-10">
                        <select name="turno" id="turno" class="form-select inputContacto hover-shadow-red" required>
                            <option value="" hidden>Seleccionar</option>
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                        </select>
                    </div>
                </div>
                <div class="text-center divBtn">
                    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <?php require 'footer.php'; ?> 

    <!--SCRIPTS-->
    <script src="../../resurces/js/menu.js"></script>  
</body>
</html>