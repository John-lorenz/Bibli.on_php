<?php

$conexao = require __DIR__ . "/bancodedados.php";

// Obtém os dados do formulário
$id = $conexao -> real_escape_string( $_POST['id']);
$titulo = $conexao -> real_escape_string( $_POST['titulo']);
$autor = $conexao -> real_escape_string( $_POST['autor']);
$genero = $conexao -> real_escape_string( $_POST['genero']);


$target_dir = "../images/uploads/";
$target_file = $target_dir . basename($_FILES["linkImagem"]["name"]);
if ($target_file == $target_dir) {
	$target_file = "";
} else{$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["linkImagem"]["tmp_name"]);
	  if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
	  } else {
		echo die("File is not an image.");
	  }
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
	  echo("file already exists.");
	} else {// Check file size
	if ($_FILES["linkImagem"]["size"] > 100000000) {
	  die("Arquivo muito grande (máx. 100000000 bytes).");
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
	
	}
	
	if (move_uploaded_file($_FILES["linkImagem"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars(basename( $_FILES["linkImagem"]["name"])). " has been uploaded.";
	  } else {
		die("Sorry, there was an error uploading your file.");
	  }
	}
	
}
if (empty($titulo) || empty($autor)) {
    die('<script>if(confirm("Os dados não podem ser vazios!!!") == true) { window.location.replace("admin_pagina.php"); } else {window.location.replace("admin_pagina.php");}</script>');
} else {
// Insere os dados na tabela de usuários
$sql = "UPDATE `biblioteca`.`livros` SET `titulo` = '$titulo',`autor` = '$autor',`genero` = '$genero',`linkImagem` = '$target_file' WHERE `id`= '$id';";
$resultado = $conexao -> query($sql);

// Verifica se houve erro na inserção
if (!$resultado) {
	echo'<script>if(confirm("Erro ao inserir os dados: '.$sql.'") == true) { window.location.replace("admin_pagina.php"); } else {window.location.replace("admin_pagina.php");}</script>';
} else {
	echo'<script> if(confirm("Livro atualizado com sucesso") == true) { window.location.replace(" admin_pagina.php"); } else {window.location.replace("admin_pagina.php");}</script>';

}
}
// Fecha a conexão com o banco de dados
$conexao -> close();

?>
