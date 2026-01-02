<?php

include 'conexao.php';

   $id = $_GET['id'];


?>

<!DOCTYPE html> 
<html lang="pt-br">

<head>
    
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style type="text/css">
       #tamanhocontainer {
            width: 500px;
        } 

       #botao {
            background-color: #FF1168;
            color: #ffffff;
            font-weight: bold;
        } 
    </style>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>


    <div class="container" id="tamanhocontainer" style="margin-top: 40px;">

        <h4>Editar Usuário</h4>

        <form action="_atualizar_usuario.php" method="post" style="margin-top: 20px;">

        <?php


            $sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)){

                $nome   = $array['nome_usuario'];
                $mail   = $array['mail_usuario'];
                $senha  = $array['senha_usuario'];
                $nivel  = $array['nivel_usuario'];
                $status = $array['status'];

            
        ?>

            <div class="form-group">
                <label>ID</label>
                <input type="number" class="form-control" value="<?= $id ?>" disabled>
                <input type="hidden" name="id" value="<?= $id ?>">

            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
            </div>

            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="mail" value="<?php echo $mail ?>">
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="number" class="form-control" name="senha" value="<?php echo $senha ?>" autocomplete="off">
            </div>

            <div class="form-group">
                <label >Nível</label>
                <select class="form-control" name="nivel" required>
                    <option value="1" <?= ($nivel == 1 ? 'selected' : '') ?>>Administrador</option>
                    <option value="2" <?= ($nivel == 2 ? 'selected' : '') ?>>Funcionário</option>
                    <option value="3" <?= ($nivel == 3 ? 'selected' : '') ?>>Conferente</option>
                </select>

            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" required>
                    <option value="Ativo" <?= ($status == 'Ativo' ? 'selected' : '') ?>>Ativo</option>
                    <option value="Inativo" <?= ($status == 'Inativo' ? 'selected' : '') ?>>Inativo</option>
                </select>
            </div>
            
            <div style="text-align: right;">
              <button type="submit" id="botao" class="btn btn-sm" style="margin-top: 10px;">Atualizar</button>
            </div> 
           <?php } ?>
        </form>
    </div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>