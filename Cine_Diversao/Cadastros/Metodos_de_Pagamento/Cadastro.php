<?php
require_once("../../bd/conexao.php");
if (isset($_POST['cadastrar'])) {
    $sql_confirmacao = "select * from metodos_de_pagamento where nome='{$_POST['nome']}'";
    $resultado_confirmacao = mysqli_query($conexao, $sql_confirmacao);
    $linha_confirmacao = mysqli_fetch_array($resultado_confirmacao);

    if ($linha_confirmacao == "") {
        $nome = $_POST["nome"];
        $descricao = $_POST["desc"];



        $sql = "INSERT INTO metodos_de_pagamento (descricao, nome) VALUES ('{$descricao}','{$nome}')";

        mysqli_query($conexao, $sql);

        mysqli_close($conexao);

        $mensagem = " Registro Inserido com sucesso!";
    } else {
        $mensagem = " Esse registro já foi Inserido !";
    }
}


$nome_pagina = "Cadastro de Método de Recebimento";

?>


<?php require_once("../head.php"); ?>


<div class="row " style="margin-top: 10px">
    <div class="col">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" required>
    </div>
</div>
<div class="row " style="margin-top: 10px; margin-bottom:50px">
    <div class="col">
        <label for="desc" class="form-label">Descrição</label>
        <textarea name="desc" class="form-control" id="desc" rows="3" required></textarea>
    </div>

</div>

<?php require_once("../footer.php") ?>