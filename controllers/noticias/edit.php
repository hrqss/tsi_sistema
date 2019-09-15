<?php
include '../../helpers/conexao/conexao.php';

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];

$sql = "update noticias set nome='$nome' where id=$id";

$rs = $conexao->query($sql);

$tipo = 2;

if ($rs) {
    header("location: ../../views/noticias/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/noticias/?status=2&tipo=$tipo");
}
exit();

