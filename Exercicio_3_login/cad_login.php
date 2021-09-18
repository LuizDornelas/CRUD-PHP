<?php
    //Conecta banco
    include("DB.php");

    //Recuperação de dados
    $login = $_POST["txt_login"];
    $senha = $_POST["txt_senha"];    

    //Consulta dados por ID
    $consulta_login = "SELECT * FROM `login` WHERE login= '$login'";

    //Executa a querry
    $result = mysqli_query($conexao, $consulta_login);

    //Retornar array com os dados
    $lines = mysqli_affected_rows($conexao);

    if ($lines == 0)
    {
        //String SQL
    $sql="INSERT into login(login, senha) VALUES('$login', '$senha')";
    
    if(mysqli_query($conexao, $sql))
    {
        echo "Login cadastrado com sucesso!";
        header("Location: index.php");
    }
    else
    {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);

    }
    else
    {
        echo "Erro: Este login já exite";
    }

?>