<?php

include_once("conexao.php");

//requisitando os dados na tabela sobre doces
$dados = "SELECT * FROM produto where categoria = 1";
$dado = mysqli_query($connection, $dados);
while($informacao = $dado->fetch_array()){
  echo "Fazenda: ". $informacao['fazenda'] . "<br>";
  echo "Nome do Produto: ". $informacao['nome'] . "<br>";
  echo "Descrição: ". $informacao['descricao'] . "<br>";
  echo "categoria do produto: ". $informacao['categoria'] . "<br>";
  echo"<br>";
}


?>