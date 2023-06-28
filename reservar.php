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
        // Obtenha o ID do usuário com base no email fornecido
        $usuarioSql = "SELECT id FROM usuarios WHERE email = '$email'";
        $usuarioResultado = $conexao->query($usuarioSql);
        $usuarioRow = mysqli_fetch_assoc($usuarioResultado);
        $usuarioId = $usuarioRow['id'];

        // Faça a reserva - insira os dados do usuário associado à reserva
        $reservaSql = "INSERT INTO emprestimo (id_usuario, id_livro, data_emprestimo, arquivado) VALUES ($usuarioId, $livroId, NOW(), 0)";
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
