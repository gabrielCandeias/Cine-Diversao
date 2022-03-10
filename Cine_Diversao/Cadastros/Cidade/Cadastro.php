<?php

require_once("../../bd/conexao.php");

if (isset($_POST['cadastrar'])) {

    $sql_confirmacao = "select * from cidade where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {
        $nome = $_POST['nome'];
        $uf = $_POST['uf'];

        $sql = "INSERT INTO cidade(nome,estado_id) VALUES ('{$nome}','{$uf}')";

        mysqli_query($conexao, $sql);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}


$sql_estado = "select * from estado";

$resultado_estado = mysqli_query($conexao, $sql_estado);

$nome_pagina = "Cadastro de Cidade";

?>


<?php require_once("../head.php"); ?>


<div class="row" style="margin-top:20px; margin-bottom: 50px">
    <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" required>
    </div>

    <div class="col">

        <select class="form-select " aria-label=".form-select" style="margin-top:30px;" name="uf">
            <option selected>Selecione um Estado</option>
            <?php

            while ($linhas_estado = mysqli_fetch_array($resultado_estado)) { ?>
                <option value=<?= $linhas_estado['id'] ?>><?= $linhas_estado['uf'] ?></option>

            <?php }
            mysqli_close($conexao); ?>

        </select>

    </div>
</div>

<?php require_once("../footer.php") ?>