<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="../../resources/css/style.css">
    <title>Turnos</title>
</head>
<body>
    <?php
    require 'header.php';
    ?>
    <main class="container">
        <br><br><br>
        <div class="d-flex align-items-center justify-content-center">
            <h2 class="title text-center me-2">Lista de Turnos</h2>
            <button id="btn-icono" class="btn btn-warning d-flex align-items-center position-relative ms-4">
                <i class="bi bi-exclamation-circle-fill"></i>
                <span id="btn-texto" class="ms-2 position-absolute start-100 top-50 translate-middle-y d-none">Recordá que los turnos son de <strong>ESTA SEMANA</strong></span>
            </button>
        </div>
        <br>
        <?php
        require '/xampp/htdocs/tatiyvero/admin/config/database.php';

        // Consultar los turnos
        $sql = "SELECT * FROM turnos WHERE WEEK(fecha_nacimiento) = WEEK(CURDATE()) AND YEAR(fecha_nacimiento) = YEAR(CURDATE())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $turnos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Comenzar a construir la tabla con Heredoc
        if (!empty($turnos)) {
            $contenido = <<<HTML
            <table class="table table-striped table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre y Apellido</th>
                        <th>Teléfono</th>
                        <th>Servicio</th>
                        <th>Turno</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
            HTML;

            // Iterar sobre los turnos para crear las filas
            foreach ($turnos as $turno) {
                $nombre = ucfirst($turno['nombre']);
                $apellido = ucfirst($turno['apellido']);
                $turnoTexto = ucfirst($turno['turno']);
                $fechaNacimiento = new DateTime($turno['fecha_nacimiento']);

                // Agregar fila al contenido
                $contenido .= <<<HTML
                <tr>
                    <td>{$turno['id_turno']}</td>
                    <td>{$nombre} {$apellido}</td>
                    <td>{$turno['telefono']}</td>
                    <td>{$turno['servicio']}</td>
                    <td>{$turnoTexto}</td>
                    <td>{$fechaNacimiento->format('d/m/Y')}</td>

                </tr>
                HTML;
            }

            // Cerrar la tabla
            $contenido .= <<<HTML
                </tbody>
            </table>
            HTML;

            // Mostrar el contenido
            echo $contenido;
        } else {
            echo <<<HTML
            <p class="text-center">No hay turnos disponibles.</p>
            HTML;
        }
        ?>
    </main>
    <script src="../../resources/js/icono.js"></script>
</body>
</html>
