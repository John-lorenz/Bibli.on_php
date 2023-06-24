<?php

$host = '127.0.0.1';
$usuario = 'root';
$senha_db = 'root';
$banco = 'biblioteca';
$conexao = new mysqli($host, $usuario, $senha_db, $banco);

if ($conexao->connect_error) {
    die('Erro de conexão com o banco de dados: ' . $conexao->connect_error);
}

$conexao->set_charset("utf8");

return $conexao;
