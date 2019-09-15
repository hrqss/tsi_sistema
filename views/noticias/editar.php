<?php 
$id = $_GET['id'];

include '../../helpers/conexao/conexao.php';

$sql = "select * from noticias where id=$id";

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
                    <h4>Cadastro de noticias</h4>
                    <form action="../../controllers/noticias/edit.php" method="post" class="col-md-9">
                        <input type="hidden" name="campoId" 
                               value="<?php echo $obj->id; ?>" />
                        <div class="form-group">
                            <label for="idNome">Titulo:</label>
                            <input type="text" name="campoNome"
                                   class="form-control" id="idNome"
                                   required minlength="5"
                                   value="<?php echo $obj->nome; ?>" />
                        </div>
                        <button type="submit" class="btn btn-success">
                            Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var modulo = "noticias";
        </script>
        <?php include '../includes/js.php'; ?>
    </body>
</html>
