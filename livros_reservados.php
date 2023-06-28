<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - bibli.ON</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {background-color: #f5f5f5;}
        
        th {
            background-color: #4CAF50;
            color: white;
        }
        
        h2 {
            color: #4CAF50;
        }
        
        p {
            color: #888;
        }

        .cancelar-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .cancelar-button:hover {
            background-color: #d32f2f;
        }
    </style>
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
            
            $sql = "SELECT e.*, l.titulo, l.autor, l.linkImagem
                    FROM emprestimo e
                    INNER JOIN livros l ON e.id_livro = l.id
                    WHERE e.arquivado = 0";
    
            $result = $conexao->query($sql);
    
            if ($result->num_rows > 0) {
         
                echo "<table>
                        <tr>
                            <th>Livro</th>
                            <th>Data de Empréstimo</th>
                            <th>Capa</th>
                            <th>Ação</th>
                        </tr>";
    
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["titulo"] . " - " . $row["autor"] . "</td>
                            <td>" . $row["data_emprestimo"] . "</td>
                            <td><img src='" . $row["linkImagem"] . "' width='100' height='150'></td>";

                    // Verifique se a propriedade "id" existe antes de usá-la
                    if (isset($row["id"])) {
                        echo "<td><button class='cancelar-button' onclick=\"cancelarReserva(" . $row["id"] . ")\">Cancelar Reserva</button></td>";
                    } else {
                        echo "<td>Erro: ID de reserva não encontrado</td>";
                    }

                    echo "</tr>";
                }
    
                echo "</table>";
            } else {
                echo "<p>Nenhum livro reservado no momento.</p>";
            }
    
            // Fecha a conexão com o banco de dados
            $conexao->close();
            
            ?>

            <script>
                function cancelarReserva(id) {
                    if (confirm("Tem certeza de que deseja cancelar a reserva deste livro?")) {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // Exemplo de redirecionamento para a página atual após o cancelamento da reserva
                                window.location.reload();
                            }
                        };
                        xmlhttp.open("GET", "cancelar_reserva.php?id=" + id, true);
                        xmlhttp.send();
                    }
                }
            </script>
        </div>
    </div>
</body>
</html>
