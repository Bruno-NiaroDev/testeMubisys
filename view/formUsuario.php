<?php 
    session_start();

    if(!isset($_SESSION['dadosUsuario'])){
        header('Location: ../view/login.php');
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <?php include "../assets/css/cssInclude.php"; ?>
</head>
<body>
    <?php include './component/navbar.php'; ?>
    <div class="container">
        <br>
        <div class="alert alert-danger" id="alertError" style="display: none">
            <strong>Ops!</strong> <span id="msgErro"></span>
        </div>
        <div class="alert alert-success" id="alertSuccess" style="display: none">
            <strong>Parabens!</strong> <span id="msgSucess"></span>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Cadastro de Usuário</h2>
            </div>
            <div class="col-sm-4">
                <a href="usuario.php" class="btn btn-primary btn-block"><i class="fa-brands fa-searchengin"></i> Voltar para Consulta</a>
            </div>
        </div>
    </div>

    <?php include "../assets/js/jsInclude.php"; ?>
</body>
</html>