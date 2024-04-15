<?php

    // Inclui o arquivo autoload.php do Composer para carregar as dependências
    require './vendor/autoload.php'; 
    
    // Cria uma instância do Dotenv para carregar as variáveis de ambiente
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
    
    // Obtém as variáveis de ambiente(.env) para a conexão com o banco de dados
    $host = $_ENV['DB_HOST'];
    $dbname = $_ENV['DB_NAME']; 
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];
    
?>
