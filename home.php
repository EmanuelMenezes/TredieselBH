<?php 
include("./sistema/database.php");
//if(!isset($_SERVER['HTTPS']))
 // {
  // echo"<script> window.location.href='https://".$_SERVER['HTTP_HOST']."' </script>";
//  }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trediesel BH | Parceira VDL na comercialização de veículos seminovos.</title>

    <link rel="stylesheet" href="./css/myStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">

    <script src="js/jquery-1.12.5.min.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />


</head>

<body>

    <div class="stripe bgMyBlack myWhite row">
        <div class="col-4">
            <div class="info-group">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=5531995945030&text=Oi" class="myWhite">
                    <i class="fab fa-whatsapp-square"></i>
                    <span>Fale Conosco</span>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="info-group">
                <a href="#tj-map2" class="myWhite">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Av. Amazonas, 8787 - Belo Horizonte</span>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="info-group">
                <a href="#contato" class="myWhite">
                    <i class="fas fa-envelope"></i>
                    <span>departamentoseminovos@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row header justify-content-center">
            <div class="col-lg-8">
                <img src="./images/tredvdl.svg" alt="Trediesel e VDL">
            </div>
            <div class="col-lg-3  align-self-center">
                <button class="btn btn-success">
                    <span>
                        Confira o nosso Estoque
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="banner row justify-content-center">
        <div class="col-lg-7 title myWhite">
            <h1 style="text-transform: uppercase;">
                Trediesel VDL
            </h1>
            <h4>
                Uma parceria que visa atender os clientes com os melhores critérios de
                mercado. Superando as suas expectaticas no segmento de veículos Seminovos e
                Usados!
            </h4>
        </div>
        <div class="col-lg-3">
            <div class="bgMyWhite form-card">
                <div class="tab-pane active" id="one-way">
                    <!--Banner Form Content Start-->
                    <div id="returnMessageForm"></div>
                    <form method="POST" id="formEnviaEmail" class="trip-type-frm">
                        <div class="field-outer">
                            <input type="text" name="nome" placeholder="Nome">
                        </div>
                        <div class="field-outer">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="field-outer">
                            <input type="text" name="telefone" placeholder="Telefone">
                        </div>
                        <div class="field-outer">
                            <textarea name="mensagem" id="mensagem" rows="5" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                    </form>
                    <!--Banner Form Content End-->
                </div>
            </div>
        </div>
    </div>
    <div class="container second">
        <div class="row">
            <div class="title col-lg-8" style="text-align:left;">
                <h4 style="font-size:30px; text-transform:uppercase">uma das mais conceituadas empresas do ramo de comercialização de caminhões usados e seminovos</h4>
            </div>
            <div class="cab-filter owl-carousel">

                <?php 
$veiculo = $conn->prepare("SELECT * FROM veiculo /* WHERE status = */");
$veiculo->execute();
while($veiculos = $veiculo->fetch(PDO::FETCH_ASSOC)){
$imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");
$imagens->execute(array($veiculos['id_veiculo']));
$imagem = $imagens->fetch(PDO::FETCH_ASSOC);
                        ?>
                <div class="col-12" style="padding:10px">
                    <div class="cab-box">
                        <figure style="background-image:url('./images/<?=$imagem['nome_arquivo']?>');">
                        </figure>
                        <div class="cab-desc">
                            <strong class="cab-price">R$<?=$veiculos['preco']?>,00</strong>
                            <h4><?=$veiculos['nome_veiculo']?></h4>
                            <ul class="cab-meta">
                                <li><i class="fas fa-calendar"></i> <?=$veiculos['ano']?>/<?=$veiculos['modelo']?></li>
                                <li><i class="fa fa-truck"></i> <?=$veiculos['carroceria']?></li>
                                <li><i class="fas fa-cogs"></i> <?=$veiculos['eixo']?></li>
                            </ul>
                            <a class="btn btn-success" href="detalhes.php?id=<?=$veiculos['id_veiculo']?>">Detalhes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
    <div id="tj-map2" class="tj-map2">
    </div>
    <div class="container third">
        <div class="row">
            <div class="title col-md-7">
                <h4>
                    Entre em Contato
                </h4>
                <div class="col-12 info-contact" id="contato">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Av. Amazonas, 8787 - Belo Horizonte</span>
                </div>
                <div class="col-12 info-contact">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5531994127140&text=Oi" class="myBlack">
                        <i class="fab fa-whatsapp-square"></i>
                        <span>(31) 99412-7140</span>
                    </a>
                </div>
                <div class="col-12 info-contact">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5511992747888&text=Oi" class="myBlack">
                        <i class="fab fa-whatsapp-square"></i>
                        <span>(11) 99274-7888</span>
                    </a>
                </div>
            </div>
            <div class="title col-md-5" style="text-align:left;">
                <h4>
                    Sobre nós
                </h4>
                <p>
                    Trediesel BH é uma das mais conceituadas empresas do ramo de comercialização de caminhões usados e seminovos de todas as marcas. Atuando na já a mais de 25 anos em todas as regiões do Brasil.
                    A Trediesel BH é hoje a empresa parceira em todas as revendas Mercedez Benz do grupo vdl de caminhões usados e seminovos. Uma parceria que visa dar aos clientes um atendimento eficiente com todas as características do grupo VDL, entendendo a importância e buscando a total satisfação mercadológica para o negócio de caminhões usados e seminovos.</p>
                </p>
            </div>
        </div>
    </div>
    <div class="footer bgMyBlack myWhite row">
        <div class="col-md-7 align-self-center">
            <div class="info-group" style="">
                <span>Trediesel BH | Parceira VDL na comercialização de veículos seminovos.</span>
                <a class="btn-footer btn">
                    Nosso Estoque
                </a>
            </div>
        </div>
        <div class="col-md-4 align-self-center">
            <div class="info-group">
                <a href="estoque.php" class="" style="">
                    <span>Nosso Estoque</span>
                </a>
            </div>
        </div>
    </div>

    <script src="js/owl.carousel.min.js"></script>
    <script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
    mapboxgl.accessToken = 'pk.eyJ1IjoiZW1hbnVlbG1lbmV6ZXMiLCJhIjoiY2tpbHVxNGZhMG42NjM0bDl2OTRuaXNweiJ9.qGX70UymemvMTHKp6axKwQ';
    var map = new mapboxgl.Map({
        container: 'tj-map2',
        style: 'mapbox://styles/emanuelmenezes/ckilu93jc02eh18qg33p523kl', // stylesheet location
        center: [-44.004552, -19.9449189], // starting position [lng, lat]
        zoom: 15.7 // starting zoom
    });
    var marker = new mapboxgl.Marker()
        .setLngLat([-44.004552, -19.9449189])
        .addTo(map);

    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
    $('.owl-carousel').owlCarousel({
        margin: 10,
        loop: true,
        responsiveClass: true,
        autoplay: true,
        dotsEach: true,
        autoplayHoverPause: true,
        autoplayTimeout: 1500,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1.2,
                nav: false,
                loop: true
            },
            600: {
                items: 3,
                nav: false,
                loop: true
            },
            1200: {
                items: 4.3,
                nav: false,
                loop: true
            }
        }
    })
    </script>
    <script>
            $("#formEnviaEmail").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        $.ajax({
            type: "POST",
            url: "./enviaEmail.php",
            data: $("#formEnviaEmail").serialize(),
            beforeSend: function() {
                $(".loader-outer").css("display", "block");
                $(".tj-loader").css("display", "block");
            },
            success: function(data) {
                $("#returnMessageForm").html(data);
                $(".loader-outer").css("display", "none");
                $(".tj-loader").css("display", "none");
            },
            error: function() {
                $(".loader-outer").css("display", "none");
                $(".tj-loader").css("display", "none");
            }
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>