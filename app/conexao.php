<?php

// Configurações do banco de dados
$host = 'localhost'; // Host do banco de dados
$dbname = 'estoque'; // Nome do banco de dados
$username = 'root'; // Nome de usuário do banco de dados
$password = ''; // Senha do banco de dados
$port = 3306;

try {
    // Cria a conexão com porta o banco de dados usando PDO
    //$pdo = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $username, $password);

    // Cria a conexão sem porta o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $username, $password);
   
} catch (PDOException $e) {
    echo " sem sucesso";
    // Em caso de erro, exibe a mensagem
    //die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

?>
