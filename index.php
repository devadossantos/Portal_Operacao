<?php            
session_start();
 
?>             
          
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/_css/cssindex.css">
    <link href="/_ico/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">   <!-- fonte Google -->
    <title>Login - NATA-BA - Portal de triagem </title>
  </head>
<body>
    <div class="container">

    <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>

        <div class="notificacao">
         <p>USUARIO/SENHA INVALIDO</p> 
            </div>

            <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>

    <div class="box_login main">
       <img src="/_imagens/user.png">
       <div class="tela_login_password">
        <form action="login.php" method="POST">
            <label class="label" for="usuario">Usuario</label>
            <input type="usuario" name="usuario" id="usuario" autofocus="">
            <label class="label"for="password">Senha</label>
            <input type="password" name="senha" id="senha" >
            <a class="esqueci_senha" href="./esqueciasenha.php">Esqueceu a senha?</a> 
            <input class="botao" type="submit" value="Login">
        </form>
      </div>
      </div>
    <div class="box_2 aside">
        <div class="novo_usuario">
        <a href="./cadastro.php"> <img src="/_imagens/newuser.png" alt="novo_usuario"></a>
    <p>Novo usuario</p>
    </div>
    </div>
  </div>
    <div class="rodape">
      <p> 2023 EQUIPE DEV NATA-BA</p>
   </div>
</body>
</html>