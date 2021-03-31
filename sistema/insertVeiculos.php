<?php 
include("database.php");

$contador = $_POST['contadorImagens'];
$i = 0;

$nome = $_POST['inputNome'];
$inputAno = $_POST['inputAno'];
$modelo = $_POST['inputModelo'];
$inputKm = $_POST['inputKm'];
$inputValor = $_POST['inputValor'];
$inputCarroceria = $_POST['inputCarroceria'];
$inputEixo = $_POST['inputEixo'];
$inputObs = $_POST['inputObs'];

$imagem = [];

$insert = $conn->prepare('INSERT INTO veiculo (nome_veiculo, km, ano, modelo, carroceria, observacoes, preco, quant_img, eixo) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
$insert->execute(array($nome, $inputKm, $inputAno, $modelo, $inputCarroceria, $inputObs, $inputValor, $contador, $inputEixo));

$id = $conn->prepare("SELECT id_veiculo FROM veiculo WHERE nome_veiculo = ? AND km = ? AND preco = ?");
$id->execute(array($nome, $inputKm, $inputValor));
$id_veiculo = $id->fetch(PDO::FETCH_ASSOC);

for($i = 1; $i <= $contador; $i++){

    $imagem = $_FILES['inputImage'.$i];
    if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
        $error[1] = "Formato de Arquivo Invalido.";
        echo $error[1];
    } 
    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    $caminho_imagem = "../images/" . $nome_imagem;
    move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
    $sql1 = $conn->prepare("INSERT INTO imagens (nome_arquivo, fk_veiculo) VALUES (?, ?)");
    $sql1->execute(array($nome_imagem, $id_veiculo['id_veiculo']));
}

header("location: veiculos.php");
?>

