<a class="btn btn-success" href="?pagina=inserir_pessoa">Inserir Pessoa</a>
<table class="table table-hover table-striped" id="pessoas">
    <thead>
        <tr>
            <th>Nome da Pessoa</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_pessoas)) {
                echo '<tr><td>'.$linha['nome_pessoa'].'</td>';
                echo '<td>'.date('d/m/Y',strtotime($linha['data_nascimento'])).'</td>';
                echo '<td>'.$linha['idade'].'</td>';
                echo '<td>'.$linha['endereco'].'</td>';
                echo '<td>'.$linha['telefone'].'</td>';
                echo '<td>'.$linha['celular'].'</td>';
        ?>
            <td><a href="?pagina=inserir_pessoa&editar=<?php echo $linha['id_pessoa']; ?>">
                <span style="color: #44b874;">
                    <i class="fas fa-user-edit"></i>
                </span>
            </a></td>
            <td><a href="deleta_pessoa.php?id_pessoa=<?php echo $linha['id_pessoa']; ?>">
                <span style="color: #44b874;">
                    <i class="fas fa-user-times"></i>
                </span>
            </a></td>
            <td><a href="?pagina=inserir_pessoa&visualizar=<?php echo $linha['id_pessoa']; ?>">
                <span style="color: #44b874;">
                    <i class="fas fa-user-check"></i>
                </span>
            </a></td></tr>
        <?php    
            }
        ?>
    </tbody>
</table>