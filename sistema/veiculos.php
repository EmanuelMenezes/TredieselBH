<?php 
session_start();
include("database.php");
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
                            <a class="nav-link" href="vendas.php">
                                <span data-feather="shopping-cart"></span>
                                Vendas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="veiculos.php">
                                <span data-feather="bar-chart-2"></span>
                                Veículos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Veículos</h1>
                </div>
                <form action="insertVeiculos.php" class="row g-3" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="contadorImagens" id="contadorImagens" value="0">

                    <div class="col-3">
                        <label for="inputNome" class="form-label">Nome do Veículo</label>
                        <input class="form-control" name="inputNome" required>
                    </div>
                    <div class="col-1">
                        <label for="inputAno" class="form-label">Ano</label>
                        <input type="number" class="form-control" name="inputAno" required>
                    </div>
                    <div class="col-1">
                        <label for="inputModelo" class="form-label">Modelo</label>
                        <input type="number" class="form-control" name="inputModelo" required>
                    </div>
                    <div class="col-2">
                        <label for="inputKm" class="form-label">Km</label>
                        <input type="number" class="form-control" name="inputKm" required>
                    </div>
                    <div class="col-3">
                        <label for="inputValor" class="form-label">Preço</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">R$</span>
                            <input type="number" class="form-control " name="inputValor">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <!--Chassi, Baú, Graneleira, Tanque, Pipa, Mulk, Plataforma, Sider, Boiadeira,    -->
                        <label for="inputCarroceria" class="form-label">Carroceria</label>
                        <select class="form-select" name="inputCarroceria" id="" required>
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
                    <div class="col-2">
                        <!--3/4, Toco, Truck, Bitruck, Traçado,  Cav. Mecanico 6x2, Cav. Mecanico 6x4-->
                        <label for="inputEixo" class="form-label">Eixos</label>
                        <select class="form-select" name="inputEixo" id="" required>
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
                    <div class="col-3">
                        <label for="inputObs" class="form-label">Observações</label>
                        <input class="form-control" name="inputObs">
                    </div>
                    <div onclick="adicionaImagem();" class="btn btn-info align-self-end">Adicionar imagem</div>
                    <div id="divFormImagem"></div>
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
                                <th>Carroceria</th>
                                <th>Eixo</th>
                                <th>Registrar Venda</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
    $veiculo = $conn->prepare("SELECT * FROM veiculo WHERE status = ''");
    $veiculo->execute();
    while($veiculos = $veiculo->fetch(PDO::FETCH_ASSOC)){
    ?>


                            <tr>
                                <td>R$<?=$veiculos['preco']?>,00</td>
                                <td><?=$veiculos['nome_veiculo']?></td>
                                <td><?=$veiculos['ano']?>/<?=$veiculos['modelo']?></td>
                                <td><?=$veiculos['km']?></td>
                                <td><?=$veiculos['carroceria']?></td>
                                <td><?=$veiculos['eixo']?></td>
                                <td><a href="./vendas.php?id_veiculo=<?=$veiculos['id_veiculo']?>" class="btn btn-success"></a></td>
                                <td><a href="./deleteVeiculo.php?id_veiculo=<?=$veiculos['id_veiculo']?>" class="btn btn-danger"></a></td>
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