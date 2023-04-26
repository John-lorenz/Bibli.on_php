<?php

$host = '127.0.0.1';
$usuario = 'root';
$senha_db = 'root';
$banco = 'biblioteca';
$conexao = mysqli_connect($host, $usuario, $senha_db, $banco);

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
	die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}
// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Insere os dados na tabela de usuários
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado = mysqli_query($conexao, $sql);

// Verifica se houve erro na inserção
if (!$resultado) {
	die('Erro ao inserir os dados: ' . mysqli_error($conexao));
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

// Redireciona o usuário para uma página de sucesso
header('Location: index.php');
?>
