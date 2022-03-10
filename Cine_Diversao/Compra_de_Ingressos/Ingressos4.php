<?php
require_once("../Login/verificasessao.php");

require_once("../bd/conexao.php");

$_SESSION['metodo_de_pagamento_id']=$_POST['metodo_de_pagamento'];

$cor_do_fundo="bg-light";

if(isset($_POST['finalizar'])){
    
    
    $metodos_de_pagamento_id=$_SESSION['metodo_de_pagamento_id'];
    $vaga_id=($_SESSION['vaga_id']);
    $telespectador_id=$_SESSION['id'];
    $sessao_id=$_SESSION['sessao_id'];
    $data=date(' Y:m:d ', time());
    $valor_total=50;
  
   $sql= "INSERT INTO venda(valor_total, data_venda, sessao_id, telespectador_id,metodos_de_pagamento_id,vaga_id) 
   VALUES ('{$valor_total}','{$data}','{$sessao_id}','{$telespectador_id}','{$metodos_de_pagamento_id}','{$vaga_id}')";

   mysqli_query($conexao,$sql);

   $_SESSION['venda_id']=mysqli_insert_id($conexao);
    
    $sql_vaga="update vaga set status=0  where id= {$_SESSION['vaga_id']}";
    mysqli_query($conexao,$sql_vaga);
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo</title>
    <?php require_once("../Bootstrap/css.php"); ?>
    <link rel="icon" type="image/jpg" href="../Imagens/Icone.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    
</head>

<body style="background-color:<?= $cor_do_fundo ?>">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../Imagens/logo-Cine_Diversão.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Cine Diversão
            </a>
            <div class="d-flex navbar-brand">
                Seja bem Vindo: <?= $_SESSION['nome']; ?><i style="margin-left:10px" class="fas fa-user"></i>
            </div>

        </div>
    </nav>

    <form action="recibo.php"method="post">
        <div class="container" style="max-width: 90%;text-align: center;background-color:<?= $cor_do_fundo ?>;padding:10px;margin-top:60px;">

            <div class="container">
                <div class="container text-center">
                    <div class="container mt-4 mb-4">
                        <h1> Compra Finalizada</h1>
                        <h5>O Cine Diversão agradece!!!</h5>
                        <br><br>
                        <img src="../Imagens/logo-Cine_Diversão.jpg" alt="" width="100" height="100" class="d-inline-block align-text-top">
                        <br><br><br><br>
                        <p style="display: inline;">Baixar o Comprovante / Ingresso: </p>
                        <a class="nav-link" href="recibo.php" target="_blank" style="height:10px; display:inline">
                            <button type="button" class="btn btn-outline-dark" required><i class="fas fa-receipt"></i></button>
                        </a>

                    </div>
                    <br><br>



                </div>
                <br><br><br><br><br><br>



                <a type="subimit" href="../index.php" class="btn btn-outline-dark" name="voltar"><i class="fas fa-home"></i> Voltar para a pagina principal </a>

                <br>
                <br><br>
            </div>
        </div>
    </form>

    <?php require_once("../Bootstrap/javascript.php"); ?>

</body>

</html>

