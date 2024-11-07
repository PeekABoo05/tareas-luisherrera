<?php
require_once '../practica3/usuarios.php';

class UsuarioController {

    
    public function obtenerUsuarios(): void{
        $modeloUsuario = new Usuarios();
        echo json_encode(value: ["Resultado" => $modeloUsuario->getAll()]);
    }
    /**
    *@param int $id
    *
    *@return void
    *
    */
    
    public function obtenerUsuarioPorId($id): void{
        $modeloUsuario = new Usuarios();
        echo json_encode(value: ["Resultado" => = $modeloUsuario->getById($id)]);
    }
}
?>