<?php 
include("./sistema/database.php");

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


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />

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
                                    <span>Fale conosco</span>
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
                                                <li><a href="index.php">Quem Somos</a></li>
                                                <li><a href="index.php">Localização</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="estoque.php" class="active">Estoque</a></li>
                                        </li>
                                        <li><a href="index.php" class="active">Contato</a></li>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Navigation Content Start -->
                            </nav>
                            <!--Menu Holder End-->
                        </div>
                        <!--Nav Holder End-->
                    </div>
                </div>
            </div>
        </header>

        <!--Fleet Section Start-->
        <section class="car-fleet">
            <div class="container">
                <div class="row">
                    <!--Fleet Column Start-->
                    <div class="col-md-12 col-sm-12">

                        <div class="car-filter-holder">
                            <div class="row">
                                <!--Fleet Categories Column Start-->
                                <div class="col-md-3 col-sm-3">
                                    <div class="car-filter">
                                        <span>Por Carroceria</span>
                                        <div class="select-list">
                                            <select id="car-category" class="selectpicker">
                                                <option selected value="">-- Selecione --</option>

                                                <option value="Chassi">Chassi</option>
                                                <option value="Baú">Baú</option>
                                                <option value="Graneleira">Graneleira</option>
                                                <option value="Tanque">Tanque</option>
                                                <option value="Pipa">Pipa</option>
                                                <option value="Munck">Munck</option>
                                                <option value="Plataforma">Plataforma</option>
                                                <option value="Sider">Sider</option>
                                                <option value="Boiadeira">Boiadeira</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--Fleet Categories Column End-->
                                <!--Fleet Brand Column Start-->
                                <div class="col-md-3 col-sm-3">
                                    <div class="car-filter">
                                        <span>Por Eixo</span>
                                        <div class="select-list">
                                            <select name="car-brand" class="selectpicker">
                                                <option selected value="">-- Selecione --</option>

                                                <option value="3/4">3/4</option>
                                                <option value="Toco">Toco</option>
                                                <option value="Truck">Truck</option>
                                                <option value="BiTruck">BiTruck</option>
                                                <option value="Traçado">Traçado</option>
                                                <option value="Cav. Mecanico 6x2">Cav. Mecanico 6x2</option>
                                                <option value="Cav. Mecanico 6x4">Cav. Mecanico 6x4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--Fleet Brand Column End-->
                            </div>
                        </div>
                        <!--Tab Content Start-->
                        <div class="tab-content ">
                            <!--Fleet Grid Tab Content Start-->
                            <div class="tab-pane active">
                                <!--Fleet Grid Box Wrapper Start-->
                                <div class="fleet-grid">
                                    <div class="row">
                                        <!--Fleet Grid Box Start-->

                                        <?php 
                                            $imagens = $conn->prepare("SELECT * FROM imagens");
                                            $imagens->execute();

                                            $veiculo = $conn->prepare("SELECT * FROM veiculo WHERE status=''");
                                            $veiculo->execute();
                                            while($veiculos = $veiculo->fetch(PDO::FETCH_ASSOC)){
                                                $imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");
                                                $imagens->execute(array($veiculos['id_veiculo']));
                                                $imagem = $imagens->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="col-md-4 col-sm-4 veiculo <?=$veiculos['eixo']?> <?=$veiculos['carroceria']?>">
                                            <div class="fleet-grid-box">
                                                <figure class="fleet-thumb">
                                                    <figure style="height:400px;background-image:url('./images/<?=$imagem['nome_arquivo']?>');background-size:100%;background-position:center center;background-repeat:no-repeat;">
                                                    </figure>
                                                    <figcaption class="fleet-caption">
                                                        <div class="price-box">
                                                            <strong>R$<?=$veiculos['preco']?>,00</strong>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <div class="fleet-info-box">
                                                    <div class="fleet-info">
                                                        <h3><?=$veiculos['nome_veiculo']?></h3>
                                                        <ul class="cab-meta">
                                                            <li><i class="fas fa-calendar"></i><?=$veiculos['ano']?>/<?=$veiculos['modelo']?></li>
                                                            <li><i class="fa fa-truck"></i><?=$veiculos['carroceria']?></li>
                                                            <li><i class="fas fa-tachometer-alt"></i><?=$veiculos['km']?>km</li>
                                                            <li><i class="fas fa-cogs"></i><?=$veiculos['eixo']?></li>
                                                        </ul>
                                                    </div>
                                                    <a href="detalhes.php?id=<?=$veiculos['id_veiculo']?>" class="tj-btn">Detalhes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <!--Fleet Grid Box Wrapper End-->
                            </div>
                            <!--Fleet Grid Tab Content End-->
                        </div>
                        <!--Tab Content End-->
                        <!--Pagination Section Start-->
                        <!--Pagination Section End-->
                    </div>
                    <!--Fleet Column End-->
                </div>
            </div>
        </section>
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

    <script src="js/bootstrap.min.js"></script>
    <script src="js/migrate.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/tweetie.js"></script>
    <script src="js/custom.js"></script>
    <!-- Js Files End -->
    <script>
    $('select').on('change', function() {
        var value = this.value;

        $('.veiculo').each(function() {
            if (!$(this).hasClass(value)) {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    });
    </script>
</body>

</html>