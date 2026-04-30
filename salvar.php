<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegando os dados do formulário
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano_f = $_POST['ano_fabricacao'];
    $ano_m = $_POST['ano_modelo'];
    $cor = $_POST['cor'];
    $comb = $_POST['combustivel'];
    $km = $_POST['quilometragem'];
    $chassi = $_POST['chassi'];
    $renavam = $_POST['renavam'];
    $data = $_POST['data_cadastro'];
    $obs = $_POST['observacoes'];

    // Comando SQL para inserir (DML)
    $sql = "INSERT INTO veiculos (placa, marca, modelo, ano_fabricacao, ano_modelo, cor, combustivel, quilometragem, chassi, renavam, data_cadastro, observacoes) 
            VALUES ('$placa', '$marca', '$modelo', $ano_f, $ano_m, '$cor', '$comb', $km, '$chassi', '$renavam', '$data', '$obs')";

    if ($conn->query($sql) === TRUE) {
        echo "Sucesso";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>