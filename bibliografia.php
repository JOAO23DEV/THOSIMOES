
<!DOCTYPE html>
<html lang="pt-br">
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
      #intro {
        background-image: url("img/thobackground.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }


      .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
      }

     .about {
       width: 100%;
       padding: 100px 0px;
       background-color: #191919;
     }

     .about img{
        height: auto;
        width: 430px;
     }

     .about-text{
       width: 550px;
     }

     .foto{
       width: 1130px;
       max-width: 95%;
       margin: 0 auto;
       display: flex;
       align-items: center;
       justify-content:space-around;
     }

     .about-text h2{
       color: #fff;
       font-size: 75px;
       text-transform: capitalize;
       margin-bottom: 20px;
     }

     .about-text h5{
       color: #fff;
       letter-spacing: 2px;
       font-size: 22px;
       text-transform: capitalize;
       margin-bottom: 25px;
     }

     .about-text p{
       color: #fff;
       letter-spacing: 1px;
       line-height: 24px;
       font-size: 13px;
       margin-bottom: 45px;
     }

     span{
       color: #f9004d;
     }

     button{
       background-color: #f9004d;
       color: #fff;
       text-decoration: none;
       border: 2px solid transparent;
       font-weight: bold;
       padding: 13px 30px;
       border-radius: 30px;
       transition: .4s;
     }

     button:hover{
      background-color: transparent;
       border: 2px solid #f9004d;
       cursor: pointer;
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
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Thó Simões</h1>
            <h5 class="mb-4">Artista plástico</h5>
            <a class="btn btn-outline-light btn-lg m-2" href="pagar.php" target="pagar.php"
              role="button">Login</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->

  <section class="about">
    <div class="foto">
        <img src="img/thó.jpg">
        <div class="about-text">
          <h2>About<span> Me</span></h2>
          <h5>Artista<span> Visual</span></h5>
          <p  align="justify">Nasceu em Malanje em 1973, vive em Luanda. É um artista visual que rejeita rótulos. Simões pinta, faz colagens, cria arte urbana e digital, performances, instalações, video e fotografia, seu trabalho não obedece a regras ou tendências que identificam um estilo particular. Influenciado pela arte de rua, mistura arte urbana com outras línguas, tradicionais ou contemporâneas  

              Frequentou o Instituto de Formação Artística e Cultural (INFAC). É um pesquisador nato, curioso por natureza.
              O magnetismo que a África e Angola exercem em seu trabalho é inegável, assim como outros lugares do mundo.  Influenciado pelo grafite e pela arte moderna de rua,  gosta de assistir ou apenas absorver a vida ao seu redor. Seus projetos artísticos refletem sobre questões contemporâneas nas sociedades humanas.  Está envolvido em alguns projetos de natureza formativa e solidária para crianças de rua.
              Provém da geração de artistas pós-independência com forte influência na Arte Contemporânea Angolana.  Ele é um dos mentores do projeto 'Murais de Leba', com mais de 6000 m2 de paredes nas províncias do Namibe e Huíla - O projeto envolve jovens artistas de várias regiões de Angola, artistas internacionais e estudantes.
              Autor do mural “Passeio dos Cantores Angolanos” realizado na Ilha de Luanda pela Comissão dos moradores do bloco 3 da Baía de Luanda.
          </p>
          <button type="button">Let's Talk</button>


        </div>
    </div>

  </section>
 
  <!--Main layout-->

  <!--Footer-->

    <!-- Copyright -->
   
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
    
    


</body>
</html>