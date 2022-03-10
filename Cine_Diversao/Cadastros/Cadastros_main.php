<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="icon" type="image/jpg" href="../Imagens/logo-Cine_Diversão.jpg" />

    <?php require_once("../Bootstrap/css.php") ?>
</head>

<body>
    <?php require_once("../Bootstrap/javascript.php") ?>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="../Imagens/adm.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <a style = "margin-left:10px;"class="navbar-brand" href="#">Administração</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastros
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Filme/Cadastro.php">Filme</a>
                                <a class="dropdown-item" href="Genero/Cadastro.php">Gênero</a>
                                <a class="dropdown-item" href="Estado/Cadastro.php">Estado</a>
                                <a class="dropdown-item" href="Cidade/Cadastro.php">Cidade</a>
                                <a class="dropdown-item" href="Classificação/Cadastro.php">Classificação</a>
                                <a class="dropdown-item" href="Produtora/Cadastro.php">Produtora</a>
                                <a class="dropdown-item" href="Sessão/Cadastro.php">Sessão</a>
                                <a class="dropdown-item" href="Metodos_de_Pagamento/Cadastro.php">Métodos de Recebimento</a>
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