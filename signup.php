<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Signup - Bibli.ON</title>
</head>

<body class="imagem">
    <div style="display: flex; margin-top: 10em;">
        <div class="bemVindo">
            <img src="images/logobibli_dark.png" alt="">
            <h1>Entre para<br>o nosso<br>mundo mágico</h1>
            <hr style="width: 50%;">
        </div>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formLogin">
                <input type="text" name="register_nome" placeholder="Nome" class="bonito">
                <br> <input type="text" name="register_email" placeholder="Email" class="bonito">
                <br> <input type="password" name="register_senha" placeholder="Senha" class="bonito"> *min 5 caracteres
                <input type="password" name="confirmar_senha" placeholder="Confirmar senha" class="bonito">
                <div>
                    <input type="submit" value="Registrar" name="register" class="botao">
                    <a href="login.php" class="botao criar-conta">Já tenho uma conta</a>
                </div>
                <?php
                if (isset($_POST['register'])) {
                    $conexao = require __DIR__ . "/assets/bancodedados.php";
                    if (empty($_POST["register_nome"])) {
                        die("Nome de usuário necessário");
                    }
                    if (empty($_POST["register_email"])) {
                        die("Email necessário");
                    }
                    if (strlen($_POST["register_senha"]) < 5) {
                        die("A senha precisa ter no mínimo 5 caracteres");
                    }
                    $nome = $conexao->real_escape_string($_POST['register_nome']);
                    $email = $conexao->real_escape_string($_POST['register_email']);
                    $senha = $conexao->real_escape_string($_POST['register_senha']);
                    $confirmarSenha = $conexao->real_escape_string($_POST['confirmar_senha']);
                    if ($senha != $confirmarSenha) {
                        die('ERRO: As senhas não estão iguais');
                    }
                    if ($conexao->connect_errno) {
                        die('Erro ao conectar ao banco de dados: ' . $conexao->connect_errno);
                    }
                    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
                    $resultado = $conexao->query($sql);
                    $verificaLogin = $resultado->fetch_assoc();
                    $sql = "INSERT INTO `biblioteca`.`usuarios` (`nome`,`email`,`senha`) VALUES ('" . $nome . "', '" . $email . "','" . md5($senha) . "')";
                    $resultado = $conexao->query($sql);
                    if (!$resultado) {
                        echo '<script> alert("Erro ao inserir os dados");</script>';
                    } else {
                        echo '<script> if(confirm("Cadastro realizado com sucesso") == true) { window.location.replace("index.php"); } else {window.location.replace("index.php");}</script>';
                    }
                    $conexao->close();
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>