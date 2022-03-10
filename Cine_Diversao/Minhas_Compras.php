<?php
require_once("Login/verificasessao.php");
require_once("bd/conexao.php");

if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $idvaga = $_POST['idvaga'];
    $sqlvaga = "UPDATE `vaga` SET `status`='1' WHERE id= '{$idvaga}'";
    mysqli_query($conexao, $sqlvaga);
    $sql = "delete from venda where id={$id}";
    mysqli_query($conexao, $sql);


    $mensagem = "registro excluido com sucesso";
}

$sql = "select * from venda where telespectador_id={$_SESSION['id']}";

$resultado = mysqli_query($conexao, $sql);

$nome_pagina = "Compras realizadas ";



?>

<?php require_once("header.php"); ?>

<div class="container " style="padding-top:100px">

    <div class="card bg-dark">
        <div class="card-body text-white">
            <h2 class="card-title"><?= $nome_pagina ?> <i class="fas fa-shopping-cart"></i></h2>
            <br><br>
        </div>
    </div>
    <br>
    <table class="table">


        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Filme</th>
                <th scope="col">Data</th>
                <th scope="col">Vaga</th>
                <th scope="col">Valor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($linha = mysqli_fetch_array($resultado)) { ?>
                <tr>
                    <td><?= $linha['id'] ?></td>

                    <td><?php
                        $sql_vaga = "select numero from vaga where id= {$linha['vaga_id']}";

                        $resultado_vaga = mysqli_query($conexao, $sql_vaga);

                        $linhas_vaga = mysqli_fetch_array($resultado_vaga);

                        $sql_sessao = "select filme_id from sessao where id= {$linha['sessao_id']}";

                        $resultado_sessao = mysqli_query($conexao, $sql_sessao);

                        $linhas_sessao = mysqli_fetch_array($resultado_sessao);

                        $sql_filme = "select nome from filme where id= {$linhas_sessao['filme_id']}";

                        $resultado_filme = mysqli_query($conexao, $sql_filme);

                        $linhas_filme = mysqli_fetch_array($resultado_filme);

                        echo $linhas_filme['nome'];



                        ?>
                    </td>

                    <td><?= date('d-m-y', strtotime($linha['data_venda'])) ?></td>
                    <td><?= $linhas_vaga['numero'] ?></td>
                    <td><?= "R$ " . $linha['valor_total'] ?></td>



                    <td class="d-flex">



                        <form action="" method="post" onsubmit="return confirm('Deseja realmente cancelar a compra?')">

                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="idvaga" value="<?= $linha['vaga_id'] ?>">

                            <button type="submit" name="excluir" value="excluir" class="btn btn-danger">

                                Cancelar
                        </form>

                        </button>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card bg-dark">
        <div class="card-body text-white">

            <br>
        </div>
    </div>
</div><br><br>



</body>

</html>