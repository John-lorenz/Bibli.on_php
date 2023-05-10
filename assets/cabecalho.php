<?php $conexao = require __DIR__ . "/bancodedados.php";
			$sql = "SELECT titulo FROM livros";
			$resultado = $conexao ->query($sql);
			if ($resultado) {
				echo mysqli_num_rows($resultado);
			}
			$conexao -> close(); ?>