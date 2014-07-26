<?php
include_once("../header.php");
include_once '../conexao.php';
?>

<div class="col-md-5">
    <form class="form-horizontal" action="inserir.php" method="POST">
        <fieldset>
            <legend>Usuário</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nome:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="login" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Senha:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="senha" />
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
