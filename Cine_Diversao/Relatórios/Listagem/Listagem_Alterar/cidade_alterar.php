<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $uf = $_POST['uf'];
    $status = $_POST['status'];
    $sql = "update cidade set nome='{$nome}', estado_id='{$uf}', status='{$status}' where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_cidade = "select * from cidade where id={$id}";

$resultado_cidade = mysqli_query($conexao, $sql_cidade);
$linha_cidade = mysqli_fetch_array($resultado_cidade);

$nome_pagina = "Cidade Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>




<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="row">
    <div class="col">
        <label for="nome" class="form-label">Nome:</label>
        <input name="nome" type="text" class="form-control" id="nome" value="<?= $linha_cidade["nome"] ?>">

    </div>

    <?php

    $sql_estado = "select * from estado  where id={$linha_cidade['estado_id']}";

    $resultado_estado = mysqli_query($conexao, $sql_estado);

    $linhas_estado = mysqli_fetch_array($resultado_estado);

    $sql_estado2 = "select * from estado ";

    $resultado_estado2 = mysqli_query($conexao, $sql_estado2);

    $linhas_estado2 = mysqli_fetch_array($resultado_estado2);

    mysqli_close($conexao);
    ?>
    <div class="col">
        <label for="uf" class="form-label">Estado:</label>
        <select class="form-select " aria-label=".form-select" name="uf">
            <option selected value=<?= $linhas_estado['id'] ?>><?= $linhas_estado['uf'] ?></option>
            <?php while ($linhas_estado2 = mysqli_fetch_array($resultado_estado2)) {
                if ($linhas_estado != $linhas_estado2) { ?>
                    <option value=<?= $linhas_estado2['id'] ?>><?= $linhas_estado2['uf'] ?></option>
            <?php }
            } ?>

        </select>
        <br>
    </div>
</div>
<div class="mb-3" style="padding-top:20px">
    <label for="status" class="form-label">Status:</label>
    <select class="form-select " aria-label=".form-select" name="status" id="status">
        <option value="S" <?= ($linha_cidade['status'] == 'S' || $linha_cidade['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
        <option value="N" <?= ($linha_cidade['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


    </select>

</div>
<?php
$nome_ref = "../Cidades_Cadastradas.php";
require_once("footer_alterar.php") ?>