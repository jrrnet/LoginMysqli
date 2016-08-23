<?php
    session_start();
    include_once("seguranca.php");
    $login_user = $_SESSION['usuarioNome'];    
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Painel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>

<body>
  <div class="container">
  <h2>Painel do Colaborador</h2>
  <p>Essa é a area do Colaborador depois que passou pelas validações no arquivo de login</p>
  <table class="table">
    <thead>
      <tr>
        <th>Colaborador</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $login_user;?></td>
      </tr>      
    </tbody>
  </table>
  <div class="form-actions">
    <a class="btn btn-primary" href="logout.php">Sair</a>
  </div>
</div>
</body>
</html>