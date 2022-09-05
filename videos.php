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
     

     /* Height for devices larger than 576px */
      
      
    body
      {
        background-color: #191919;
      }    

       #intro{
        width: 100%;
        padding: 100px 0px;
        background-color: #191919;

       }
        

     .navbar .nav-link {
       color: #fff !important;
     }

     .video {
       width: 100%;
       padding: 100px 0px;
     }

     .texto{
      color: #fff;

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
  </header>

  <!--Main Navigation-->
<main id="intro">

    <center>
    <h1 class="texto">Filmagens do meu trabalho</h1>
    <center>
    <!--Main layout-->
    <div class="container">
     
      <!--Section: Content-->
      <section class="video">

        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                <video width="420" height="240" controls> 
                <source src="video/mural_sustentabilidade.mp4" type="video/mp4">
                </video>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4 class="texto"><strong>Mural da sustentabilidade</strong></h4>
            <p class="texto">
            Neste episódio, Thó simões vai à uma escola ensinar sobre a sustentabilidade, fazendo assim um Mural com as crianças da mesma.
            </p>
          </div>
        </div>

<br></br>
<br></br>


        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                <video width="420" height="240" controls> 
                <source src="video/encontro_de_artistas.mp4" type="video/mp4">
                </video>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4 class="texto"><strong>enencontro de artistas</strong></h4>
            <p class="texto">
            Neste episódio, Thó simões reúne crianças para decorar um skate.
            </p>
          </div>
        </div>
      </section>  
  <!--Main layout-->

  
  <!--Main layout-->

  <!--Footer-->
  
 
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>