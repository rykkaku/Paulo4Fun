<!DOCTYPE html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
</head>
  <style>
    body{
      font-family: 'Hanalei Fill', cursive;
    }
  </style>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Paulo's Website 4 fun</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="indexjogos.php">Jogos e Diversão</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="indexjogos.php">Início</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Jogos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="?page=romilda">As Aventuras de Romilda</a>
          <li class="nav-item dropdown">
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recordes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="?page=recordes">Salvar recorde "Romilda"</a>
          <a class="dropdown-item" href="?page=listar">Listar recordes "Romilda"</a>
          <li class="nav-item dropdown">
      </li>
      <audio src="http://104.238.99.1:8000/red967.mp3" type="audio/mpeg" controls="controls" loop preload="preload">
<a href="http://104.238.99.1:8000/red967.mp3">Mix</a>
</audio>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <?php
                  include("configuracao.php");
                  switch (@$_REQUEST["page"]) {
                    //romilda
                    case 'romilda':
                      include("romilda.php");
                      break;
                    //recorde
                    case 'recordes':
                      include("recordes.php");
                      break;
                      case 'listar':
                      include("recordes_listar.php");
                      break;
                    case 'salvar':
                      include("salvar.php");
                    break;

                    
                    default:
                     include("main.php");
                  }

                ?>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>