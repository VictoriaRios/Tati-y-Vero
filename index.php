<?php
session_start();
require '/xampp/htdocs/tatiyvero/config/database.php';
require '/xampp/htdocs/tatiyvero/app/controller/formController.php'; 

$formulario = new Formulario($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $datosValidados = $formulario->validarDatos($_POST);

    if (is_array($datosValidados) && isset($datosValidados[0])) {
        // Si hay errores, guarda los mensajes en la sesión
        header('Location: http://localhost/tatiyvero/app/views/contacto.php');
        exit;
    } else {
        // Si no hay errores, guarda los datos
        $formulario->guardarDatos($_POST);
        header('Location: http://localhost/tatiyvero/app/views/contacto.php');
        exit;
    }

}elseif(isset($_GET['action'])){
    switch($_GET['action']){
        case 'uñas': 
            header('Location: http://localhost/tatiyvero/app/views/uñas.php');
        break;
        case 'pestañas': 
            header('Location: http://localhost/tatiyvero/app/views/pestañas.php');
        break;
        case 'cejas': 
            header('Location: http://localhost/tatiyvero/app/views/cejas.php');
        break;
        case 'contacto':
            header('Location: http://localhost/tatiyvero/app/views/contacto.php');
        break;
        case 'nosotras':
            header('Location: http://localhost/tatiyvero/app/views/nosotras.php');
        break;
        case 'inicio':
            header('Location: http://localhost/tatiyvero/app/views/inicio.php');
        break;
    }
}else{
    header('Location: http://localhost/tatiyvero/app/views/inicio.php');
}

?>