<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - bibli.ON</title>
</head>

<body>
<header class="cabecalho">
    <?php include './assets/cabecalho.php'; ?>
</header>

<div class="wrapper">
    <a href="index.php"><img src="images/logobibli_claro.png"></a>
    <div class="sub">
        <h2>Livros Reservados</h2>
        <?php
        $conexao = require __DIR__ . "/assets/bancodedados.php";

        $sql = "SELECT emprestimo.id, usuarios.nome as usuario, livros.titulo as livro, emprestimo.data_emprestimo, emprestimo.arquivado FROM emprestimo JOIN usuarios ON emprestimo.usuario = usuarios.id JOIN livros ON emprestimo.livro = livros.id";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            if ($resultado->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Usuário</th><th>Livro</th><th>Data do Empréstimo</th><th>Arquivado</th></tr>";

                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['usuario'] . "</td><td>" . $row['livro'] . "</td><td>" . $row['data_emprestimo'] . "</td><td>" . $row['arquivado'] . "</td></tr>";
                }

                echo "</table>";
            } else {
                echo "Nenhum livro reservado.";
            }
        } else {
            echo "Erro na consulta: " . $conexao->error;
        }

        $conexao->close();
        ?>
    </div>
</div>
</body>

</html>
