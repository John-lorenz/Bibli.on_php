<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="./images/icon.png">
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
			<div style="width: 100%;">
			<form method="get" class="display-flex">
				<input type="text" placeholder="Pesquisa por título, autor ou gênero" name="search" class="pesquisa" autocomplete="off">
				<input type="submit" value="Procurar" class="botao">
			</form>

			<a href="admin_pagina.php" class="criar-conta">Gerenciar livros</a></div>
			
		</div>
	
		<h1>Recomendações personalizadas</h1>
		<div class="display-flex row-wrap" style="margin-top: 2em;">
		<?php
				include "/assets/lista-livros.php";
			?>
		</div>
	</div>
</body>

