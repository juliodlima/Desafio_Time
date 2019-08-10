<?php

include 'conexao/conexao.php';

$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$comp_comportamentais = $_POST['comp_comportamentais'];
$comp_tecnicas = $_POST['comp_tecnicas'];

$query = "UPDATE pessoas 
             SET nome = '$nome', 
                 data_nascimento = '$data_nascimento', 
                 idade = '$idade', 
                 endereco = '$endereco', 
                 telefone = '$telefone', 
                 celular = '$celular', 
                 comp_comportamentais = '$comp_comportamentais', 
                 comp_tecnicas = '$comp_tecnicas'
           WHERE id_pessoa = $id_pessoa";

mysqli_query($conexao, $query);

header('location:index.php?pagina=pessoas');
