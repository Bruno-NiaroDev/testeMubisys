<?php

switch($_GET['acao']){
    case 'logar': 
        // Fazer o paranaue de logar aqui
        break;
    case 'cadastrar':
        // Cadastrar o usuário aqui
        break;
    case 'listar': 
        //listar o usuário aqui
        break;
    default: 
        //configurar pagina de erro pra isso
        echo 'Tivemos um probleminha aqui';
}
?>