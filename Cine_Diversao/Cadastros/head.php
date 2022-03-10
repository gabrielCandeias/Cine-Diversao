<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_pagina ?></title>
    <?php require_once("../../Bootstrap/css.php") ?>
    <link rel="icon" type="image/jpg" href="../../Imagens/logo-Cine_Diversão.jpg" />
</head>

<body>
    <?php require_once("../../Bootstrap/javascript.php") ?>

    <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="../../Imagens/adm.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <a style = "margin-left:10px;" class="navbar-brand" href="#">Administração</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="../navbarDropdown">
                            <a class="dropdown-item" href="../Filme/Cadastro.php">Filme</a>
                            <a class="dropdown-item" href="../Genero/Cadastro.php">Gênero</a>
                            <a class="dropdown-item" href="../Estado/Cadastro.php">Estado</a>
                            <a class="dropdown-item" href="../Cidade/Cadastro.php">Cidade</a>
                            <a class="dropdown-item" href="../Classificação/Cadastro.php">Classificação</a>
                            <a class="dropdown-item" href="../Produtora/Cadastro.php">Produtora</a>
                            <a class="dropdown-item" href="../Sessão/Cadastro.php">Sessão</a>
                            <a class="dropdown-item" href="../Metodos_de_Pagamento/Cadastro.php">Métodos de Recebimeto</a>
                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <a type="button" class="btn btn-outline-danger" href="../../Adiministração.php" style="float:right">Retornar para ADM</a>
                </form>
            </div>
        </div>
    </nav>

</header>

    <div class="container" style="padding-top:100px">
        <?php if (isset($mensagem)) : ?>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>


            </svg>


            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div style="padding-left:8px">
                    <?php echo  $mensagem; ?>
                </div>
                
            </div>


        <?php endif ?>

        <div class="card bg-dark">
            <div class="card-body text-white">
                <h2 class="card-title"><?= $nome_pagina ?></h2>
                <br><br>
            </div>
        </div>
        
        <form class="pt-3" method="post">