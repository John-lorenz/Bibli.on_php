<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Login - Bibli.ON</title>
</head>

<body class="imagem">
  <div style="display: flex; margin-top: 10em;">
    <div class="bemVindo">
      <img src="images/logobibli_dark.png" alt="">
      <h1>Seja <br> bem-vindo</h1>
      <hr style="width: 50%;">
      <label style="font-weight: 400;">reportar um problema</label>
      <br>
      <div style="display: flex; flex-direction:column; text-decoration: none;">
        <a href="problema.php" style="color: lightblue; font-weight: 100; width:fit-content;">Perdi a senha</a>
        <a href="problema.php" style="color: lightblue; font-weight: 100; width:fit-content;">Roubo de conta</a>
      </div>
    </div>
    <div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formLogin">

        <input type="text" name="login_email" placeholder="Email" class="bonito">

        <input type="password" name="login_senha" placeholder="Senha" class="bonito">
        <div>
          <input type="submit" value="Entrar" name="login" class="botao">
          <a href="signup.php" class="botao criar-conta">Criar conta</a>
        </div>
        <?php
        if (isset($_POST['login'])) {
          $conexao = require __DIR__ . "/assets/bancodedados.php";

          $email = $conexao->real_escape_string($_POST['login_email']);
          $senha = $conexao->real_escape_string($_POST['login_senha']);

          if ($conexao->connect_errno) {
            die('Erro ao conectar ao banco de dados: ' . $conexao->connect_errno);
          }

          $sql = "SELECT * FROM usuarios WHERE email='$email'";
          $resultado = $conexao->query($sql);

          if ($resultado->num_rows === 0) {
            die("Usuário ou senha inválidos");
          }

          $usuario = $resultado->fetch_assoc();
          $hashSenha = $usuario['senha'];

          if (password_verify($senha, $hashSenha)) {
            session_start();
            $_SESSION['email'] = $email;
            header('Location: index.php');
          } else {
            die("Usuário ou senha inválidos");
          }

          $conexao->close();
        }
        ?>
      </form>
    </div>
  </div>
</body>

</html>
