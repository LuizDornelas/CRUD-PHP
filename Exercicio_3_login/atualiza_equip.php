<?php
    include "DB.php";
    //Recupera o id do funcionário
    $id_equip = $_GET["id"];
    $sql = "SELECT * FROM equipamentos WHERE id= $id_equip";
    $result = mysqli_query($conexao, $sql);
    $equipamento = mysqli_fetch_assoc($result);
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Atualiza - Equipamento</title>
</head>
<body>
<center>
    <h1>Atualizar Equipamento</h1>
    <form action="atualiza_equip_2.php" method="POST">
        <input type="hidden" name="id" value="<?php print ($equipamento['id'])?>">
       Equipamento:<input type="text" name="txt_equipamento" value="<?php print ($equipamento['equipamento'])?>"><br><br>
       Modelo:<input type="text" name="txt_modelo" value="<?php print ($equipamento['modelo'])?>"><br><br>
       Marca:<input type="text" name="txt_marca" value="<?php print ($equipamento['marca'])?>"><br><br>         
       <input class="btn btn-primary" type="submit" value="Atualiar">    
    </form>
</center>
</body>
</html>