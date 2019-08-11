<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "time_inovacao";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM pessoas";
$consulta_pessoas = mysqli_query($conexao, $query);

$query = "SELECT * FROM competencias ";
$consulta_competencias = mysqli_query($conexao, $query);

$query = "SELECT * FROM competencias WHERE tipo = 'Comportamental' ";
$consulta_comp_comportamentais = mysqli_query($conexao, $query);

$query = "SELECT * FROM competencias WHERE tipo = 'Tecnica' ";
$consulta_comp_tecnicas = mysqli_query($conexao, $query);


