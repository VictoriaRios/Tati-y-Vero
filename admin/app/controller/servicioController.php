<?php
require '/xampp/htdocs/tatiyvero/admin/app/models/servicioModel.php';

class ServicioController{
    private $model;

    public function __construct($pdo) {
        $this->model = new ServicioModel($pdo);
    }

    public function agregar( $nombre, $precio, $tabla){
        $tablasPermitidas = ['servicio_uñas', 'servicio_pestañas', 'servicio_cejas'];
        if (!in_array($tabla, $tablasPermitidas)) {
            $_SESSION['mensaje'] = "Tabla no permitida.";
            exit;
        }

        $resultado= $this->model->agregarRegistro( $nombre, $precio,$tabla);

        if($resultado) {
            $_SESSION['mensaje'] = "Registro agregado correctamente.";
            $_SESSION['tipo_mensaje'] = "alert-success";
            $accion = '';
            switch ($tabla) {
                case 'servicio_uñas':
                    $accion = 'uñas';
                    break;
                case 'servicio_pestañas':
                    $accion = 'pestañas';
                    break;
                case 'servicio_cejas':
                    $accion = 'cejas';
                    break;
            }
        } else{
            $accion = '';
            switch ($tabla) {
                case 'servicio_uñas':
                    $accion = 'uñas';
                    break;
                case 'servicio_pestañas':
                    $accion = 'pestañas';
                    break;
                case 'servicio_cejas':
                    $accion = 'cejas';
                    break;
            }
        }
            // Redirigir a la página correspondiente
            header("Location: /tatiyvero/admin/index.php?action=$accion");
            exit;
    }


    public function editar($id_servicio, $nombre, $precio, $tabla) {
        $resultado= $this->model->actualizar($id_servicio, $nombre,$precio,$tabla);
        if($resultado) {
            $_SESSION['mensaje'] = "Registro actualizado correctamente.";
            $_SESSION['tipo_mensaje'] = "alert-success";
            $accion = '';
            switch ($tabla) {
                case 'servicio_uñas':
                    $accion = 'uñas';
                    break;
                case 'servicio_pestañas':
                    $accion = 'pestañas';
                    break;
                case 'servicio_cejas':
                    $accion = 'cejas';
                    break;
            }
        } else{
            $accion = '';
            switch ($tabla) {
                case 'servicio_uñas':
                    $accion = 'uñas';
                    break;
                case 'servicio_pestañas':
                    $accion = 'pestañas';
                    break;
                case 'servicio_cejas':
                    $accion = 'cejas';
                    break;
            }
        }
            // Redirigir a la página correspondiente
            header("Location: /tatiyvero/admin/index.php?action=$accion");
            exit;
    }

    public function eliminar($id, $tabla) {
        // Validar que la tabla está permitida
        $tablasPermitidas = ['servicio_uñas', 'servicio_pestañas', 'servicio_cejas']; // Ajusta según tu DB
        if (!in_array($tabla, $tablasPermitidas)) {
            $_SESSION['mensaje'] = "Tabla no permitida.";
            exit;
        }
    
        // Llamar al modelo para eliminar el registro
        $resultado= $this->model->eliminarRegistro($id, $tabla);
        if($resultado) {
            $_SESSION['mensaje'] = "Registro eliminado correctamente.";
            $_SESSION['tipo_mensaje'] = "alert-success";
            $accion = '';
            switch ($tabla) {
                case 'servicio_uñas':
                    $accion = 'uñas';
                    break;
                case 'servicio_pestañas':
                    $accion = 'pestañas';
                    break;
                case 'servicio_cejas':
                    $accion = 'cejas';
                    break;
            }
        } else{
            $accion = '';
            switch ($tabla) {
                case 'servicio_uñas':
                    $accion = 'uñas';
                    break;
                case 'servicio_pestañas':
                    $accion = 'pestañas';
                    break;
                case 'servicio_cejas':
                    $accion = 'cejas';
                    break;
            }
        }
            // Redirigir a la página correspondiente
            header("Location: /tatiyvero/admin/index.php?action=$accion");
            exit;
    }
    
}
?>