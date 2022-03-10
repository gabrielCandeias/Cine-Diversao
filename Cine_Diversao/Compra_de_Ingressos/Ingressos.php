<?php

require_once("../Login/verificasessao.php");

unset($_SESSION['sessao_id']);
unset($_SESSION['vaga_id']);
unset($_SESSION['metodo_de_pagamento_id']);
unset($_SESSION['venda_id']);

$a = 0;
require_once("../bd/conexao.php");

$sql = "select * from sessao";
$resultado = mysqli_query($conexao, $sql);

$formulario = "Ingressos2.php";



?>

<?php require_once("head.php"); ?>

<div class="container <?= $cor_do_fundo ?>" style="text-align:center; display:grid;grid-template-rows:0.30fr 1fr; ">

    <div class="container mt-4 mb-4" style="height:100%;max-height:100px">
        <h1> Selecione a Sessão</h1>
        <h5>Ingressos Disponiveis!!!</h5>

    </div>




    <div class="btn-group me-2" role="group" aria-label="First group" style="margin-top:5px;padding:0px;max-height:500px">

        <div class="row">

            <?php while ($linha = mysqli_fetch_array($resultado)) {
                $a = $a + 1; ?>

                <?php if ($a == 5) {
                    $a = 0;
                    echo "<div class=\"row\">";
                } ?>
                <div class="col-sm">
                    <div class="container figure" style=" border-radius:10px;text-align:center; ">
                        <figure>
                            <input type="radio" class="btn-check" name="sessao" id=<?= $linha["id"] ?> autocomplete="off" value="<?= $linha["id"] ?>" required>
                            <label class="btn btn-outline-dark" for=<?= $linha["id"] ?> style="margin-right:20px;padding:0; ">




                                <div class="card largura_card" style="max-height:500px">
                                    <div style="padding:0px;">

                                        <?php

                                        $sql_filme = "select * from filme where id={$linha['filme_id']}";
                                        $resultado_filme = mysqli_query($conexao, $sql_filme);
                                        $linha_filme = mysqli_fetch_array($resultado_filme) ?>

                                        <img src="../Imagens/<?= $linha_filme['imagem'] ?>" class="card-body" style="width:100%;height:350px;vertical-align:top;max-height: 350px;min-width:210px">

                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $linha["nome"] ?></li>
                                        <li class="list-group-item"><?=date('d-m-Y', strtotime($linha["data"]))  ?></li>
                                        <li class="list-group-item"><?= $linha["hora"] ?></li>
                                    </ul>

                                </div>

                    </div>
                    </figure>
                </div>

                </label>

            <?php } ?>
<div class="row">
        <div class="col-sm">
            <footer style="margin-top:30px;">

                <button type="subimit" class="btn btn-outline-dark" style="align-items: flex-end" name="next">Proximo <i class="fas fa-chevron-right"></i></button>

            </footer>
            <br>
        </div>
    </div>
        </div>
    </div>
    

    <?php require_once("footer.php") ?>