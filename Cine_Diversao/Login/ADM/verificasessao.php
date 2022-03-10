<?php

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['idA'])){
    session_start();
    $mensagem="Efetue Login";
    header("location:Login/ADM/login.php?mensagem={$mensagem}");
    die();
}

?>