<a class="btn btn-success" href="?pagina=inserir_competencia">Inserir Competência</a>
<table class="table table-hover table-striped" id="competencias">
    <thead>
        <tr>
            <th>Competência</th>
            <th>Tipo</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_competencias)) {
                echo '<tr><td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['tipo'].'</td>';

        ?>
            <td><a href="?pagina=inserir_competencia&editar=<?php echo $linha['id_competencia']; ?>">
                <span style="color: #44b874;">
                    <i class="fas fa-edit"></i>
                </span>
            </a></td>
            <td><a href="deleta_competencia.php?id_competencia=<?php echo $linha['id_competencia']; ?>">
                <span style="color: #44b874;">
                    <i class="fas fa-times"></i>
                </span>
            </a></td>
            <td><a href="?pagina=inserir_competencia&visualizar=<?php echo $linha['id_competencia']; ?>">
                <span style="color: #44b874;">
                    <i class="fas fa-check"></i>
                </span>
            </a></td></tr>
        <?php    
            }
        ?>
    </tbody>
</table>