<?php require_once("Login/ADM/verificasessao.php"); ?>

<!DOCTYPE html>

<html lang="pt-br" style="height:100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="icon" type="image/jpg" href="Imagens/logo-Cine_Diversão.jpg" />

    <?php require_once("Bootstrap/css.php") ?>


</head>
</head>

<body style="height:100%;">
    <?php require_once("Bootstrap/javascript.php") ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="Imagens/adm.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Adiministração
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a type="button" class="btn btn-outline-danger" href="Login/sair.php" style="float:right">Sair</a>
            </div>
        </div>
    </nav>


    <br><br><br>
    <br><br><br>
    <br><br><br>
    <center>
        <div class="container" style="height:49.7vh">
            <div class="row">
                <div class="col">
                    <div class="col">
                        <nav>
                            <br>
                            <a href="Cadastros/Cadastros_main.php" type="button" class="btn btn-outline-primary btn-lg" style="padding-right:200px"><i class="fas fa-cash-register"></i> Acessar Cadastros </a>
                        </nav>
                    </div>
                </div>
                <div class="col">
                    <nav>
                         <br>
                        <a href="Relatórios/Relatorios_main.php" type="button" class="btn btn-outline-primary btn-lg" style="padding-right:200px"><i class="far fa-list-alt"></i> Acessar Relatórios </a>
                    </nav>
                </div>
            </div>

        </div>
    </center>

    <?php
    require_once("Rodape.php");
    ?>


</body>

</html>