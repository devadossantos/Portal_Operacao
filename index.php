<?php            
session_start();
 
?>             
        
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal NATA-BA</title>
    <link href="/_ico/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="/assets/css/style.css" red="stylesheet">
     <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
        <div class="container">
            <div class="alinhamento row justify-content-center mt-xl-5 mt-2">
                <div class="col-xl-3 pt-xl-4 pt-xxl-0 col-xxl-3">
                    <div class="row align-items-center justify-content-center "> <!-- Removed w-50 -->
                        <img class="col" src="/assets/img/121088755_682100212408572_1461982185446243224_n.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4">
                    <div class="card">
                        <div class="card-header">Login - Portal NATA-BA</div>
                        <div class="card-body">
                          <form action="login.php" method="POST">
                                <div class="form-group pt-2 pb-2">
                                    <label class="pb-3" for="usuario">Usuário:</label>
                                    <input type="text" class="form-control"  id="usuario" name="usuario" placeholder="Digite seu nome de usuário">
                                </div>
                                <div class="form-group pt-2 pb-2">
                                    <label class="pb-3" for="senha ">Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                                </div>
                                <button type="submit" class="btn btn-primary">Entrar</button> 
                                <a href="/cadastro.php" class="btn btn-outline-secondary">Primeiro acesso?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-lg-start bg-light text-muted  fixed-bottom">
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              2023 Desenvolvido por:
              <a class="text-reset fw-bold" href="https://github.com/devadossantos">@Devadossantos</a>
            </div>
          </footer>
  </body>
</html>