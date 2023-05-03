<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css"/>
    <title>Login - Bibli.ON</title>
  </head>

  <body class="imagem" id="lo">
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
    
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formLogin">
      
          <input type="text" name="login_email" placeholder="Email" class="bonito">
        
          <input type="password" name="login_senha" placeholder="Senha" class="bonito">
          <div>
          <input type="submit" value="Entrar" name="login">
          <a href="signup.php" class="botao criar-conta">Criar conta</a>
          </div>
          <?php
            if (isset($_POST['login'])) {
              $conexao = require __DIR__ . "/bancodedados.php";

              $email = $conexao -> real_escape_string($_POST['login_email']);
              $senha = $conexao -> real_escape_string(md5($_POST['login_senha']));


              if ($conexao -> connect_errno) {
                  die('Erro ao conectar ao banco de dados: ' . $conexao->connect_errno);
              }
              $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
              $resultado = $conexao-> query($sql);
              $verificaLogin = $resultado -> fetch_assoc();
              if (!$verificaLogin) {
                die("Usuário ou senha inválidos");
              } else {
                header('Location: index.php');
              }


              $conexao->close();
          }
          ?>
      </form>
    </div>
  </body>
</html>

