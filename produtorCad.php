<?php

include_once("conexao.php");

//conta quantidade de consumidores na base

//$result = mysqli_query($connection, "SELECT * FROM consumidor");

//echo mysqli_num_rows($result);

////////////////////////////////////////////


//$VARIAVEL = filter_input(INPUT_POST, 'TIPO', FILTER_SANITIZE_TIPO);//EXEMPLO TEMPORARIO

$fazenda = filter_input(INPUT_POST, 'fazenda');

$nome = filter_input(INPUT_POST, 'nome');

$email = filter_input(INPUT_POST, 'email');

$cpf = filter_input(INPUT_POST, 'cpf');

$senha = filter_input(INPUT_POST, 'senha');


echo "Fazenda: $fazenda <br>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "CPF: $cpf <br>";
echo "Senha: $senha <br>";


//Inserindo os dados na tabela
$consumidorTabela = "INSERT INTO produtor(fazenda, nome, email, senha, cpf) VALUES ('$fazenda', '$nome', '$email', '$senha', '$cpf')";
$consumidor = mysqli_query($connection, $consumidorTabela);

//header("Location: index.html");

//////////////////////////////


//include_once("conection.php");

//$result = mysqli_query($connection, "SELECT * FROM espacos");

//echo mysqli_num_rows($result);

?>