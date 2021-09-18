<?php
//Conexão banco
$conexao = mysqli_connect("186.202.152.123", "atividade3", "UMC2021!stads4", "atividade3");

//Verifica o sucesso da conexão
if(mysqli_connect_errno())
{
    exit("Erro na conexão ao banco");
}

?>