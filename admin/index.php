<?php
session_start();
require '/xampp/htdocs/tatiyvero/admin/config/database.php';
require '/xampp/htdocs/tatiyvero/admin/app/controller/loginController.php'; 
require '/xampp/htdocs/tatiyvero/admin/app/controller/servicioController.php'; 

$login = new LoginController($pdo);
$servicio = new ServicioController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST'  && $_GET['action'] === 'editar_servicio') {
    $id_servicio = $_POST['id_servicio'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tabla = $_POST['tabla']; // Tabla a la que se le va a hacer la actualización
    
    // Llamamos al método de editar servicio
    $servicio->editar($id_servicio, $nombre, $precio, $tabla);
}elseif($_SERVER['REQUEST_METHOD'] === 'POST'  && $_GET['action'] === 'insertar'){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tabla = $_POST['tabla'];

    $servicio->agregar( $nombre, $precio, $tabla);

}elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login->IniciarSesion();
   
}elseif (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'home':
            header('Location: http://localhost/tatiyvero/admin/app/views/home.php');
            break;
        case 'uñas': 
            header('Location: http://localhost/tatiyvero/admin/app/views/uñas.php');
            break;
        case 'pestañas': 
            header('Location: http://localhost/tatiyvero/admin/app/views/pestañas.php');
            break;
        case 'cejas': 
            header('Location: http://localhost/tatiyvero/admin/app/views/cejas.php');
            break;
        case 'turnos':
            header('Location: http://localhost/tatiyvero/admin/app/views/turnos.php');
            break;
        case 'logout':
            $login->CerrarSesion();
            break;
        case 'agregar':
            if (isset($_GET['tabla'])) {
                $tabla = $_GET['tabla'];
                header("Location: http://localhost/tatiyvero/admin/app/views/agregar.php?tabla=$tabla");
                exit();
            } else {
                $_SESSION['mensaje'] = "Falta el nombre de la tabla.";
                $_SESSION['tipo_mensaje'] = 'alert-danger';
                header('Location: http://localhost/tatiyvero/admin/app/views/uñas.php'); // Redirige de vuelta en caso de error
                exit();
            }
        break;
        case 'eliminar':
            if (isset($_GET['id']) && isset($_GET['tabla'])) {
                $id = intval($_GET['id']);
                $tabla = $_GET['tabla'];
                $servicio->eliminar($id, $tabla);
            }
            break;
    }
} else {
    header('Location: http://localhost/tatiyvero/admin/app/views/login.php');
}
?>
