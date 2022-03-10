<?php
require_once("../../bd/conexao.php");
if (isset($_POST['cadastrar'])) {
    $sql_confirmacao = "select * from genero where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {
        $nome = $_POST["nome"];


        

        $sql = "INSERT INTO genero(nome) VALUES ('{$nome}')";

        mysqli_query($conexao, $sql);

        mysqli_close($conexao);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}

$nome_pagina = "Cadastro de Gênero";

?>


<?php require_once("../head.php"); ?>


<div class="row" style="margin-top:20px ;margin-bottom: 50px">
    <div class="col">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" required>
    </div>

</div>

<?php require_once("../footer.php") ?>