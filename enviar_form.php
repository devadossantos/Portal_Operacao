<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recupere os dados do formulário
    $localidade = $_POST['localidade'];
    $uf = $_POST['uf'];
    $circuito = $_POST['circuito'];
    $produto = $_POST['produto'];
    $reclamacao = $_POST['reclamacao'];
    $posto = $_POST['posto'];
    $data_abertura = $_POST['data_abertura'];
    $data_vencimento = $_POST['data_vencimento'];
    $nome_cliente = $_POST['nome_cliente'];
    $observacao = $_POST['observacao'];
    $emissor = $_POST['emissor'];
    $detalhes = 'EM ANALISE'; // Set a default value for the detalhes field
    $status = 'NA FILA'; // Set a default value for the status field
    $especialista_responsavel = 'A DEFINIR'; // Set a default value for the detalhes field 

    // Conecte-se ao banco de dados MySQL (substitua 'db_user', 'db_password', 'db_name' e 'db_host' pelas suas credenciais reais)
    $conn = new mysqli('localhost', 'id20959752_natatriagem_triagem', 'Nata@31triagem', 'id20959752_db_form_triagem');

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepare a consulta SQL para inserir os dados do formulário em uma tabela chamada 'triagem_table' (substitua pelo nome da sua tabela)
   $sql = "INSERT INTO triagem_table (localidade, uf, circuito, produto, reclamacao, posto, data_abertura, data_vencimento, nome_cliente, observacao, emissor, status, detalhes,especialista_responsavel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare e vincule os parâmetros para evitar injeção de SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssss", $localidade, $uf, $circuito, $produto, $reclamacao, $posto, $data_abertura, $data_vencimento, $nome_cliente, $observacao, $emissor, $status, $detalhes, $especialista_responsavel);

    // Execute a declaração preparada
    if ($stmt->execute()) {
        // Alert and redirect using JavaScript
        echo '<script>alert("Circuito incluido na fila de triagem");</script>';
        echo '<script>window.location.href = "form_triagem.php";</script>';
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Feche a declaração e a conexão
    $stmt->close();
    $conn->close();
} else {
    echo "Envio do formulário falhou.";
}
?>