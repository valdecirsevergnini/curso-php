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

<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>

   <div class="container" style="margin-top: 40px;" >

   <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary" style="margin-top: 10px;">Voltar</a>

    </div>
      <h3>Lista de  Usuários</h3>  
       <br>
      <table class="table">
        <thead>
            <tr>
            
            <th scope="col">Nome Usuário</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nível</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        
            
                <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `usuarios` where status = 'inativo'";
                $busca = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($busca)){
                    $id_usuario = $array['id_usuario'];
                    $nome_usuario = $array['nome_usuario'];
                    $mail_usuario = $array['mail_usuario'];
                    $nivel_usuario = $array['nivel_usuario'];
                   
                ?>
            <tr>
    
             <td><?php echo $nome_usuario ?></td>
             <td><?php echo $mail_usuario ?></td>
             <td><?php echo $nivel_usuario ?></td>

            <td>
                <a 
                    class="btn btn-success btn-sm text-center"
                    style="color:#fff; width:120px; white-space: nowrap;"
                    href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1"
                >
                    <i class="fa-solid fa-check"></i> Administrador
                </a>
                 <a 
                    class="btn btn-warning btn-sm text-center"
                    style="color:#fff; width:120px;"
                    href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=2"
                >
                    <i class="fa-solid fa-check"></i> Funcionário
                </a>
                 <a 
                    class="btn btn-dark btn-sm text-center"
                    style="color:#fff; width:120px;"
                    href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=3"
                >
                    <i class="fa-solid fa-check"></i> Conferente
                </a>

                <a 
                    class="btn btn-danger btn-sm text-center"
                    style="color:#fff; width:120px;"
                    href="_deletar_usuario.php?id=<?php echo $id_usuario; ?>"
                    onclick="return confirm('Tem certeza que deseja excluir este usuário?');"
                >
                    <i class="fa-solid fa-trash"></i> Excluir
                </a>
                </td>

             

              
             <?php } ?>
            </tr>
           
        
        </table>

        
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>