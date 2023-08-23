<?php

include('verifica_login.php');

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal NATA-BA - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<header class="cabecalho">
    <nav class="navbar navbar-expand-sm bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home.html">NATA-BA</a>
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
                  <li><a class="dropdown-item" href="/formulario_triagem.html">Solicitar triagem</a></li>
                  <li><a class="dropdown-item" href="/formulario_triagem.html">Consultar triagem</a></li>
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
          <button type="submit" class="btn btn-secondary"><a class="text-white text-decoration-none" href="/logout.php">Sair</a></button>
          </form>
        </div>
      </div>
    </nav>
</header>

<section class="portais container">
  <h2>Links de acesso rapido</h2>
  <div class="row g-4 mt-2">

    <div class="col-6 col-md-4 col-lg-2">
      <div class="card p-2">
        <img class="card-img-top w-25 mx-auto" src="./assets/img/card1.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title fs-6 d-flex justify-content-center">B2B Legado</h5>
          <a href="http://tpcenterhml/tpcenter/dados/bd_online/bd_online.asp" target="_blank" class="btn btn-outline-secondary d-flex justify-content-center">Visitar</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <div class="card p-2">
        <img class="card-img-top w-25 mx-auto" src="/assets/img/card2.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title fs-6 d-flex justify-content-center">OP.V.TAL</h5>
          <a href="http://10.61.81.95/op_b2b/index.php" target="_blank" class="btn btn-outline-secondary d-flex justify-content-center">Visitar</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <div class="card p-2">
        <img class="card-img-top w-25 mx-auto" src="/assets/img/5142645.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title fs-6 d-flex justify-content-center">CACTI-BBN</h5>
          <a href="http://weathermap01.oi.intranet/metror1r2/plugins/weathermap/weathermap-cacti-plugin.php?group_id=5" target="_blank" class="btn btn-outline-secondary d-flex justify-content-center">Visitar</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <div class="card p-2">
        <img class="card-img-top w-25 mx-auto" src="/assets/img/card2.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title fs-6 d-flex justify-content-center">RTPING</h5>
          <a href="https://rtping.telemar.net.br/" class="btn btn-outline-secondary d-flex justify-content-center">Visitar</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <div class="card p-2">
        <img class="card-img-top w-25 mx-auto" src="/assets/img/card2.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title fs-6 d-flex justify-content-center">CONSULTA BA</h5>
          <a href="http://consultaba.intranet/" target="_blank" class="btn btn-outline-secondary d-flex justify-content-center">Visitar</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <div class="card p-2 " >
        <img class="card-img-top w-25 mx-auto" src="/assets/img/zabbix.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title fs-6 d-flex justify-content-center">ZABBIX NATA</h5>
          <a href="http://107.22.94.75/zabbix/" target="_blank" class="btn btn-outline-secondary d-flex justify-content-center">Visitar</a>
        </div>
      </div>
    </div>

  </div>

</section>

<section class="carrosel mt-4 mb-3">
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/carrosel1.png" class="d-block w-100" height="500px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/carrosel2.png" class="d-block w-100" height="500px"alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/carrosel3.png" class="d-block w-100" height="500px"alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<footer class="text-center text-lg-start bg-light text-muted  fixed-bottom">
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    2023 Desenvolvido por:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">@Devadossantos</a>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>