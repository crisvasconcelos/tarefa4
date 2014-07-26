<?php
include_once '../header.php';
include_once '../conexao.php';
$cris = $con->prepare("SELECT * FROM usuario");
$cris->execute();
$dados = $cris->fetchAll(PDO::FETCH_OBJ)
?>

<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Login </th>
            <th> Senha</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($dados as $key => $row) :   ?>
        <tr>
            <td> <?= $row->id; ?></td>
            <td> <?= $row->login; ?></td>
            <td> <?= $row->senha; ?></td>
            <td><a href="formeditar.php?id=<?= $row->id; ?>&login=<?= $row->login; ?>&senha=<?= $row->senha; ?>" class="btn btn-info" > Editar</a></td>
            <td><a href="deletar.php?id=<?= $row->id; ?>" class="btn btn-danger" > Excluir</a></td>

        </tr>
<?php endforeach; ?>
    </tbody>
</table> 

<a href="forminserir.php" class="btn btn-primary">Inserir</a>
<?php include_once '../footer.php'; ?>
