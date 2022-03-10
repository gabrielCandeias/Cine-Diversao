<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $sql = "update metodos_de_pagamento set nome='{$nome}', descricao ='{$descricao}',  status='{$status}' where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_metodo = "select * from metodos_de_pagamento where id={$id}";

$resultado_metodo = mysqli_query($conexao, $sql_metodo);
$linha_metodo = mysqli_fetch_array($resultado_metodo);


$nome_pagina = "Métodos de Recebimento Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">

<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input name="nome" type="combobox" class="form-control" id="nome" value="<?= $linha_metodo["nome"] ?>">

</div>
<div class="mb-3">
    <label for="descricao" class="form-label">Descricão:</label>
    <input name="descricao" type="combobox" class="form-control" id="descricao" value="<?= $linha_metodo["descricao"] ?>">
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_metodo['status'] == 'S' || $linha_metodo['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_metodo['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Metodos_de_pagamentos_Cadastrados.php";
    require_once("footer_alterar.php") ?>