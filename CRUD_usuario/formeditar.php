<?php
include_once("../header.php");
include_once '../conexao.php';
?>
<div class="col-md-5">
    <?php if ($_SESSION['admin']): ?>
        <form class="form-horizontal" action="editar.php" method="POST">
            <fieldset>

                <legend>Usuário</legend>
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />

                <div class="form-group">
                    <label class="col-sm-2 control-label">Login:</label>
                    <div class="col-sm-10">                       
                        <input type="text" name="login" required="" value="<?= $_GET['login']; ?>" />
                    </div>
                </div>
                
                <div class = "form-group">
                <label class = "col-sm-2 control-label">Senha:</label>
                <div class = "col-sm-10">
                <input type = "password" name = "senha" required = "" value = "<?= $_GET['login']; ?>" />
                </div>
                </div>

                <div class = "form-group">
                <div class = "col-sm-offset-2 col-sm-10">
                <button type = "submit" class = "btn btn-success">Enviar</button>
                </div>
                </div>
                </fieldset>
                <?php else:
                ?>
                <th>Você não tem permissão haha -'-</th>

<?php endif; ?>
    </form>
