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
			$conexao = require __DIR__ . "/bancodedados.php";
			$sql = "SELECT titulo FROM livros";
			$resultado = $conexao ->query($sql);
			if ($resultado) {
				echo mysqli_num_rows($resultado);
			}
		?> livros em nosso acervo</a>
		<a href="login.php">entrar/criar conta</a>
	</header>

	<div class="wrapper">
		<a href="index.php"><img src="images/logobibli_claro.png"></a>
		<div class="sub">
			<div style="width: 100%;">
			<form method="get" class="display-flex">
				<input type="text" placeholder="Pesquisa por título, autor ou gênero" name="search" class="pesquisa">
				<input type="submit" value="Procurar" class="botao">
			</form>

			<a href="admin_pagina.php" class="criar-conta">Adicionar um livro</a></div>
			
		</div>
	
		<h1>Recomendações personalizadas</h1>
		<div class="display-flex row-wrap" style="margin-top: 2em;">
		<?php
				if(isset($_GET['search'])) {
					$conexao = require __DIR__ . "/bancodedados.php";
					$termo_pesquisa = $conexao -> real_escape_string($_GET['search']);
					$sql = "SELECT * FROM livros WHERE titulo LIKE '%$termo_pesquisa%' OR autor LIKE '%$termo_pesquisa%' OR genero LIKE '%$termo_pesquisa%';";
				//	$sql = "SELECT * FROM `biblioteca`.`livros`";

					$resultado = $conexao -> query($sql);

					if($resultado && mysqli_num_rows($resultado) > 0) {
						
						while($row = mysqli_fetch_assoc($resultado)) {
					
							echo '<form action="remover_livro.php" method="POST"><label>'. $row["titulo"] . '</label><input name="id" type="hidden" value="'.$row["id"].'"></input> <input type="image" src="./images/dot.png" width=12px></input></form><br> ';
						}
						
					} else {

						echo '<p>Nenhum livro encontrado para o termo "' . $termo_pesquisa . '".</p>';
					}

					$conexao -> close();
				} else {
					$conexao = require __DIR__ . "/bancodedados.php";
					$sql = "SELECT * FROM livros;";
					$resultado = $conexao -> query($sql);
					if ($resultado) {
						while($row = mysqli_fetch_assoc($resultado)) {
							if ($row["linkImagem"] != "") {
							echo '<a href="#" class="a-livro"><img src="'. $row["linkImagem"] .'" width="200px"></img></a>';
								
							} else {
							echo '<a href="#" class="a-livro"><img src="./images/livro-da-vida.jpg" width="200px"></img></a>';

							}
						}
					}

				}
			?>
		</div>
	</div>
</body>

