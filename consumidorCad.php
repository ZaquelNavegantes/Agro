<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');

$email = filter_input(INPUT_POST, 'email');

$cpf = filter_input(INPUT_POST, 'cpf');

$senha = filter_input(INPUT_POST, 'senha');


echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "CPF: $cpf <br>";
echo "Senha: $senha <br>";


//Inserindo os dados na tabela
$consumidorTabela = "INSERT INTO consumidor(nome, email, senha, cpf) VALUES ('$nome', '$email', '$senha', '$cpf')";
$consumidor = mysqli_query($connection, $consumidorTabela);

?>