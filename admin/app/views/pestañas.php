<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="../../resources/css/style.css">
    <title>Pestañas</title>
</head>
<body>
<?php
    require 'header.php';
    require '../../config/database.php';
    
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


        <!-- Bloque de alerta para mostrar mensajes de la sesión -->
        
        <br>
        <h1 class="title text-center mt-4 mb-4">Lista Servicios Pestañas</h1>
        <div class="container mb-4">
            <a href="/tatiyvero/admin/index.php?action=agregar&tabla=servicio_pestañas" class="btn btn-success ms-auto mt-3">Agregar</a>
        </div>
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID Servicio</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM servicio_pestañas";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($servicios as $servicio): ?>
                    <tr>
                        <td><?= $servicio['id_servicio'] ?></td>
                        <td><?= $servicio['nombre'] ?></td>
                        <td>$<?= $servicio['precio'] ?></td>
                        <td>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal" onclick="cargarDatosModal(<?= $servicio['id_servicio'] ?>, '<?= $servicio['nombre'] ?>', <?= $servicio['precio'] ?>)"><i class="bi bi-pencil-square"></i></a>
                            <a href="/tatiyvero/admin/index.php?action=eliminar&id=<?= $servicio['id_servicio'] ?>&tabla=servicio_uñas"  class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este turno?')"> <i class="bi bi-trash"></i> </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Modal de Edición -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="formEditarServicio" method="POST" action="/tatiyvero/admin/index.php?action=editar_servicio">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Servicio</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>
                <input type="hidden" id="id_servicio" name="id_servicio">
                <input type="hidden" id="tabla" name="tabla" value="servicio_pestañas"> <!-- Tabla que se está editando -->
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../resources/js/icono.js"></script>
</body>
</html>