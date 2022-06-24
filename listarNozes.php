<?php

include_once("conexao.php");

//requisitando os dados na tabela sobre nozes
$dados = "SELECT * FROM produto where categoria = 4";
$dado = mysqli_query($connection, $dados);
while($informacao = $dado->fetch_array()){
  echo "Fazenda: ". $informacao['fazenda'] . "<br>";
  echo "Nome do Produto: ". $informacao['nome'] . "<br>";
  echo "Descrição: ". $informacao['descricao'] . "<br>";
  echo "categoria do produto: ". $informacao['categoria'] . "<br>";
  echo"<br>";
}

?>