<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

      include_once('config.php');
      $email = $_POST['email'];
      $senha = $_POST['senha'];
  
      
      $stmt = $conexao->prepare("SELECT senha FROM usuarios WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($hashed_password);
      $stmt->fetch();
      
      if (password_verify($senha, $hashed_password)) {

          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          header('Location: sistema.php');
      } else {
          
          unset($_SESSION['email']);
          unset( $_SESSION['senha']);
          $_SESSION['error_message'] = "Senha ou email incorretos"; 
          header('Location: index.php');
      }
      $stmt->close();
  } else {
      
      header('Location: index.php');
      
  }
  
?>