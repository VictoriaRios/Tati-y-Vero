<?php

require '/xampp/htdocs/tatiyvero/app/models/formModel.php';

class Formulario{
    private $model;

    public function __construct($pdo){
        $this->model = new FormularioModel($pdo);
    }
    public function validarDatos($data) {
        $errores = [];

        // Verifica que los campos requeridos no estén vacíos
        if (empty($data['nombre'])) {
            $errores[] = 'El nombre es obligatorio.';
        }
        if (empty($data['apellido'])) {
            $errores[] = 'El apellido es obligatorio.';
        }
        if (empty($data['telefono'])) {
            $errores[] = 'El teléfono es obligatorio.';
        }
        if (empty($data['fecha_nacimiento'])) {
            $errores[] = 'La fecha de nacimiento es obligatoria.';
        }
        if (empty($data['servicio'])) {
            $errores[] = 'El servicio es obligatorio.';
        }
        if (empty($data['turno'])) {
            $errores[] = 'El turno es obligatorio.';
        }

        // Retorna los errores si existen, de lo contrario los datos
        $_SESSION['mensaje'] = "Complete todos los campos";
        $_SESSION['tipo_mensaje'] = "alert-danger";
    }
    public function guardarDatos(){
        print_r($_POST);

        $nombre = $_POST['nombre'] ?? null;
        $apellido = $_POST['apellido'] ?? null;
        $telefono = $_POST['telefono'] ?? null;
        $fecha_nacimiento = $_POST['fecha_nacimiento'] ?? null;
        $servicio = $_POST['servicio'] ?? null;
        $turno = $_POST['turno'] ?? null;

        $resultado = $this->model->guardarInfo($nombre,$apellido,$telefono,$fecha_nacimiento,$servicio,$turno);


        
            $_SESSION['mensaje'] = "Turno agregado correctamente";
            $_SESSION['tipo_mensaje'] = "alert-success";
            header('Location: http://localhost/tatiyvero/app/views/contacto.php');
            exit();
        
        
    }
}
?>