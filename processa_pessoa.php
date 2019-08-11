<?php

include 'conexao/conexao.php';

$nome_pessoa = $_POST['nome_pessoa'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$campo_comportamentais = $_POST['comp_comportamentais'];
$campo_tecnicas = $_POST['comp_tecnicas'];

$query = "INSERT INTO pessoas(nome_pessoa, data_nascimento, idade, endereco, telefone, celular) 
               VALUES ('$nome_pessoa', '$data_nascimento', '$idade', '$endereco', '$telefone', '$celular')";
               
mysqli_query($conexao, $query);

$query = "SELECT id_pessoa FROM pessoas ORDER BY id_pessoa DESC LIMIT 1";
$consulta_id_pessoa = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($consulta_id_pessoa)){ 
    $id_pessoa = $linha['id_pessoa'];
}

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