<?php
require_once '../practica3/usuariocontroller.php';

$usuarioController = new UsuarioController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : null;
    
    $usuarioController->obtenerUsuarios($id);
} else {
    http_response_code(405);
    echo json_encode(["mensaje" => "Método no permitido. Usa GET para acceder a los usuarios."]);
}
?>