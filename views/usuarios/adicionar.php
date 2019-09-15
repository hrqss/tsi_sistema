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
                    <form action="../../controllers/usuarios/add.php" method="post" class="col-md-9">
                        <div class="form-group">
                            <label for="idNome">Nome:</label>
                            <input type="text" name="campoNome"
                                   class="form-control" id="idNome"
                                   required minlength="5"/>
                        </div>
                        <div class="form-group">
                            <label for="idEmail">Email:</label>
                            <input type="text" name="campoEmail"
                                   class="form-control" id="idEmail"
                                   required minlength="15"/>
                        </div>
                        <div class="form-group">
                            <label for="idSenha">Senha:</label>
                            <input type="password" name="campoSenha"
                                   class="form-control" id="idSenha"
                                   required minlength="10"/>
                        </div>
                        <div class="form-group">
                            <label for="idSenhaConf">Confirmação de Senha:</label>
                            <input type="password" name="campoSenhaConf" 
                                   class="form-control" id="idSenhaConf"
                                   required minlength="10"/>
                        </div>
                         <?php
                        if ($_POST) {
                            $senha = $_POST['campoSenha'];
                            $senhaConf = $_POST['campoSenhaConf'];
                            if ($senha == "") {
                                $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
                            } else if ($senha == $senhaConf) {
                                $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: " . $senha . "</span>";
                            } else {
                                $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
                            }
                            echo "<p id='mensagem'>" . $mensagem . "</p>";
                        }
                        ?>
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
