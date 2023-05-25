
<?php 

if (isset($_GET['search'])) {
	echo '<h1>Exibindo resultados para "'.$_GET['search'].'"</h1>'; 
	echo'<div class="display-flex row-wrap" style="margin-top: 2em; width: 80%">';
	$conexao = require __DIR__ . "/bancodedados.php";
	$termo_pesquisa = $conexao->real_escape_string($_GET['search']);
	$sql = "SELECT * FROM livros WHERE titulo LIKE '%$termo_pesquisa%' OR autor LIKE '%$termo_pesquisa%' OR genero LIKE '%$termo_pesquisa%';";
	//$sql = "SELECT * FROM `biblioteca`.`livros`";

	$resultado = $conexao->query($sql);

	if ($resultado && mysqli_num_rows($resultado) > 0) {

		while ($row = mysqli_fetch_assoc($resultado)) {
			echo '<a class="a-livro" href="livro.php?id=' . $row["id"].'">';
			if (!empty($row["linkImagem"])) {
				echo '<img src="' . $row["linkImagem"] . '" width="200px">';
			} else {
				echo '<img src="./images/livro-da-vida.jpg" width="200px">
								<div class="centro">' . $row["autor"] . ':<br>' . $row["titulo"] . '</div>';
			}
			echo '</a>';
		}
	} else {

		echo '<p>Nenhum livro encontrado para o termo "' . $termo_pesquisa . '".</p>';
	}
} else {
	echo '<h1>Recomendações personalizadas</h1>';
	echo'<div class="display-flex row-wrap" style="margin-top: 2em;width: 80%">';
	$conexao = require __DIR__ . "/bancodedados.php";
	$sql = "SELECT * FROM `livros` ORDER BY `livros`.`linkImagem` DESC";
	$resultado = $conexao->query($sql);
	if ($resultado) {
		while ($row = mysqli_fetch_assoc($resultado)) {
			echo '<a class="a-livro" href="livro.php?id=' . $row["id"].'">';
			if (!empty($row["linkImagem"])) {
				echo '<img src="' . $row["linkImagem"] . '" width="200px">';
			} else {
				echo '<img src="./images/livro-da-vida.jpg" width="200px">
								<div class="centro">' . $row["autor"] . ':<br>' . $row["titulo"] . '</div>';
			}
			echo '</a>';
		}
	}
}
echo'</div>';
$conexao->close();
