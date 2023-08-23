<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/_ico/favicon.ico" rel="shortcut icon">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>- NATA-BA - Criar usuário</title>
</head>
<body>
        <div class="container mt-5 mx-auto">
            <h1 class="text-center">Cadastro</h1>
                <form method="post" action="salvarUser.php" class="border p-4 mx-auto">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome e Sobrenome" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Digite seu E-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="usuario">Matricula: TR</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite sua TR******" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </form>
    </div>

</body>
</html>
