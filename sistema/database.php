<?php
//Homologação
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "tredieselvdl";

//Produção
$servername = "localhost";
$username = "trediese_banco";
$password = "*RO?wb)Z;p}m";
$dbname = "trediese_banco";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Erro de conexão com o Banco de Dados: " . $e->getMessage();
    }
?>