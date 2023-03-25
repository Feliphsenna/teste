<?php
    // Verifica se o formulário foi submetido
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Verifica se as informações do formulário são válidas
        if($_POST["username"] == "Admin" && $_POST["password"] == "1234") {
            
            // Redireciona para o Google
            header("Location: https://www.google.com");
            
        } else {
            
            // Redireciona para a página inicial
            header("Location: index.html");
            
        }
        
        exit();
        
    }
?>
