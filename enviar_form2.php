<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Consulta</title>
    <link rel="stylesheet" href="/_css/form_triagem.css ">
     <style>
         table, td,th{
              background-color: white;
         }
     </style>
</head>
<body>
    <h1>Resultado da Consulta</h1>
    <?php
    // Check if form fields are submitted
    if (isset($_POST['localidade']) && isset($_POST['circuito'])) {
        $localidade = $_POST['localidade'];
        $circuito = $_POST['circuito'];

        // Connect to the database
        $servername = "localhost";
        $username = "id20959752_natatriagem_triagem";
        $password = "Nata@31triagem";
        $dbname = "id20959752_db_form_triagem";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

             // Prepare and execute the SQL query
        $sql = "SELECT localidade, uf, circuito, produto, reclamacao, posto, data_abertura, data_vencimento, nome_cliente, emissor, status, detalhes, especialista_responsavel FROM triagem_table WHERE localidade = ? AND circuito = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $localidade, $circuito);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the result
        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Localidade</th>
                        <th>UF</th>
                        <th>Circuito</th>
                        <th>Produto</th>
                        <th>Reclamação</th>
                        <th>Posto</th>
                        <th>Data Abertura</th>
                        <th>Data Vencimento</th>
                        <th>Nome Cliente</th>
                        <th>Emissor</th>
                        <th>Status</th>
                        <th>Detalhes</th>
                        <th>Especialista Responsável</th>
                    
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['localidade']}</td>
                        <td>{$row['uf']}</td>
                        <td>{$row['circuito']}</td>
                        <td>{$row['produto']}</td>
                        <td>{$row['reclamacao']}</td>
                        <td>{$row['posto']}</td>
                        <td>{$row['data_abertura']}</td>
                        <td>{$row['data_vencimento']}</td>
                        <td>{$row['nome_cliente']}</td>
                        <td>{$row['emissor']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['detalhes']}</td>
                        <td>{$row['especialista_responsavel']}</td>
                      
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Nenhum resultado encontrado.";
        }

        // Close the connection
        $stmt->close();
        $conn->close();
    }
    ?>
    <br>
    <a href="consultar_triagem.php">Voltar ao Formulário</a>
</body>
</html>