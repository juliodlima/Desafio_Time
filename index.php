<?php
# Iniciar Sessão
session_start();

# Base de Dados
include 'conexao/conexao.php';

# Cabeçalho
include 'header.php';

# Conteúdo da Página
if(isset($_SESSION['login'])) {
    if(isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    }
    else {
        $pagina = 'pessoas';
    }
} else {
    $pagina = 'home';
}

switch ($pagina) {
    case 'pessoas': include 'views/pessoas.php'; break;
    case 'inserir_pessoa': include 'views/inserir_pessoa.php'; break;

    default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';


