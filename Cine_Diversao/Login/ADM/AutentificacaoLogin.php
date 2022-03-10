<?php

if (($_POST['usuario'] != "") && ($_POST['senha'] != "")) {

    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);

    require_once("../../bd/conexao.php");

    $sql = "select *
                from adm
                where usuario='{$usuario}'";

    $resultado = mysqli_query($conexao, $sql);

    $ADM = mysqli_fetch_array($resultado);

    if (password_verify($senha, $ADM['senha'])) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['idA'] = $ADM['id'];
        $_SESSION['nomeA'] = $ADM['nome'];
        $_SESSION['emailA'] = $ADM['email'];

        header("location:../../Adiministração.php");
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
