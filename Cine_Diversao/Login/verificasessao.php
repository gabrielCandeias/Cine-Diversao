<?php

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    session_start();
    $mensagem="Efetue Login para Continuar";
    header("location:../Login/login.php?mensagem={$mensagem}");
    die();
}

?>