<?php
$_POST['buscar'] = 1;
require_once("../../bd/conexao.php");



if (isset($_POST['excluir'])) {

    $id = $_POST['id'];
    $sql = "delete from filme where id={$id}";
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
$sql = "select * from filme";

$resultado = mysqli_query($conexao, $sql);
$qnt = mysqli_num_rows($resultado);


if ($qnt <= 1) {
    $mensagem = " Registro encontrado";
} else {
    $mensagem = " Registros encontrados";
}

$nome_pagina = "Filmes Cadastrados ";

?>


<?php require_once("../Nav_Relatorios.php"); ?>

<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Duração</th>
        <th scope="col">Idioma</th>
        <th scope="col">Gênero</th>
        <th scope="col">Ano de Lançamento</th>
        <th scope="col">Produtora</th>
        <th scope="col">Classificação</th>
        <th scope="col">Ativo</th>
        <th scope="col" class="d-print-none">Ação</th>


    </tr>
</thead>
<tbody>
    <?php if (isset($mysq_erro)) {
        mysqli_close($conexao);
        require("../../bd/conexao.php");
    }
    while ($linha = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['duracao'] ?></td>
            <td><?= $linha['idioma'] ?></td>


            <?php

            $sql_genero = "select * from genero where id= {$linha['genero_id']}";

            $resultado_genero = mysqli_query($conexao, $sql_genero);

            $linhas_genero = mysqli_fetch_array($resultado_genero);

            ?>



            <td><?= $linhas_genero['nome'] ?></td>

            <td><?= date('d-m-Y', strtotime($linha['ano_lancamento'])) ?></td>


            <?php

            $sql_produtora = "select * from produtora where id= {$linha['produtora_id']}";

            $resultado_produtora = mysqli_query($conexao, $sql_produtora);

            $linhas_produtora = mysqli_fetch_array($resultado_produtora);


            ?>

            <td><?= $linhas_produtora['nome'] ?></td>

            <?php

            $sql_classificacao = "select * from classificacao where id= {$linha['classificacao_id']}";

            $resultado_classificacao = mysqli_query($conexao, $sql_classificacao);

            $linhas_classificacao = mysqli_fetch_array($resultado_classificacao);


            ?>

            <td><?= $linhas_classificacao['nome'] ?></td>
            <td><?= ($linha['status'] == 'S' ? 'SIM' : 'NÃO') ?></td>
            <td class="d-flex d-print-none">
                <form action="Listagem_Alterar/filme_alterar.php" method="post">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button style="margin-right:10px;" type="submit" name="alterar" value="alterar" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                </form>


                <form action="Filmes_Cadastrados.php" method="post" onsubmit="return confirm('Quer mesmo excluir esse registro?')">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button type="submit" name="excluir" value="excluir" class="btn btn-danger">

                        <i class="fas fa-trash"></i>
                </form>

                </button>
            </td>

        </tr>
    <?php  }
    require_once("../footer_relaorios.php") ?>