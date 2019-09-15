<?php
include '../../helpers/conexao/conexao.php';

$id = $_GET['id'];



$sql = "delete from noticias where id=$id";

$rs = $conexao->query($sql);

$tipo = 0;

if ($rs) {
    header("location: ../../views/noticias/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/noticias/?status=2&tipo=$tipo");
}
exit();

