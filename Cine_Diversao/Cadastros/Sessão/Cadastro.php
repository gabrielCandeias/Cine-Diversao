<?php

require_once("../../bd/conexao.php");

if (isset($_POST['cadastrar'])) {

    $sql_confirmacao = "select * from sessao where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {

        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        $filme_id = $_POST["filme"];

        $sql = "INSERT INTO sessao(nome, data, hora,filme_id) VALUES ('{$nome}','{$data}','{$hora}','{$filme_id}')";

        mysqli_query($conexao, $sql);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}
$sql_filme = "select * from filme";

$resultado_filme = mysqli_query($conexao, $sql_filme);


$nome_pagina = "Cadastro de Sessão";

?>


<?php require_once("../head.php"); ?>


<div class="row " style="margin-top: 10px">

    <div class="col">
        <label for="nome">Nome:</label>
        <select name="nome" class="form-select" id="nome" aria-label="Default select example" style="margin-top: 9px;">

            <option value="Segunda-Feira">Segunda-Feira</option>
            <option value="Terca-Feira">Terca-Feira</option>
            <option value="Quarta-Feira">Quarta-Feira</option>
            <option value="Quinta-Feira">Quinta-Feira</option>
            <option value="Sexta-Feira">Sexta-Feira</option>
            <option value="Sabado">Sabado</option>
            <option value="Domingo">Domingo</option>

        </select>
    </div><br>
    <div class="col">
        <label for="data" class="form-label">Data</label>
        <input name="data" type="date" class="form-control" id="data" required>
    </div>
</div>
<div class="row " style="margin-top: 10px; margin-bottom:50px">
    <div class="col">
        <label for="hora" class="form-label">Hora</label>
        <input name="hora" type="time" class="form-control" id="hora" required>
    </div>
    <div class="col" style="margin-top: 33px; ">
        <select class="form-select" aria-label="Default select example" name="filme">
            <option selected>Selecione O Filme</option>
            <?php while ($linhas_filme = mysqli_fetch_array($resultado_filme)) { ?>
                <option value=<?= $linhas_filme['id'] ?>><?= $linhas_filme['nome'] ?></option>
            <?php }
            mysqli_close($conexao); ?>
        </select>
    </div>

</div>

<?php require_once("../footer.php") ?>