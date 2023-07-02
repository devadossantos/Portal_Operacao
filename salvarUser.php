<?php 


$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = ($_POST['senha']);

include('conexao.php');

try {
  $pdo = new PDO('mysql:host=localhost;dbname=id20959752_bd_natatriagem','id20959752_natatriagem', 'Nata@31triagem');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO usuario (nome,email,usuario,senha) VALUES(:nome,:email,:usuario,:senha)');
  $stmt->execute(array(
    ':nome' => $nome,
    ':email' => $email,
    ':usuario' => $usuario,
    ':senha' => $senha,

  ));
  echo "Usuario cadastrado com sucesso";
    echo $stmt->rowCount();
  header('Location: index.php');
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>