<?php

//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
session_start();

//Inclusão do arquivo de conexão
include "DB.php";

//Querry de consulta banco
$sql = "SELECT * FROM equipamentos";

//Executa SQL
$result = mysqli_query($conexao, $sql);

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
    <title>Lista Equipamentos</title>
</head>
<body>
    <center>    
    <h1>
    Seja bem vindo, 
    <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['usuarioLogin'])){
                echo $_SESSION['usuarioLogin'];                
            }?>
         </h1>
<br>
<a class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" href="#">Cadastre um novo equipamento</a>
<br><br>
    <table border="1">
        <tr>            
            <td>Equipamento:</td>
            <td>Modelo:</td>
            <td>Marca:</td>            
            <td>Atualizar:</td>
            <td>Excluir:</td>
        </tr>
        <?php
            //Converte registro
            while($equipamentos = mysqli_fetch_assoc($result))
            {
                echo "<tr>";                
                //printa os dados
                echo "<td>".$equipamentos['equipamento']."</td>";
                echo "<td>".$equipamentos['modelo']."</td>";
                echo "<td>".$equipamentos['marca']."</td>";                
                //Passa parametros via GET Id dos func
                echo "<td><a href='atualiza_equip.php?id=$equipamentos[id]'>Atualizar</a></td>";
                echo "<td><a href='exclui_equip.php?id=$equipamentos[id]'>Excluir</a></td>";
            }
            //Fecha conexão
            mysqli_close($conexao);
        ?>
    </table>    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="cad_equipamento.php" method="POST">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Preencha os dados abaixo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="was-validated">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Equipamento:</label>
                                    <input name="txt_equipamento" class="form-control" placeholder="Digite o equipamento..." required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="pwd">Modelo:</label>
                                    <input name="txt_modelo" class="form-control" placeholder="Digite o Modelo..." required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="pwd">Marca:</label>
                                    <input name="txt_marca" class="form-control" placeholder="Digite a Marca..." required>
                                </div>
                            </div>                            

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <input class="btn btn-primary" type="submit" value="Cadastrar">
                    </div>
                </div>
            </div>
            </form>
        </div>    
                
        </center>           
</body>
</html>