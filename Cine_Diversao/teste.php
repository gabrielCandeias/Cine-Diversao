<?php require_once("Bootstrap/css.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $a = [["", "", ""], ["", "", ""]];

    $a[0][1] =  "

    <input type=" . "radio" . " class=" . "btn-check" . " name=" . "vaga" . " id=" . 1 . " value=" . 1 . " autocomplete=" . "off" . ">" .
        "<label class=" . "btn btn-outline-" . " for=" . 1 . ">" . 33332 . "</label>";
    $a[0][2] =  "

    <input type=" . "radio" . " class=" . "btn-check" . " name=" . "vaga" . " id=" . 2 . " value=" . 1 . " autocomplete=" . "off" . ">" .
        "<label class=" . "btn btn-outline-" . " for=" . 2 . ">" . 33332 . "</label>";
    $a[0][3] =  "

    ";
    $a[1][1] =  "

    <input type=" . "radio" . " class=" . "btn-check" . " name=" . "vaga" . " id=" . 4 . " value=" . 1 . " autocomplete=" . "off" . ">" .
        "<label class=" . "btn btn-outline-" . " for=" . 4 . ">" . 33332 . "</label>";
    $a[1][2] =  "

    <input type=" . "radio" . " class=" . "btn-check" . " name=" . "vaga" . " id=" . 5 . " value=" . 1 . " autocomplete=" . "off" . ">" .
        "<label class=" . "btn btn-outline-" . " for=" . 5 . ">" . 33332 . "</label>";
    $a[1][3] =  "

     <input type=" . "radio" . " class=" . "btn-check" . " name=" . "vaga" . " id=" . 6 . " value=" . 1 . " autocomplete=" . "off" . ">" .
        "<label class=" . "btn btn-outline-" . " for=" . 6 . ">" . 33332 . "</label>";

    ?>

    <?php for ($lin = 0; $lin <= 1; $lin++) {
        if ($lin == 1) { ?> <br> <?php }
                            for ($col = 0; $col <= 3; $col++) {

                                echo $a[$lin][$col];
                            }
                        } ?>

</body>

</html>