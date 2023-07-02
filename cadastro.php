<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/_ico/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="./_css/cadastro_esqueciasenha.css">
    <title>- NATA-BA - Criar usuario </title>
   </head>
<body>
    <div id="cad-container">
        <h1>Cadastro</h1>
        <br>
        <form method="post" action="salvarUser.php">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome e Sobrenome" autocomplete="off">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="Digite seu E-mail">
            <label for="usuario">Matricula: TR</label>
            <input type="usuario" name="usuario" id="usuario" placeholder="Digite sua TR******" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            <br>
            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
        </form>
    </div>

</body>
</html>