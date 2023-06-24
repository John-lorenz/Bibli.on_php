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
							 
							
							?>
		
	</header>
	

	<div class="wrapper">
			
		<a href="index.php"><img src="images/logobibli_claro.png"></a>
		<h1> Página do admin</h1>
		<div class="sub">
                <form action="./assets/adicionarLivro.php" method="post" enctype="multipart/form-data">
				<table class='demTable'>
					<h1>adicionar livro</h1>
                        <thead>
                                <tr>
                                        <th>Coluna</th>
                                        <th>Valor</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                        <td>&nbsp;titulo</td>
                                        <td>&nbsp;<input type='text' name='titulo' placeholder="ex.: Orgulho e preconceito"></td>
                                </tr>
                                <tr>
                                        <td>&nbsp;autor</td>
                                        <td>&nbsp;<input type='text' name='autor' placeholder="ex.: Jane Austen"></td>
                                </tr>
                                <tr>
                                        <td>&nbsp;genero</td>
                                        <td>&nbsp;<select name='genero'>
                                        <option value='Romance'>Romance</option>
                                        <option value='Aventura'>Aventura</option>
                                        <option value='Ficção Científica'>Ficção Científica</option>
                                        <option value='Poesia'>Poesia</option>
                                        <option value='Suspense'>Suspense</option>
                                        <option value='Biografia'>Biografia</option>
                                        <option value='História'>História</option>
                                        <option value='Autoajuda'>Autoajuda</option>
                                        <option value='Negócios e Finanças'>Negócios e Finanças</option>
                                </select></td>
                                </tr>
								<tr>
                                        <td>&nbsp;descricao</td>
                                        <td>&nbsp;<textarea type='text' name='descricao' placeholder="Max. 3000 caracteres" maxlength="3000"></textarea></td>
                                </tr>
                                <tr>
                                        <td>&nbsp;linkImagem</td>
                                        <td>&nbsp;<input type='file' name='linkImagem'></td>
                                </tr>
                        </tbody>
                </table>
				<input type='submit' value='Executar'>
		</form>
			<div style="width: 100%;">
		<form method="get" class="display-flex">
				<input type="text" placeholder="Pesquisa por título, autor ou gênero" name="search" class="pesquisa">
				<input type="submit" value="Procurar" class="botao">
			</form>
			<div class="lista-admin">
			<?php

				include './assets/admin-pesquisa.php';
				
			?>
			</div>
		</div>
		</div>
	</div>
</body>

