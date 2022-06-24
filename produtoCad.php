<?php

include_once("conexao.php");


$fazenda = filter_input(INPUT_POST, 'fazenda');

$nome = filter_input(INPUT_POST, 'nome');

$descricao = filter_input(INPUT_POST, 'descricao');

$validade = filter_input(INPUT_POST, 'validade');

$preco = filter_input(INPUT_POST, 'preco');

$qntd = filter_input(INPUT_POST, 'qntd');

$categoria = filter_input(INPUT_POST, 'categoria');

$imagem = $_FILES['imagem'];

$imagem = $imagem['name'];


echo "Fazenda: $fazenda <br>";
echo "Nome: $nome <br>";
echo "Descricao: $descricao <br>";
echo "Validade: $validade <br>";
echo "Preço: $preco <br>";
echo "Qntd: $qntd <br>";
echo "Categoria: $categoria <br>";
echo "Imagem: $imagem <br>";


//Inserindo os dados na tabela
$consumidorTabela = "INSERT INTO produto(fazenda, nome, descricao, dt_validade, preco_uni, qntd, categoria, imagem, nome_categoria) VALUES ('$fazenda', '$nome', '$descricao', '$validade', '$preco', '$qntd', '$categoria', '$imagem', '$categoria')";
$consumidor = mysqli_query($connection, $consumidorTabela);


?>