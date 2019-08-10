<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "time_inovacao";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM pessoas";
$consulta_pessoas = mysqli_query($conexao, $query);
