<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $status = $_POST['status'];
    $descricao = $_POST['descricao'];
    $sql = "update classificacao set nome='{$nome}',descricao = '{$descricao}', status='{$status}' where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_class = "select * from classificacao where id={$id}";

$resultado_class = mysqli_query($conexao, $sql_class);
$linha_class = mysqli_fetch_array($resultado_class);

$nome_pagina = "Classificação Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="row">
    <div class="col" style="padding-top:20px">
        <label for="nome" class="form-label">Nome:</label>
        <input name="nome" type="combobox" class="form-control" id="nome" value="<?= $linha_class['nome'] ?>">
    </div>

    <div class="col" style="padding-top:20px">
        <label for="descricao" class="form-label">Descrição</label>
        <input type = "text"name="descricao" class="form-control" id="descricao" rows="3" value="<?= $linha_class['descricao'] ?>" required></input>
    </div>

    <div class="col" style="padding-top:20px">

        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_class['status'] == 'S' || $linha_class['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_class['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Clasificacoes_Cadastradas.php";
    require_once("footer_alterar.php") ?>