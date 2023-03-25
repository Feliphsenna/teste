<?php
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	
	if ($usuario == "Admin" && $senha == "1234") {
		echo "Bem-vindo, Admin!";
	} else {
		echo "Usuário ou senha inválidos.";
	}
?>
