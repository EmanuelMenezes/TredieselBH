<?php 
session_start();
include("database.php");

$atual = 'nenhum';

if(isset($_GET['id_veiculo'])){
    $atual = $_GET['id_veiculo'];
}

if(!isset($_SESSION["user"])){
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Sistema Trediesel VDL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Trediesel - VDL</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="../index.php">Sair</a>
            </li>
        </ul>
    </header>


    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span data-feather="home"></span>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="solicitacoes.php">
                                <span data-feather="file"></span>
                                Solicitações
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="vendas.php">
                                <span data-feather="shopping-cart"></span>
                                Vendas
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="veiculos.php">
                                <span data-feather="bar-chart-2"></span>
                                Veículos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Vendas</h1>
                </div>
                <form action="vendido.php" class="row g-3" method="post">
                    <div class="col-3">
                        <label for="inputValor" class="form-label">Valor da Venda</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">R$</span>
                            <input type="number" class="form-control " name="inputValor">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="inputData" class="form-label">Data da Venda</label>
                        <input type="date" class="form-control" name="inputData" required>
                    </div>
                    <div class="col-2">
                        <!--Chassi, Baú, Graneleira, Tanque, Pipa, Mulk, Plataforma, Sider, Boiadeira,    -->
                        <label for="inputVeiculo" class="form-label">Veículo</label>
                        <select class="form-select" name="inputVeiculo" id="" required>
                            <option selected value="">-- Selecione --</option>
                            <?php 
                                $veic = $conn->prepare("SELECT * FROM veiculo WHERE status = ''");
                                $veic->execute();
                                while($veics = $veic->fetch(PDO::FETCH_ASSOC)){
                                    if($veics['id_veiculo'] == $atual)
                                    {
                                    ?>
                            <option selected value="<?=$veics['id_veiculo']?>"><?=$veics['nome_veiculo']?></option>
                                    <?php                       
                                      }else{ ?>
                            <option value="<?=$veics['id_veiculo']?>"><?=$veics['nome_veiculo']?></option>
                            <?php
                                }}
                            ?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>

                <script>
                function adicionaImagem() {
                    document.getElementById("contadorImagens").value = parseInt(document.getElementById("contadorImagens").value) + parseInt(1);
                    var contador = document.getElementById("contadorImagens").value;

                    var imageForm = document.createElement("input");
                    imageForm.required = "true";
                    imageForm.setAttribute("type", "file");
                    imageForm.setAttribute("name", "inputImage" + contador);
                    imageForm.setAttribute("style", "padding:5px;margin:5px");
                    imageForm.setAttribute("class", "btn btn-outline-info");


                    $("#divFormImagem").append(imageForm);
                }
                </script>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Preço</th>
                                <th>Nome</th>
                                <th>Ano/Modelo</th>
                                <th>Km</th>
                                <th>Valor de venda</th>
                                <th>Data da Venda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
    $veiculo = $conn->prepare("SELECT * FROM veiculo WHERE status = 'v'");
    $veiculo->execute();
    while($veiculos = $veiculo->fetch(PDO::FETCH_ASSOC)){
    ?>


                            <tr>
                                <td>R$<?=$veiculos['preco']?>,00</td>
                                <td><?=$veiculos['nome_veiculo']?></td>
                                <td><?=$veiculos['ano']?>/<?=$veiculos['modelo']?></td>
                                <td><?=$veiculos['km']?></td>
                                <td>R$<?=$veiculos['valor_venda']?>,00</td>
                                <td><?=$veiculos['data_venda']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>