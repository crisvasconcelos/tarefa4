<?php
include_once '../header.php';
include_once '../conexao.php';

session_start();
$cris = $con->prepare("SELECT * from vista;");
$cris->execute();
$dados = $cris->fetchAll(PDO::FETCH_OBJ);
?>

<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Demônios </th>
            <th> Caçadores</th> 
            <th> Editar </th>
            <th> Excluir</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($dados as $key => $row) : ?>
            <tr>
                <td> <?= $row->id; ?></td>
                <td> <?= $row->demonios; ?></td>
                <td> <?= $row->nome; ?></td>
                
                <?php if ($_SESSION['admin']): ?>
                    <td><a href="formeditar_demonio.php?id=<?= $row->id; ?>&demonios=<?= $row->demonios; ?>&cacadores=<?= $row->nome; ?>" class="btn btn-info" > Editar</a></td>
                    <td><a href="deletar_demonio.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td>

                <?php else: ?>
                    <th>Você não tem permissão</th>
                    <th>Você não tem permissão</th>
                <?php endif; ?>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
<a href="forminserir_demonio.php" class="btn btn-primary">Inserir</a>
<?php
include_once '../footer.php';
