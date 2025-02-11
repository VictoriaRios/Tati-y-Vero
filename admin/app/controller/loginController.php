<?php
require '/xampp/htdocs/tatiyvero/admin/app/models/loginModel.php';

class LoginController{
    private $model;
    

    public function __construct($pdo){
        $this->model = new LoginModel($pdo);
    }

    public function IniciarSesion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dni = $_POST['dni'] ?? '';
            $password = $_POST['password'] ?? '';
    
            $resultado = $this->model->ingreso($dni, $password);
    
            if ($resultado) {
                session_set_cookie_params([
                    'secure' => true,
                    'httponly' => true,
                ]);
                $_SESSION['dni']= $dni;
                $_SESSION['password']= $password;
                session_start();
                var_dump($_SESSION);
    
                header('Location: http://localhost/tatiyvero/admin/app/views/home.php');
            } else {
                $_SESSION['mensaje'] = "Datos Incorrectos.";
                $_SESSION['tipo_mensaje'] = "alert-danger";
                header('Location: http://localhost/tatiyvero/admin/app/views/login.php');
            }
            
            exit();
        }
    }

    public function CerrarSesion(){
        // Destruye todas las variables de sesión
        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borra también la cookie de sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
        );
        // Finalmente, destruye la sesión
        session_unset();
        session_destroy();
        // Redirige al usuario a la página de inicio de sesión
        header('Location: http://localhost/tatiyvero/admin/app/views/login.php');
        exit();
        }
    } 
    }
?>