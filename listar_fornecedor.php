<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/896d73cde9.js" crossorigin="anonymous"></script>
</head>
<body>

   <div class="container" style="margin-top: 40px;" >

   <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary" style="margin-top: 10px;">Voltar</a>

    </div>
      <h3>Lista de Fornecedores</h3>  
       <br>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Fornecedor</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        
            
                <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `fornecedor`";
                $busca = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($busca)){
                    $id = $array['id'];
                    $nome = $array['nome'];
                    $cnpj = $array['cnpj'];
                    $endereco = $array['endereco'];
                    $telefone = $array['telefone'];
                    $descricao = $array['descricao'];
                   
                ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $nome ?></td>
                <td><?php echo $cnpj ?></td>
                <td><?php echo $endereco ?></td>
                <td><?php echo $telefone ?></td>
                <td><?php echo $descricao ?></td>
                <td><a class="btn btn-warning" btn-sm style="color: #fff"href="editar_fornecedor.php?id=<?php echo $id ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
                <a class="btn btn-danger" btn-sm style="color: #fff" href="deletar_fornecedor.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
            </td>
             
                
             <?php } ?>
            </tr>
           
        
        </table>

        
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>