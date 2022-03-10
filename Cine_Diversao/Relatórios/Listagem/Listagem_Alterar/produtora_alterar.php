<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $status = $_POST['status'];
    $sql = "update produtora set nome='{$nome}', status='{$status}' where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_produtora = "select * from produtora where id={$id}";

$resultado_produtora = mysqli_query($conexao, $sql_produtora);
$linha_produtora = mysqli_fetch_array($resultado_produtora);

$nome_pagina = "Produtora Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input name="nome" type="combobox" class="form-control" id="nome" value="<?= $linha_produtora["nome"] ?>">
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_produtora['status'] == 'S' || $linha_produtora['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_produtora['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Produtoras_Cadastradas.php";
    require_once("footer_alterar.php") ?>