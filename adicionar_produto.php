<?php
include 'conexao.php';

$sql_cat  = "SELECT id, nome FROM categoria ORDER BY nome";
$result_cat = mysqli_query($conexao, $sql_cat);

$sql_forn = "SELECT id, nome FROM fornecedor ORDER BY nome";
$result_forn = mysqli_query($conexao, $sql_forn);
?>




<!DOCTYPE html> </html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
     crossorigin="anonymous">
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

    <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary" style="margin-top: 10px;">Voltar</a>

    </div>

        <h4>Formulário de Cadastro</h4>

        <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">

            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria_id" required>
        <option value="">Selecione uma Categoria</option>

        <?php while($row = mysqli_fetch_assoc($result_cat)) { ?>
            <option value="<?php echo $row['id']; ?>">
                <?php echo $row['nome']; ?>
            </option>
        <?php } ?>

    </select>
</div>



            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor_id" required>
        <option value="">Selecione um fornecedor</option>

        <?php while($row = mysqli_fetch_assoc($result_forn)) { ?>
            <option value="<?php echo $row['id']; ?>">
                <?php echo $row['nome']; ?>
            </option>
        <?php } ?>

    </select>
</div>


            
            <div style="text-align: right;">
              <button type="submit" id="botao" class="btn btn-sm btn-primary" style="margin-top: 10px;">Cadastrar</button>
            </div> 

        </form>
    </div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>