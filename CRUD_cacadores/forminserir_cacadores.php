<?php
include_once("../header.php");
include_once '../conexao.php';
?>

<div class="col-md-5">
    <form class="form-horizontal" action="inserir_cacadores.php" method="POST">
        <fieldset>
            <legend>Caçadores</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label">Cacadores:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="cacadores" required />
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
