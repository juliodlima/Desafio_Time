<?php if(!isset($_GET['editar']) && !isset($_GET['visualizar'])){ ?>

    <h3>Inserir Pessoa</h3>
    <form method="post" action="processa_pessoa.php">
        <label class="badge badge-secondary">Nome da Pessoa:</label><br>
        <input class="form-control col-md-10" type="text" name="nome" placeholder="Insira o Nome da Pessoa">
        <br>
        <label class="badge badge-secondary">Data de Nascimento:</label><br>
        <input class="form-control col-md-5" type="date" name="data_nascimento" placeholder="Insira a Data de Nascimento">
        <br>
        <label class="badge badge-secondary">Idade:</label><br>
        <input class="form-control col-md-5" type="text" name="idade" placeholder="Insira a Idade">
        <br>
        <label class="badge badge-secondary">Endereço:</label><br>
        <input class="form-control col-md-10" type="text" name="endereco" placeholder="Insira o Endereço">
        <br>
        <label class="badge badge-secondary">Telefone Residencial:</label><br>
        <input class="form-control col-md-5" type="text" name="telefone" placeholder="Insira o número do Telefone Residencial">
        <br>
        <label class="badge badge-secondary">Celular:</label><br>
        <input class="form-control col-md-5" type="text" name="celular" placeholder="Insira o número do Celular">
        <br>
        <label class="badge badge-secondary">Competências Comportamentais:</label><br>
        <input class="form-control col-md-10" type="text" name="comp_comportamental" placeholder="Insira as Competências Comportamentais">
        <br>
        <label class="badge badge-secondary">Competências Técnicas:</label><br>
        <input class="form-control col-md-10" type="text" name="comp_comportamental" placeholder="Insira as Competências Técnicas">
        <br>
        <input class="btn btn-success" type="submit" value="Inserir Pessoa">
    </form>

<?php } else if(isset($_GET['editar'])) { ?>
    <?php while($linha = mysqli_fetch_array($consulta_pessoas)){ ?>
        <?php if($linha['id_pessoa'] == $_GET['editar']){ ?>
        <h1>Editar Pessoa</h1>
        <form method="post" action="edita_pessoa.php">
            <input type="hidden" name="id_pessoa" value="<?php echo $linha['id_pessoa']; ?>">
            <label class="badge badge-secondary">Nome Pessoa:</label><br>
            <input class="form-control col-md-10" type="text" name="nome" placeholder="Insira o Nome da Pessoa" value="<?php echo $linha['nome']; ?>">
            <br>
            <label class="badge badge-secondary">Data de Nascimento:</label><br>
            <input class="form-control col-md-5" type="date" name="data_nascimento" placeholder="Insira a Data de Nascimento" value="<?php echo $linha['data_nascimento']; ?>">
            <br>
            <label class="badge badge-secondary">Idade:</label><br>
            <input class="form-control col-md-5" type="text" name="idade" placeholder="Insira a Idade" value="<?php echo $linha['idade']; ?>">
            <br>
            <label class="badge badge-secondary">Endereço:</label><br>
            <input class="form-control col-md-10" type="text" name="endereco" placeholder="Insira o Endereço" value="<?php echo $linha['endereco']; ?>">
            <br>
            <label class="badge badge-secondary">Telefone Residencial:</label><br>
            <input class="form-control col-md-5" type="text" name="telefone" placeholder="Insira o número do Telefone Residencial" value="<?php echo $linha['telefone']; ?>">
            <br>
            <label class="badge badge-secondary">Celular:</label><br>
            <input class="form-control col-md-5" type="text" name="celular" placeholder="Insira o número do Celular" value="<?php echo $linha['celular']; ?>">
            <br>
            <label class="badge badge-secondary">Competências Comportamentais:</label><br>
            <input class="form-control col-md-10" type="text" name="comp_comportamentais" placeholder="Insira as Competências Comportamentais" value="<?php echo $linha['comp_comportamentais']; ?>">
            <br>
            <label class="badge badge-secondary">Competências Técnicas:</label><br>
            <input class="form-control col-md-10" type="text" name="comp_tecnicas" placeholder="Insira as Competências Técnicas" value="<?php echo $linha['comp_tecnicas']; ?>">
            <br>
            <input class="btn btn-success" type="submit" value="Editar Pessoa">
        </form>
        <?php } ?>
    <?php } ?>
<?php } else if(isset($_GET['visualizar'])) { ?>
    <?php while($linha = mysqli_fetch_array($consulta_pessoas)){ ?>
        <?php if($linha['id_pessoa'] == $_GET['visualizar']){ ?>
        <h1>Visualizar Pessoa</h1>
        <form method="post" action="visualizar_pessoa_pdf.php">
            <input type="hidden" name="id_pessoa" value="<?php echo $linha['id_pessoa']; ?>">
            <label class="badge badge-secondary">Nome Pessoa:</label><br>
            <input class="form-control col-md-10" type="text" name="nome" placeholder="Insira o Nome da Pessoa" value="<?php echo $linha['nome']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Data de Nascimento:</label><br>
            <input class="form-control col-md-5" type="date" name="data_nascimento" placeholder="Insira a Data de Nascimento" value="<?php echo $linha['data_nascimento']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Idade:</label><br>
            <input class="form-control col-md-5" type="text" name="idade" placeholder="Insira a Idade" value="<?php echo $linha['idade']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Endereço:</label><br>
            <input class="form-control col-md-10" type="text" name="endereco" placeholder="Insira o Endereço" value="<?php echo $linha['endereco']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Telefone Residencial:</label><br>
            <input class="form-control col-md-5" type="text" name="telefone" placeholder="Insira o número do Telefone Residencial" value="<?php echo $linha['telefone']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Celular:</label><br>
            <input class="form-control col-md-5" type="text" name="celular" placeholder="Insira o número do Celular" value="<?php echo $linha['celular']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Competências Comportamentais:</label><br>
            <input class="form-control col-md-10" type="text" name="comp_comportamentais" placeholder="Insira as Competências Comportamentais" value="<?php echo $linha['comp_comportamentais']; ?>" disabled>
            <br>
            <label class="badge badge-secondary">Competências Técnicas:</label><br>
            <input class="form-control col-md-10" type="text" name="comp_tecnicas" placeholder="Insira as Competências Técnicas" value="<?php echo $linha['comp_tecnicas']; ?>" disabled>
            <br>
            <input class="btn btn-success" type="submit" value="Visualizar PDF" target="_blank">
        </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
