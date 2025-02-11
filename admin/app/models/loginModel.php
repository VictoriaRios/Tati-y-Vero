<?php
class LoginModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo =$pdo;
    }
    
    public function ingreso($dni, $password) {
        $sql = "SELECT * FROM `empleados` WHERE dni = :dni AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['dni' => $dni, 'password' => $password]);
        return $stmt->fetch() !== false;
    }
}
?>