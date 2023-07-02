<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/_ico/favicon.ico" rel="shortcut icon">
    <title>Alterar Senha</title>
    <link rel="stylesheet" href="./_css/cadastro_esqueciasenha.css">
    
</head>
<body>
    <div id="cad-container">
        <h1>Alterar Senha</h1>
        <br>
        <div class="notificacao">
            <!--- <p>Erro: Usuario não Existe</p> -->
        </div>
        <form action="senha.php" method="POST">
        <label for="nome">Matricula: TR</label>
            <input type="text" name="usuario" id="usuario" placeholder="Digite sua TR" autocomplete="off">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="Digite seu E-mail">
            <br>
            <input type="submit" value="Enviar">
        </form>
       
    </div>

</body>
</html>