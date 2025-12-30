<?php
include 'conexao.php';

$id   = (int)($_POST['id'] ?? 0);
$nome = $_POST['nome'] ?? '';
$cnpj = $_POST['cnpj'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$descricao = $_POST['descricao'] ?? '';

$sql = "UPDATE fornecedor SET nome = '$nome', cnpj = '$cnpj', endereco = '$endereco', telefone = '$telefone', descricao = '$descricao' WHERE id = $id";
mysqli_query($conexao, $sql);

//  redirecionar pra lista
header('Location: listar_fornecedor.php');
exit;
