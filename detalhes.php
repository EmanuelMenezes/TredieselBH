<?php 
include("./sistema/database.php");
$veiculo = $_GET['id'];

            $veic= $conn->prepare("SELECT * FROM veiculo WHERE id_veiculo = ?");
            $veic->execute(array($veiculo));
            $veiculos = $veic->fetch(PDO::FETCH_ASSOC);
            $quant = $veiculos['quant_img'];
            $imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");
            $imagens->execute(array($veiculo));
            $i = 0;


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trediesel e VDL - Seminovos</title>

    <!-- Css Files Start -->
    <link rel="stylesheet" href="./css/myStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <script src="js/jquery-1.12.5.min.js"></script>




    <!-- Css Files End -->

    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

</head>

<body>

    <div class="row stripe bgMyBlack myWhite">
        <div class="col-4">
            <div class="info-group">
                <a href="https://api.whatsapp.com/send?phone=5531995945030&text=Oi">
                    <i class="fab fa-whatsapp-square"></i>
                    <span>Fale Conosco</span>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="info-group">
                <a href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Voltar ao Início</span>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="info-group">
                <a href="estoque.php">
                    <i class="fas fa-truck"></i>
                    <span>Nosso Estoque</span>
                </a>
            </div>
        </div>
    </div>


    <div class="container row" style="margin-top:50px;">

        <div class="col-md-6">


            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $i=0;
                                $imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");
                                $imagens->execute(array($veiculo));
            while($imagem = $imagens->fetch(PDO::FETCH_ASSOC)){
                if($i == 0){
                    ?>
                    <div class="carousel-item active" style="background-image:url('images/<?=$imagem['nome_arquivo']?>');">

                    </div>
                    <?php
                   $i++;   } else{
                   ?>

                    <div class="carousel-item " style="background-image:url('images/<?=$imagem['nome_arquivo']?>');">

                    </div>

                    <?php  }}  ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-box">
                <div class="form_desc">
                    <h3></h3>
                </div>
                <h3 style="text-transform: uppercase;margin-top:25px"><?=$veiculos['nome_veiculo']?></h3>
                <i style="margin:10px" class="fas fa-calendar"></i> Ano/Modelo: <strong><?=$veiculos['ano']?>/<?=$veiculos['modelo']?></strong><br>
                <i style="margin:10px" class="fa fa-truck"></i> Tipo de Carroceria: <strong><?=$veiculos['carroceria']?></strong><br>
                <i style="margin:10px" class="fas fa-tachometer-alt"></i> Quilometragem: <strong><?=$veiculos['km']?>km</strong><br>
                <i style="margin:10px" class="fas fa-cogs"></i> Tipo de Eixo: <strong><?=$veiculos['eixo']?></strong><br>
                <h4>R$<?=$veiculos['preco']?>,00</h4>
                <textarea name="message" style="border-radius: 5px; width:100%" id="send_msg"><?=$veiculos['observacoes']?></textarea>
                <form method="POST" class="contact_frm">
                    <div class="frm-field">

                    </div>
                    <a href="https://web.whatsapp.com/send?phone=5531995945030&text=Oi, tenho interesse no veículo *<?=$veiculos['nome_veiculo']?>*" target="_blank" class="btn" style="    width: 100%;
    height: 40px;
    background-image: linear-gradient(to bottom right, orange, #fdca02);
    border: none;
    box-shadow: #e5e5e5 0 0 10px;">Tenho interesse <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        wrap: false,
        cycle: true
    })
    </script>
    <!-- Js Files End -->
</body>

</html>