<?php
// form_triagem.php

session_start();

// Verificar se o usuário não está logado (opcional, adicione sua própria lógica de autenticação)
if (!isset($_SESSION['usuario'])) {
  header('Location: /login.php'); // Redirecionar para a página de login se não estiver logado
  exit();
}

// Verificar se o parâmetro 'id' existe na URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $triagem_id = $_GET['id'];
} else {
  // Redirecionar para a página anterior se 'id' não for fornecido ou for inválido
  header('Location: /fila_triagem.php');
  exit();
}

// Lidar com o envio do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar os dados do formulário
  $status = $_POST['status'];
  $detalhes = $_POST['detalhes'];
  $especialista_responsavel = $_POST['especialista_responsavel'];

  // Atualizar o banco de dados com os novos dados
  // Substituir o código de conexão do banco de dados pelas suas informações de conexão reais
  $servername = "localhost";
  $username = "id20959752_natatriagem_triagem";
  $password = "Nata@31triagem";
  $dbname = "id20959752_db_form_triagem";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  $sql_update = "UPDATE triagem_table SET status = '$status', detalhes = '$detalhes', especialista_responsavel = '$especialista_responsavel' WHERE id = $triagem_id";

  if ($conn->query($sql_update) === TRUE) {
    // Atualização bem-sucedida, redirecionar de volta à lista de triagem
    header('Location: /fila_triagem.php');
    exit();
  } else {
    // Lidar com cenário de erro, redirecionar de volta ao formulário com uma mensagem de erro, se necessário
    echo "Erro ao atualizar dados: " . $conn->error;
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Triagem - NATA</title>
  <!-- Add the Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/_css/lista_triagem.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Triagem - NATA</h2>
    <form method="POST">
      <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" name="status" id="status" required>
      </div>
      <div class="form-group">
        <label for="detalhes">Detalhes:</label>
        <textarea class="form-control" name="detalhes" id="detalhes" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="especialista_responsavel">Especialista Responsável:</label>
        <input type="text" class="form-control" name="especialista_responsavel" id="especialista_responsavel" required>
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="/fila_triagem.php" class="btn btn-secondary">Voltar para triagem</a>
    </form>
  </div>

  <!-- Add the Bootstrap JS and jQuery scripts (recommended at the end of the body) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
