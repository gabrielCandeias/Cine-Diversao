<?php

session_start();

unset( $_SESSION['sessao_id'] );
unset( $_SESSION['vaga_id'] );

header("location:../index.php");
