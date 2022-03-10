
<!DOCTYPE html>
<html lang="pt-br" style="height:100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Diversão</title>
    <?php require_once("Bootstrap/css.php") ?>
    <link rel="stylesheet" href="Estilos/estilo.css">
    <link rel="icon" type="image/jpg" href="Imagens/Icone.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body style="height:100%;">
    <?php require_once("Bootstrap/javascript.php") ?>
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="Imagens/logo-Cine_Diversão.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Cine Diversão</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Compra_de_Ingressos/Ingressos.php">Ingressos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuemSomos.php">Quem Somos</a>
                        </li>

                    </ul>
                </div>
                 <div>
                    <?php if(isset($_SESSION['id'])){?>
                    
                    <a type="button" href="Adiministração.php" class="btn  btn-outline-light " style=> <i class="fas fa-user-cog"></i> Administração</a>
                    
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                    <div class="btn-group" role="group"style="margin-left: 20px">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                            <p style="padding-right:39px;display:inline"><i class="fas fa-user"></i> <?= $_SESSION['nome'];?> </p>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="Minhas_Compras.php">Minhas Compras <i class="fas fa-shopping-cart"></i></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Login/sair.php">Sair <i class="fas fa-sign-out-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
                    
                    <?php }else{ ?>
        
                    <a type="button" href="Adiministração.php" class="btn  btn-outline-light " style=> <i class="fas fa-user-cog"></i> Administração</a>
                    <a type="button" href="Login/login.php" class="btn btn-outline-primary" style="margin-left:20px;"> <i class="fas fa-door-open"></i> Cadastrar/Login</a>
                    
                    <?php } ?>
                </div>
            </div>
        </nav>