<?php

include 'conexao.php';

   $id = $_GET['id'];

 
?>

<!DOCTYPE html> </html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Editar Fornecedor</title>
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

        <h4>Editar Fornecedor</h4>

        <form action="_atualizar_fornecedor.php" method="post" style="margin-top: 20px;">

        <?php


            $sql = "SELECT * FROM `fornecedor` WHERE id = $id";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)){

               
                $id_cat = $array['id'];
                $nome_cat = $array['nome'];
                $cnpj_cat = $array['cnpj'];
                $endereco_cat = $array['endereco'];
                $telefone_cat = $array['telefone'];
                $descricao_cat = $array['descricao'];


               
            
        ?>

            

           

           <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" value="<?php echo $id_cat; ?>" disabled>
                <input type="hidden" name="id" value="<?php echo $id_cat; ?>">
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <label>Nome do Fornecedor</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome_cat; ?>" required>
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <label>CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="<?php echo $cnpj_cat; ?>" required>
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <label>Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $endereco_cat; ?>" required>
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <label>Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?php echo $telefone_cat; ?>" required>
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <label>Descrição</label>
                <input type="text" class="form-control" name="descricao" value="<?php echo $descricao_cat; ?>" required>
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