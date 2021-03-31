<?php 
include("./sistema/database.php");
$veiculo = $_GET['id'];

            $veic= $conn->prepare("SELECT * FROM veiculo WHERE id_veiculo = ?");
            $veic->execute(array($veiculo));
            $veiculos = $veic->fetch(PDO::FETCH_ASSOC);
            $quant = $veiculos['quant_img'];
            $imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");
            $imagens->execute(array($veiculo));


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
                            <a href="https://web.whatsapp.com/send?phone=5531995945030&text=Oi">
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
                                                <li><a href="services.html">Quem Somos</a></li>
                                                <li><a href="services.html">Localização</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php">Estoque</a></li>
                                        </li>
                                        <li> <a href="#">Avaliação</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contato</a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- Navigation Content Start -->
                            </nav>
                            <!--Menu Holder End-->
                            <div class="book_btn">
                                <a href="contact.html">Nosso Estoque <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!--Nav Holder End-->
                    </div>
                </div>
            </div>

        <!--Fleet Section Start-->
        <!-- Container for the image gallery -->
        <style>
        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
        </style>
        <div class="container" style="margin-top:100px;">

            <section class="tj-form-map">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 no-padr">
                            <?php 
            while($imagem = $imagens->fetch(PDO::FETCH_ASSOC)){
                ?>
                            <div class="mySlides" style="height: 380px; background-image: url('images/<?=$imagem['nome_arquivo']?>'); background-position: center center">
                            </div>
                            <?php
            }
        ?>
                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1);">&#10094;</a>
                            <a class="next" onclick="plusSlides(1);">&#10095;</a>

                            <!-- Image text -->

                        </div>
                        <div class="col-md-6 col-sm-6 no-padl">
                            <div class="form-box">
                                <div class="form_desc">
                                    <h3><?=$veiculos['nome_veiculo']?></h3>
                                </div>

                                <ul class="cab-meta">
                                    <li><i class="fas fa-calendar"></i> Ano/Modelo: <strong><?=$veiculos['ano']?>/<?=$veiculos['modelo']?></strong></li>
                                    <li><i class="fa fa-truck"></i> Tipo de Carroceria: <strong><?=$veiculos['carroceria']?></strong></li>
                                    <li><i class="fas fa-tachometer-alt"></i> Quilometragem: <strong><?=$veiculos['km']?>km</strong></li>
                                    <li><i class="fas fa-cogs"></i> Tipo de Eixo: <strong><?=$veiculos['eixo']?></strong></li>
                                </ul>
                                <textarea name="message" id="send_msg" ><?=$veiculos['observacoes']?></textarea>
                                <form method="POST" class="contact_frm">
                                    <div class="frm-field">

                                    </div>
                                    <a href="https://web.whatsapp.com/send?phone=5531995945030&text=Oi, tenho interesse no veículo *<?=$veiculos['nome_veiculo']?>*" target="_blank" class="submit-btn">Tenho interesse <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Full-width images with number text -->

            <!-- Thumbnail images -->
        </div>
        <!--Footer Content Start-->
        <section class="tj-footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <ul class="fsocial-links">
                            <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
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
    <!--Wrapper Content End-->
    <!--Header Banner Content End-->
    <!-- Js Files Start -->

    <script>
    
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    </script>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/migrate.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/tweetie.js"></script>
    <script src="js/custom.js"></script>
    <!-- Js Files End -->
</body>

</html>