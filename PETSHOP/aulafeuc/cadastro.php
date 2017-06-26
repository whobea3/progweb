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

	<div class="container">

		<?php
	
		$usuario = new Usuarios();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$endereco= $_POST['endereco'];
			$tel = $_POST['tel'];
			$especie = $_POST['especie'];
			$nomeanimal = $_POST['nomeanimal'];
			$tamanho = $_POST['tamanho'];
			$raca = $_POST['raca'];
			$servico = $_POST['servico'];
			$valor = $_POST['valor'];

			$usuario->setNome($nome);
			$usuario->setEndereco($endereco);
			$usuario->setTel($tel);
			$usuario->setEspecie($especie);
			$usuario->setNomeanimal($nomeanimal);
			$usuario->setTamanho($tamanho);
			$usuario->setRaca($raca);
			$usuario->setServico($servico);
			$usuario->setValor($valor);
			

			# Insert
			if($usuario->insert()){
				echo "Inserido com sucesso!";
			}

		endif;

		?>
		<header class="masthead">
			<h1 class="muted"></h1>
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

		<?php 
		if(isset($_POST['atualizar'])):

			$id = $_POST['id'];
			$nome  = $_POST['nome'];
			$endereco= $_POST['endereco'];
			$tel = $_POST['tel'];
			$especie = $_POST['especie'];
			$nomeanimal = $_POST['nomeanimal'];
			$tamanho = $_POST['tamanho'];
			$raca = $_POST['raca'];
			$servico = $_POST['servico'];
			$valor = $_POST['valor'];

			$usuario->setNome($nome);
			$usuario->setEndereco($endereco);
			$usuario->setTel($tel);
			$usuario->setEspecie($especie);
			$usuario->setNomeanimal($nomeanimal);
			$usuario->setTamanho($tamanho);
			$usuario->setRaca($raca);
			$usuario->setServico($servico);
			$usuario->setValor($valor);

			if($usuario->update($id)){
				echo "Atualizado com sucesso!";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'){

			$id = (int)$_GET['id'];
			var_dump($id);
			if($usuario->delete($id)){
				echo "Deletado com sucesso!";
			}

		};
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $usuario->find($id);
		?>

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="endereco" value="<?php echo $resultado->endereco; ?>" placeholder="Endereco:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-fone"></i></span>
				<input type="text" name="tel" value="<?php echo $resultado->tel; ?>" placeholder="Telefone:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="especie" value="<?php echo $resultado->especie; ?>" placeholder="Especie:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="nomeanimal" value="<?php echo $resultado->nomeanimal; ?>" placeholder="Nome do Animal:" />
			</div>
			
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="tamanho" value="<?php echo $resultado->tamanho; ?>" placeholder="Tamanho:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="raca" value="<?php echo $resultado->raca; ?>" placeholder="Raça:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="servico" value="<?php echo $resultado->servico; ?>" placeholder="Serviço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="valor" value="<?php echo $resultado->valor; ?>" placeholder="Valor:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="endereco" placeholder="Endereço:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="tel" placeholder="Telefone" />
			</div>
				<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="especie" placeholder="Especie" />
			</div>
				<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="nomeanimal" placeholder="Nome do Animal" />
			</div>
				<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="tamanho" placeholder="Tamanho" />
			</div>
				<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="raca" placeholder="Raça" />
			</div>
				<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="servico" placeholder="Serviço" />
			</div>
				<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="valor" placeholder="Valor" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>Endereço:</th>
					<th>Telefone:</th>
					<th>Especie:</th>
					<th>Nome do Animal:</th>
					<th>Tamanho:</th>
					<th>Raça:</th>
					<th>Serviço:</th>
					<th>Valor:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($usuario->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->endereco; ?></td>
					<td><?php echo $value->tel; ?></td>
					<td><?php echo $value->especie; ?></td>
					<td><?php echo $value->nomeanimal; ?></td>
					<td><?php echo $value->tamanho; ?></td>
					<td><?php echo $value->raca; ?></td>
					<td><?php echo $value->servico; ?></td>
					<td><?php echo $value->valor; ?></td>
					<td>
						<?php echo "<a href='cadastro.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='cadastro.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>