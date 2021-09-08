<?php
     //Conecta banco
     include("DB.php");

     //Recuperação de dados
     $id = $_POST["id"];
     $nome = $_POST["txt_nome"];
     $email = $_POST["txt_email"];
     $endereco = $_POST["txt_endereco"];
     $celular = $_POST["txt_celular"];

    //String SQL
    $sql = "UPDATE funcionarios SET nome= '$nome', email= '$email', endereco= '$endereco', celular= '$celular' WHERE id = '$id'";

    //Executa SQL
    $result = mysqli_query($conexao, $sql);

    if ($result === TRUE)
    {
        echo "Funcionário atualizado com sucesso"."<br>";
        echo "<a href='lista_func.php'>Voltar</a>";        
    }
    else
    {
        echo "Erro na atualização dos dados!";
    }

    mysqli_close($conexao);
?>