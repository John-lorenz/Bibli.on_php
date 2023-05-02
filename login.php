<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body class="imagem">
   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formLogin">
    <h1>login</h1>
        <input type="text" name="login_email" placeholder="Email" class="bonito">
        <br>
        <input type="password" name="login_senha" placeholder="Senha" class="bonito">
        <input type="submit" value="Entrar" name="login">
    </form>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formLogin">
    <h1>registrar</h1>
        <input type="text" name="register_nome" placeholder="Nome" class="bonito">
        <br>
        <input type="text" name="register_email" placeholder="Email" class="bonito">
        <br>
        <input type="password" name="register_senha" placeholder="Senha" class="bonito">
        <br>
        <input type="password" name="confirmar_senha" placeholder="Confirmar senha"  class="bonito">
        <input type="submit" value="Registrar" name="register">
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
                if (isset($_POST['register'])) {
                    $conexao = require __DIR__ . "/bancodedados.php";
                    
                    $nome = $conexao -> real_escape_string($_POST['register_nome']);
                    $email = $conexao -> real_escape_string($_POST['register_email']);
                    $senha = $conexao -> real_escape_string($_POST['register_senha']);
                    $confirmarSenha = $conexao -> real_escape_string($_POST['confirmar_senha']);

                    if ($senha != $confirmarSenha) {
                      die('ERRO: As senhas não estão iguais');
                    }
                    if ($conexao -> connect_errno) {
                        die('Erro ao conectar ao banco de dados: ' . $conexao->connect_errno);
                    }


                    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
                    $resultado = $conexao-> query($sql);
                    $verificaLogin = $resultado -> fetch_assoc();
                    $sql = "INSERT INTO `biblioteca`.`usuarios` (`nome`,`email`,`senha`) VALUES ('".$nome."', '".$email."','".md5($senha)."')";
                    $resultado = $conexao -> query($sql);
                    
                    if (!$resultado) {
                      echo'<script> alert("Erro ao inserir os dados");</script>';
                    } else {
                      $_SESSION['id_usuario'] = $email;
                      echo'<script> if(confirm("Cadastro realizado com sucesso") == true) { window.location.replace("index.php"); } else {window.location.replace("index.php");}</script>';
                    
                    }
                    $conexao->close();
                }
                ?>

    </form>
  </body>
</html>

