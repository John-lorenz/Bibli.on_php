<?php
session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
      $deslogado = True;
} else{
	$deslogado = false;
	$email_session = $_SESSION['email'];}

$conexao = require __DIR__ . "/bancodedados.php";
$sql = "SELECT titulo FROM livros";
$resultado = $conexao->query($sql);
if ($resultado) {
	echo mysqli_num_rows($resultado);
}
$conexao->close();
?>