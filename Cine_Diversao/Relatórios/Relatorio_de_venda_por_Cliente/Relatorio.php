<?php
require_once("../../Login/ADM/verificasessao.php");
require_once("../../bd/conexao.php");



if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $sql = "delete from venda where id={$id}";
    mysqli_query($conexao, $sql);

    $mensagem = "registro excluido com sucesso";
}
if (isset($_POST['buscar'])) {
    $where = '';
    if (isset($_POST['cliente']) && $_POST['cliente'] != 0) {

        $where .= "and telespectador_id={$_POST['cliente']} ";
    }
    if (isset($_POST['ano']) && $_POST['ano'] != 0) {
        $where .= "and YEAR(data_venda)={$_POST['ano']} ";
    }
    if (isset($_POST['mes']) && $_POST['mes'] != 0) {
        $where .= "and MONTH(data_venda)={$_POST['mes']} ";
    }
    if (isset($_POST['sessao']) && $_POST['sessao'] != 0) {
        $where .= "and sessao_id={$_POST['sessao']}";
    }

    $sql = "select * from venda where 1=1 $where";

    $resultado = mysqli_query($conexao, $sql);


    $qnt = mysqli_num_rows($resultado);

    if ($qnt <= 1) {
        $mensagem = " Registro encontrado";
    } else {
        $mensagem = " Registros encontrados";
    }
}
$nome_pagina = "Relatórios de Vendas";

$fator_b = "cliente";

$sql_telespectadorb = "select id,nome from telespectador";
$resultado_telespectadorb = mysqli_query($conexao, $sql_telespectadorb);

$sql_sessaob = "select * from sessao";
$resultado_sessaob = mysqli_query($conexao, $sql_sessaob);

$margin = "40%";

?>

<?php require_once("../Nav_Relatorios.php"); ?>

<br>

<thead>
    <tr>
        <?php if (isset($_POST['buscar'])) { ?>
            <th scope="col">ID da Venda</th>
            <th scope="col">Telespectador</th>
            <th scope="col">Vaga</th>
            <th scope="col">Sessão</th>
            <th scope="col">Data</th>
            <th scope="col">Valor</th>

        <?php } else { ?>
            <th></th>
        <?php } ?>
    </tr>
</thead>
<tbody>
    <?php if (isset($_POST['buscar'])) {
        $valort = 0; ?>

        <?php while ($linha = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?= $linha['id'] ?></td>

                <td><?php

                    $sql_telespectador = "select nome from telespectador where id= {$linha['telespectador_id']}";

                    $resultado_telespectador = mysqli_query($conexao, $sql_telespectador);

                    $linhas_telespectador = mysqli_fetch_array($resultado_telespectador);

                    echo $linhas_telespectador['nome'];


                    ?>
                </td>

                <td><?php

                    $sql_vaga = "select numero from vaga where id= {$linha['vaga_id']}";

                    $resultado_vaga = mysqli_query($conexao, $sql_vaga);

                    $linhas_vaga = mysqli_fetch_array($resultado_vaga);

                    echo $linhas_vaga['numero'];


                    ?>
                </td>

                <td><?php

                    $sql_sessao = "select nome from sessao where id= {$linha['sessao_id']}";

                    $resultado_sessao = mysqli_query($conexao, $sql_sessao);

                    $linhas_sessao = mysqli_fetch_array($resultado_sessao);

                    echo $linhas_sessao['nome'];


                    ?>
                </td>

                <td><?= date('d-m-Y', strtotime($linha['data_venda'])) ?></td>

                <td><?= "R$ " . $linha['valor_total'] ?></td>

                <?php $valort += $linha['valor_total'] ?>
            </tr>

        <?php  } ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <p style="text-align:right">Valor total = </p>
            </td>
            <td> <?= "R$ " . $valort ?></td>
        </tr>
    <?php } else { ?>

        <td>
            <center>
                <h2>selecione um filtro acima <i class="fas fa-chevron-up"></i></h2>
            </center>
        </td>

    <?php }

    require_once("../footer_relaorios.php") ?>