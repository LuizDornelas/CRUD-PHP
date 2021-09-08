<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Cadastro de funcionários </h1>
    <form action="cadastra_func.php" method="POST">
       Nome:<input type="text" name="txt_nome"><br><br>
       E-mail:<input type="text" name="txt_email"><br><br>
       Endereço:<input type="text" name="txt_endereco"><br><br>  
       Celular:<input type="text" name="txt_celular"><br><br>  
       <input type="submit" value="Cadastrar"/>     
    </form>
    <br>
    <a href="lista_func.php">Listar Funcionarios</a>
</body>
</html>