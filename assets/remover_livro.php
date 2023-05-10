<?php

$conexao = require __DIR__ . "/bancodedados.php";


// Insere os dados na tabela de usuários
$sql = "DELETE FROM `biblioteca`.`livros` WHERE `id` = ". $_GET["id"];
unlink($_GET["linkImagem"]);
$resultado = $conexao -> query($sql);

// Verifica se houve erro na inserção
if (!$resultado) {
	echo'<script> alert("Erro ao remover os dados");</script>';
} else {
	echo'<script> if(confirm("Livro removido com sucesso") == true) { window.location.replace("../admin_pagina.php"); } else {window.location.replace("../admin_pagina.php");}</script>';

}

// Fecha a conexão com o banco de dados
$conexao -> close();

?>
