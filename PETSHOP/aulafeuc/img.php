<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Petshop</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Bruno Nascimento"/>
   <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" />
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>
<body>
				<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="index.php">Página inicial</a></li>
							</ul>
						<ul class="nav">
							<li class="active"><a href="index2.html">Meus Pets</a></li>
								</ul>
								<ul class="nav">
							<li class="active"><a href="img.php">Catalogo</a></li>
								</ul>
                           
                <ul class="nav">
							<li class="active"><a href="index2.html">Login</a></li>
								</ul>
	            <ul class="nav">
							<li class="active"><a href="sair.php">Sair</a></li>
								</ul>
               
                
					</div>
				</div>
			</nav>

		</header>
		<center>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	<li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./img/4.jpg" alt="">
    </div>

    <div class="item">
      <img src="./img/2.jpg" alt="">
    </div>

    <div class="item">
      <img src="./img/3.jpg" alt="">
    </div>
  
   
    <div class="item">
      <img src="./img/7.jpg" alt="">
    </div>
	  <div class="item">
      <img src="./img/8.jpg" alt="">
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only"></span>
  </a>
</div>
		

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>