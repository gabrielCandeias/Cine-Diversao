<?php

require_once("conexao.php");

$id=3;
$sql="delete from filme where id = {$id}";

echo"delete funcionou";
mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>