<?php

include('verifica_login.php');

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal NATA-BA - Consultar triagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="/_ico/favicon.ico" rel="shortcut icon">
             <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>

<header class="cabecalho">
    <nav class="navbar navbar-expand-sm bg-light">
      <div class="container-fluid">
       <a class="navbar-brand" href="/home.php">NATA-BA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <button class="btn bg-body-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Reparo
                </button>
                <ul class="dropdown-menu dropdown-body-tertiary">
                  <li><a class="dropdown-item" href="/formulario_triagem.php">Solicitar triagem</a></li>
                    <li><a class="dropdown-item" href="/consulta_triagem.php">Consultar triagem</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn bg-body-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Serviço
                </button>
                <ul class="dropdown-menu dropdown-body-tertiary">
                    <li><a class="dropdown-item" href="https://portaldetriagemnata.000webhostapp.com/">Triagem</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn bg-body-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Preventiva
                </button>
                <ul class="dropdown-menu dropdown-body-tertiary">
                    <li><a class="dropdown-item" href="/formulario_abrir_preventiva.html">Solicitar Abertura</a></li>
                    <li><a class="dropdown-item" href="/formulario_validar_preventiva.html">Validar Preventiva</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn bg-body-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  RPO
                </button>
                <ul class="dropdown-menu dropdown-body-tertiary">
                    <li><a class="dropdown-item" href="/formulario_rpo.html">Solicitar</a></li>
                    <li><a class="dropdown-item" href="/consultar_rpo.html">Consultar</a></li>
                </ul>
              </li>
          </ul>
          <button type="submit" class="btn btn-outline-secondary"><a class="text-black text-decoration-none" href="/logout.php">Sair</a></button>
          </form>
        </div>
      </div>
    </nav>
</header>
    
    <section class="container">
        <h2 class="">Consultar triagem de BD</h2>
        <form method="POST" action="enviar_form2.php">
          <div class="row mb-3">
            <div class="col-md-1">
              <label for="localidade" class="form-label">Localidade:</label>
              <input type="text" class="form-control" id="localidade" name="localidade" required>
            </div>
            <div class="col-md-2">
              <label for="circuito" class="form-label">Circuito:</label>
              <input type="text" class="form-control" id="circuito" name="circuito" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Consultar</button>
           <a href="/home.php" class="btn btn-secondary">Voltar para pagina inicial</a>
        </form>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
 
    </script>
  </body>
</html>