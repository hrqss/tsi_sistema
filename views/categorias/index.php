<?php
include '../../helpers/conexao/conexao.php';

$sql = "select * from categorias";

$rs = $conexao->query($sql);

if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        $acao = array('excluido', 'adicionado', 'editado');
        $tipo = $_GET['tipo'];
        $msg = "Registro $acao[$tipo] com sucesso!";
        $classe = "alert-success";
    } else {
        $classe = "alert-danger";
        $msg = "Ocorreu um erro, tente novamente!";
    }
}
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
                    <?php if (isset($_GET['status'])) { ?>
                        <div class="alert <?php echo $classe; ?>">
                            <?php echo $msg; ?>
                        </div>
                    <?php } ?>
                    <h4 class="float-left">Cadastro de Categorias</h4>
                    <a href="adicionar.php" class="btn btn-success float-right">
                        <i class="fas fa-plus"></i> Adicionar
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" width="10%">ID</th>
                                <th scope="col" >Categorias</th>
                                <th scope="col" width="15%">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($obj = $rs->fetch_object()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $obj->id; ?></th>
                                    <td><?php echo $obj->nome; ?></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $obj->id; ?>" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" onclick="excluir(<?php echo $obj->id; ?>)" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <script>
            var modulo = "categorias";
        </script>
        <?php include '../includes/js.php'; ?>
        <script>
            function excluir(id){
                if(confirm("Tem certexa que quer excluir?")){
                    window.location.href = "../../controllers/categorias/del.php?id="+id;
                    
                }
                return false;
            }
        
        </script>
    </body>
</html>
