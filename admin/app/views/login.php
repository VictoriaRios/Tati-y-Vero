<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resources/css/style.css">
    <title>Login</title>
</head>
<body>
    <main class="login">
        <section class="login d-flex align-items-center justify-content-center">
            <h1 class="titleServicios">Tati y Vero</h1>

            <!-- Verificar si existe un mensaje en la sesión -->
                        
        <br>
        <?php
            if (isset($_SESSION['mensaje'])): 
                $tipoMensaje = isset($_SESSION['tipo_mensaje']) ? $_SESSION['tipo_mensaje'] : 'alert-primary';
            ?>
                <div class="text-center align-items-center justify-content-center">
                    <div id="autoDismissAlert" class="alert <?= $tipoMensaje; ?> alert-dismissible fade show text-center " role="alert">
                        <?= $_SESSION['mensaje']; ?>
                    </div>
                </div>

                <script>
                    // Espera 3 segundos (3000 ms) antes de cerrar la alerta
                    setTimeout(function() {
                        var alert = document.getElementById('autoDismissAlert');
                        if (alert) {
                            alert.classList.remove('show');
                            alert.classList.add('fade');
                        }
                    }, 3000);
                </script>

            <?php 
                unset($_SESSION['mensaje'], $_SESSION['tipo_mensaje']); 
            endif;
            ?>

            <form action="/tatiyvero/admin/index.php" method="post" class="d-flex flex-column bg-white w-25 p-4 rounded border border-2" autocomplete="off">
                <label for="dni" class="fs-4 text-dark mt-3">Usuario</label>
                <input type="text" id="dni" name="dni" required class="form-control border border-dark p-2 mb-2 border-opacity-75">

                <label for="password" class="fs-4 text-dark mt-3">Contraseña</label>
                <input type="password" id="password" name="password" required class="form-control border border-dark p-2 mb-2 border-opacity-75">

                <button type="submit" class="btn btn-success fs-5 mt-4">Ingresar</button>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
