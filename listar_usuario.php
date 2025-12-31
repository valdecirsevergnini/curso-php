<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/896d73cde9.js" crossorigin="anonymous"></script>
</head>
<body>

   <div class="container" style="margin-top: 40px;">

   <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary" style="margin-top: 10px;">Voltar</a>

    </div>
      <h3>Lista de Usuários</h3>  
       <br>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">ID </th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Nível</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        
            
                <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `usuarios`";
                $busca = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($busca)){

                    $id_usuario = $array['id_usuario'];
                    $nome = $array['nome_usuario'];
                    $email = $array['mail_usuario'];
                    $senha = $array['senha_usuario'];
                    $nivel = $array['nivel_usuario'];
                    $status = $array['status'];
                   
                ?>
            <tr>
                <td><?= $id_usuario ?></td>
                <td><?= $nome ?></td>
                <td><?= $email ?></td>
                <td><?= $senha ?></td>
                <td><?= $nivel ?></td>
                <td><?= $status ?></td>
             <td><a class="btn btn-warning" btn-sm style="color: #fff"href="editar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
            
            </td>
             
                
             <?php } ?>
            </tr>
           
        
        </table>

        
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>