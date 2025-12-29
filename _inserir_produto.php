<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

//echo "Nro Produto: " . $nroproduto . "<br>"; so usa para conferir se ta pegando os dados
//echo "Nome Produto: " . $nomeproduto . "<br>";
//echo "Categoria: " . $categoria . "<br>";
//echo "Quantidade: " . $quantidade . "<br>";
//echo "Fornecedor: " . $fornecedor . "<br>";

$sql = "INSERT INTO `estoque`(`nro_produto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`)
 VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);



?>  

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


 <div class="container" style="width: 500px;margin-top: 20px;  text-align: center;"> 

    <h4>Produto adicionado com sucesso!</h4>

    <div style="padding-top: 20px;">
        <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
        </center>
    </div>
</div>