<!DOCTYPE html>
<html>

<head>
	<title>Biblioteca Virtual</title>
	<!-- Adiciona o link para o CSS do FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="css/dashboard-style.css" />
</head>

<body>
	<div class="container">
		<form method="post" action="search.php">
			<input type="text" placeholder="Pesquisar livro" name="search">
			<button type="submit"><i class="fas fa-search"></i></button>

		</form>

		<div class="categories">
			<h2>Categorias</h2>
			<ul>
				<li class="active" a href="#">Todos</li></a>
				<a href="#">
					<li>Recomendações para estudantes</li>
				</a>
				<a href="#">
					<li>Ficção</li>
				</a>
				<a href="#">
					<li>Autoajuda</li>
				</a>
				<a href="#">
					<li>Ciências</li>
				</a>
				<a href="#">
					<li>Fantasia</li>
				</a>
				<a href="#">
					<li>Ficção científica</li>
				</a>
				<a href="#">
					<li>Distopia</li>
				</a>
				<a href="#">
					<li>Ação e aventura</li>
				</a>
				<a href="#">
					<li>Ficção Policial</li>
				</a>
				<a href="#">
					<li>Terror</li>
				</a>
				<a href="#">
					<li>Thriller e Suspense</li>
				</a>
				<a href="#">
					<li>Ficção histórica</li>
				</a>
				<a href="#">
					<li>Romance</li>
				</a>
				<a href="#">
					<li>Ficção Feminina</li>
				</a>
				<a href="#">
					<li>LGBTQ+</li>
				</a>
				<a href="#">
					<li>Ficção Contemporânea</li>
				</a>
				<a href="#">
					<li>Realismo mágico</li>
				</a>
				<a href="#">
					<li>Graphic Novel</li>
				</a>
				<a href="#">
					<li>Conto</li>
				</a>
				<a href="#">
					<li>Young adult – Jovem adulto</li>
				</a>

				<a href="#">
					<li>Infantil</li>
				</a>
				<a href="#">
					<li>Memórias e autobiografia</li>
				</a>
				<a href="#">
					<li>Biografia</li>
				</a>
				<a href="#">
					<li>Gastronomia</li>
				</a>
				<a href="#">
					<li>Arte e Fotografia</li>
				</a>
				<a href="#">
					<li>Autoajuda</li>
				</a>
				<a href="#">
					<li>História</li>
				</a>
				<a href="#">
					<li>Viagem</li>
				</a>
				<a href="#">
					<li>Crimes Reais</li>
				</a>
				<a href="#">
					<li>Humor</li>
				</a>
				<a href="#">
					<li>Ensaios</li>
				</a>
				<a href="#">
					<li>Guias & Como fazer</li>
				</a>
				<a href="#">
					<li>Religião e Espiritualidade</li>
				</a>
				<a href="#">
					<li>Humanidades e Ciências Sociais</li>
				</a>
				<a href="#">
					<li>Paternidade e família</li>
				</a>
				<a href="#">
					<li>Tecnologia e Ciência</li>
				</a>
				<a href="#">
					<li>Infantil</li>
				</a>
			</ul>
			<h2>Autores</h2>
			<ul>
				<a href="#">
					<li class="active">Todos</li>
					<a href="#">
						<li>J.K. Rowling</li>
					</a>
					<a href="#">
						<li>Stephen King</li>
					</a>
					<a href="#">
						<li>Agatha Christie</li>
					</a>
			</ul>
		</div>
	</div>

	<?php include('search.php'); ?>