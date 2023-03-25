<?php
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  if($usuario == "Admin" && $senha == "1234"){
    echo "<script>alert('Login efetuado com sucesso!');</script>";
    echo "<script>window.location.href='pagina_restrita.php';</script>";
  }else{
    echo "<script>alert('Usuário ou senha incorretos.');</script>";
    echo "<script>window.location.href='index.php';</script>";
  }
?>
