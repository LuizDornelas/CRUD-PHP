<?php
//Conexão banco
$conexao = mysqli_connect("localhost", "root", "", "empresa");

//Verifica o sucesso da conexão
if(mysqli_connect_errno())
{
    exit("Erro na conexão ao banco");
}

?>