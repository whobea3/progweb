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
   <link rel="shortcut icon" href="img/petshopicon.png" />
   <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" />

  




  
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>

<body>



    <br>
    

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
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./img/slide1.png" alt="...">
      <div class="">
      	<h3></h3>
      </div>
    </div>
    <div class="item">
      <img src="./img/slide2.png" alt="...">
      <div class="">
      	<h3></h3>
      </div>
    </div>
    <div class="item">
      <img src="./img/slide3.png" alt="...">
      <div class="">
      	<h3></h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
</center>

<div class="container" >
<div class="row">
<div class="span4">
<h3> Institucional</h3>
 <p>•	Página inicial<br>
•	Empresa<br>
•	Política de Privacidade<br>
•	Política de entrega, troca e devolução<br>
•	Política de compra<br>
•	Política de white hat<br>
•	Termos de uso e condições<br>
</p>
</div>
<div class="container" 
<div class="row">
<div class="span4">
<h3> Departamentos</h3>
 <p>•	Cachorro<br>
•	Gatos<br>
•	Pássaros<br>
•	Peixes<br>
•	Répteis<br>
•	Roedores<br>
•	Pet lovers<br>
</p>

</div>

<div class="container" 
<div class="row">
<div class="span3">
<h3> Atendimento</h3>
 <p>•	Central de Atendimento<br>
•	Dúvidas frequentes<br>
•	Política de Privacidade<br>
•	Assessoria de imprensa<br>
•	Telefones de contato:
<h4>(21) 3155-6790 (capital)
0800-7791919 (outras localidades)</h4><br>
</p>
</div>



<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>


</body>
<center>
<div class="container" 
<div class="row">
<div class="span12">
<hr>
<p>© 2017 Company, Inc. · Privacy · Terms - todos os direitos reservados Beapetshop</p>
</div>

</html>