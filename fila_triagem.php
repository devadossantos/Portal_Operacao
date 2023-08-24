<?php

include('verifica_login.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exibição de Dados da Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
         <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1 class="py-3 text-center border border-end py-3">Fila de triagem</h1>

    <?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "id20959752_natatriagem_triagem";
    $password = "Nata@31triagem";
    $dbname = "id20959752_db_form_triagem";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para buscar os dados
    $sql = "SELECT * FROM triagem_table WHERE status != 'concluido'";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
        echo "<table border='2'>";
        echo "<tr><th>Localidade</th><th>UF</th><th>Circuito</th><th>Produto</th><th>Reclamação</th><th>Posto</th><th>Data Abertura</th><th>Data Vencimento</th><th>Nome Cliente</th><th>Emissor</th><th>Status</th><th>Detalhes</th><th>Especialista Responsável</th><th>Data Inclusão</th><th>Ações</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["localidade"]."</td>";
            echo "<td>".$row["uf"]."</td>";
            echo "<td>".$row["circuito"]."</td>";
            echo "<td>".$row["produto"]."</td>";
            echo "<td>".$row["reclamacao"]."</td>";
            echo "<td>".$row["posto"]."</td>";
            echo "<td>".$row["data_abertura"]."</td>";
            echo "<td>".$row["data_vencimento"]."</td>";
            echo "<td>".$row["nome_cliente"]."</td>";
            echo "<td>".$row["emissor"]."</td>";
            echo "<td>".$row["status"]."</td>";
            echo "<td>".$row["detalhes"]."</td>";
            echo "<td>".$row["especialista_responsavel"]."</td>";
            echo "<td>".$row["data_inclusao"]."</td>";
           echo "<td><a href='alterar_triagem.php?id=".$row["id"]."' class='btn btn-outline-secondary'>Editar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
         echo "<p class='mx-3'>Nenhum dado encontrado na tabela.</p>";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
    <a href="/home.php" class="btn btn-outline-secondary mx-3">Voltar para pagina inicial</a>
</body>
</html>
