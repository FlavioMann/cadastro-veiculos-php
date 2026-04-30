<?php
include 'db.php';

$sql = "SELECT * FROM veiculos";
$result = $conn->query($sql);

$lista = array();

while($row = $result->fetch_assoc()) {
    $lista[] = $row;
}

// Define que o conteúdo de saída é um JSON
header('Content-Type: application/json');
echo json_encode($lista);
?>