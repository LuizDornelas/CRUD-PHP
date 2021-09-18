<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("DB.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['txt_login'])) && (isset($_POST['txt_senha']))){
        $login = mysqli_real_escape_string($conexao, $_POST['txt_login']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conexao, $_POST['txt_senha']);        
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioLogin'] = $resultado['login'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];            
            header("Location: lista_estoque.php");

        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
?>