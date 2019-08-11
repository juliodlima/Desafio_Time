<?php

include 'conexao/conexao.php';

$id_pessoa = $_POST['id_pessoa'];
$nome_pessoa = $_POST['nome_pessoa'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$campo_comportamentais = $_POST['comp_comportamentais'];
$campo_tecnicas = $_POST['comp_tecnicas'];

date_default_timezone_set('America/Sao_Paulo');
$data_inscricao = date('Y-m-d');

$query= "UPDATE pessoas 
             SET nome_pessoa = '$nome_pessoa', 
                 data_nascimento = '$data_nascimento', 
                 idade = '$idade', 
                 endereco = '$endereco', 
                 telefone = '$telefone', 
                 celular = '$celular', 
                 data_inscricao = '$data_inscricao'
           WHERE id_pessoa = $id_pessoa ";

mysqli_query($conexao, $query);

// na atualizacao da pessoa, deleta todas as competencia da pessoa para uma nova insercao 
$query = "DELETE FROM pessoa_competencia WHERE id_pessoa = $id_pessoa ";

mysqli_query($conexao, $query);

foreach ($campo_comportamentais as $k => $v) {
    $id_competencia = $v;
    $query = "INSERT INTO pessoa_competencia(id_pessoa, id_competencia) 
            VALUES ($id_pessoa, $id_competencia); ";
    mysqli_query($conexao, $query);
}

foreach ($campo_tecnicas as $k => $v) {
    $id_competencia = $v;
    $query = "INSERT INTO pessoa_competencia(id_pessoa, id_competencia) 
            VALUES ($id_pessoa, $id_competencia); ";
    mysqli_query($conexao, $query);
}

header('location:index.php?pagina=pessoas');
