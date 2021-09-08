<?php
    //Conecta banco
    include("DB.php");

    //Recuperação de dados
    $nome = $_POST["txt_nome"];
    $email = $_POST["txt_email"];
    $endereco = $_POST["txt_endereco"];
    $celular = $_POST["txt_celular"];

    //String SQL
    $sql="INSERT into funcionarios(nome, email, endereco, celular) VALUES('$nome', '$email', '$endereco', '$celular')";
    
    if(mysqli_query($conexao, $sql))
    {
        echo "Funcionário cadastrado com sucesso!";
        header("Location: lista_func.php");
    }
    else
    {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>