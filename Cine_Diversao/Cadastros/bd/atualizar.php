<?php

require_once("conexao.php");

$id=5;
$nome="velosese 9";
$sinopsea="fugindo demais";


$sql= " update filme
            set nome ='{$nome}',
                sinopsea ='{$sinopsea}'
        where   id = {$id}";

echo "{$sql}";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
?>