<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <?php include "../assets/css/cssInclude.php"; ?>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <span class="navbar-brand">Teste do Bruno</span>
            </li>
        </ul>
    </nav>
    <div class="container">
        <br>
        <div class="alert alert-danger" id="alertError" style="display: none">
            <strong>Ops!</strong> <span id="msgErro"></span>
        </div>
        <div class="alert alert-success" id="alertSuccess" style="display: none">
            <strong>Parabens!</strong> <span id="msgSucess"></span>
        </div>
        <h2>Usuários</h2>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>-</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bruno Araujo</td>
                    <td>bruno.absilva3@gmail.com</td>
                    <td> 
                    <a href="formUsuario.php?id=123">Ver</a>
                    </td>
                </tr>

            </tbody>
        </table>
     </div>

    <?php include "../assets/js/jsInclude.php"; ?>
</body>
</html>