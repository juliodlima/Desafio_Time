<?php if(!isset($_GET['editar'])){ ?>

    <h3>Inserir Competência</h3>
    <form method="post" action="processa_competencia.php">
        <label class="badge badge-secondary">Nome da Competência:</label><br>
        <input class="form-control col-md-10" type="text" name="nome" placeholder="Insira o Nome da Competência">
        <br><br>
        <label class="badge badge-secondary">Tipo da Competência:</label><br>
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="tipo" id="comportamental" value="Comportamental">
            <label class="custom-control-label" for="comportamental">Comportamental</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="tipo" id="tecnica" value="Tecnica">
            <label class="custom-control-label" for="tecnica">Técnica</label>
        </div>
        <br><br>
        <input class="btn btn-success" type="submit" value="Inserir Competência">
    </form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_competencias)){ ?>
        <?php if($linha['id_competencia'] == $_GET['editar']){ ?>
        <h1>Editar Competência</h1>
        <form method="post" action="edita_competencia.php">
            <input type="hidden" name="id_competencia" value="<?php echo $linha['id_competencia']; ?>">
            <label class="badge badge-secondary">Nome da Competência:</label><br>
            <input class="form-control col-md-10" type="text" name="nome" placeholder="Insira o Nome da Competência" value="<?php echo $linha['nome']; ?>">
            <br><br>
            <label class="badge badge-secondary">Tipo da Competência:</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="tipo" id="comportamental" <?php if($linha['tipo']=='Comportamental') echo'checked' ?> value="Comportamental">
                <label class="custom-control-label" for="comportamental">Comportamental</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="tipo" id="tecnica"<?php if($linha['tipo']=='Técnica') echo'checked' ?> value="Tecnica">
                <label class="custom-control-label" for="tecnica">Técnica</label>
            </div>
            <br><br>
            <input class="btn btn-success" type="submit" value="Editar Competência">
        </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
