<?php
    include "DB.php";
    //Recupera o id do funcionário
    $id_funcionario = $_GET["id"];
    $sql = "SELECT * FROM funcionarios WHERE id= $id_funcionario";
    $result = mysqli_query($conexao, $sql);
    $funcionario = mysqli_fetch_assoc($result);
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Atualizar funcionário</h1>
    <form action="atualiza_func_2.php" method="POST">
        <input type="hidden" name="id" value="<?php print ($funcionario['id'])?>">
       Nome:<input type="text" name="txt_nome" value="<?php print ($funcionario['nome'])?>"><br><br>
       E-mail:<input type="text" name="txt_email" value="<?php print ($funcionario['email'])?>"><br><br>
       Endereço:<input type="text" name="txt_endereco" value="<?php print ($funcionario['endereco'])?>"><br><br>  
       Celular:<input type="text" name="txt_celular" value="<?php print ($funcionario['celular'])?>"><br><br>  
       <input type="submit" value="Atualizar"/>     
    </form>
</body>
</html>