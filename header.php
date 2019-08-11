<!DOCTYPE html>
<html>
<head>
    <title>TimeInovação</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo_.jpg" title="Logo" alt="Logo"></a>
            <div id="menu">
                <a href="?pagina=pessoas">Pessoas</a>
                <a href="?pagina=competencias">Competências</a>
                <?php if(isset($_SESSION['login'])) { ?> 
                    <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a>
                <?php } ?>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">