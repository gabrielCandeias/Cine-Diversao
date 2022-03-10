<?php

$nome_pagina="Administração";

?>



<?php require_once("../Login/ADM/verificasessao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_pagina ?></title>
    <?php require_once("../Bootstrap/css.php") ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../Imagens/logo-Cine_Diversão.jpg"/>

</head>

<body>
    <?php require_once("../Bootstrap/javascript.php") ?>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-print-none">
        <div class="container-fluid">
        <img src="..//Imagens/adm.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <a style = "margin-left:10px;" class="navbar-brand" href="#">Administração</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="../navbarDropdown">
                            <a class="dropdown-item" href="Relatorio_de_venda_por_Cliente/Relatorio.php">Relatório de Vendas</a>
                        <a class="dropdown-item" href="Relatorio_de_Filmes_ja_apresentados/Relatorio.php">Relatório de Apresentação de Filmes</a>

                        </ul>
                    </li>
                    

                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Listagem
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Listagem/Filmes_Cadastrados.php">Filme</a>
                        <a class="dropdown-item" href="Listagem/Sessoes_Cadastradas.php">Sessão</a>
                        <a class="dropdown-item" href="Listagem/Generos_Cadastrados.php">Gênero</a>
                        <a class="dropdown-item" href="Listagem/Estados_Candastrados.php">Estado</a>
                        <a class="dropdown-item" href="Listagem/Cidades_Cadastradas.php">Cidade</a>
                        <a class="dropdown-item" href="Listagem/Clasificacoes_Cadastradas.php">Classificação</a>
                        <a class="dropdown-item" href="Listagem/Produtoras_Cadastradas.php">Produtora</a>
                        <a class="dropdown-item" href="Listagem/Metodos_de_pagamentos_Cadastrados.php">Metodos de Recebimento</a>
                        <a class="dropdown-item" href="Listagem/Usuarios_Cadastrados.php">Usuario</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Listagem/Vendas_realizadas.php">Vendas</a>

                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <a type="button" class="btn btn-outline-danger" href="../Adiministração.php" style="float:right">Retornar para ADM</a>
                </form>
            </div>
        </div>
    </nav>
</header>
</body>
</html>