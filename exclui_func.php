<?php
    include "DB.php";
    //Recupera ID
    $id_funcionarios = $_GET["id"];

    //Consulta dados por ID
    $consulta_por_id = "DELETE FROM funcionarios WHERE id = '$id_funcionarios'";

    //Executa a querry
    $result = mysqli_query($conexao, $consulta_por_id);

    //Retornar array com os dados
    $lines = mysqli_affected_rows($conexao);

    if ($lines == 1)
    {
        //redirecionar para lista de clientes
        header("location: lista_func.php");
    }
    else
    {
        echo "Operação não foi realizada!";
    }
    //Fecha conexao
    mysqli_close($conexao);
?>