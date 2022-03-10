<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $status = $_POST['status'];
    $sql = "update genero set nome='{$nome}',status='{$status}'  where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_genero = "select * from genero where id={$id}";

$resultado_genero = mysqli_query($conexao, $sql_genero);
$linha_genero = mysqli_fetch_array($resultado_genero);


$nome_pagina = "Gênero Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input name="nome" type="combobox" class="form-control" id="nome" value="<?= $linha_genero["nome"] ?>">
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_genero['status'] == 'S' || $linha_genero['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_genero['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Generos_Cadastrados.php";
    require_once("footer_alterar.php") ?>