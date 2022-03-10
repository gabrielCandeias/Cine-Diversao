<?php require_once("../../Login/ADM/verificasessao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_pagina ?></title>
    <?php require_once("../../Bootstrap/css.php") ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../../Imagens/logo-Cine_Diversão.jpg" />

</head>

<body>
    <?php require_once("../../Bootstrap/javascript.php") ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-print-none">
            <div class="container-fluid">
                <img src="../../Imagens/adm.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <a style="margin-left:10px;" class="navbar-brand" href="#">Administração</a>
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
                                <a class="dropdown-item" href="../Relatorio_de_venda_por_Cliente/Relatorio.php">Relatório de vendas</a>
                                <a class="dropdown-item" href="../Relatorio_de_Filmes_ja_apresentados/Relatorio.php">Relatório de Apresentação de Filmes</a>

                            </ul>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Listagem
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="../navbarDropdown">
                                <a class="dropdown-item" href="../Listagem/Filmes_Cadastrados.php">Filme</a>
                                <a class="dropdown-item" href="../Listagem/Sessoes_Cadastradas.php">Sessão</a>
                                <a class="dropdown-item" href="../Listagem/Generos_Cadastrados.php">Gênero</a>
                                <a class="dropdown-item" href="../Listagem/Estados_Candastrados.php">Estado</a>
                                <a class="dropdown-item" href="../Listagem/Cidades_Cadastradas.php">Cidade</a>
                                <a class="dropdown-item" href="../Listagem/Clasificacoes_Cadastradas.php">Classificação</a>
                                <a class="dropdown-item" href="../Listagem/Produtoras_Cadastradas.php">Produtora</a>
                                <a class="dropdown-item" href="../Listagem/Metodos_de_pagamentos_Cadastrados.php">Metodos de Recebimento</a>
                                <a class="dropdown-item" href="../Listagem/Usuarios_Cadastrados.php">Usuario</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../Listagem/Vendas_realizadas.php">Vendas</a>

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
        <?php if (isset($mensagem_exclu) || isset($mysq_erro)) { ?>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>


            </svg>

            <?php if (isset($mysq_erro)) { ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div style="padding-left:8px">
                        <?php echo  $mysq_erro; ?>
                    </div>
                </div>

            <?php } else { ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div style="padding-left:8px">
                        <?php echo  $mensagem_exclu; ?>
                    </div>

                </div>
            <?php } ?>

        <?php } ?>
        <div class="card bg-dark">

            <div class="card-body text-white" style="grid-template-columns:1fr 1fr;display:inline">

                <div class="primario" style="grid:1/2">
                    <h2 class="card-title"><?= $nome_pagina ?></h2>

                    <?php if (isset($_POST['buscar'])) { ?>
                        <p class="card-text"><?= $qnt .  $mensagem ?></p>
                    <?php } ?>
                </div>


                <div class="secundario d-print-none" style="grid:2/2;margin-left:14%">
                    <br><br>
                    <form class="row g-3" method="post">
                        <?php if (isset($fator_b)) { ?>

                            <form class="row g-3">
                                <div class="row ">


                                    <?php if ($fator_b == "cliente") { ?>
                                        <div class="col">
                                            <label for="cliente">Cliente:</label>
                                            <select name="cliente" class="form-select" aria-label="Default select example">
                                                <option selected value="0"></option>
                                                <?php while ($linha_telespectadorb = mysqli_fetch_array($resultado_telespectadorb)) { ?>

                                                    <option value=<?= $linha_telespectadorb['id'] ?>><?= $linha_telespectadorb['nome'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col">
                                            <label for="sessao">Sessao:</label>
                                            <select name="sessao" class="form-select" aria-label="Default select example">
                                                <option selected value="0"></option>
                                                <?php while ($linha_sessaob = mysqli_fetch_array($resultado_sessaob)) { ?>
                                                    <option value=<?= $linha_sessaob['id'] ?>><?= $linha_sessaob['nome'] . " -> " . date('d-m-Y', strtotime($linha_sessaob["data"])) ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="mes">Mes:</label>
                                            <select name="mes" class="form-select" aria-label="Default select example">
                                                <option selected value="0"></option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="ano">Ano:</label>
                                            <select name="ano" class="form-select" aria-label="Default select example">
                                                <option selected value="0"></option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            </select>
                                        <?php } ?>
                                        </div>

                                        </select>

                                        <div class="col">

                                            <button type="submit" class="btn btn-outline-success" id="buscar" name="buscar" style="margin-top:24px">Buscar</button>
                                        </div>
                                </div>
                            </form>

                        <?php } ?>
                    </form>
                </div>
                <br>

            </div>
        </div>


        <table class="table">