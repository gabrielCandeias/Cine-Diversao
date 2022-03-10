<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $filme = $_POST['filme'];
    $status = $_POST['status'];
    $sql = "update sessao set nome='{$nome}',data='{$data}',hora='{$hora}',filme_id='{$filme}',status='{$status}' where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}



$sql_sessao = "select * from sessao where id={$id}";

$resultado_sessao = mysqli_query($conexao, $sql_sessao);

$linha_sessao = mysqli_fetch_array($resultado_sessao);

$sql_filme = "select * from filme ";

$resultado_filme = mysqli_query($conexao, $sql_filme);

$nome_pagina = "Sessão Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">

<div class="col">
    <label for="nome">Nome:</label>
    <select name="nome" class="form-select" id="nome" aria-label="Default select example" style="margin-top: 9px;">
        <option selected value="<?= $linha_sessao['nome'] ?>"><?= $linha_sessao['nome'] ?></option>
        <option value="Segunda-Feira">Segunda-Feira</option>
        <option value="Terca-Feira">Terca-Feira</option>
        <option value="Quarta-Feira">Quarta-Feira</option>
        <option value="Quinta-Feira">Quinta-Feira</option>
        <option value="Sexta-Feira">Sexta-Feira</option>
        <option value="Sabado">Sabado</option>
        <option value="Domingo">Domingo</option>

    </select>
</div><br>
<div class="row" style="padding-bottom: 20px;">
    <div class="col">
        <label for="data" class="form-label">Data:</label>
        <input name="data" type="date" class="form-control" id="data" value="<?= $linha_sessao["data"] ?>">

    </div>
    <div class="col">
        <label for="hora" class="form-label">Hora:</label>
        <input name="hora" type="time" class="form-control" id="hora" value="<?= $linha_sessao["hora"] ?>">

    </div>


</div>
<?php
$sql_filme = "select * from filme where id={$linha_sessao['filme_id']}";

$resultado_filme = mysqli_query($conexao, $sql_filme);

$linhas_filme = mysqli_fetch_array($resultado_filme);

$sql_filme2 = "select * from filme ";

$resultado_filme2 = mysqli_query($conexao, $sql_filme2);

?>

<div class="col" style="margin-top: 20px; ">
    <select class="form-select" aria-label="Default select example" name="filme">
        <option selected value=<?= $linhas_filme['id'] ?>><?= $linhas_filme['nome'] ?></option>
        <?php while ($linhas_filme2 = mysqli_fetch_array($resultado_filme2)) {
            if ($linhas_filme2['id'] != $linhas_filme['id']) { ?>
                <option value=<?= $linhas_filme2['id'] ?>><?= $linhas_filme2['nome'] ?></option>
        <?php }
        }
        mysqli_close($conexao); ?>

    </select>
    <div class="mb-3" style="padding-top:20px">
        <label for="status" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_sessao['status'] == 'S' || $linha_sessao['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_sessao['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Sessoes_Cadastradas.php";
    require_once("footer_alterar.php") ?>