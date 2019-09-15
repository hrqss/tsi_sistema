<?php
include '../../helpers/conexao/conexao.php';

$id = $_GET['id'];



$sql = "delete from usuarios where id=$id";

$rs = $conexao->query($sql);

$tipo = 0;

if ($rs) {
    header("location: ../../views/usuarios/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/usuarios/?status=2&tipo=$tipo");
}
exit();

