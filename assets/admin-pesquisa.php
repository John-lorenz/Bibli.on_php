<?php if (isset($_GET['search'])) {
	$conexao = require __DIR__ . "/bancodedados.php";
	$termo_pesquisa = $conexao->real_escape_string($_GET['search']);
	$sql = "SELECT * FROM livros WHERE titulo LIKE '%$termo_pesquisa%' OR autor LIKE '%$termo_pesquisa%' OR genero LIKE '%$termo_pesquisa%';";

	$resultado = $conexao->query($sql);

	if ($resultado && mysqli_num_rows($resultado) > 0) {

		while ($row = mysqli_fetch_assoc($resultado)) {

			echo '<label>' . $row["titulo"] .
				'</label><a href="./assets/remover_livro.php?id=' . $row["id"] . '"><img src="./images/dot.png" width=12px></img></a>
							<a href="editaLivro.php?id=' . $row["id"] . '&titulo=' . $row["titulo"] . '&autor=' . $row["autor"] . '&genero=' . $row["genero"] . '&linkImagem=' . $row["linkImagem"] . '&descricao='.$row['descricao'].'"><img src="./images/edit-icon.png" width=12px></img></a>
							<br> ';
		}
	} else {

		echo '<p>Nenhum livro encontrado para o termo "' . $termo_pesquisa . '".</p>';
	}

	$conexao->close();
} else {
	$conexao = require __DIR__ . "/bancodedados.php";

	$sql = "SELECT * FROM livros;";

	$resultado = $conexao->query($sql);

	if ($resultado && mysqli_num_rows($resultado) > 0) {

		while ($row = mysqli_fetch_assoc($resultado)) {

			echo '<label>' . $row["titulo"] .
				'</label><a href="./assets/remover_livro.php?id=' . $row["id"] . '&img=' . $row["linkImagem"] . '"><img src="./images/dot.png" width=12px></img></a>
							<a href="editaLivro.php?id=' . $row["id"] . '&titulo=' . $row["titulo"] . '&autor=' . $row["autor"] . '&genero=' . $row["genero"] . '&linkImagem=' . $row["linkImagem"] . '&descricao='.$row['descricao'].'"><img src="./images/edit-icon.png" width=12px></img></a>
							<br> ';
		}
	}
	$conexao->close();
}
