<?php

require_once("../Login/verificasessao.php");

require_once("../bd/conexao.php");

$sql_metodo = "select * from metodos_de_pagamento";

$resultado_metodo = mysqli_query($conexao, $sql_metodo);

$formulario = "Ingressos4.php";

$_SESSION['vaga_id']=$_POST['vaga'];
$valor="50,00";

?>
<?php require_once("head.php"); ?>

<div class="container" style="text-align:center;display:grid;grid-template-rows:1fr 0.05fr;">
    <div class="container text-center">
        <div class="container mt-4 mb-4">
            <h1> Pagamento </h1>
            <br>

        </div>
        <br><br>

        <div class="container mb-5">

            <div class="row" style="margin:20px 15% 0 15%; margin-bottom: 50px; ">

                <label for="metodo" style="text-align:left;padding:0"><i class="fas fa-credit-card" style="margin-right: 5px;"> </i>Selecione uma forma de pagamento:</label> <br><br>

                <select class="form-select " aria-label=".form-select" style="margin-top:30px;" name="metodo_de_pagamento" id="metodo" required>
                    <center>
                        <?php

                        while ($linha = mysqli_fetch_array($resultado_metodo)) { ?>

                            <option value=<?= $linha["id"] ?> ><?= $linha["nome"] ?></option>
                    </center>

                <?php }  ?>

                </select>

            </div>


        </div>

    </div>




    <footer>
        <a type="subimit" href="Ingressos2.php" class="btn btn-outline-dark" style="position:buttom"><i class="fas fa-chevron-left"></i> Voltar</a>

        <button type="subimit" href="Ingressos4.php" class="btn btn-outline-dark" style="align-items: flex-end"name="finalizar">Finalizar <i class="fas fa-chevron-right"></i></button>
    </footer>
    <br><br>

    <?php require_once("footer.php") ?>