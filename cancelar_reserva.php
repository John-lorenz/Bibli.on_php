<?php
$conexao = require __DIR__ . "/assets/bancodedados.php";

// Verifica se o ID foi fornecido
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Executa a consulta SQL para excluir o livro da tabela de empréstimo
    $sql = "DELETE FROM emprestimo WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        // Ação executada com sucesso
        echo "Reserva cancelada com sucesso!";
    } else {
        // Ocorreu um erro ao executar a ação
        echo "Erro ao cancelar a reserva: " . $conexao->error;
    }
} else {
    // ID não fornecido
    echo "ID do livro não fornecido.";
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
