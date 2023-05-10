<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biblioteca Virtual - bibli.ON</title>
        <style>
		table {
			border:1px solid #b3adad;
			border-collapse:collapse;
			padding:5px;
		}
		table th {
			border:1px solid #b3adad;
			padding:5px;
			background: #f0f0f0;
			color: #313030;
		}
		table td {
			border:1px solid #b3adad;
			text-align:center;
			padding:5px;
			background: #ffffff;
			color: #313030;
		}
	</style>
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
		<h1>Editando livro</h1>
		<div class="sub">
                        <?php 
                                $conexao = require __DIR__ . "/bancodedados.php";
                                $id = $_GET['id'];
                                $titulo = $_GET['titulo'];
                                $autor = $_GET['autor'];
                                $genero = $_GET['genero'];
                                $linkImagem = $_GET['linkImagem'];
                                echo "
                        <div>
                                        <table>
                                <thead>
                                        <tr>
                                                <th>Opções</th>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                                <th>linkImagem</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td>&nbsp;</td>
                                                <td>$id</td>
                                                <td>$titulo</td>
                                                <td>$autor</td>
                                                <td>$genero</td>
                                                <td>$linkImagem</td>
                                              
                                        </tr>
                                        
                                </tbody>
                        </table>
                        </div>
                        <div>";
                                

                                        
                                        echo "<h2>$titulo</h2>";
                                        if ($linkImagem != "") {
                                                echo "<img src='$linkImagem' width=250px></img>";
                                        } else {
                                                echo "<img src='./images/livro-da-vida.jpg' width=250px></img>";
                                        }
                                ?>
                        </div>
                        </div>
		</div>
	</div>
</body>

