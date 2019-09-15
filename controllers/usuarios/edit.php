<?php
include '../../helpers/conexao/conexao.php';

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$senha = $_POST['campoSenha'];

$sql = "update usuarios set nome='$nome' where id=$id";

$rs = $conexao->query($sql);

$tipo = 2;

if ($rs) {
    header("location: ../../views/usuarios/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/usuarios/?status=2&tipo=$tipo");
}
exit();

