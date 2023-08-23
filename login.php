<?php
session_start();
include('conexao.php');

// Validação de quando os campo usuario e senha estiver vazio o usuario será redirecionado para a index.php
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
//validação para verificar sql inject
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//select para verificar se a registro no banco dos dados inseridos pelo usuario
$query = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";


$result = mysqli_query($conexao, $query);

// retornado a quantidade de linha retornada da query result
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: home.php');
}
else{
    $_SESSION['nao_autenticado'] = true;
   echo '<script type="text/javascript">'; 
    echo 'alert("Senha incorreta. Tente novamente.");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
    exit();
}







?>