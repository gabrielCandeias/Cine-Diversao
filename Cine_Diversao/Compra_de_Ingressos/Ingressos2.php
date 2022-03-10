<?php

require_once("../Login/verificasessao.php");

require_once("../bd/conexao.php");

$formulario = "Ingressos3.php";

if(!isset($_SESSION['sessao_id'])){
$_SESSION['sessao_id']=$_POST['sessao'];
}
?>

<?php require_once("head.php"); ?>

<div class="container <?= $cor_do_fundo ?>" style="text-align:center;display:grid;grid-template-rows:0.05fr 1fr;width:100%;max-width:1400px ">
    <div class="container text-center" style="grid-row:1/2">
        <div class="container mt-4 mb-4">
            <h1> Selecione uma Vaga </h1>
            <br>

        </div>

        <div style="background-color:black;width:30%;margin: 5% 5% 5% 35%">
            <h5 class="text-light">Telão</h5>
        </div>
    </div>

    <div class="container " style="grid-row:2/2">

        <?php require_once("verificarsessao.php"); ?>


    </div>

    <footer style="margin-top:5%;">

        <a type="subimit" href="Ingressos.php" class="btn btn-outline-dark" style="position:buttom"><i class="fas fa-chevron-left"></i> Voltar </a>

        <button type="subimit" name="proximo" class="btn btn-outline-dark" style="align-items: flex-end">Proximo <i class="fas fa-chevron-right"></i></button>

    </footer>
    <br><br>

    <?php require_once("footer.php") ?>