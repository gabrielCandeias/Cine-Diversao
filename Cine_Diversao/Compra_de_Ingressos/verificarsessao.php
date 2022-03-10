<?php

require_once("../bd/conexao.php");

$sql = "select * from vaga";

$resultado = mysqli_query($conexao, $sql);

$vagas = [
    ["0", "0", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["1", "1", "0", "0", "0", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "0", "1", "1", "1", "0", "0"],
    ["0", "1", "1", "0", "0", "0", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "0", "0", "1", "1", "1", "0"],
    ["0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
    ["0", "0", "0", "0", "1", "1", "0", "0", "0", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "0", "1", "1", "1"],
    ["0", "0", "0", "0", "0", "1", "1", "0", "0", "0", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "0", "1", "1", "1"],

];

$lin = 0;
$col = 0;

?>

<div class="vagas">

    <?php
    while ($linha = mysqli_fetch_array($resultado)) {


        for ($controlador = 0; $controlador < 1;) {
            if ($vagas[$lin][$col] == 1) {

                if ($linha["status"] == 1) {
                    $cor = "success";
                    $ds = "";
                } else if ($linha["status"] == 0) {
                    $cor = "danger";
                    $ds = "disabled";
                }




                $vagas[$lin][$col] =   "<input type= \"radio\" class= \"btn-check\"  name= \"vaga\"   id= \"{$linha["id"]}\"  value= \"{$linha["id"]}\" autocomplete=\"off\" {$ds}  required> " .
                    " <label class= \"btn btn-outline-{$cor}\" for= \"{$linha["id"]}\">  {$linha["numero"]}  </label>";

                $controlador = 1;
            } else {
                $vagas[$lin][$col] =  "<input type= \"radio \" class= \" btn-check\"  name= \"off\"   id= \" 1 \"  value= \" 1 \" autocomplete=\"off\" disabled > 
                <label class= \"btn\" for= \" 1 \"  ></label>";
            }
            $col = $col + 1;

            if ($col == 27) {
                $col = 0;
                $lin = $lin + 1;
            }
        }
    }

    ?>


    <div class="btn-group me-2" role="group" aria-label="First group" style="margin-top:5px">

        <?php

        for ($lina = 0; $lina < 8; $lina++) {

        ?> </div> <br>
    <div class="btn-group me-2" role="group" aria-label="First group" style="margin-top:5px">
    <?php

            for ($col = 0; $col < 27; $col++) {
                echo $vagas[$lina][$col];
            }
        }

    ?>

    </div>


</div>