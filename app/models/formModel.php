<?php

class FormularioModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function guardarInfo($nombre,$apellido,$telefono,$fecha_nacimiento,$servicio,$turno){
        $sql = 'INSERT INTO turnos (nombre,apellido,telefono,fecha_nacimiento,servicio,turno) VALUES (:nombre, :apellido, :telefono, :fecha_nacimiento, :servicio, :turno)';
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'telefono'=>$telefono,
            'fecha_nacimiento'=>$fecha_nacimiento,
            'servicio'=>$servicio,
            'turno'=>$turno
        ]);
    }
}
?>