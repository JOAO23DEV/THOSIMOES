<?php
  include('connection.php');

  if (!isset($_SESSION)) {
    session_start();
  }  
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
 

  
</head>


<body>

  <header>
    <style>
     

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      body{
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

      .texto1 {
       color: white;
       letter-spacing: 1px;
       line-height: 24px;
       font-size: 30px;
       margin-bottom: 45px;
     }

     
      .texto2 {
       color: white;
       letter-spacing: 1px;
       line-height: 24px;
       font-size: 13px;
       margin-bottom: 45px;
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

    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-inner" style="height: 35em;">
          <div class="carousel-item active" data-mdb-interval="2000">
            <img src="foto\Murais-da-Leba.jpg" class="d-block w-100" alt="Wild Landscape"/>
          </div>
          <div class="carousel-item" data-mdb-interval="2000">
            <img src="foto\A-arte-urbana.jpg" class="d-block w-100" alt="Camera"/>
          </div>
          <div class="carousel-item" data-mdb-interval="2000">
            <img src="foto\arte-urbana.jpg" class="d-block w-100" alt="Exotic Fruits"/>
          </div>
        </div>
        <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">

          <div>
            <h4 class="texto1"><strong>Congolandia</strong></h4>
            <p align="justify" class="texto2">
            Congolândia é um exemplo. Aqui, Simões faz uso da performance, surgida no contexto dos movimentos europeus de vanguarda nas primeiras 
            décadas do século 20, para (re)pensar, (re)estruturar, (re)ler as culturas ancestrais africanas na atualidade. 
            Por meio da pintura corporal composta de grafismos em listras, curvas e círculos, o observador é capaz de estabelecer associações tanto com os povos Mursi (Etiópia), que mantêm seus costumes e tradições em pleno mundo globalizado, quanto com os símbolos adinkras, presentes em sociedades do Oeste africano.
            </p>

            <div class="col-md-6 gx-5 mb-4">
                                                                    <!-- altera a cor da ondulação. -->
            <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
            <img src="foto/congolandia.png" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);"></div>
              </a>
            </div>
          </div>

            <p align="justify" class="texto2">
            Tendo a história das culturas africanas como uma das maiores influências sobre suas criações, Simões, ao inscrever nos corpos dos performers caracteres da linguagem do pixo, cria uma mensagem 
            híbrida que impulsiona o espectador a refletir sobre resistências culturais possíveis. 
            Trata-se aqui de estabelecer contracorrentes a tendências arbitrárias, colonizadoras e normatizadoras, presentes não só no continente africano, mas em todas as regiões do planeta que sofreram processos de dizimação de culturas, línguas e habitantes nativos.
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Trabalhos</strong></h4>

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

      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>


    <script>

      $( ".trab" ).on( "click", function() {
        var id=this.id;

  
        /* ajax */
        $.get("get_produto.php?id="+id, function(data, status){
             
          $('#exampleModal').modal('show'); 
         
          $('#trabalho').html(data);

        });


      });

    </script>
    
</body>






</html>