<?php

require_once("../Login/verificasessao.php");

require_once("../bd/conexao.php");

$sql_sessao = "select * from sessao where id={$_SESSION['sessao_id']}";
$resultado_sessao = mysqli_query($conexao, $sql_sessao);
$linha_sessao = mysqli_fetch_array($resultado_sessao);

$sql_vaga = "select * from vaga where id={$_SESSION['vaga_id']}";
$resultado_vaga = mysqli_query($conexao, $sql_vaga);
$linha_vaga = mysqli_fetch_array($resultado_vaga);

$sql_filme = "select * from filme where id={$linha_sessao['filme_id']}";
$resultado_filme = mysqli_query($conexao, $sql_filme);
$linha_filme = mysqli_fetch_array($resultado_filme);


?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../Imagens/logo-Cine_Diversão.jpg" />
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <div class="container" style="padding-top:100px">

        <div class="card bg-light">
            <div class="card-body">
       
       
                <img src="../Imagens/logo-Cine_Diversão.jpg" width="110px" height="110px" class="d-inline-block align-top" alt="" style="margin:30px 0px 0px 30px">
                
                
                <center>
                    <h2 class="card-title">Cine Diversão</h2>
               </center>
                 
                  <br><br><br>
                <div style="padding-left:15px">
                   <?php date_default_timezone_set('America/Sao_Paulo'); ?>
                    <p> <i class="far fa-clock"></i> Horario da compra: <?= date(' h:i:s a', time()); ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> Local: PR-323 - Parque Industrial, Umuarama - PR</p>
                    <br>
                    <h4><?= "Filme: "  . $linha_filme['nome'] ?></h3>
                        <br><br>
                </div>
                <center>
                    ----------------------------------------------------------------------------------------------------------------------------------------------- </p>
                    <p>Dados da compra:</p>
                    -----------------------------------------------------------------------------------------------------------------------------------------------
                    <p>
                        <br>
                    <div class="row">
                        <div class="col">Nome do comprador:
                            <br>
                            <?= $_SESSION['nome']; ?>
                        </div>

                        <div class="col">Vaga:
                            <br>
                            <?= $linha_vaga['numero'] ?>
                        </div>

                        <div class="col"> Data e Hora:
                            <br>
                            <?= date( 'd-m-Y' , strtotime( $linha_sessao['data'])) ?>
                            <br>
                            <?= $linha_sessao['hora'] ?>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col">Sessão:
                            <br>
                            <?= $linha_sessao['nome'] ?>
                        </div>
                        <div class="col">Valor:
                            <br>
                            R$50,00
                        </div>
                        <div class="col"><i class="fas fa-id-card"></i> ID da compra
                            <br>
                            <?=  $_SESSION['venda_id']  ?>
                        </div>

                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    
                    <?php  require_once("geraCodigoBarra.php");   echo geraCodigoBarra($_SESSION['venda_id']) ;  ?> </br></br> <?= $_SESSION['venda_id']?>
                </center>

            </div>
            </p>
 

        </div>

    </div>

    <br><br><br>

    <center>
        <p><a href="javascript:print()" class="d-print-none btn btn-outline-dark"> <i class="fas fa-print"></i> <b>Imprimir</b> </a></p>

    </center>



</body>

</html>


<?php



?>