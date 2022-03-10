<?php


require_once("../bd/conexao.php");
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

if (isset($_POST['finalizar'])) {

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];

    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $Logradouro = $_POST["logradouro"];
    $Sexo = $_POST["sexo"];
    $Data_Nascimento = $_POST["data"];
    $Cidade = $_POST["cidade"];
    $Cep = $_POST["cep"];
    $Bairro = $_POST["bairro"];
    $Numero = $_POST["numero"];
    $Complemento = $_POST["complemento"];
    $Telefone = $_POST["telefone"];


    $sql = "insert into telespectador(nome,cpf,email,senha, logradouro, sexo, data_nascimento, cidade_id, cep, bairro, numero, telefone, complemento) 
            values ('{$nome} {$sobrenome}','{$cpf}','{$email}','{$senha}','{$Logradouro}','{$Sexo}','
            {$Data_Nascimento}','{$Cidade}','{$Cep}','{$Bairro}','{$Numero}','{$Telefone}','{$Complemento}')";

    mysqli_query($conexao, $sql);



    header("location:../index.php");
    die();
}

$sql_cidade = "select * from cidade";

$resultado_cidade = mysqli_query($conexao, $sql_cidade);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/jpg" href="../Imagens/Icone.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once("../Bootstrap/css.php") ?>
</head>

<body>



    <div class="container" style="padding-top:10px">


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
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


        <?php endif ?>

        <div class="card bg-dark">

            <div class="card-body text-white">
                <h5 class="card-title">Cadastro de Usuario</h5>
                <br>
                <h6 class="card-title">Preencha os dados abaixo para concluir seu cadastro</h6>
                <br>

            </div>
        </div>
        <form class="pt-3" method="post">
            <div class="row" style="margin-top:20px">

                <div class="col">
                    <label for="nome" class="form-label">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" value=<?= $nome ?> required>

                </div>

                <div class="col">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input name="sobrenome" type="text" class="form-control" id="sobrenome" required>
                </div>
                <div class="col">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input name="cpf" type="number" class="form-control" id="cpf" required>
                </div>

            </div>
            <div class="row" style="margin-top:20px">

                <div class="col">
                    <label for="senha" class="form-label">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" value=<?= $senha ?> required>
                </div>
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="mail" class="form-control" id="email" value=<?= $email ?> required>
                </div>
            </div>
            <div class="row" style="margin-top:20px">

                <div class="col">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input name="logradouro" type="text" class="form-control" id="logradouro" required>
                </div>

            </div>

            <div class="row" style="margin-top:20px;">

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Sexo</label>
                    <select class="form-select" aria-label="Default select example" name="sexo">
                        <option selected>Prefiro não Delarar</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                    </select>
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                    <input name="data" type="date" max="2007-12-31" min="1922-12-31" class="form-control" id="data" required>
                </div>
            </div>

            <div class="row" style="margin-top:20px;">

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Cidade</label>

                    <select class="form-select" aria-label="Default select example" name="cidade">
                        <option selected></option>
                        <?php while ($linhas_cidade = mysqli_fetch_array($resultado_cidade)) {
                        ?>
                            <option value=<?= $linhas_cidade['id'] ?>><?= $linhas_cidade['nome'] ?></option>
                        <?php  }
                        mysqli_close($conexao);
                        ?>
                    </select>

                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Cep</label>
                    <input name="cep" type="number" class="form-control" id="cep" required>
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                    <input name="bairro" type="text" class="form-control" id="bairro" required>
                </div>

            </div>
            <div class="row" style="margin-top:20px;  margin-bottom: 50px">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Número</label>
                    <input name="numero" type="number" class="form-control" id="numero" required>
                </div>
                <div class="col">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input name="telefone" type="tel" class="form-control" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" title="000 0000-0000 " id="telefone">

                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Complemento</label>
                    <input name="complemento" type="text" class="form-control" id="complemento">
                </div>

            </div>
            <center>

                <button name="finalizar" type="submit" class="btn btn-outline-dark">Finalizar Cadastro</button>
                <br><br>

            </center>
        </form>
        <div class="card bg-dark">
            <div class="card-body text-white">

                <br>
            </div>
        </div>
    </div>

</body>

</html>