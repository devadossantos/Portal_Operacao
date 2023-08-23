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
  $observacao =  $_POST['observacao'];
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

  $sql_update = "UPDATE triagem_table SET status = '$status', detalhes = '$detalhes', observacao = '$observacao', especialista_responsavel = '$especialista_responsavel' WHERE id = $triagem_id";

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
<html>
<head>
    <title>Editar Dados</title>
</head>
<body>
    <h1>Editar Dados da Tabela Triagem</h1>
    <form method="POST">
        
        <label for="especialista_responsavel">Especialista Responsável:</label>
        <input type="text" id="especialista_responsavel" name="especialista_responsavel" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Em Andamento">Em Andamento</option>
            <option value="Concluído">Concluído</option>
            <option value="Pendente">Pendente</option>
            <option value="Cancelado">Cancelado</option>
        </select><br><br>

        <label for="detalhes">Detalhes:</label><br>
        <textarea id="detalhes" name="detalhes" rows="4" cols="50"></textarea><br><br>

        <label for="observacao">Observação:</label><br>
        <textarea id="observacao" name="observacao" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>