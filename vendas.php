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
  <link rel="stylesheet" href="css/loja1.css" />
</head>
<body>
    <!--Main Navigation-->
<header>
  <style>
  
    .navbar .nav-link {
      color: #fff !important;
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

<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Featured Product</h3>
										<h2>Popular Products</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>


<!--Main layout-->

<!--Footer-->

  <!-- Copyright -->
  
  <!-- Copyright -->

<!--Footer-->
<script type="text/javascript" src="js/loja1.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>