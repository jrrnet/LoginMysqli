<?php
	session_start();

    include_once("conexao.php");
	
	//O campo usuário e senha preenchido entra no if para validar
	if(isset($_POST['usuario']) && (isset($_POST['senha'])))
    {

        //Escapar de caracteres especiais, como aspas, prevenindo SQL injection

        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' && senha='$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);

        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário

        if (isset($resultado)) {
            $_SESSION['usuarioId']            = $resultado['id']; // Initializing Session
            $_SESSION['usuarioNome']          = $resultado['nome'];
            $_SESSION['usuarioNivelAcessoId'] = $resultado['nivel_acesso_id'];
            $_SESSION['usuarioLogin']         = $resultado['usuario'];

            if ($_SESSION['usuarioNivelAcessoId'] == "1") {
                header("Location: administrativo.php");
            }
            elseif ($_SESSION['usuarioNivelAcessoId'] == "2") {
                header("Location: colaborador.php");
            }
            else {
                header("Location: cliente.php");
            }
        }
        // Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        else {
            $_SESSION['loginErro'] = "Usuário ou senha inválidos!";
            header("Location: index.php");
        }
    }
        else{
            $_SESSION['loginErro'] = "Usuário ou senha inválidos!";
            header("Location: index.php");
            }
?>