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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trediesel e VDL - Seminovos</title>

    <!-- Css Files Start -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link id="switcher" href="css/color.css" rel="stylesheet">
    <link href="css/color-switcher.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src="js/jquery-1.12.5.min.js"></script>


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />
    <link href='./sweetalert/dist/sweetalert.css' rel='stylesheet' />



    <!-- Css Files End -->

    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

</head>

<body>
    <!--Wrapper Content Start-->
    <div class="tj-wrapper">
        <div class="loader-outer">
            <div class="tj-loader">
                <img src="images/pre-loader.gif" alt="">
                <h2></h2>
            </div>
        </div>

        <header class="tj-header">
            <!--Header Content Start-->
            <div class="container">
                <div class="row">
                    <!--Toprow Content Start-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!--Logo Start-->
                        <div class="tj-logo" style="display:inline">
                            <img src="./images/tredvdl.svg" alt="Trediesel e VDL">
                        </div>
                        <!--Logo End-->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="info_box">
                            <i class="fa fa-home"></i>
                            <div class="info_text">
                                <span class="info_title">Endereço</span>
                                <span>Av. Amazonas, 8787 </br> Belo Horizonte</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="info_box">
                            <i class="fa fa-envelope"></i>
                            <div class="info_text">
                                <span class="info_title">Email</span>
                                <span><a href="mailto:departamentoseminovos@gmail.com">departamentoseminovos@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="info_box">
                            <a href="https://api.whatsapp.com/send?phone=5531995945030&text=Oi">
                                <i class="fab fa-whatsapp"></i>
                                <div class="info_text">
                                    <span class="info_title">Whatsapp</span>
                                    <span>Fale Conosco</span>

                                </div>
                            </a>
                        </div>
                    </div>
                    <!--Toprow Content End-->
                </div>
            </div>

            <div class="tj-nav-row">
                <div class="container">
                    <div class="row">
                        <!--Nav Holder Start-->
                        <div class="tj-nav-holder">
                            <!--Menu Holder Start-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false">
                                        <span class="sr-only">Menu</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Navigation Content Start -->
                                <div class="collapse navbar-collapse" id="tj-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php">Início</a></li>
                                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#somos">Quem Somos</a></li>
                                                <li><a href="#map">Localização</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="estoque.php">Estoque</a></li>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Navigation Content Start -->
                            </nav>
                            <!--Menu Holder End-->
                            <div class="book_btn">
                                <a href="estoque.php">Nosso Estoque <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!--Nav Holder End-->
                    </div>
                </div>
            </div>
        </header>
        <!--Header Content End-->
        <!--Header Banner Content Start-->
        <section class="tj-banner-form" style="background-image: url('./images/fundo.svg')">

            <div class="container">
                <div class="row">
                    <!--Header Banner Caption Content Start-->
                    <div class="col-md-8 col-sm-7">
                        <div class="banner-caption">
                            <div class="banner-inner bounceInLeft animated delay-2s">
                                <strong>Uma parceria que visa atender os clientes com os melhores critérios de
                                    mercado. Superando as suas expectaticas no segmento de veículos Seminovos e
                                    Usados!</strong>
                                <h2>Usados Trediesel/VDL</h2>
                                <div class="banner-btns">
                                    <a href="https://api.whatsapp.com/send?phone=5531995945030&text=Oi" class="btn-style-1"><i class="fa fa-phone"></i> Entre em Contato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Header Banner Caption Content End-->
                    <!--Header Banner Form Content Start-->
                    <div class="col-md-4 col-sm-5">
                        <div class="trip-outer">
                            <!--Banner Tab Content Start-->
                            <div class="tab-content">
                                <div class="tab-pane active" id="one-way">
                                    <!--Banner Form Content Start-->
                                    <div id="returnMessageForm"></div>
                                    <form method="POST" id="formEnviaEmail" class="trip-type-frm">
                                        <div class="field-outer">
                                            <input type="text" style="width: 100% !important;" name="nome" placeholder="Nome">
                                        </div>
                                        <div class="field-outer">
                                            <input type="text" style="width: 100% !important;" name="email" placeholder="Email">
                                        </div>
                                        <div class="field-outer">
                                            <input type="text" style="width: 100% !important;" name="telefone" placeholder="Telefone">
                                        </div>
                                        <div class="field-outer">
                                            <textarea name="mensagem" id="mensagem" rows="5" placeholder="Mensagem"></textarea>
                                        </div>
                                        <button type="submit" class="search-btn">Enviar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </form>
                                    <!--Banner Form Content End-->
                                </div>
                            </div>
                            <!--Banner Tab Content End-->
                        </div>
                    </div>
                    <!--Header Banner Form Content End-->
                </div>
            </div>
        </section>
        <section class="tj-cab-filter">
            <div class="container">
                <div class="row">
                    <div class="cab-filter owl-carousel">

                        <?php 
$veiculo = $conn->prepare("SELECT * FROM veiculo WHERE status = ''");
$veiculo->execute();
while($veiculos = $veiculo->fetch(PDO::FETCH_ASSOC)){
$imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");
$imagens->execute(array($veiculos['id_veiculo']));
$imagem = $imagens->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="col-12" style="padding:10px">
                            <div class="cab-box">
                                <figure style="height:400px;background-image:url('./images/<?=$imagem['nome_arquivo']?>');background-size:80%;background-position:center center;background-repeat:no-repeat;">
                                </figure>
                                <div class="cab-desc">
                                    <strong class="cab-price">R$<?=$veiculos['preco']?>,00</strong>
                                    <h4><?=$veiculos['nome_veiculo']?></h4>
                                    <ul class="cab-meta">
                                        <li><i class="fas fa-calendar"></i><?=$veiculos['ano']?>/<?=$veiculos['modelo']?></li>
                                        <li><i class="fa fa-truck"></i><?=$veiculos['carroceria']?></li>
                                        <li><i class="fas fa-cogs"></i><?=$veiculos['eixo']?></li>
                                    </ul>
                                    <a href="detalhes.php?id=<?=$veiculos['id_veiculo']?>">Detalhes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
}
?>
                    </div>
                </div>
            </div>
        </section>
        <section class="tj-form-map" id="map">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 no-padr">
                        <div id="tj-map2" class="tj-map2"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 no-padl">
                        <div class="form-box">
                            <div class="form_desc">
                                <h3>Sobre Nós</h3>
                            </div>
                            <p>Trediesel BH é uma das mais conceituadas empresas do ramo de comercialização de caminhões usados e seminovos de todas as marcas. Atuando na já a mais de 25 anos em todas as regiões do Brasil.
                                A Trediesel BH é hoje a empresa parceira em todas as revendas Mercedez Benz do grupo vdl de caminhões usados e seminovos. Uma parceria que visa dar aos clientes um atendimento eficiente com todas as características do grupo VDL, entendendo a importância e buscando a total satisfação mercadológica para o negócio de caminhões usados e seminovos.</p>
                            <div class="form_desc" style="margin-top: 49px;">
                                <h3>Localização</h3>
                            </div>
                            <h4 style="margin-top: 40px;">Av. Amazonas, 8787 - Belo Horizonte</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer Content Start-->
        <section class="tj-footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <ul class="fsocial-links">
                            <li><a href="https://web.whatsapp.com/send?phone=5531995945030&text=Oi"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright_text">
                            <p>&copy; Copyrights 2021 Todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer Content End-->

    </div>

    <script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
    mapboxgl.accessToken = 'pk.eyJ1IjoiZW1hbnVlbG1lbmV6ZXMiLCJhIjoiY2tpbHVxNGZhMG42NjM0bDl2OTRuaXNweiJ9.qGX70UymemvMTHKp6axKwQ';
    var map = new mapboxgl.Map({
        container: 'tj-map2',
        style: 'mapbox://styles/emanuelmenezes/ckilu93jc02eh18qg33p523kl', // stylesheet location
        center: [-44.0052606, -19.9449189], // starting position [lng, lat]
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
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    })
    </script>
    <!--Wrapper Content End-->
    <!--Header Banner Content End-->
    <!-- Js Files Start -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/migrate.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/tweetie.js"></script>
    <script src="js/custom.js"></script>
    <script src="./sweetalert/dist/sweetalert-dev.js"></script>
    <script src="./sweetalert/dist/sweetalert.min.js"></script>
    <!-- Js Files End -->
    <script>
    // this is the id of the form
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
</body>

</html>