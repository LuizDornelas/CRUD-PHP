<?php
    //Conecta banco
    include("DB.php");

    //Recuperação de dados
    $equipamento = $_POST["txt_equipamento"];
    $modelo = $_POST["txt_modelo"];
    $marca = $_POST["txt_marca"];

    //String SQL
    $sql="INSERT into luiz_dornelas(equipamento, modelo, marca) VALUES('$equipamento', '$modelo', '$marca')";
    
    if(mysqli_query($conexao, $sql))
    {
        echo "Funcionário cadastrado com sucesso!";
        header("Location: index.php");
    }
    else
    {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>