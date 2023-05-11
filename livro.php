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
			$titulo = $conexao->real_escape_string($_GET['titulo']);
			$autor = $conexao->real_escape_string($_GET['autor']);
			$genero =  $conexao->real_escape_string($_GET['genero']);
			$linkImagem =  $conexao->real_escape_string($_GET['linkImagem']);


			echo'<div class="display-flex row-wrap">';
			if (!empty($linkImagem)) {
				echo "<img src='$linkImagem' width=250px></img>";
			} else {
				echo '<div style="position: relative">
				      <img src="./images/livro-da-vida.jpg" width="250em">
				      <div class="centro" style="font-size:30px">' . $autor . ':<br>' . $titulo . '</div>
				      </div>';
			}
			echo "	
			      		<div class='livro-descricao'>
						<h2>$titulo</h2>
						<div class='display-flex'>
						<span class='label'>
							<div class='label'>Categoria:</div>
							<div class='label'>autor:</div>
						</span>
						<span class='categorias-link'>
					<a href='index.php?search=$genero'>$genero</a>
					<br>
					<a href='index.php?search=$autor'>$autor</a>
					</span>
					</div>
					</div>
					
					</div>
					";

			$conexao->close();

			?>
		</div>
	</div>
	</div>
	</div>
</body>