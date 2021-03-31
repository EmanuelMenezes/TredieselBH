<?php 
include("database.php");

$veiculo = $_POST['inputVeiculo'];
$data = $_POST['inputData'];
$valor = $_POST['inputValor'];

$venda = $conn->prepare('UPDATE veiculo SET data_venda = ?, status = \'v\', valor_venda = ? WHERE id_veiculo = ?');
$venda->execute(array($data, $valor, $veiculo));

header("location: vendas.php");


?>