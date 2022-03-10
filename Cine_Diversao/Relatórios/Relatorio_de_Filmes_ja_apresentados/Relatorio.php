<?php

require_once("../../Login/ADM/verificasessao.php");

require_once("../../bd/conexao.php");

$sql = "select * from filme";

$resultado = mysqli_query($conexao, $sql);

$qnt = mysqli_num_rows($resultado);

if ($qnt <= 1) {
    $mensagem = " Registro encontrado";
} else {
    $mensagem = " Registros encontrados";
}

$nome_pagina = "Apresentação de Filmes ";

$fator_x = "1";

$_POST['buscar'] = 1;
?>

<?php require_once("../Nav_Relatorios.php"); ?>
<br>

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



    </tr>
</thead>
<tbody>
    <?php while ($linha = mysqli_fetch_array($resultado)) { ?>
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

            <td><?= $linha['ano_lancamento'] ?></td>


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



        </tr>
    <?php  }
    require_once("../footer_relaorios.php") ?>