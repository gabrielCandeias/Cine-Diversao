<?php

require_once("conexao.php");


$sql="select * from filme";

$resultado=mysqli_query($conexao,$sql);

$linhas=mysqli_num_rows($resultado);

echo $linhas . "encontradas <br>";

while($linha=mysqli_fetch_array($resultado)){
    echo $linha['id'] . "-" . $linha['nome'] . "-" . $linha['sinopsea'] . "<br>";
}

?>