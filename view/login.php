<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include "../assets/css/cssInclude.php"; ?>
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body >
    <div class="container">
        <div class="jumbotron  loginConteiner center" >
            <h2><i class="fas fa-vial"></i> Bem vindo ao meu teste</h2>
            <p><i class="fa-solid fa-briefcase"></i>: Full Stack PHP Pleno</p>
            <form>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="E-mail">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Senha">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-success btn-block"><i class="fa-solid fa-door-open"></i> Entrar</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block"><i class="fa-solid fa-face-frown"></i> Esqueci minha senha</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include "../assets/js/jsInclude.php"; ?>
</body>
</html>