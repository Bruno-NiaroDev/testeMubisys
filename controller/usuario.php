<?php

include '../database/config.php';

include '../model/usuario.php';

$database = new Database;

$db = $database->getConnection();

$usuario = new Usuario($db);

switch($_GET['acao']){
    case 'logar': 

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($usuario->checkLogin($email,$senha)){
            header('Location: ../view/usuario.php');
        } else {
            header('Location: ../view/login.php?erro=1');
        }

        break;
    case 'cadastrar':
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        
        if($usuario->cadastrar($nome, $email, $senha)){
            header('Location: ../view/usuario.php');
        } else {
            header('Location: ../view/formUsuario.php?erro=1');
        }
        break;
    default: 
        //configurar pagina de erro pra isso
        echo 'Tivemos um probleminha aqui';
        break;
}
?>