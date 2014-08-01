<?php
include_once '../header.php';
include_once '../conexao.php';

$cris = $con->prepare("select * from cacadores order by id");
$cris->execute();
$dados = $cris->fetchAll(PDO::FETCH_OBJ)
?>
<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Caçadores</th>
            <th> Editar </th>
            <th> Excluir</th>       
        </tr>
        
    </thead>
    <tbody>
        <?php foreach ($dados as $key => $row) : ?>
            <tr>
                <td> <?= $row->id; ?></td>
                <td> <?= $row->cacadores; ?></td>

                <?php if ($_SESSION['admin']): ?>
                    <td><a href="formeditar_cacadores.php?id=<?= $row->id; ?>&cacadores=<?= $row->cacadores; ?>" class="btn btn-info" > Editar</a></td>
                    <td><a href="deletar_cacadores.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td>
                <?php else: ?>
                    <th>Você não tem permissão</th>
                    <th>Você não tem permissão</th>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
<a href="forminserir_cacadores.php" class="btn btn-primary">Inserir</a>
<?php
include_once '../footer.php';
