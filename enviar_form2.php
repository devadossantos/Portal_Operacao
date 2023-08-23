<?php

include('verifica_login.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/_ico/favicon.ico" rel="shortcut icon">
    <title>Resultado da Consulta</title>
    <style>
    body{
        font-family: Helvetica, Arial, sans-serif.;
    }
        table, tr,td{
            border-collapse: collapse;
            padding: 10px;
             align-items: center;
        }
        .button{
            border: 1px solid black;
            font-size: 1em;
            padding: 10px;
            background-color: #808080;
            color: black;
            border-radius: 10px;
            text-decoration:none;
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
       $sql = "SELECT  uf, localidade,circuito, produto, reclamacao, posto, nome_cliente, emissor, detalhes, especialista_responsavel FROM triagem_table WHERE localidade = ? AND circuito = ?";
       $stmt = $conn->prepare($sql);
       $stmt->bind_param("si", $localidade, $circuito);
       $stmt->execute();
       $result = $stmt->get_result();

       // Display the result
       if ($result->num_rows > 0) {
           echo "<table border='2'>
                   <tr>
                       <th>UF</th>
                       <th>Localidade</th>
                       <th>Circuito</th>
                       <th>Produto</th>
                       <th>Reclamação</th>
                       <th>Posto</th>
                       <th>Nome Cliente</th>
                       <th>Emissor</th>
                       <th>Detalhes</th>
                       <th>Especialista Responsável</th>
                   
                   </tr>";

           while ($row = $result->fetch_assoc()) {
               echo "<tr>
                       <td>{$row['uf']}</td>
                       <td>{$row['localidade']}</td>
                       <td>{$row['circuito']}</td>
                       <td>{$row['produto']}</td>
                       <td>{$row['reclamacao']}</td>
                       <td>{$row['posto']}</td>
                       <td>{$row['nome_cliente']}</td>
                       <td>{$row['emissor']}</td>
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
    <br>
     <br>
   <a href="/consulta_triagem.php" class="button">Voltar para o Formulário</a>
</body>
</html>