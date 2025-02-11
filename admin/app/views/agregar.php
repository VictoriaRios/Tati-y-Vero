<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="../../resources/css/style.css">
    <title>Agregar</title>
</head>
<body>
    <?php
    require 'header.php';
    session_start();
    if (isset($_GET['tabla'])) {
        $tabla = $_GET['tabla'];
    } else {
        $_SESSION['mensaje'] = "No se especificó una tabla para agregar datos.";
        $_SESSION['tipo_mensaje'] = 'alert-danger';
        header('Location: /tatiyvero/admin/index.php'); // Redirige al inicio en caso de error
        exit();
    }
    ?>
    <div class="container mt-5">
            
            <br>
            <?php
    if (isset($_SESSION['mensaje'])): 
        $tipoMensaje = isset($_SESSION['tipo_mensaje']) ? $_SESSION['tipo_mensaje'] : 'alert-primary';
    ?>
        <div class="d-flex justify-content-center mt-3">
            <div id="autoDismissAlert" class="alert <?= $tipoMensaje; ?> alert-dismissible fade show text-center w-50" role="alert">
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
    <main class= "container align-items-center justify-content-center">
        <div class="text-center">
            <h1 class="title">Agrega un Nuevo Servicio</h1>
        </div>
        <div class="mt-4">
            <p>Estas agregando un nuevo producto en la tabla <strong><?= htmlspecialchars($tabla); ?></strong></p>
        </div>
        <div class="tablaAgregar ">
        <form action="/tatiyvero/admin/index.php?action=insertar" method="post">
            <div class="mb-3 mt-4">
                <label for="nombre"  class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="precio"  class="form-label">Precio:</label>
                <input type="number" class="form-control" name="precio" id="precio" required>
            </div>
            <input type="hidden" name="tabla" value="<?= htmlspecialchars($tabla); ?>">
            <button type="submit" class="btn btn-primary mt-3">Agregar</button>
        </form>
        </div>
    </main>
    
</body>
</html>