<?php
require 'config.php';

// Consulta SQL para buscar a descrição e a data dos orçamentos
$sql = "SELECT id, descricao, data FROM orcamentos";
$stmt = $pdo->query($sql);

// Cria um array para armazenar os resultados
$orcamentos = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $orcamentos[] = $row;
}

// Converte os resultados para JSON e retorna
echo json_encode($orcamentos);
?>











