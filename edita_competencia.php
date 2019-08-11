<?php

include 'conexao/conexao.php';

$id_competencia = $_POST['id_competencia'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];


$query = "UPDATE competencias
             SET nome = '$nome', 
                 tipo = '$tipo'
           WHERE id_competencia = $id_competencia";

mysqli_query($conexao, $query);

header('location:index.php?pagina=competencias');
