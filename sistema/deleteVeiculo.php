<?php 
include("database.php");

$veiculo = $_GET['id_veiculo'];


$venda = $conn->prepare('UPDATE veiculo SET status = \'d\' WHERE id_veiculo = ?');
$venda->execute(array($veiculo));

header("location: veiculos.php");


?>