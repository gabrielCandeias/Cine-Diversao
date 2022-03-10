<?php

if (($_POST['emaill'] != "") && ($_POST['senhal'] != "")) {

    $email = addslashes($_POST['emaill']);
    $senha = addslashes($_POST['senhal']);

    require_once("../bd/conexao.php");
    $sql = "select *
                from telespectador
                where email='{$email}'";

    $resultado = mysqli_query($conexao, $sql);

    $telespectador = mysqli_fetch_array($resultado);

    if (password_verify($senha, $telespectador['senha'])) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $telespectador['id'];
        $_SESSION['nome'] = $telespectador['nome'];
        $_SESSION['email'] = $telespectador['email'];

        header("location:../index.php");
        die();
    } else {
        $mensagem = "Usuario ou Senha incorretos";
        header("location:login.php?mensagem={$mensagem}");
        die();
    }
} else {
    $mensagem = "Preencha os campos Email e Senha";
    header("location:login.php?mensagem={$mensagem}");
    die();
}
