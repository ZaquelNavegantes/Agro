<!DOCTYPE html>
<html>
  <head>
    <title>Hortifruit</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type = "text/css" href="../css/categorias/doces.css">
    <script src=""></script>
  </head>
  <body>    
    <div class="contents">

      <header class="header">
        <div class="logo">
          <img class="logo" src="../img/logo.png" alt="Logo">
          <h1>AGRO</h1>
        </div>
        <nav>
          <a href="../index.html">Sobre</a>
          <a href="../expositor.html">Expositor</a>
          <a href="../cadastro/produtores.html">Produtores</a>
          <a href="../cadastro/consumidores.html">Consumidores</a>
          <a href="../login/entrar.html">Entrar</a>
          <a href="../cadastro/categoria.html">Cadastro</a>
        </nav>
      </header>

      <main class="main">
        <div class="background">
          <div class="box">
            <div class="geral">
              <div class="title">
                <h2>Exposição de Alimentos</h2><br>                
              </div>
              <div>
              <?php

              include_once("../conexao.php");

              //requisitando os dados na tabela sobre doces
              $dados = "SELECT * FROM produto where categoria = 1";//mudar categoria dos doces para 5
              $dado = mysqli_query($connection, $dados);
              while($informacao = $dado->fetch_array()){
                echo "Fazenda: ". $informacao['fazenda'] . "<br>";
                echo "Nome do Produto: ". $informacao['nome'] . "<br>";
                echo "Descrição: ". $informacao['descricao'] . "<br>";
                echo "categoria do produto: ". $informacao['categoria'] . "<br>";
                echo "imagem do produto: ". $informacao['imagem'] . "<br>";
                echo"<br>";

              }

              //header("Location: index.html");

              ?>
              </div>
            </div>
            
          </div>
        </div>
      </main>

      <footer class="footer">
        <div class="logo">
          <img class="logo" src="../img/logo.png" alt="Logo">
          <h1>AGRO</h1>
        </div>

        <div class="network">
          <h2>Contatos</h2>              
          <div class="contact">
            <a href="https://github.com/ZaquelNavegantes" target="_blank">
              <img class="contato" src="../img/github.png">
            </a>
              <h3>Github</h3>            
          
            <a href="https://www.linkedin.com/in/zaquel-navegantes" target="_blank">
              <img class="contato" src="../img/linkedin.png">
            </a>
              <h3>LinkedIn</h3>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>