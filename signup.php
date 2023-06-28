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
                    require_once __DIR__ . "/assets/bancodedados.php";

                    // Capturar os dados do formulário
                    $nome = $_POST['register_nome'];
                    $email = $_POST['register_email'];
                    $senha = $_POST['register_senha'];
                    $confirmarSenha = $_POST['confirmar_senha'];

                    // Verificar se todos os campos estão preenchidos
                    if (empty($nome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
                        die("Todos os campos são obrigatórios");
                    }

                    // Verificar se as senhas coincidem
                    if ($senha != $confirmarSenha) {
                        die("As senhas não estão iguais");
                    }

                    // Verificar se o usuário já está cadastrado
                    $sql = "SELECT * FROM usuarios WHERE email='$email'";
                    $resultado = $conexao->query($sql);

                    if ($resultado->num_rows > 0) {
                        die("O email já está cadastrado");
                    }

                    // Gerar o hash da senha
                    $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

                    // Inserir os dados do usuário no banco de dados
                    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$hashSenha')";
                    $resultado = $conexao->query($sql);

                    if (!$resultado) {
                        die("Erro ao inserir os dados: " . $conexao->error);
                    }

                    // Recuperar o ID do usuário inserido
                    $usuarioId = $conexao->insert_id;

                    // Inserir os dados do usuário na tabela de livros (como um exemplo)
                    $sql = "INSERT INTO livros (usuario_id, titulo, autor) VALUES ('$usuarioId', 'Exemplo de Livro', 'Autor do Exemplo')";
                    $resultado = $conexao->query($sql);

                    if (!$resultado) {
                        die("Erro ao inserir os dados do livro: " . $conexao->error);
                    }

                    // Fechar a conexão com o banco de dados
                    $conexao->close();

                    // Redirecionar o usuário para a página de login ou exibir uma mensagem de sucesso
                    session_start();
                    $_SESSION['email'] = $email;
                    echo '<script> if(confirm("Cadastro realizado com sucesso") == true) { window.location.replace("index.php"); } else {window.location.replace("index.php");}</script>';
                }
                ?>

            </form>
        </div>
    </div>
</body>

</html>
