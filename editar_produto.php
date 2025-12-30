<?php

include 'conexao.php';

   $id = $_GET['id'];

   /* ===============================
   BUSCAR CATEGORIAS
=============================== */
$sql_cat = "SELECT id, nome FROM categoria ORDER BY nome";
$result_cat = mysqli_query($conexao, $sql_cat);

/* ===============================
   BUSCAR FORNECEDORES
=============================== */
$sql_for = "SELECT id, nome FROM fornecedor ORDER BY nome";
$result_for = mysqli_query($conexao, $sql_for);

?>

<!DOCTYPE html> </html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Editar Cadastro</title>
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


    <div class="container" id="tamanhocontainer" style="margin-top: 40px;">

        <h4>Editar Cadastro</h4>

        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">

        <?php


            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)){

                $nroproduto = $array['nro_produto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            
        ?>

            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
            </div>

            <div class="form-group">
                <label >Categoria</label>
                <select class="form-control" name="categoria">
                    <option value="">Selecione uma categoria</option>

                    <?php
                    while ($cat = mysqli_fetch_assoc($result_cat)) {

                        // verifica se a categoria do banco é a mesma do produto
                        $selected = ($cat['id'] == $categoria) ? 'selected' : '';

                        echo "<option value='{$cat['id']}' $selected>
                                {$cat['nome']}
                            </option>";
                    }
                    ?>
                </select>

            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
            </div>

            <div class="form-group">
                <label >Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option value="">Selecione um fornecedor</option>

                    <?php
                    while ($for = mysqli_fetch_assoc($result_for)) {

                        // verifica se o fornecedor do banco é o mesmo do produto
                        $selected = ($for['id'] == $fornecedor) ? 'selected' : '';

                        echo "<option value='{$for['id']}' $selected>
                                {$for['nome']}
                            </option>";
                    }
                    ?>
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