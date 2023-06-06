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
echo '<a href="index.php" class="bloco">';
if ($resultado) {
	echo mysqli_num_rows($resultado);
}
echo "livros em nosso acervo";
if($deslogado){
	echo'<a href="login.php">entrar/criar conta</a>';
} else {
	echo $_SESSION['email'];
}	
$conexao->close();
?>