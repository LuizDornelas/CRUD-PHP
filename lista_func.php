<?php

//Inclusão do arquivo de conexão
include "DB.php";

//Querry de consulta banco
$sql = "SELECT * FROM funcionarios";

//Executa SQL
$result = mysqli_query($conexao, $sql);



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionários</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Atualizar:</td>
            <td>Excluir:</td>
            <td>Nome:</td>
            <td>E-mail:</td>
            <td>Endereço:</td>
            <td>Celular:</td>
        </tr>
        <?php
            //Converte registro
            while($funcionarios = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                //Passa parametros via GET Id dos func
                echo "<td><a href='atualiza_func.php?id=$funcionarios[id]'>Atualizar</a></td>";
                echo "<td><a href='exclui_func.php?id=$funcionarios[id]'>Excluir</a></td>";
                //printa os dados
                echo "<td>".$funcionarios['nome']."</td>";
                echo "<td>".$funcionarios['email']."</td>";
                echo "<td>".$funcionarios['endereco']."</td>";
                echo "<td>".$funcionarios['celular']."</td>";
            }
            //Fecha conexão
            mysqli_close($conexao);
        ?>
    </table>
    <p>Para cadastrar um novo funcionário <a href="index.php"> clique aqui </a></p>
</body>
</html>