<?php
$_POST['buscar'] = 1;
require_once("../../bd/conexao.php");
if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $sql = "delete from sessao where id={$id}";
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
$sql = "select * from sessao";

$resultado = mysqli_query($conexao, $sql);
$qnt = mysqli_num_rows($resultado);

if ($qnt <= 1) {
    $mensagem = " Registro encontrado";
} else {
    $mensagem = " Registros encontrados";
}

$nome_pagina = "Sessões Cadastradas ";

?>

<?php require_once("../Nav_Relatorios.php"); ?>

<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Hora</th>
        <th scope="col">Filme</th>
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
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= date('d-m-Y', strtotime($linha["data"])) ?></td>
            <td><?= $linha['hora'] ?></td>

            <td> <?php

                    $sql_filme = "select * from filme  where id= {$linha['filme_id']}";

                    $resultado_filme = mysqli_query($conexao, $sql_filme);

                    $linhas_filme = mysqli_fetch_array($resultado_filme);

                    echo $linhas_filme['nome'];


                    ?>

            </td>

            <td><?= ($linha['status'] == 'S' ? 'SIM' : 'NÃO') ?></td>

            <td class="d-flex d-print-none">
                <form action="Listagem_Alterar/sessao_alterar.php" method="post">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button style="margin-right:10px;" type="submit" name="alterar" value="alterar" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                </form>


                <form action="Sessoes_Cadastradas.php" method="post" onsubmit="return confirm('Quer mesmo excluir esse registro?')">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button type="submit" name="excluir" value="excluir" class="btn btn-danger">

                        <i class="fas fa-trash"></i>
                </form>

                </button>
            </td>

        </tr>
    <?php  }
    require_once("../footer_relaorios.php") ?>