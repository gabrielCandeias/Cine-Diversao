<?php
require_once("conexao.php");

/*Cadastro de Filme */
$nome = "";
$sinopsea = "";
$duracao = "";
$ano_lancamento = "";
$idioma = "";
$sql = "INSERT INTO filme ('nome', 'sinopsea', 'ano_lancamento', 'idioma', 'duracao') VALUES('{$nome}','{$sinopsea}','{$ano_lancamento}','{$idioma}','{$duracao}')";

/*Cadastro de Sessao */
$nome = "";
$data = "";
$hora = "";
$sql = "INSERT INTO sessao('nome', 'data', 'hora') VALUES ('{$nome}','{$data}','{$hora}')";

/*Cadastro de Cidade */
$nome = "";
$sql = "INSERT INTO cidade('nome') VALUES ('{$nome}')";

/*Cadastro de Estado */
$nome = "";
$uf = "";
$sql = "INSERT INTO estado('nome', 'uf') VALUES ('{$nome}','{$uf}')";

/*Cadastro de Classificacao */
$nome = "";
$descricao = "";
$sql = "INSERT INTO classificacao('nome', 'descricao') VALUES ('{$nome}','{$descricao}')";

/*Cadastro de Gênero */
$nome = "";
$sql = "INSERT INTO genero('nome') VALUES ('{$nome}')";

/*Cadastro de metodos_de_pagamento */
$nome = "";
$descricao = "";
$sql = "INSERT INTO 'metodos_de_pagamento'('descricao', 'nome') VALUES ('{$descricao}','{$nome}')";

/*Cadastro de Produtora */
$nome = "";
$sql = "INSERT INTO 'produtora'('nome') VALUES ('{$nome}')";


/*Cadastro de Telespectador */
$nome = "";
$email = "";
$endereco = "";
$sexo = "";
$data_nascimento = "";
$logradouro = "";
$cep = "";
$bairro = "";
$numero = "";
$complemento = "";
$telefone = "";
$usuario = "";
$senha = "";
$sql = "INSERT INTO `telespectador`('nome', 'email', 'endereco', 'sexo', 'data_nascimento', 'logradouro', 'cep', 'bairro', 'numero', 'complemento', 'telefone', 'usuario', 'senha') 
        VALUES ('{$nome}','{$email}','{$endereco},'{$sexo}','{$data_nascimento}','{$logradouro}','{$cep}','{$bairro}','{$numero}','{$complemento}','{$telefone}','{$usuario}','{$senha}')";


/*Cadastro de Produtora */
$nome = "";
$valor_total = "";
$Modelo_do_veiculo = "";
$data = "";
$cor_do_veiculo = "";
$placa_do_veiculo = "";
$sql = "INSERT INTO 'venda'('valor_total', 'Modelo_do_veiculo', 'data', 'cor_do_veiculo', 'placa-do-veiculo') 
        VALUES ('{$nome}','{$valor_total}','{$Modelo_do_veiculo}','{$data}','{$cor_do_veiculo}','{$placa_do_veiculo}')";


