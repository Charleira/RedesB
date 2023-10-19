<?php
$servername = "db"; // Nome do serviço do contêiner MySQL
$username = "laravel_user";
$password = "laravel_password";
$database = "laravel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão ao banco de dados MySQL realizada com sucesso";
} catch(PDOException $e) {
    echo "Conexão ao banco de dados MySQL falhou: " . $e->getMessage();
}
?>
