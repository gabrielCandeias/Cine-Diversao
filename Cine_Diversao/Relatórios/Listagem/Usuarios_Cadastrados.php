<?php
$_POST['buscar'] = 1;
require_once("../../bd/conexao.php");
if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $sql = "delete from telespectador where id={$id}";
    try {
        mysqli_query($conexao, $sql);

        if (mysqli_error($conexao) == "") {

            $mensagem_exclu = " Registro Excluido com sucesso!";
        } else {
            throw new exception("Esse Registro esta sendo usado em outro local", 1);
        }
    } catch (Exception $e) {
        $mysq_erro = $e->getMessage();
    }
}
$sql = "select * from telespectador";

$resultado = mysqli_query($conexao, $sql);

$qnt = mysqli_num_rows($resultado);

if ($qnt <= 1) {
    $mensagem = " Registro encontrado";
} else {
    $mensagem = " Registros encontrados";
}

$nome_pagina = "Usuarios Cadastrados ";
?>

<?php require_once("../Nav_Relatorios.php"); ?>

<tr>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">CPF</th>
    <th scope="col">Email</th>
    <th scope="col">Sexo</th>
    <th scope="col">Data de Nascimento</th>
    <th scope="col">Logradouro</th>
    <th scope="col">CEP</th>
    <th scope="col">Telefone</th>
    <th scope="col">Cidade</th>
    <th scope="col">Ativo</th>
    <th scope="col" class="d-print-none">Ação</th>

</tr>
</thead>
<tbody>
    <?php if (isset($mysq_erro)) {
        mysqli_close($conexao);
        require("../../bd/conexao.php");
    }
    while ($linha = mysqli_fetch_array($resultado)) {
    ?>
        <tr>
            <td> <?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['cpf'] ?></td>
            <td><?= $linha['email'] ?></td>
            <td><?php if ($linha['sexo'] == 1) {
                    echo "Masculino";
                } else if ($linha['sexo'] == 0) {
                    echo "Feminino";
                } else {
                    echo "Prefiro não declarar";
                } ?></td>
            <td><?= date('d-m-Y', strtotime($linha['data_nascimento'])) ?></td>
            <td><?= $linha['logradouro'] ?></td>
            <td><?= $linha['cep'] ?></td>
            <td><?= $linha['telefone'] ?></td>

            <?php

            $sql_cidade = "select * from cidade  where id= {$linha['cidade_id']}";

            $resultado_cidade = mysqli_query($conexao, $sql_cidade);

            $linhas_cidade = mysqli_fetch_array($resultado_cidade);




            ?>
            <td><?= $linhas_cidade['nome'] ?></td>
            <td><?= ($linha['status'] == 'S' ? 'SIM' : 'NÃO') ?></td>
            <td class="d-flex d-print-none">

                <form action="Listagem_Alterar/usuario_alterar.php" method="post">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button style="margin-right:10px;" type="submit" name="alterar" value="alterar" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                </form>


                <form action="Usuarios_Cadastrados.php" method="post" onsubmit="return confirm('Quer mesmo excluir esse registro?')">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button type="submit" name="excluir" value="excluir" class="btn btn-danger">

                        <i class="fas fa-trash"></i>
                </form>

                </button>
            </td>

        </tr>
    <?php  }
    require_once("../footer_relaorios.php") ?>