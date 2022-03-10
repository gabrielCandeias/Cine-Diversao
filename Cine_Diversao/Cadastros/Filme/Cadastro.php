<?php

require_once("../../bd/conexao.php");

if (isset($_POST['cadastrar'])) {

    $sql_confirmacao = "select * from filme where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {

        $nome = $_POST['nome'];
        $idioma = $_POST['idioma'];
        $duracao = $_POST["duracao"];
        $sinopse = $_POST['sinopse'];
        $genero_id = $_POST['genero'];
        $produtora_id = $_POST['produtora'];
        $classificacao_id = $_POST['classificacao'];
        $ano_lancamento = $_POST['data'];
        $imagem = $_POST['img'];

        $sql = "INSERT INTO filme (nome, sinopsea, ano_lancamento, idioma, duracao, genero_id, produtora_id,classificacao_id,imagem) 
            VALUES('{$nome}','{$sinopse}','{$ano_lancamento}','{$idioma}','{$duracao}','{$genero_id}','{$produtora_id}','{$classificacao_id}','{$imagem}')";

        mysqli_query($conexao, $sql);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}


$sql_genero = "select * from genero";

$resultado_genero = mysqli_query($conexao, $sql_genero);



$sql_produtora = "select * from produtora";

$resultado_produtora = mysqli_query($conexao, $sql_produtora);


$sql_classificacao = "select * from classificacao";

$resultado_classificacao = mysqli_query($conexao, $sql_classificacao);

$nome_pagina = "Cadastro de Filme";

?>


<?php require_once("../head.php"); ?>


<div class="row" style="margin-top:20px">
    <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" required>
    </div>

</div>
<div class="row" style="margin-top:20px">
    <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Duração</label>
        <input name="duracao" type="time" class="form-control" id="duracao" required>
    </div>
    
    <div class="col">
        <label for="idioma">Idioma:</label>
        <select name="idioma" class="form-select" id="idioma" aria-label="Default select example" style="margin-top: 9px;">

            <option value="pt-BR">pt-BR</option>
            <option value="en-US">en-US</option>

        </select>
    </div>
    <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Data de Lançamento</label>
        <input name="data" type="date" min=" " max="" class="form-control" id="data" required>
    </div>
</div>
<div class="row" style="margin-top:20px">
    <div class="col">
        <label for="exampleFormControlTextarea1" class="form-label">Sinopse</label>
        <textarea name="sinopse" type="textarea" class="form-control" id="sinopse" rows="3"></textarea>
    </div>
</div>


<div class="row" style="margin-top:40px; margin-bottom: 50px">
    <div class="col">
        <select class="form-select" aria-label="Default select example" name="genero">
            <option selected>Selecione um genero</option>
            <?php while ($linhas_genero = mysqli_fetch_array($resultado_genero)) { ?>
                <option value=<?= $linhas_genero['id'] ?>><?= $linhas_genero['nome'] ?></option>
            <?php } ?>
        </select>

    </div>


    <div class="col">
        <div class="form-check">
            <select class="form-select" aria-label="Default select example" name="produtora">
                <option selected>Selecione uma produtora</option>
                <?php while ($linhas_produtora = mysqli_fetch_array($resultado_produtora)) { ?>
                    <option value=<?= $linhas_produtora['id'] ?>><?= $linhas_produtora['nome'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>


    <div class="col">
        <div class="form-check" style="padding-left:0px">
            <select class="form-select" aria-label="Default select example" name="classificacao">
                <option selected>Selecione uma Classificação</option>
                <?php while ($linhas_classificacao = mysqli_fetch_array($resultado_classificacao)) { ?>
                    <option value=<?= $linhas_classificacao['id'] ?>><?= $linhas_classificacao['nome'] ?></option>
                <?php } ?>

            </select>
        </div>


    </div>
    <div class="row" style="margin-top:30px; margin-bottom: 5px">
        <div class="col">
            <input type="file" class="form-control" name="img" id="inputGroupFile02">

        </div>
    </div>
</div>

<?php require_once("../footer.php") ?>