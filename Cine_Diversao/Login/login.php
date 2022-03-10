<?php
if (isset($_POST['cadastrar'])) {
    if ($_POST['senha'] == $_POST['repsenha']) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        header("location:ContinuacaoLogin.php?nome={$nome}&email={$email}&senha={$senha}");
        
    } else {
        $mensagem = "Preencha as senhas corretamente";
        header("location:login.php?mensagem2={$mensagem}");
        
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css-Login.css">
    <link rel="icon" type="image/jpg" href="../Imagens/Icone.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>


<body>

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo de Volta!</h2>
                <p class="description description-primary">Conecte-se novamente!</p>
                <p class="description description-primary">Faça login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>
            <div class="second-column">

                <?php
                if (isset($_GET['mensagem2'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?= $_GET['mensagem2'] ?>
                    </div>
                <?php } ?>

                <br>

                <h2 class="title title-second">Criar Conta</h2>

                <br><br>

                <p class="description description-second">Use o seu email para se registrar!:</p>
                <form class="form" method="post" action="">

                    <br>

                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome" name="nome" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="senha" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Repita a Senha" name="repsenha" required>
                    </label>


                    <button type="submit" class="btn btn-second" name="cadastrar">Cadastrar</button>

                </form>


            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Ola Amigo !</h2>
                <p class="description description-primary">Ainda não possui cadastro?</p>
                <p class="description description-primary">Venha agora se juntar a nós</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>


            <div class="second-column">
                <?php
                if (isset($_GET['mensagem'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?= $_GET['mensagem'] ?>
                    </div>
                <?php } ?>

                <h2 class="title title-second">Login</h2>


                <br>
                <form action="AutentificacaoLogin.php" class="form" method="post">

                    <br>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="emaill">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password" name="senhal">
                    </label>


                    <button class="btn btn-second" type="subimit" name="entrar">Entrar</button>
                </form>

            </div><!-- second column -->

        </div><!-- second-content -->
    </div>
    <script src="app.js"></script>
</body>

</html>