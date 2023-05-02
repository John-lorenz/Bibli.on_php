<?php
// Verifica se o formulário foi submetido
if(isset($_POST['search'])) {
    // Obtém o termo de pesquisa do formulário
    $search_term = $_POST['search'];

    // Conecta-se ao banco de dados
    $host = '127.0.0.1';
    $user = 'root';
    $password = 'root';
    $database = 'biblioteca';
    $connection = mysqli_connect($host, $user, $password, $database);

    // Verifica se a conexão foi bem sucedida
    if(!$connection) {
        die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
    }

    // Executa a consulta no banco de dados
    $query = "SELECT * FROM livros WHERE titulo LIKE '%$search_term%' OR autor LIKE '%$search_term%'";
    $result = mysqli_query($connection, $query);

    // Verifica se a consulta retornou resultados
    if($result && mysqli_num_rows($result) > 0) {
        // Exibe os resultados na página
        while($row = mysqli_fetch_assoc($result)) {
            echo '<h3>' . $row['titulo'] . '</h3>';
        }
    } else {
        // Exibe uma mensagem de erro caso não haja resultados
        echo '<p>Nenhum livro encontrado para o termo "' . $search_term . '".</p>';
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($connection);
}
?>
