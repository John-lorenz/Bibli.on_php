<?php
session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    $deslogado = true;
} else {
    $deslogado = false;
    $email_session = $_SESSION['email'];
}

$conexao = require __DIR__ . "/bancodedados.php";
$sql = "SELECT titulo FROM livros";
$resultado = $conexao->query($sql);
$numLivros = $resultado ? mysqli_num_rows($resultado) : 0;

echo '<header class="cabecalho">';
echo '<a href="index.php" class="bloco">' . $numLivros . ' livros em nosso acervo</a>';

echo '<div class="opcoes-login">';
if ($deslogado) {
    echo '<a href="login.php" class="botao-login">Login</a>';
    echo '<a href="signup.php" class="botao-login">Cadastrar</a>';
} else {
    echo $email_session;
    echo '<a href="sair.php" class="botao-login">Sair</a>';
}
echo '</div>';

echo '</header>';

$conexao->close();
?>
