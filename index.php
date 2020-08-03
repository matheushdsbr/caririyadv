<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <title>Natália Cariry | Advocacia e Consultoria</title>
  </head>
  <body>
    <?php include("functions/functions.php"); ?>

    
    <!-- HEADER -->
    <header class="header">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="logo natalia cariry" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if($_GET["url"] == "" || $_GET["url"] == "home") echo "active"; ?>">
                            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php if($_GET["url"] == "sobre") echo "active"; ?>">
                            <a class="nav-link" href="sobre">Sobre</a>
                        </li>
                        <li class="nav-item <?php if($_GET["url"] == "areas-de-atuacao") echo "active"; ?>">
                            <a class="nav-link" href="areas-de-atuacao">Áreas de atuação</a>
                        </li>
                        <li class="nav-item <?php if($_GET["url"] == "contato") echo "active"; ?>">
                            <a class="nav-link" href="contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- ADD BANNER -->
            <?php include('components/banner.php'); ?>

        </div>
    </header>

    <!-- MAIN -->
    <main class="main my-5">
        <?php
            if ($_GET) {
                $url = explode('/', $_GET['url']);
                if(file_exists('paginas/'.$url[0].'.php')) {
                    require_once 'paginas/'.$url[0].'.php';
                }elseif(file_exists('paginas/'.$url[0].'.html')){
                    require_once 'paginas/'.$url[0].'.html';
                } else {
                    include 'paginas/404.html';
                }
            } else {
                include "paginas/home.php";
            }
        ?>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-3 text-center">
                    <img src="assets/img/logo.png" alt="logo natalia cariry" class="img-fluid">
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-lg-0 mb-3 text-md-left text-center">
                    <h5><b>MAPA DO SITE</b></h5>
                    <ul class="footer__menu">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SOBRE</a></li>
                        <li><a href="#">ÁREAS DE ATUAÇÃO</a></li>
                        <li><a href="#">CONTATO</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-lg-0 mb-3 text-md-left text-center">
                    <h5><b>ÁREAS DE ATUAÇÃO</b></h5>
                    <ul class="footer__menu">
                        <li><a href="#">Direito Cívil</a></li>
                        <li><a href="#">Direito do Consumidor</a></li>
                        <li><a href="#">Licitações e Contratos</a></li>
                        <li><a href="#">Direito previdenciário</a></li>
                        <li><a href="#">Direito do Trabalhador</a></li>
                        <li><a href="#">Direito Tributário</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 text-md-left text-center">
                    <h5><b>REDES SOCIAIS</b></h5>
                    <ul class="footer__social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="d-flex justify-content-center text-center my-3 develop">
        <span>DESENVOLVIDO PELA <a href="http://www.hagile.com.br" target="_blank" rel="noopener noreferrer">HAGILE AGÊNCIA DIGITAL</a></span>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>