<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biblioteca Virtual - bibli.ON</title>
        <style>
		.demTable {
			border:1px solid #b3adad;
			border-collapse:collapse;
			padding:5px;
		}
		.demTable th {
			border:1px solid #b3adad;
			padding:5px;
			background: #f0f0f0;
			color: #313030;
		}
		.demTable td {
			border:1px solid #b3adad;
			text-align:left;
			padding:5px;
			background: #ffffff;
			color: #313030;
		}
                .sub{
                        gap: 10em;
                }
	</style>
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
		<h1>Editando livro</h1>
		<div class="sub">
                        <?php 
                              include './assets/editando-livro.php';
                                ?>
                        </div>
                        </div>
		</div>
	</div>
</body>

