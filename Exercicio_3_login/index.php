<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
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
    <title>Login - Estoque</title>
</head>
<body>    
    <center>
    <form action="login.php" method="POST">
        <h1>Stock Admin</h1>
        <label>Login: </label>
        <input type="text" name="txt_login"><br><br>
        <label>Senha: </label>
        <input type="password" name="txt_senha"><br><br>       
        <font color="red">
    <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
         </font>
         <br>
         <input class="btn btn-primary" type="submit" value="Login">        
    </form>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="cad_login.php" method="POST">
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
                                    <label for="">Login:</label>
                                    <input name="txt_login" class="form-control" placeholder="Digite o login..." required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="pwd">Senha:</label>
                                    <input type="password" name="txt_senha" class="form-control" placeholder="Digite a senha..." required>
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

    <a class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" href="#">Cadastre-se</a>    
    </center>       
</body>
</html>