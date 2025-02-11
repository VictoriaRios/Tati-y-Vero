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
    <title>Servicios | Pestañas</title>
</head>
<body>
    <?php require 'header.php'; ?>

        <section>
            <h1 class="titleServicios">Pestañas</h1>
        </section>
        <div class="table table-bordered table-striped" style="min-height: 50vh;">
        <?php    
        require '/xampp/htdocs/tatiyvero/config/database.php';

        // Consulta para obtener todos los empleados
        $sql = "SELECT * FROM servicio_pestañas";
        $stmt = $pdo->prepare($sql);  // Usa $pdo directamente, ya que no está en una clase
        $stmt->execute();

        // Obtener todos los resultados en un arreglo asociativo
        $preciosPestañas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Crear la tabla HTML usando HEREDOC
        $tablaPestañas = <<<HTML
            <div class="table-responsive text-center">
                <table class="table table-borderless text-center">
                    <tbody class="text-center">
        HTML;

        // Recorrer los empleados y agregar las filas a la tabla
        foreach ($preciosPestañas as $preciosPestaña) {
            
            $precioFormateado = '$' . number_format($preciosPestaña['precio'], 0, ',', '.'); // Formatea el precio con separadores de mile
            $tablaPestañas .= <<<HTML
            <tr class="tabla text-center">
                <td class=" nombre-borde">{$preciosPestaña['nombre']}</td>
                <td class="precio-borde">{$precioFormateado}</td>
            </tr>
        HTML;
        }

        // Cerrar la tabla
        $tablaPestañas .= "</tbody></table></div>";

        // Mostrar la tabla generada
        echo $tablaPestañas;
        ?>

    </div>
    <?php require 'footer.php'; ?> 

    <!--SCRIPTS-->
    <script src="../../resurces/js/menu.js"></script>  
</body>
</html>