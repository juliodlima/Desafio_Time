<?php

include 'conexao/conexao.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$comp_comportamentais = $_POST['comp_comportamentais'];
$comp_tecnicas = $_POST['comp_tecnicas'];

$query = "INSERT INTO pessoas(nome, data_nascimento, idade, endereco, telefone, celular, comp_comportamentais, comp_tecnicas) 
               VALUES ('$nome', '$data_nascimento', '$idade', '$endereco', '$telefone', '$celular', '$comp_comportamentais', '$comp_tecnicas')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=pessoas');