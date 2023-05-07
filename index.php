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
	<a href="login.php">sair</a>
	<header><a href="index.php"><img src="images/logobibli_claro.png"></a></header>
	<div class="wrapper">
	<div><form method="get">
		<input type="text" placeholder="Pesquisa por título, autor ou gênero" name="search">
		<input type="submit" value="Procurar">
	</form>
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
		}
		?>
	</div>
	
	<form action="adicionarLivro.php" method="post">
		Adicionar um livro
		<input type="text" placeholder="título do livro" name="livro_titulo">
		<input type="text" placeholder="autor" name="livro_autor">
		<select name="livro_genero">
			<option value="Romance">Romance</option>
			<option value="Aventura">Aventura</option>
			<option value="Ficção Científica">Ficção Científica</option>
			<option value="Poesia">Poesia</option>
			<option value="Suspense">Suspense</option>
			<option value="Biografia">Biografia</option>
			<option value="História">História</option>
			<option value="Autoajuda">Autoajuda</option>
			<option value="Negócios e Finanças">Negócios e Finanças</option>
		</select>
		<input type="text" name="livroImagem">
		<input type="submit" value="adicionar">
	</form>
	<h1>Recomendações personalizadas</h1>
	</div>
</body>

