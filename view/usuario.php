<?php 
    session_start();

    if(!isset($_SESSION['dadosUsuario'])){
        header('Location: ../view/login.php');
    }

    include '../database/config.php';
    include '../model/usuario.php';

    $database = new Database;

    $db = $database->getConnection();

    $usuario = new Usuario($db);
    $listaUsuarios = $usuario->listar();
?>  
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
    <?php include './component/navbar.php'; ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-8">
                <h2>Consulta de Usuários</h2>
            </div>
            <div class="col-sm-4">
                <a href="formUsuario.php" class="btn btn-primary btn-block"><i class="fa-solid fa-user-plus"></i> Novo Usuário</a>
            </div>
        </div>
        
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th><i class="fa-solid fa-user-large"></i> Nome</th>
                <th><i class="fa-solid fa-envelope-open-text"></i> Email</th>
                <th> <i class="fa-solid fa-pen-to-square"></i> </th>
                </tr>
            </thead>
            <tbody>
                <?php if($listaUsuarios['code'] != 200) { ?>
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-10">
                            <h1 class="mb-2">
                            <?php echo $listaUsuarios['message']; ?>
                            </h1>
                        </div>
                        </div>
                    </div>
                <?php } else { foreach($listaUsuarios['data'] as $usuario ) { ?>
                    <tr <?php echo $_SESSION['dadosUsuario']['id'] == $usuario['id'] ? 'class="statusLogado"' : ''; ?>>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td>
                            <button id="<?php echo $usuario['id']; ?>" type="button" class="moreInfo btn btn-link" >
                                <i class="fas fa-search-plus"></i> Ver
                            </button>
                        </td>
                    </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detalhes: </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                
                </div>
            </div>
        </div>
    </div>

    <?php include "../assets/js/jsInclude.php"; ?>
    <script>
        $(document).ready(function(){

            $('.moreInfo').click(function(){
                var userId = $(this).attr('id');
                
                $.ajax({
                url: 'component/viewUserData.php?idUsuario='+userId,
                type: 'get',
                success: function(response){ 
                    $('.modal-body').html(response);
                    $('#myModal').modal('show')
                }
                });
            });
        });
    </script>
</body>
</html>