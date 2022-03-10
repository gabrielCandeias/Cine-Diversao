<?php
require_once("../../bd/conexao.php");
if (isset($_POST['cadastrar'])) {

    $sql_confirmacao = "select * from produtora where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {
        $nome = $_POST["nome"];



        $sql = "INSERT INTO produtora (nome) VALUES ('{$nome}')";

        mysqli_query($conexao, $sql);

        mysqli_close($conexao);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}
$nome_pagina = "Cadastro de Produtora";

?>


<?php require_once("../head.php"); ?>


<div class="row">
    <div class="col" style="margin-top: 10px; margin-bottom:50px">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" required>
    </div>

</div>

<?php require_once("../footer.php") ?>