<?php

include 'conexao/conexao.php';

$id_pessoa = $_GET['id_pessoa'];

$query = "DELETE FROM pessoas WHERE id_pessoa = $id_pessoa";

mysqli_query($conexao, $query);

header('location:index.php?pagina=pessoas');