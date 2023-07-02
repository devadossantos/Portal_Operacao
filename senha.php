<?php 
session_start();
include "conexao.php";


$usuario = $_POST['usuario'];
$email = $_POST['email'];
$nvsenha = $_POST['nvsenha'];
$confsenha = $_POST['confsenha'];
$encryptasenha = MD5($nvsenha);



$queryUser = "Select usuario FROM usuario WHERE usuario = '{$usuario}'";
$queryEmail = "Select email FROM usuario WHERE  email = '{$email}'";

$result = mysqli_query($conexao, $queryUser);
$resultEmail = mysqli_query($conexao, $queryEmail); 


$row1 = mysqli_num_rows($result);


$row2 = mysqli_num_rows($resultEmail);



?>
<?php
    if(($row1 == 1) AND ($row2 == 1)){
        if (($nvsenha) AND ($confsenha) == "" ){
            echo "Insira a nova senha!";
    
        }else{
            if($nvsenha != $confsenha){
                echo "Campos da nova senha não conferem!";
            }else{
                $atualiza = "UPDATE usuario SET senha = '{$encryptasenha}' WHERE usuario = '{$usuario}' AND email = '{$email}' ";
                $update = mysqli_query($conexao, $atualiza);
                if($update){
                    echo "<br> Senha alterada com sucesso.";
                }else{
                    echo "<br>Ocorreu um erro para alterar a senha";
                }
            }
            
        }
    
    }
    
   
    

?>  

   






