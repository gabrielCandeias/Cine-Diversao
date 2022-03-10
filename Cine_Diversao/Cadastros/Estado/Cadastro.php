<?php
require_once("../../bd/conexao.php");
if (isset($_POST['cadastrar'])) {

    $sql_confirmacao = "select * from estado where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {
        $nome = $_POST["nome"];
        $uf = $_POST["uf"];



        $sql = "INSERT INTO estado(nome,uf) VALUES ('{$nome}','{$uf}')";

        mysqli_query($conexao, $sql);

        mysqli_close($conexao);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}

$nome_pagina = "Cadastro de Estado";

?>


<?php require_once("../head.php"); ?>



<div class="row" style="margin-top:20px; margin-bottom: 50px">
    <div class="col">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" required>
    </div>
    <div class="col">
        <label for="uf" class="form-label">UF</label>
        <input name="uf" type="text" class="form-control" id="uf" required>
    </div>
</div>

<?php require_once("../footer.php") ?>