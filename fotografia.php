<?php

  include('connection.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ThoSimões</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>

      .navbar .nav-link {
        color: #fff !important;
      }

      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      body {
        width: 100%;
        height: 100vh;
        background-color: #000;
        display: grid;
      }

.portfolio_section {
  font-family: "Poppins", sans-serif;
}

.portfolio_section .col-md-4 {
  padding: 0;
}

.portfolio_section .img-box {
  position: relative;
  margin: 10px;
}

.portfolio_section .img-box img {
  width: 100%;
}

.texto{
  color: white;
  padding: 0;
}

    </style>

    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000; background-color: rgba(0, 0, 0, 0)">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
          <strong>THÓ</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fotografia.php">Fotografia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Murais.php">Telas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="videos.php">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loja.php">Loja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bibliografia.php">Sobre mim</a>
            </li>
          </ul>


          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.youtube.com/user/thokullhoes" rel="nofollow"
                target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.facebook.com/tho.simoes/photos" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/thosimoes" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.instagram.com/thosimoes/" rel="nofollow" target="_blank">
                <i class="fab fa-instagram""></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    
    <!-- Background image -->
 
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->

     <!-- portfolio section -->

  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2 class="texto">
          Fotografias
        </h2>
        <hr>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-4">
            <div class="img-box">
              <img src="fotografias/f1.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="fotografias/f2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="fotografias/f3.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="fotografias/f4.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="fotografias/f5.jpg" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="fotografias/f6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->
  
  <!--Main layout-->

  <!--Footer-->

    <!-- Copyright -->
    
    <!-- Copyright -->
 
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>