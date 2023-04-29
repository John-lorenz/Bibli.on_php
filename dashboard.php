<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Virtual</title>
	<!-- Adiciona o link para o CSS do FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		.container {
		display: flex;
		flex-direction: row-reverse;
		align-items: center;
		justify-content: center;
		height: 100vh;
		background-color: #f2f2f2;
	}

	.search-bar {
		width: 50%;
		height: 50px;
		background-color: #ffffff;
		border-radius: 25px;
		padding: 0 20px;
		box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.25);
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-between;
		margin-right: 50px; /* adjusts the margin to the right */
	}

	.search-bar input[type="text"] {
		width: 90%;
		height: 100%;
		border: none;
		background-color: transparent;
		font-size: 20px;
		outline: none;
	}

	.search-bar i {
		color: #555555;
		font-size: 20px;
		cursor: pointer;
	}

		.container {
		display: flex;
		flex-direction: row-reverse;
		align-items: center;
		justify-content: center;
		height: 100vh;
		background-color: #f2f2f2;
	}

	.search-bar {
		width: 50%;
		height: 50px;
		background-color: #ffffff;
		border-radius: 25px;
		padding: 0 20px;
		box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.25);
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-between;
		margin-right: 50px; /* adjusts the margin to the right */
	}

	.search-bar input[type="text"] {
		width: 90%;
		height: 100%;
		border: none;
		background-color: transparent;
		font-size: 20px;
		outline: none;
	}

	.search-bar i {
		color: #555555;
		font-size: 20px;
		cursor: pointer;
	}

	.categories {
		background-color: #f2f2f2;
        font-family: Arial, Helvetica, sans-serif;
		padding: 20px;
		border-radius: 5px;
		margin-right: 215px;
        margin-top:920px;
		width: 300px;
        position: relative;
	}

    .categories a{
        text-decoration: none;
    }

	.categories h2 {
		font-size: 24px;
		font-weight: bold;
		margin-bottom: 10px;
	}

	.categories ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.categories ul li {
		margin-bottom: 5px;
		padding: 5px 10px;
		border-radius: 5px;
		background-color: #ffffff;
        color: #555555;
        border: none;
        cursor: pointer;
	}

	.categories ul li:hover {
		background-color: #cccccc;
	}

	.categories ul li.active {
		background-color: #999999;
		color: #ffffff;
	}
    .imagem-logo {
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
</style>

</head>
<body>
    <div class="container">
		<div class="search-bar">
			<input type="text" placeholder="Pesquisar livro">
			<!-- Substitui o botão "Pesquisar" pelo ícone de lupa -->
			<i class="fas fa-search"></i>
		</div>
	<div class="container">
    <img class="imagem-logo" src="images/logobibli_dark.png" alt="Imagem">
		<div class="categories">
			<h2>Categorias</h2>
			<ul>
            <a href="#"><li class="active">Todos</li>
            <a href="#"><li>Ficção</li></a>
		    <a href="#"><li>Non-Ficção</li></a>
		    <a href="#"><li>Autoajuda</li></a>
		    <a href="#"><li>Ciências</li></a>
		    <a href="#"><li>Fantasia</li></a>
		    <a href="#"><li>Ficção científica</li></a>
		    <a href="#"><li>Distopia</li></a>
		    <a href="#"><li>Ação e aventura</li></a>
		    <a href="#"><li>Ficção Policial</li></a>
		    <a href="#"><li>Horror</li></a>
		    <a href="#"><li>Thriller e Suspense</li></a>
		    <a href="#"><li>Ficção histórica</li></a>
		    <a href="#"><li>Romance</li></a>
		    <a href="#"><li>Novela</li></a>
		    <a href="#"><li>Ficção Feminina</li></a>
		    <a href="#"><li>LGBTQ+</li></a>
		    <a href="#"><li>Ficção Contemporânea</li></a>
		    <a href="#"><li>Realismo mágico</li></a>
		    <a href="#"><li>Graphic Novel</li></a>
		    <a href="#"><li>Conto</li></a>
		    <a href="#"><li>Young adult – Jovem adulto</li></a>
		    <a href="#"><li>New adult – Novo Adulto</li></a>
		    <a href="#"><li>Infantil</li></a>
		    <a href="#"><li>Memórias e autobiografia</li></a>
		    <a href="#"><li>Biografia</li></a>
		    <a href="#"><li>Gastronomia</li></a>
		    <a href="#"><li>Arte e Fotografia</li></a>
		    <a href="#"><li>Autoajuda</li></a>
		    <a href="#"><li>História</li></a>
		    <a href="#"><li>Viagem</li></a>
		    <a href="#"><li>Crimes Reais</li></a>
		    <a href="#"><li>Humor</li></a>
		    <a href="#"><li>Ensaios</li></a>
		    <a href="#"><li>Guias & Como fazer</li></a>
		    <a href="#"><li>Religião e Espiritualidade</li></a>
		    <a href="#"><li>Humanidades e Ciências Sociais</li></a>
		    <a href="#"><li>Paternidade e família</li></a>
		    <a href="#"><li>Tecnologia e Ciência</li></a>
		    <a href="#"><li>Infantil</li></a>
			</ul>
			<h2>Autores</h2>
			<ul>
				<a href="#"><li class="active">Todos</li>
				<a href="#"><li>J.K. Rowling</li></a>
				<a href="#"><li>Stephen King</li></a>
				<a href="#"><li>Agatha Christie</li></a>
			</ul>
	    </div>
    </div>
