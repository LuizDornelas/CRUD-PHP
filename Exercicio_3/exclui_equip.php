<?php
    include "DB.php";
    //Recupera ID
    $id_equipamento = $_GET["id"];

    //Consulta dados por ID
    $consulta_id = "DELETE FROM luiz_dornelas WHERE id = '$id_equipamento'";

    //Executa a querry
    $result = mysqli_query($conexao, $consulta_id);

    //Retornar array com os dados
    $lines = mysqli_affected_rows($conexao);

    if ($lines == 1)
    {
        //redirecionar para lista de clientes
        header("location: index.php");
    }
    else
    {
        echo "Operação não foi realizada!";
    }
    //Fecha conexao
    mysqli_close($conexao);
?>