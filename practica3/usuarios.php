<?php
require_once '../practica3'

class Usuarios {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Obtener todos los usuarios
    public function obtenerTodosLosUsuarios(): array {
        $consulta = $this->db->connect()->query(
            "SELECT * FROM usuarios
        ");
        return $consulta->fetchAll();
    }

    // Obtener un usuario por ID
    public function obtenerUsuarioPorId($id): mixed{
        $consulta = $this->db->conect()->prepare(
            query: "SELECT * FROM usuarios WHERE id = ?");
        )
        $consulta->execute(params: [$id]);
        return $consulta->fetch();
    }
}
?>