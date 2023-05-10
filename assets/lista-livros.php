<?php if(isset($_GET['search'])) {
					$conexao = require __DIR__ . "/bancodedados.php";
					$termo_pesquisa = $conexao -> real_escape_string($_GET['search']);
					$sql = "SELECT * FROM livros WHERE titulo LIKE '%$termo_pesquisa%' OR autor LIKE '%$termo_pesquisa%' OR genero LIKE '%$termo_pesquisa%';";
				//	$sql = "SELECT * FROM `biblioteca`.`livros`";

					$resultado = $conexao -> query($sql);

					if($resultado && mysqli_num_rows($resultado) > 0) {
						
						while($row = mysqli_fetch_assoc($resultado)) {
					
							if ($row["linkImagem"] != "") {
								echo '<a href="#" class="a-livro">
								<img src="'. $row["linkImagem"] .'" width="200px">
								</a>';
									
								} else {
								echo '<a href="#" class="a-livro">
								<img src="./images/livro-da-vida.jpg" width="200px">
								<div class="centro">'.$row["autor"].':<br>'.$row["titulo"].'</div>
								</a>';
	
								}
						}
						
					} else {

						echo '<p>Nenhum livro encontrado para o termo "' . $termo_pesquisa . '".</p>';
					}
				} else {
					$conexao = require __DIR__ . "/bancodedados.php";
					$sql = "SELECT * FROM livros;";
					$resultado = $conexao -> query($sql);
					if ($resultado) {
						while($row = mysqli_fetch_assoc($resultado)) {
							
							if (!empty($row["linkImagem"])) {
								echo '<a href="#" class="a-livro">
								<img src="'. $row["linkImagem"] .'" width="200px">
								</a>';
									
								} else {
								echo '<a href="#" class="a-livro">
								<img src="./images/livro-da-vida.jpg" width="200px">
								<div class="centro">'.$row["autor"].':<br>'.$row["titulo"].'</div>
								</a>'; 
	
								}
						}
					}

				}
				$conexao -> close();
?>