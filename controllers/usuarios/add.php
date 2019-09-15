<?php
include '../../helpers/conexao/conexao.php';

$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$senha = $_POST['campoSenha'];


$sql = "insert into usuarios (nome, email,senha) values ('$nome','$email','$senha')";

$rs = $conexao->query($sql);

$tipo = 1;

if ($rs) {
    header("location: ../../views/usuarios/?status=1&tipo=$tipo");
} else {
    header("location: ../../views/usuarios/?status=2&tipo=$tipo");
}
exit();

