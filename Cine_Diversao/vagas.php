

<?php

require_once("bd/conexao.php");

for ($i = 1; $i <= 107; $i++) {


    if ($i < 10) {

        $nome = "00{$i}";
    } else if($i > 10 && $i < 100){
        $nome = "0{$i}";
    } else{
        $nome = "{$i}";
    }

    $sql = "INSERT INTO vaga(numero) VALUES ('{$nome}')";

    mysqli_query($conexao, $sql);
}




