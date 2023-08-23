<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include('conexao.php');

try {
    $pdo = new PDO('mysql:host=localhost;dbname=id20959752_bd_natatriagem', 'id20959752_natatriagem', 'Nata@31triagem');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO usuario (nome,email,usuario,senha) VALUES(:nome,:email,:usuario,:senha)');
    $stmt->execute(array(
        ':nome' => $nome,
        ':email' => $email,
        ':usuario' => $usuario,
        ':senha' => $senha,
    ));

    // Perform the JavaScript alert and redirection using PHP
    echo '<script>alert("Usuario cadastrado com sucesso");</script>';
    echo '<script>window.location.href = "index.php";</script>';

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>