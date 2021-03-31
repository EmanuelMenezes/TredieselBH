<?php
session_start();

if (isset($_POST['inputEmail']) && isset($_POST['inputPassword']) && $_POST['inputEmail'] == "ELIAS" && $_POST['inputPassword'] == "XX_sistema_YY_123") {
    $_SESSION["user"] = $_POST['inputEmail'];
}
if(isset($_SESSION["user"])){
    header('Location: veiculos.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Painel Administrativo</title>




    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="./index.php" method="POST">
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Faça o login</h1>
            <label for="inputEmail" class="visually-hidden">Email address</label>
            <input type="text" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
            <input class="w-100 btn btn-lg btn-primary" type="submit">
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>



</body>

</html>