<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $duracao = $_POST['duracao'];
    $idioma = $_POST['idioma'];
    $genero = $_POST['genero'];
    $ano_lancamento = $_POST['ano_lancamento'];
    $produtora = $_POST['produtora'];
    $classificacao = $_POST['classificacao'];
    $status = $_POST['status'];
    $img = "";
    if ($_POST['img'] != "") {
        $img = " ,imagem = '{$_POST['img']}'";
    }
    $sql = "update filme set nome='{$nome}',duracao='{$duracao}',idioma='{$idioma}',genero_id='{$genero}',ano_lancamento='{$ano_lancamento}',
    produtora_id='{$produtora}',classificacao_id='{$classificacao}', status='{$status}' $img  where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_filme = "select * from filme where id={$id}";

$resultado_filme = mysqli_query($conexao, $sql_filme);
$linha_filme = mysqli_fetch_array($resultado_filme);


$nome_pagina = "Filme Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="row" style="padding-bottom: 20px;">
    <div class="md-3">
        <label for="nome" class="form-label">Nome:</label>
        <input name="nome" type="text" class="form-control" id="nome" value="<?= $linha_filme["nome"] ?>">

    </div>
    <div class="col">
        <label for="duracao" class="form-label">Duração:</label>
        <input name="duracao" type="time" class="form-control" id="duracao" value="<?= $linha_filme["duracao"] ?>">

    </div>
    <div class="col">
        <label for="idioma">Idioma:</label>
        <select name="idioma" class="form-select" id="idioma" aria-label="Default select example" style="margin-top: 9px;">

            <option value="pt-BR" <?= ($linha_filme['idioma'] == 'pt-BR') ? 'selected' : "" ?>>pt-BR</option>
            <option value="en-US" <?= ($linha_filme['idioma'] == 'en-US') ? 'selected' : "" ?>>en-US</option>

        </select>
    </div>
    <div class="col">
        <label for="ano_lancamento" class="form-label">Ano de Lançamento:</label>
        <input name="ano_lancamento" type="date" class="form-control" id="ano_lancamento" value="<?= $linha_filme["ano_lancamento"] ?>">

    </div>
</div>
<?php

$sql_genero = "select * from genero  where id={$linha_filme['genero_id']}";

$resultado_genero = mysqli_query($conexao, $sql_genero);

$linhas_genero = mysqli_fetch_array($resultado_genero);

$sql_genero2 = "select * from genero ";

$resultado_genero2 = mysqli_query($conexao, $sql_genero2);




?>
<div class="row" style="padding-bottom: 20px;">
    <div class="col">
        <select class="form-select " aria-label=".form-select" name="genero">
            <option selected value=<?= $linhas_genero['id'] ?>><?= $linhas_genero['nome'] ?></option>
            <?php while ($linhas_genero2 = mysqli_fetch_array($resultado_genero2)) if ($linhas_genero2['id'] != $linhas_genero['id']) { { ?>
                    <option value=<?= $linhas_genero2['id'] ?>><?= $linhas_genero2['nome'] ?></option>
            <?php }
            } ?>
        </select>
    </div>


    <div class="col">
        <?php

        $sql_produtora = "select * from produtora  where id={$linha_filme['produtora_id']}";

        $resultado_produtora = mysqli_query($conexao, $sql_produtora);

        $linhas_produtora = mysqli_fetch_array($resultado_produtora);

        $sql_produtora2 = "select * from produtora ";

        $resultado_produtora2 = mysqli_query($conexao, $sql_produtora2);


        ?>
        <select class="form-select " aria-label=".form-select" name="produtora">

            <option selected value=<?= $linhas_produtora['id'] ?>><?= $linhas_produtora['nome'] ?></option>
            <?php while ($linhas_produtora2 = mysqli_fetch_array($resultado_produtora2)) {
                if ($linhas_produtora2['id'] != $linhas_produtora['id']) { ?>

                    <option value=<?= $linhas_produtora2['id'] ?>><?= $linhas_produtora2['nome'] ?></option>

            <?php }
            } ?>
        </select>
    </div>


    <div class="col">
        <?php

        $sql_classificacao = "select * from classificacao  where id={$linha_filme['classificacao_id']}";

        $resultado_classificacao = mysqli_query($conexao, $sql_classificacao);

        $linhas_classificacao = mysqli_fetch_array($resultado_classificacao);

        $sql_classificacao2 = "select * from classificacao  ";

        $resultado_classificacao2 = mysqli_query($conexao, $sql_classificacao2);



        mysqli_close($conexao);
        ?>
        <select class="form-select " aria-label=".form-select" name="classificacao">
            <option selected value=<?= $linhas_classificacao['id'] ?>><?= $linhas_classificacao['nome'] ?></option>
            <?php while ($linhas_classificacao2 = mysqli_fetch_array($resultado_classificacao2)) if ($linhas_classificacao2['id'] != $linhas_classificacao['id']) { { ?>
                    <option value=<?= $linhas_classificacao2['id'] ?>><?= $linhas_classificacao2['nome'] ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <div class="row" style="margin-top:30px; margin-bottom: 5px">
        <div class="col">
            <input type="file" class="form-control" name="img" id="inputGroupFile02">
        </div>
    </div>
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_filme['status'] == 'S' || $linha_filme['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_filme['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Filmes_Cadastrados.php";
    require_once("footer_alterar.php") ?>