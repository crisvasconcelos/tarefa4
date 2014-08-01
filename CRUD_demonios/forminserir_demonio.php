<?php
include_once("../header.php");
include_once '../conexao.php';
include_once("../permissão.php");
$cris = $con->prepare("SELECT * from cacadores;");
$cris->execute();
$dados = $cris->fetchAll(PDO::FETCH_OBJ)
?>

<div class="col-md-5">
    <form class="form-horizontal" action="inserir_demonio.php" method="POST">
        <fieldset>
            <legend>Cacadores e Demonio</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label">Demônio:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="demonio" required />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Caçadores:</label>
                <div class="col-sm-10">                       
                    <select name="cacadores">
                        <?php foreach ($dados as $key => $row) : ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->cacadores; ?></option>
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
</div>
