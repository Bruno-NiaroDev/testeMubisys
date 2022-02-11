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
        <div class="row">
            <div class="col-sm-8">
                <h2>Cadastro de Usuário</h2>
            </div>
            <div class="col-sm-4">
                <a href="usuario.php" class="btn btn-primary btn-block"><i class="fa-brands fa-searchengin"></i> Voltar para Consulta</a>
            </div>
        </div>
        <br>
        <form action="../controller/usuario.php?acao=cadastrar" method="post">
            <div class="alert alert-danger" id="alertError" style="display: none">
                <strong>Ops!</strong> <span id="msgErro"></span>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user-large"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" value="" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-block"><i class="fa-solid fa-floppy-disk"></i> Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

    <?php include "../assets/js/jsInclude.php"; ?>
    <script>
        <?php if($_GET['erro'] == '1'){?>
            $("#alertError").fadeIn(3000);
            $("#msgErro").text("Falha ao cadastrar usuário, tente novamente mais tarde!")
        <?php } ?>
    </script>
</body>
</html>