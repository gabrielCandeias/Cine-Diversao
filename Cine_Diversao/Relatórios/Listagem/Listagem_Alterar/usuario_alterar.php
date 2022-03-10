<?php

$id = $_POST['id'];
require_once("../../../bd/conexao.php");

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $logradouro = $_POST['logradouro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $status = $_POST['status'];

    $sql = "update telespectador set nome='{$nome}',cpf='{$cpf}',email='{$email}',sexo='{$sexo}',
   data_nascimento='{$data_nascimento}',logradouro='{$logradouro}',
    cep='{$cep}',telefone='{$telefone}',cidade_id='{$cidade}',status='{$status}'  where id=$id";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado";
}

$sql_telespectador = "select * from telespectador where id={$id}";

$resultado_telespectador = mysqli_query($conexao, $sql_telespectador);
$linha_telespectador = mysqli_fetch_array($resultado_telespectador);

$nome_pagina = "Usuário Alterar ";

?>

<?php require_once("Nav_Alterar.php"); ?>


<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input name="nome" type="text" class="form-control" id="nome" value="<?= $linha_telespectador["nome"] ?>">

</div>
<div class="mb-3">
    <label for="cpf" class="form-label">CPF:</label>
    <input name="cpf" type="number" class="form-control" id="cpf" value="<?= $linha_telespectador["cpf"] ?>">

</div>
<div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input name="email" type="mail" class="form-control" id="email" value="<?= $linha_telespectador["email"] ?>">

</div>

<div class="row">
    
    <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" name="sexo">
            <option selected >Prefiro não Delarar</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
        </select>
    </div>
    <div class="col">
        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
        <input name="data_nascimento" type="date" class="form-control" id="data_nascimento" value="<?= $linha_telespectador["data_nascimento"] ?>">

    </div>
</div>
<div class="mb-3">
    <label for="logradouro" class="form-label">Logradouro:</label>
    <input name="logradouro" type="text" class="form-control" id="logradouro" value="<?= $linha_telespectador["logradouro"] ?>">

</div>
<div class="row " style="padding-bottom: 20px;">
    <div class="col">

        <label for="cep" class="form-label">CEP:</label>
        <input name="cep" type="number" class="form-control" id="cep" value="<?= $linha_telespectador["cep"] ?>">

    </div>
    <div class="col">
        <label for="telefone" class="form-label">Telefone:</label>
        <input name="telefone" type="tel" class="form-control" pattern = "[0-9]{3} [0-9]{4}-[0-9]{4}" title= "000 0000-0000 " id="telefone" value="<?= $linha_telespectador["telefone"] ?>">

    </div>
</div>

<?php

$sql_cidade = "select * from cidade where id={$linha_telespectador['cidade_id']}";

$resultado_cidade = mysqli_query($conexao, $sql_cidade);

$linhas_cidade = mysqli_fetch_array($resultado_cidade);

$sql_cidade2 = "select * from cidade";

$resultado_cidade2 = mysqli_query($conexao, $sql_cidade2);




?>
<div class="row " style="padding-bottom: 20px;">
    <div class="col">
        <label for="cidade" class="form-label">Cidade:</label>
        <select class="form-select " aria-label=".form-select" name="cidade">

            <option selected value=<?= $linhas_cidade['id'] ?>> <?= $linhas_cidade['nome'] ?> </option>
            <?php while ($linhas_cidade2 = mysqli_fetch_array($resultado_cidade2)) { ?>
                <option value=<?= $linhas_cidade2['id'] ?>><?= $linhas_cidade2['nome'] ?></option>
            <?php } ?>

        </select>
    </div>
    <div class="mb-3" style="padding-top:20px">
        <label for="email" class="form-label">Status:</label>
        <select class="form-select " aria-label=".form-select" name="status" id="status">
            <option value="S" <?= ($linha_telespectador['status'] == 'S' || $linha_telespectador['status'] == 's') ? 'selected' : "" ?>>Ativo</option>
            <option value="N" <?= ($linha_telespectador['status'] == 'N') ? 'selected' : "" ?>>Inativo</option>


        </select>

    </div>
    <?php
    $nome_ref = "../Usuarios_Cadastrados.php";
    require_once("footer_alterar.php") ?>