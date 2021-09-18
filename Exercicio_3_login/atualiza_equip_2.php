<?php
     //Conecta banco
     include("DB.php");

     //Recuperação de dados
     $id = $_POST["id"];
     $equipamento = $_POST["txt_equipamento"];
     $modelo = $_POST["txt_modelo"];
     $marca = $_POST["txt_marca"];

    //String SQL
    $sql = "UPDATE equipamentos SET equipamento= '$equipamento', modelo= '$modelo', marca= '$marca' WHERE id = '$id'";

    //Executa SQL
    $result = mysqli_query($conexao, $sql);

    if ($result === TRUE)
    {            
        header("location: lista_estoque.php");               
    }
    else
    {
        echo "Erro na atualização dos dados!";
    }

    mysqli_close($conexao);
?>