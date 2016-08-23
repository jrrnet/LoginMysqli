<?php

ob_start();
if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcessoId'] == "") || ($_SESSION['usuarioLogin'] == "")){

    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNivelAcessoId'],
        $_SESSION['usuarioLogin']);

    // Mensagem de erro
    $_SESSION['loginErro'] = "Área restrita para usuários cadastrados!";

    // Retorna para tela de login
    header("Location: index.php");
}