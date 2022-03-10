<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $metodos_de_pagamento_id = $_POST['metodo_de_pagamento_id'];
    $vaga_id = ($_POST['vaga']);
    $telespectador_id = $_POST['telespectador'];
    $sessao_id = $_POST['sessao'];
    $data =  $_POST['data'];
    $valor_total = $_POST['valor'];
    $status = $_POST['status'];

    $sql = "update venda set valor_total='{$valor_total}', data_venda = '{$data}', sessao_id = '{$sessao_id}',
     telespectador_id = '{$telespectador_id}' ,metodos_de_pagamento_id = '{$metodos_de_pagamento_id}',vaga_id = '{$vaga_id}',status = '{$status}' where id=$id";
   
    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql = "select * from venda where id={$id} ";

$resultado = mysqli_query($conexao, $sql);

$linhas = mysqli_fetch_array($resultado);


$sql_telespectador = "select * from telespectador where id={$linhas['telespectador_id']}";

$resultado_telespectador = mysqli_query($conexao, $sql_telespectador);

$linhas_telespectador = mysqli_fetch_array($resultado_telespectador);


$sql_telespectador2 = "select * from telespectador";

$resultado_telespectador2 = mysqli_query($conexao, $sql_telespectador2);


$sql_vaga = "select * from vaga where id={$linhas['vaga_id']} ";

$resultado_vaga = mysqli_query($conexao, $sql_vaga);

$linhas_vaga = mysqli_fetch_array($resultado_vaga);

$sql_vaga2 = "select * from vaga ";

$resultado_vaga2 = mysqli_query($conexao, $sql_vaga2);


$sql_sessao = "select * from sessao where id={$linhas['sessao_id']}";

$resultado_sessao = mysqli_query($conexao, $sql_sessao);

$linhas_sessao = mysqli_fetch_array($resultado_sessao);

$sql_sessao2 = "select * from sessao ";

$resultado_sessao2 = mysqli_query($conexao, $sql_sessao2);


$sql_mp = "select * from metodos_de_pagamento where id={$linhas['metodos_de_pagamento_id']} ";

$resultado_mp = mysqli_query($conexao, $sql_mp);

$linhas_mp = mysqli_fetch_array($resultado_mp);

$sql_mp2 = "select * from metodos_de_pagamento ";

$resultado_mp2 = mysqli_query($conexao, $sql_mp2);


$nome_pagina = "Vendas Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="row" style="padding-bottom: 20px;">
    <div class="col">

        <select class="form-select" aria-label="Default select example" name="telespectador">
            <option selected value=<?= $linhas_telespectador['id'] ?>><?= $linhas_telespectador['nome'] ?></option>
            <?php while ($linhas_telespectador2 = mysqli_fetch_array($resultado_telespectador2)) {
                if ($linhas_telespectador['id'] != $linhas_telespectador2['id']) { ?>

                    <option value=<?= $linhas_telespectador2['id'] ?>><?= $linhas_telespectador2['nome'] ?></option>

            <?php }
            } ?>
        </select>
    </div>
    <div class="col">

        <select class="form-select " aria-label=".form-select" name="sessao">
            <option selected value=<?= $linhas_sessao['id'] ?>><?= $linhas_sessao['nome'] ?></option>
            <?php while ($linhas_sessao2 = mysqli_fetch_array($resultado_sessao2)) {
                if ($linhas_sessao['id'] != $linhas_sessao2['id']) { ?>
                    <option value=<?= $linhas_sessao2['id'] ?>><?= $linhas_sessao2['nome'] ?></option>
            <?php }
            } ?>
        </select>

    </div>

</div>

<div class="row" style="padding-bottom: 20px;">
    <div class="col" style="margin-top: 32px;">

        <select class="form-select " aria-label=".form-select" name="metodo_de_pagamento_id">
            <option selected value=<?= $linhas_mp['id'] ?>><?= $linhas_mp['nome'] ?></option>
            <?php while ($linhas_mp2  = mysqli_fetch_array($resultado_mp2)) {
                if ($linhas_mp['id'] != $linhas_mp2['id']) { ?>
                    <option value=<?= $linhas_mp2['id'] ?>><?= $linhas_mp2['nome'] ?></option>
            <?php }
            } ?>
        </select>

    </div>
    <div class="col">

        <label for="data" class="form-label">Data:</label>
        <input name="data" type="text" class="form-control" id="data" value="<?= $linhas['data_venda'] ?>">

    </div>
    <div class="col" style="margin-top: 32px;">


        <select class="form-select " aria-label=".form-select" name="vaga">
            <option selected value=<?= $linhas_vaga['id'] ?>><?= $linhas_vaga['numero'] ?></option>
            <?php while ($linhas_vaga2 = mysqli_fetch_array($resultado_vaga2)) {
                if ($linhas_vaga['id'] != $linhas_vaga2['id']) { ?>
                    <option value=<?= $linhas_vaga2['id'] ?>><?= $linhas_vaga2['numero'] ?></option>
            <?php }
            } ?>
        </select>


    </div>
</div>

<div class="row" style="padding-bottom: 20px;">

    <div class="col">

        <label for="valor" class="form-label">Valor Total R$:</label>
        <input name="valor" type="text" class="form-control" id="valor" value="<?= $linhas['valor_total'] ?>">

    </div>
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" class="form-select " aria-label=".form-select" id="status">
            <option value="S" <?= ($linhas['status'] == 'S' || $linhas['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linhas['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Vendas_realizadas.php";
    require_once("footer_alterar.php") ?>