<?php

class ServicioModel{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function agregarRegistro($nombre, $precio,$tabla){
        try {    
            $sql = "INSERT INTO $tabla (nombre, precio) VALUES (:nombre, :precio)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':precio', $precio);
            $stmt->execute();
        } catch (PDOException $e) {
            $_SESSION['mensaje'] = "Error al insertar: " . $e->getMessage();
            $_SESSION['tipo_mensaje'] = 'alert-danger';
        }
        return $stmt->rowCount() > 0;
    }

    public function actualizar($id_servicio, $nombre, $precio, $tabla) {

        $sql = "UPDATE $tabla SET nombre = :nombre, precio = :precio WHERE id_servicio = :id_servicio";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nombre' => $nombre,
            'precio' => $precio,
            'id_servicio' => $id_servicio
        ]);
        return $stmt->rowCount() > 0;
    }
    
    public function eliminarRegistro($id, $tabla) {
        try {
            // Preparar la consulta
            $query = "DELETE FROM $tabla WHERE id_servicio = :id";
            $stmt = $this->pdo->prepare($query);
    
            // Asegurar que el ID sea numérico
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
            // Ejecutar la consulta
            return $stmt->execute();
        } catch (PDOException $e) {
            // Manejar errores si es necesario
            return false;
        }
    }
    
}

?>