<?php 
include("./sistema/database.php");
//if(!isset($_SERVER['HTTPS']))
 // {
  // echo"<script> window.location.href='https://".$_SERVER['HTTP_HOST']."' </script>";
//  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trediesel BH | Nosso Estoque</title>

    <link rel="stylesheet" href="./css/myStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <script src="js/jquery-1.12.5.min.js"></script>

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
                <a href="index.php">
                    <i class="fas fa-envelope"></i>
                    <span>departamentoseminovos@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
    <div class="banner row">
        <div class="page-title myWhite align-self-center col-12">
            <h1>Nosso Estoque</h1>
            <h4>Encontre o veículo ideal para você</h4>
        </div>
    </div>
    <div class="container">
        <div class="row filter-section">
            <div class="col-md-3">
                <label for="Eixo">Filtrar por Eixo</label>
                <br>
                <select class="filtro" name="Eixo" id="Eixo">
                    <option selected>--Selecione--</option>
                    <option value="3/4">3/4</option>
                    <option value="Toco">Toco</option>
                    <option value="Truck">Truck</option>
                    <option value="BiTruck">BiTruck</option>
                    <option value="Traçado">Traçado</option>
                    <option value="Cav. Mecanico 6x2">Cav. Mecanico 6x2</option>
                    <option value="Cav. Mecanico 6x4">Cav. Mecanico 6x4</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="Eixo">Filtrar por Categoria</label>
                <br>
                <select class="filtro" name="Categoria" id="Categoria">
                    <option selected>--Selecione--</option>
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
        <div class="row lista">
            <?php 
            $veiculo = $conn->prepare("SELECT * FROM veiculo /* WHERE status = */");

            $veiculo->execute();

            while($veiculos = $veiculo->fetch(PDO::FETCH_ASSOC)){

            $imagens = $conn->prepare("SELECT * FROM imagens WHERE fk_veiculo = ?");

            $imagens->execute(array($veiculos['id_veiculo']));

            $imagem = $imagens->fetch(PDO::FETCH_ASSOC);
        ?>

            <div class="col-md-3 veiculo <?=$veiculos['eixo']?>  <?=$veiculos['carroceria']?> ">
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

            <?php } ?>
        </div>
    </div>
    <div class="footer bgMyBlack myWhite row">
        <div class="col-md-7 align-self-center">
            <div class="info-group">
                <span>Trediesel BH | Parceira VDL na comercialização de veículos seminovos.</span>
                <a class="btn-footer btn">
                    <span>Voltar ao Início</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 align-self-center">
            <div class="info-group">
                <a href="index.php">
                    <span>Voltar ao Início</span>
                </a>
            </div>
        </div>
    </div>
    <script>
    $('select').on('change', function() {
        var valor = this.value;

        $('.veiculo').each(function() {
            if (!$(this).hasClass(valor)) {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    });
    </script>
</body>

</html>