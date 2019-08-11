<?php

include 'conexao/conexao.php';

$id_competencia = $_GET['id_competencia'];

$query = "DELETE FROM competencias WHERE id_competencia = $id_competencia";

mysqli_query($conexao, $query);

header('location:index.php?pagina=competencias');