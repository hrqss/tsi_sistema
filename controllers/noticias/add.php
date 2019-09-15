<?php
include '../../helpers/conexao/conexao.php';

$nome = $_POST['campoNome'];

$sql = "insert into noticias (nome) values ('$nome')";

$rs = $conexao->query($sql);

$tipo = 1;

if ($rs) {
    header("location: ../../views/noticias/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/noticias/?status=2&tipo=$tipo");
}
exit();

