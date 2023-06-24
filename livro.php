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
		<?php
			include './assets/cabecalho.php';
			$conexao = require __DIR__ . "/assets/bancodedados.php";
			$id = isset($_GET['id']) ? $conexao->real_escape_string($_GET['id']) : null;
		if ($id === null) {
			// Tratar o caso em que o ID não está presente na URL
			// Por exemplo, redirecionar para uma página de erro ou exibir uma mensagem adequada
			exit("ID do livro não fornecido.");
		}

		$sql = "SELECT * FROM livros WHERE id = $id";
		$resultado = $conexao->query($sql);
		$row = mysqli_fetch_assoc($resultado);

		$titulo = $conexao->real_escape_string($row['titulo']);
		$autor = $conexao->real_escape_string($row['autor']);
		$genero =  $conexao->real_escape_string($row['genero']);
		$descricao =  $conexao->real_escape_string($row['descricao']);
		$linkImagem =  $conexao->real_escape_string($row['linkImagem']);
		$unidades =  $conexao->real_escape_string($row['unidades']);

		$conexao->close();
	?>
</header>

<div class="wrapper">
	<a href="index.php"><img src="images/logobibli_claro.png"></a>
	<div class="sub">
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
				<h2><?php echo $titulo ?></h2>
				<div class='display-flex'>
					<span class='categorias-link'>
						<?php echo "<a href='index.php?search=$autor'> $autor </a>" ?><br>
						<?php echo "<a href='index.php?search=$genero'> $genero </a>" ?>
					</span>
				</div>
				<p><?php echo $descricao ?></p>
				<form action="reservar.php" method="POST">
					<div class="input-field">
						<input type="hidden" name="livro_id" value="<?php echo $id ?>">
						<label for="nome">Nome:</label>
						<input type="text" id="nome" name="nome" required>
					</div>

					<div class="input-field">
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
					</div>

					<div class="input-field">
						<label for="telefone">Telefone:</label>
						<input type="text" id="telefone" name="telefone" required>
					</div>

					<input type="submit" value="Reservar" class="button">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>