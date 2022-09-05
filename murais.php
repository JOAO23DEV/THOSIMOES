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
    

    body
      {
        background-color: #191919;
      }     

      .navbar .nav-link {
        color: #fff !important;
      }
      
      .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
      }

      .card-img-top2 {
        width: 100%;
        height: 35vw;
        object-fit: cover;
      }

      .quadros {
       width: 100%;
       padding: 100px 0px;
       background-color: #191919;
     }

     .quadros h4 {
      color: white;
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

  <!--Main layout-->

  <section class="quadros">

      <section class="text-center">
        <center>
          <h4 class="mb-5"><strong>Quadros</strong></h4>

          <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
              $sql = "SELECT id_trabalho,descricao,nome_trabalho,foto,data FROM trabalhos";

              $result = mysqli_query($db,$sql);

              while ($data = mysqli_fetch_array($result)){ ?>

              <div class="col">
                <div class="card trab h-100" style="width: 18rem;" id="<?php echo $data['id_trabalho']; ?>">
                  <img src="./foto/<?php echo $data['foto']; ?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $data['nome_trabalho']; ?></h5>
                    <p class="card-text">
                      <?php echo $data['data']; ?>
                      <hr>
                      <?php echo $data['descricao']; ?>
                    </p>
                  </div>
                </div>
              </div>

            <?php } ?>

        
          </div>
        </center>
      </section>

      <hr class="my-5" />


  </section>


  <section>

 

  </sectionn>

  
  <!--Main layout-->

  <!--Footer-->
  <

    <!-- Copyright -->

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    
    <!-- Copyright -->
 
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>