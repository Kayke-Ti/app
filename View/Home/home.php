<?php
  include('../../Controller/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Tela Home</title>
</head>
<body>
    <header>
      <div class="bg-green">⠀</div>
      <div class="bg-yellow">⠀</div>
      <h2>Início</h2>
    </header>
    <div class="container">
      <div class="box">
        <div class="icon">
          <a href="#"><i class="fas fa-user"></i></a>
        </div>
          <h1>Início</h1>
      </div>
      <div class="box">
        <div class="icon">
          <!--URL para acesso: da tela de livros: bug url-->
          <a href="https://sibigerardojose.000webhostapp.com/View/Livros/TelaLivros.php?busca=&menuCategorias=Todos"><i class="fas fa-book"></i></a>
        </div>
        <h1>Livros</h1>
      </div>
      <div class="box">
        <div class="icon">
          <a href="../Requisicao/request.php"><i class="fas fa-arrow-up-from-bracket"></i></a>
        </div>
        <h1>Requisição</h1>
      </div>
      <div class="box">
        <div class="icon">
          <a href="../Sobre/sobre.html"><i class="fas fa-circle-exclamation"></i></a>
        </div>
        <h1>Sistema</h1>
      </div>
      </div>
    </div>

    <div class="container-1">
      <div class="box-col">
        <div class="icon">
        <a href="../../index.php"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Sair</h1>
      </div>
    </div>
    </div>

    <div class="reseved">
      <h3>Copyright © 2023 - Todos os direitos reservados.</h3>
    </div>

</body>
</html>