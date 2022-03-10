<?php

$_POST['buscar'] = 1;
require_once("../../bd/conexao.php");

if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $sql = "delete from cidade where id={$id}";

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
$sql = "select * from cidade";

$resultado = mysqli_query($conexao, $sql);
$qnt = mysqli_num_rows($resultado);
$nome_pagina = "Cidades Cadastradas ";

if ($qnt <= 1) {
    $mensagem = " Registro encontrado";
} else {
    $mensagem = " Registros encontrados";
}

?>

<?php require_once("../Nav_Relatorios.php"); ?>


<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Estado</th>
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

            <td><?php

                $sql_estado = "select * from estado  where id= {$linha['estado_id']}";

                $resultado_estado = mysqli_query($conexao, $sql_estado);

                $linhas_estado = mysqli_fetch_array($resultado_estado);

                echo $linhas_estado['uf'];


                ?>
            </td>
            <td><?= ($linha['status'] == 'S' ? 'SIM' : 'NÃO') ?></td>

            <td class="d-flex d-print-none">
                <form action="Listagem_Alterar/cidade_alterar.php" method="post">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button style="margin-right:10px;" type="submit" name="alterar" value="alterar" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                </form>

                <form action="Cidades_Cadastradas.php" method="post" onsubmit="return confirm('Quer mesmo excluir esse registro?')">

                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                    <button type="submit" name="excluir" value="excluir" class="btn btn-danger">

                        <i class="fas fa-trash"></i>
                </form>




            </td>

        </tr>
    <?php  }
    require_once("../footer_relaorios.php") ?>