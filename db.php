<?php
$host = "localhost";
$user = "root"; // Usuário padrão do XAMPP
$pass = "";     // Senha padrão é vazia
$db   = "sistema_vendas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>