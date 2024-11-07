<?php

function obtenerUsuarios() {
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        echo "El id del usuario es $id";
    } else {
        echo "Lista de todos los usuarios";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    obtenerUsuarios();
} else {
    http_response_code(405);
    echo "Método no permitido. Usa GET para acceder a los usuarios.";
}

?>