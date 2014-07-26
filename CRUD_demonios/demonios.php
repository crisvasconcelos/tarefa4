<?php include_once '../header.php';
include_once '../conexao.php'; 

$cris = $con->prepare("SELECT * FROM demonio");
$cris->execute();
$dados = $cris->fetchAll(PDO::FETCH_OBJ)
?>
<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Demônios </th>
            <th> Caçadores</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dados as $key => $row) :   ?>
        <tr>
            <td> <?= $row->id; ?></td>
            <td> <?= $row->demonios; ?></td>
            <td> <?= $row->cacadores; ?></td>
            <td><a href="formeditar_demonio.php?id=<?= $row->id; ?>&demonios=<?= $row->demonios; ?>&cacadores=<?= $row->cacadores; ?>" class="btn btn-info" > Editar</a></td>
            <td><a href="deletar_demonio.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td>

        </tr>
<?php endforeach; ?>

    </tbody>
</table>
<a href="forminserir_demonio.php" class="btn btn-primary">Inserir</a>
<?php include_once '../footer.php';
