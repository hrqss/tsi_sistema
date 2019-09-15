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
                    <h4>Cadastro de categorias</h4>
                    <form action="../../controllers/categorias/add.php" method="post" class="col-md-9">
                        <div class="form-group">
                            <label for="idNome">Nome:</label>
                            <input type="text" name="campoNome"
                                   class="form-control" id="idNome"
                                   required minlength="5"/>
                        </div>
                        <button type="submit" class="btn btn-success">
                            Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var modulo = "categorias";
        </script>
        <?php include '../includes/js.php'; ?>
    </body>
</html>
