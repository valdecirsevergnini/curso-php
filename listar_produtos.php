<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/896d73cde9.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>

   <div class="container" style="margin-top: 40px;">

   <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary" style="margin-top: 10px;">Voltar</a>

    </div>
      <h3>Lista de Produtos em Estoque</h3>  
       <br>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">fornecedor</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        
            
                <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `estoque`";
                $busca = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($busca)){

                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nro_produto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                ?>
            <tr>
             <td><?php echo $nroproduto ?></td>
             <td><?php echo $nomeproduto ?></td>
             <td><?php echo $categoria ?></td>
             <td><?php echo $quantidade ?></td>
             <td><?php echo $fornecedor ?></td>
             <td><a class="btn btn-warning" btn-sm style="color: #fff"href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
            <a class="btn btn-danger" btn-sm style="color: #fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
            </td>
             
                
             <?php } ?>
            </tr>
           
        
        </table>

        
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>