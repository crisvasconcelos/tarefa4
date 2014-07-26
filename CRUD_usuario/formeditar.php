<?php
include_once("../header.php");
include_once '../conexao.php';

?>
<div class="col-md-5">
    <form class="form-horizontal" action="editar.php" method="POST">
        <fieldset>
            <legend>Usuário</legend>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
            <div class="form-group">
                <label class="col-sm-2 control-label">Login:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="login" value="<?= $_GET['login']; ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Senha:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="senha" value="<?= $_GET['senha']; ?>" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>
    </form>
