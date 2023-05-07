<?php

$conexao = require __DIR__ . "/bancodedados.php";

// Obtém os dados do formulário
$titulo = $conexao -> real_escape_string( $_POST['livro_titulo']);
$autor = $conexao -> real_escape_string( $_POST['livro_autor']);
$genero = $conexao -> real_escape_string( $_POST['livro_genero']);
$linkImagem = $conexao -> real_escape_string( $_POST['livroImagem']);

// Insere os dados na tabela de usuários
$sql = "INSERT INTO `biblioteca`.`livros` (`titulo`,`autor`,`genero`,`linkImagem`) VALUES ('".$titulo."', '".$autor."','".$genero."','".$linkImagem."')";
$resultado = $conexao -> query($sql);

// Verifica se houve erro na inserção
if (!$resultado) {
	echo'<script> alert("Erro ao inserir os dados");</script>';
	header('Location:index.php');
} else {
	echo'<script> if(confirm("Livro adicionado com sucesso") == true) { window.location.replace("index.php"); } else {window.location.replace("index.php");}</script>';

}

// Fecha a conexão com o banco de dados
$conexao -> close();

?>
