<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $uf = $_POST['uf'];
    $status = $_POST['status'];
    $sql = "update estado set nome='{$nome}', uf='{$uf}', status='{$status}' where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_estado = "select * from estado where id={$id}";

$resultado_estado = mysqli_query($conexao, $sql_estado);
$linha_estado = mysqli_fetch_array($resultado_estado);



$nome_pagina = "Estado Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input name="nome" type="combobox" class="form-control" id="nome" value="<?= $linha_estado["nome"] ?>">

</div>
<div class="mb-3">
    <label for="uf" class="form-label">UF:</label>
    <input name="uf" type="combobox" class="form-control" id="uf" value="<?= $linha_estado["uf"] ?>">
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_estado['status'] == 'S' || $linha_estado['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_estado['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Estados_Candastrados.php";
    require_once("footer_alterar.php") ?>