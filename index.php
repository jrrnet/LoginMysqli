<?php	
   session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/signin.css" type="text/css" />
    <meta name="author" content="Antonio Junior">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
      <div class="container">

        <form class="form-signin" method="post" action="valida.php">
            <h2 class="form-signin-heading text-center">Acesso do Usuário</h2>
            <label class="sr-only">Usuário</label>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus>
            <label class="sr-only">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a Senha" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acesso</button>
        </form>
        <p class="text-center text-danger">
            <?php if(isset($_SESSION['loginErro'])){
                      echo $_SESSION['loginErro'];
                     unset($_SESSION['loginErro']);
            }?>
        </p>
        <p class="text-center text-success">
            <?php if(isset($_SESSION['logindesLogado'])){
                      echo $_SESSION['logindesLogado'];
                     unset($_SESSION['logindesLogado']);
            }?>
        </p>
      </div> <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>