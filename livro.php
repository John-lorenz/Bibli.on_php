<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biblioteca Virtual - bibli.ON</title>
</head>

<body>
	<header class="cabecalho">
		<a href="index.php" class="bloco"><?php
							include './assets/cabecalho.php';
							?> livros em nosso acervo</a>
		<a href="login.php">entrar/criar conta</a>

	</header>


	<div class="wrapper">

		<a href="index.php"><img src="images/logobibli_claro.png"></a>
		<div class="sub">
			<?php

			$conexao = require __DIR__ . "/assets/bancodedados.php";
			$id = $conexao->real_escape_string($_GET['id']);
			$sql = "SELECT * FROM livros WHERE id = $id";
			$resultado = $conexao -> query($sql);
			$row = mysqli_fetch_assoc($resultado);

			$titulo = $conexao->real_escape_string($row['titulo']);
			$autor = $conexao->real_escape_string($row['autor']);
			$genero =  $conexao->real_escape_string($row['genero']);
			$descricao =  $conexao->real_escape_string($row['descricao']);
			$linkImagem =  $conexao->real_escape_string($row['linkImagem']);

			$conexao->close();
			?>

			
				<div class="display-flex justify-content-center">
			<?php 
			if (!empty($linkImagem)) {
				echo "<img src='$linkImagem' width=250px></img>";
			} else {
				echo '<div style="position: relative">
				      <img src="./images/livro-da-vida.jpg" width="250em">
				      <div class="centro" style="font-size:22px">' . $autor . ':<br>' . $titulo . '</div>
				      </div>';
			}
			?>
			    <div class='livro-descricao'>
					<h2><?php echo$titulo ?></h2>
						<div class='display-flex'>
						
						<span class='categorias-link'>
							<?php echo "<a href='index.php?search=$autor'> $autor </a>" ?>
							<br>
							<?php echo "<a href='index.php?search=$genero'> $genero </a>" ?>
						</span>
					</div>
					<p><?php echo $descricao ?></p>
					</div>
					
					</div>
	
		</div>
		
	</div>
</body>