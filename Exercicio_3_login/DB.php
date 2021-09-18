<?php
//Conexão banco
$conexao = mysqli_connect("localhost", "root", "", "luiz_dornelas");

//Verifica o sucesso da conexão
if(mysqli_connect_errno())
{
    exit("Erro na conexão ao banco");
}

?>