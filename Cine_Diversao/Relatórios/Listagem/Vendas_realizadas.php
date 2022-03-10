<?php

require_once("../../bd/conexao.php");
$_POST['buscar'] = 1;
if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $sql = "delete from venda where id={$id}";
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

$sql = "select * from venda ";

$resultado = mysqli_query($conexao, $sql);

$qnt = mysqli_num_rows($resultado);

$nome_pagina = "Compras realizadas ";

if ($qnt <= 1) {
    $mensagem = " Registro encontrado";
} else {
    $mensagem = " Registros encontrados";
}
$nome_pagina = "Vendas Realizadas";
?>

<?php require_once("../Nav_Relatorios.php"); ?>



<thead>
    <tr>
        <th scope="col">ID</th>

        <th scope="col">Telespectador</th>
        <th scope="col">Vaga</th>
        <th scope="col">Sessão</th>
        <th scope="col">Data</th>
        <th scope="col">Métodos de Pagamento</th>
        <th scope="col">Valor</th>
        <th scope="col">Ativo</th>
        <th class="d-print-none" scope="col">Ação</th>
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

            <td><?= $linha['data_venda'] ?></td>

            <td><?php

                $sql_mp = "select nome from metodos_de_pagamento where id= {$linha['metodos_de_pagamento_id']}";

                $resultado_mp = mysqli_query($conexao, $sql_mp);

                $linhas_mp = mysqli_fetch_array($resultado_mp);

                echo $linhas_mp['nome'];


                ?>
            </td>

            <td><?= "R$ " . $linha['valor_total'] ?></td>


            <td><?= ($linha['status'] == 'S' ? 'SIM' : 'NÃO') ?></td>
            <td class="d-flex d-print-none">
                <form action="Listagem_Alterar/Vendas_alterar.php" method="post">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button style="margin-right:10px;" type="submit" name="alterar" value="alterar" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                </form>


                <form action="Vendas_realizadas.php" method="post" onsubmit="return confirm('Quer mesmo excluir esse registro?')">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button type="submit" name="excluir" value="excluir" class="btn btn-danger">

                        <i class="fas fa-trash"></i>
                </form>

                </button>
            </td>

        </tr>
    <?php  }
    require_once("../footer_relaorios.php") ?>