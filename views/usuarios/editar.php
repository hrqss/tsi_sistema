<?php 
$id = $_GET['id'];

include '../../helpers/conexao/conexao.php';

$sql = "select * from usuarios where id=$id";

$rs = $conexao->query($sql);

$obj = $rs->fetch_object();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../includes/head.php'; ?>
    </head>
    <body>
        <?php include '../includes/topo.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php include '../includes/menu.php'; ?>
                </div>
                <div class="col-md-9">
                    <h4>Cadastro de Usuários</h4>
                    <form action="../../controllers/usuarios/edit.php" method="post" class="col-md-9">
                        <input type="hidden" name="campoId" 
                               value="<?php echo $obj->id; ?>" />
                        <div class="form-group">
                            <label for="idNome">Nome:</label>
                            <input type="text" name="campoNome"
                                   class="form-control" id="idNome"
                                   required minlength="5"
                                   value="<?php echo $obj->nome; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="idNome">Email:</label>
                            <input type="text" name="campoEmail"
                                   class="form-control" id="idEmail"
                                   required minlength="15"
                                   value="<?php echo $obj->email; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="idNome">Senha:</label>
                            <input type="password" name="campoSenha"
                                   class="form-control" id="idSenha"
                                   required minlength="10"
                                   value="<?php echo $obj->senha; ?>" />
                        </div>
                        <button type="submit" class="btn btn-success">
                            Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var modulo = "usuarios";
        </script>
        <?php include '../includes/js.php'; ?>
    </body>
</html>
