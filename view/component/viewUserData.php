<?php 
  session_start();

  if(!isset($_SESSION['dadosUsuario'])){
      header('Location: ../../view/login.php');
  }

  include '../../database/config.php';
  include '../../model/usuario.php';

  $database = new Database;

  $db = $database->getConnection();

  $usuarioObj = new Usuario($db);
  $usuario = $usuarioObj->buscar($_GET['idUsuario']);
?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2><?php echo $usuario['nome']; ?> <span class="text-info"># <?php echo $usuario['id']; ?></span></h2>
    </div>
    <div class="col-sm-12">
        <p>Codigo: <b><?php echo $usuario['id']; ?></b></p>
    </div>
    <div class="col-sm-12">
        <p>Nome: <b><?php echo $usuario['nome']; ?></b></p>
    </div>
    <div class="col-sm-12">
        <p>E-mail: <b><?php echo $usuario['email']; ?></b></p>
    </div>
    <div class="col-sm-12">
        <input type="text" value="<?php echo $usuario['token'] ?>" name="inputToken" id="inputToken" style="display: none;">
        <button class="btn btn-secondary btn-block" onclick="clipboard()"><i class="fa-solid fa-clipboard-check"></i> Clique para copiar o TOKEN</button>
    </div>
  </div>
</div>