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
$nome = $conexao -> real_escape_string( $_POST['nome']);
$email = $conexao -> real_escape_string( $_POST['email']);
$senha = $conexao -> real_escape_string( $_POST['senha']);

// Insere os dados na tabela de usuários
$sql = "INSERT INTO `biblioteca`.`usuarios` (`nome`,`email`,`senha`) VALUES ('".$nome."', '".$email."','".md5($senha)."')";
$resultado = $conexao -> query($sql);

// Verifica se houve erro na inserção
if (!$resultado) {
	echo'<script> alert("Erro ao inserir os dados");</script>';
} else {
	echo'<script> if(confirm("Cadastro realizado com sucesso") == true) { window.location.replace("dashboard.php"); } else {window.location.replace("index.php");}</script>';

}

// Fecha a conexão com o banco de dados
$conexao -> close();

?>
