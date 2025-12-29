<?php

include 'conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

 $sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque=$id";

 $atualizar = mysqli_query($conexao, $sql);
 

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <div class="container" style="width: 400px;margin-top: 20px;  text-align: center;">
        <h4>Produto atualizado com sucesso!</h4>

        <div style="padding-top: 20px;">
            <center>
            <a href="listar_produtos.php" role="button" class="btn btn-sm btn-warning" style="color: #fff">Voltar para a lista de produtos</a>
            </center>
        </div>