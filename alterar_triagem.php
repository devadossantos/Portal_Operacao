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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 p-3 border text-center">Editar Dados da Tabela Triagem</h1>
        <form method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="especialista_responsavel">Especialista Responsável:</label>
                        <select class="form-control" id="especialista_responsavel" name="especialista_responsavel" required>
                            <option value="ANISIO GUSTAVO">ANISIO GUSTAVO</option>
                            <option value="MARCELO RODIGUES">MARCELO RODIGUES</option>
                            <option value="HUGO LIMA">HUGO LIMA</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Em Andamento">Em Andamento</option>
                            <option value="Concluído">Concluído</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Cancelado">Cancelado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="detalhes">Detalhes:</label>
                        <select class="form-control" id="detalhes" name="detalhes">
                            <option value="Inoperante">Inoperante</option>
                            <option value="Perdas de pacote">Perdas de pacote</option>
                            <option value="Latência">Latência</option>
                            <option value="Alta utilização">Alta utilização</option>
                            <option value="Massivo TRIA">Massivo tria</option>
                            <option value="Massivo TXVT">Massivo txvt</option>
                            <option value="Massivo COMUT">Massivo comut</option>
                            <option value="Fibra de acesso">Fibra de acesso</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data_triagem">Data da Triagem:</label>
                        <input type="date" class="form-control" id="data_triagem" name="data_triagem">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="observacao">Observação:</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/home.php" class="btn btn-secondary">Voltar para pagina inicial</a>
        </form>
    </div>
</body>
</html>