<?php

if ($formulario != "Ingressos4.php") {
    $valor = "00,0";
}

if (isset($_SESSION['sessao_id']) != NULL) {

    $sessao = $_SESSION['sessao_id'];

    $sql_sessao = "select * from sessao where id={$sessao}";

    $resultado_sessao = mysqli_query($conexao, $sql_sessao);

    $linha_sessao = mysqli_fetch_array($resultado_sessao);

    $sessao_linha = $linha_sessao['nome'];
} else {

    $sessao_linha = "";
}


if (isset($_SESSION['vaga_id']) != NULL) {

    $vaga = $_SESSION['vaga_id'];

    $sql_vaga = "select * from vaga where id={$vaga}";

    $resultado_vaga = mysqli_query($conexao, $sql_vaga);

    $linha_vaga = mysqli_fetch_array($resultado_vaga);

    $vaga_linha = $linha_vaga['numero'];
} else {
    $vaga_linha = "";
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingressos</title>
    <?php require_once("../Bootstrap/css.php");
    $cor_do_fundo = "bg-light"; ?>
    <link rel="icon" type="image/jpg" href="../Imagens/Icone.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<style type="text/css">
    figure {
        transition: all, .2s ease-in-out;
    }

    figure:hover {
        transform: scale(0.9);
    }

    .figure {
        display: flex;
        justify-content: center;
    }
</style>

<body class="<?= $cor_do_fundo ?>">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../Imagens/logo-Cine_Diversão.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Cine Diversão
            </a>
            <div class="d-flex navbar-brand">
                Seja bem Vindo: <?= $_SESSION['nome']; ?> <i style="margin:4px 0 0 10px" class="fas fa-user"></i>
            </div>

        </div>
    </nav>

    <form action="<?= $formulario ?>" method="post">



        <div style="border-radius:20px;max-width: 90%;height:100%;max-height:810px;display:grid;grid-template-columns:1fr 3fr;background-color:<?= $cor_do_fundo ?>;padding:0px;margin:20px 0 0 10px;width:100%;max-width:1650px">

            <div class="container" style="background-color:#212529;width:100%;max-width:340px;padding:23px;border-radius:10px;margin-right:100px">
                <fieldset disabled>
                    <h5 class="text-light" style="text-align:left;">Dados da Compra</h5>
                    <div class="row" style="margin-top:150px">


                        <div class="col">
                            <label for="sessao" class="form-label text-light">Sessão</label>
                            <input type="text" class="form-control" id="sessao" value="<?= $sessao_linha ?>">

                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="col">
                            <label for="vaga" class="form-label text-light">Vaga:</label>
                            <input type="text" class="form-control" id="vaga" value="<?= $vaga_linha ?>">

                        </div>
                    </div>

                    <div class="row" style="margin-top:20px">
                        <div class="col">
                            <label for="valor" class="form-label text-light">Valor Total:</label>
                            <input name="valor" type="text" class="form-control" id="valor" value="<?= $valor ?>">

                        </div>
                    </div>

                    <br><br><br><br><br><br><br><br>
</fieldset>
                    <div class="row" style="margin-top:20px;">
                        <a type="subimit" href="final-venda.php" class="btn btn-outline-light" name="voltar"><i class="fas fa-store-alt-slash"></i> Cancelar compra </a>
                    </div>

                    <br>
                
            </div>