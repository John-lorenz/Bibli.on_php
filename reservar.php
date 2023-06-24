<?php
$conexao = require __DIR__ . "/assets/bancodedados.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $livroId = $conexao->real_escape_string($_POST['livro_id']);
    $nome = $conexao->real_escape_string($_POST['nome']);
    $email = $conexao->real_escape_string($_POST['email']);
    $telefone = $conexao->real_escape_string($_POST['telefone']);

    // Verifique se há unidades disponíveis antes de fazer a reserva
    $livroSql = "SELECT unidades FROM livros WHERE id = $livroId";
    $livroResultado = $conexao->query($livroSql);
    $livroRow = mysqli_fetch_assoc($livroResultado);
    $unidadesDisponiveis = $livroRow['unidades'];

    if ($unidadesDisponiveis > 0) {
        // Faça a reserva - você precisa adicionar a lógica adequada para inserir os dados no banco de dados
        $reservaSql = "INSERT INTO emprestimo (livro, data_emprestimo, usuario, arquivado) VALUES ('$livroId', NOW(), 1, 0)";
        $conexao->query($reservaSql);

        // Atualize o número de unidades disponíveis
        $unidadesAtualizadas = $unidadesDisponiveis - 1;
        $atualizarSql = "UPDATE livros SET unidades = $unidadesAtualizadas WHERE id = $livroId";
        $conexao->query($atualizarSql);

        echo "Reserva realizada com sucesso!";
    } else {
        echo "Não há unidades disponíveis para reserva.";
    }
}

$conexao->close();
?>
