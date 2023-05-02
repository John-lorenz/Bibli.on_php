<?php

$host = '127.0.0.1';
$usuario = 'root';
$senha_db = 'root';
$banco = 'biblioteca';
$conexao = new mysqli($host, $usuario, $senha_db, $banco);

// Verifica se houve erro na conexão
if ($conexao -> connect_errno) {
	die('Erro ao conectar ao banco de dados: ' . $conexao -> connect_errno);
}
// Obtém os dados do formulário
$titulo = $conexao -> real_escape_string( $_POST['livro_titulo']);
$autor = $conexao -> real_escape_string( $_POST['livro_autor']);
$genero = $conexao -> real_escape_string( $_POST['livro_genero']);
$linkImagem = $conexao -> real_escape_string( $_POST['livroImagem']);

// Insere os dados na tabela de usuários
$sql = "INSERT INTO `biblioteca`.`livros` (`titulo`,`autor`,`genero_id`,`linkImagem`) VALUES ('".$titulo."', '".$autor."','".$genero."','".$linkImagem."')";
$resultado = $conexao -> query($sql);

// Verifica se houve erro na inserção
if (!$resultado) {
	echo'<script> alert("Erro ao inserir os dados");</script>';
} else {
	echo'<script> if(confirm("Livro adicionado com sucesso") == true) { window.location.replace("index.php"); } else {window.location.replace("index.php");}</script>';

}

// Fecha a conexão com o banco de dados
$conexao -> close();

?>
