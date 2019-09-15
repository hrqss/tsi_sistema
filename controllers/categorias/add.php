<?php
include '../../helpers/conexao/conexao.php';

$nome = $_POST['campoNome'];

$sql = "insert into categorias (nome) values ('$nome')";

$rs = $conexao->query($sql);

$tipo = 1;

if ($rs) {
    header("location: ../../views/categorias/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/categorias/?status=2&tipo=$tipo");
}
exit();

