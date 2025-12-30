<?php
include 'conexao.php';

$id   = (int)($_POST['id'] ?? 0);
$nome = $_POST['nome'] ?? '';

$sql = "UPDATE categoria SET nome = '$nome' WHERE id = $id";
mysqli_query($conexao, $sql);

//  redirecionar pra lista
header('Location: listar_categoria.php');
exit;
