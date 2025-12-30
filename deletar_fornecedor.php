<?php

include 'conexao.php';

$id = $_GET['id']; 

$sql = "DELETE FROM `fornecedor` WHERE id =$id";

$deletar = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <div class="container" style="width: 400px;margin-top: 20px;  text-align: center;">
        <h4>Fornecedor deletado com sucesso!</h4>

        <div style="padding-top: 20px;">
            <center>
            <a href="listar_fornecedor.php" role="button" class="btn btn-sm btn-warning" style="color: #fff">Voltar para a lista de fornecedores</a>
            </center>
        </div>