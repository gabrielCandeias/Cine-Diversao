<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css-Login.css">
    <link rel="icon" type="image/jpg" href="../../Imagens/Icone.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>


<body>

    <div class="container">

        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Ola !</h2>
                <p class="description description-primary">Conecte-se agora para ter acesso </p>
                <p class="description description-primary">A admininstração do Site</p><br>
                <img src="../../Imagens/logo-Cine_Diversão.jpg" width="40%" height="50%" max-height="100px" class="d-inline-block align-top" alt="">

            </div>


            <div class="second-column">
                <?php
                if (isset($_GET['mensagem'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?= $_GET['mensagem'] ?>
                    </div>
                <?php } ?>

                <br>

                <h2 class="title title-second">Login</h2>

                <br><br>

                <form action="AutentificacaoLogin.php" class="form" method="post">

                    <br>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="usuario" placeholder="Usuario" name="usuario">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="senha">
                    </label>


                    <button class="btn btn-second" type="subimit" name="entrar">Entrar</button>
                </form>

            </div><!-- second column -->

        </div><!-- second-content -->
    </div>
    <script src="../app.js"></script>
</body>

</html>