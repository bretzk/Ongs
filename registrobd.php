<?php

  if(isset($_POST['submit'])) {
  include_once('config.php');
  
  $nome = $_POST['nome'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
  
  $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, celular, senha)
VALUES ('$nome', '$email', '$celular', '$senha')");

  if ($result) {
    
    header("Location: index.php");
    exit(); 
  }
}


?>

