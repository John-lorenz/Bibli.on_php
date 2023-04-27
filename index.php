<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body class="fundo">
    
    <header class="header">
      <nav class="nav">
        <img src="images/logobibli_dark.png" href="#" class="nav_logo" width=200em></img>
        <ul class="nav_items">
          <li class="nav_item">
            <a href="#" class="nav_link">Home</a>
            <a href="#" class="nav_link">Product</a>
            <a href="#" class="nav_link">Services</a>
            <a href="#" class="nav_link">Contact</a>
          </li>
        </ul>

        <button class="button" id="form-open">Login</button>
      </nav>
    </header>
    <section class="home">
      <div class="form_container">
      
        <i class="uil uil-times form_close"></i>
   
        <div class="form login_form">
          <form method="post">
            <h2>Login</h2>

            <div class="input_box">
              <input type="email" name="login_email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="login_senha" placeholder="Enter your password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span>
              <a href="#" class="forgot_pw">Forgot password?</a>
            </div>

            <button class="button">Login Now</button>

            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
          </form>
        </div>

  
        <div class="form signup_form">
          <form action="cadastrarBanco.php" method="post">
            <h2>Signup</h2>

            <div class="input_box">
              <input type="text" name="nome" placeholder="Enter your name" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="email" name="email" placeholder="Enter your email" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" name="senha" placeholder="Enter you password" required/>
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Signup Now</button>

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
    </section>

	<script src="script.js"></script>
  </body>
</html>

<?php
session_start();

if (isset($_POST['login_email']) && isset($_POST['login_senha'])) {
    


    $host = '127.0.0.1';
    $usuario = 'root';
    $senha_db = 'root';
    $banco = 'biblioteca';
    $conexao = new mysqli($host, $usuario, $senha_db, $banco);

    $email = $conexao -> real_escape_string($_POST['login_email']);
    $senha = $conexao -> real_escape_string(md5($_POST['login_senha']));


    if ($conexao -> connect_errno) {
        die('Erro ao conectar ao banco de dados: ' . $conexao->connect_errno);
    }


    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $resultado = $conexao-> query($sql);
    $verificaLogin = $resultado -> fetch_assoc();
    if (!$verificaLogin) {
        $mensagem_erro = "Usuário ou senha inválidos";
        echo "<script>alert('$mensagem_erro')</script>";
    } else {
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');
        exit;
    }


    $conexao->close();
}
?>
