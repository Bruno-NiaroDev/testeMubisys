<?php

include '../database/config.php';
include '../model/usuario.php';

$database = new Database;

$db = $database->getConnection();

$usuario = new Usuario($db);

if($_GET['rota'] == "usuarios"){
    $headerParm = getallheaders();

    $requestToken = $headerParm['token'];

    if(!empty($requestToken) && $usuario->validaToken($requestToken)){
        echo json_encode($usuario->listar());
    } else {
        echo json_encode([
            'code' => 401,
            'message' => 'Token inválido'
        ]);   
    }
} else {
    echo json_encode([
        'code' => 400,
        'message' => 'Ops! tivemos um problema para atender a sua requisição.'
    ]);
}

?>