<?php

include_once("../header.php");
include_once '../conexao.php';

$cris = $con->prepare("SELECT * from cacadores;");
$cris->execute();
$dados = $cris->fetchAll(PDO::FETCH_OBJ)

?>
<div class="col-md-5">
    <form class="form-horizontal" action="editar_demonio.php" method="POST">
        <fieldset>
            <legend>Demônios e Cacadores</legend>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
            <div class="form-group">
                <label class="col-sm-2 control-label">Demonio:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="demonio" value="<?= $_GET['demonios']; ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Caçadores:</label>
                <div class="col-sm-10">                       
                    <select name="cacadores">
                        <?php foreach ($dados as $key => $row) :   ?>
                            <option <?php if ($row->cacadores== $_GET['cacadores']) {echo 'selected';}?> value="<?php echo $row->id; ?>"><?php echo $row->cacadores; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
         
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>
    </form>
