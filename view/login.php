<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include "../assets/css/cssInclude.php"; ?>
</head>
<body >
    <div class="container">
        <div class="jumbotron  loginConteiner center bg-info" >
            <h2><i class="fas fa-vial"></i> Bem vindo ao meu teste</h2>
            <p><i class="fa-solid fa-briefcase"></i>: Full Stack PHP Pleno</p>
            <form method="post" action="../controller/usuario.php?acao=logar">
                <div class="alert alert-danger" id="alertError" style="display: none">
                    <strong>Ops!</strong> <span id="msgErro"></span>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa-solid fa-door-open"></i> Entrar</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-primary btn-block"><i class="fa-solid fa-face-frown"></i> Esqueci minha senha</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include "../assets/js/jsInclude.php"; ?>
    <script>
        <?php if($_GET['erro'] == '1'){?>
            $("#alertError").fadeIn(3000);
            $("#msgErro").text("Usuário ou senha incorretos!")
        <?php } ?>
    </script>
</body>
</html>