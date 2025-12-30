<?php

include 'conexao.php';

$id=$_GET['id'];

$delete = "DELETE FROM `usuarios` WHERE id_usuario = $id";
$deletar = mysqli_query($conexao, $delete);

header('Location: aprovar_usuario.php');//redireciona para a página de aprovação de usuários

?>