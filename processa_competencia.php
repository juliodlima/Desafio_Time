<?php

include 'conexao/conexao.php';

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];

$query = "INSERT INTO competencias(nome, tipo) 
               VALUES ('$nome', '$tipo')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=competencias');