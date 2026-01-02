<!DOCTYPE html>

<html lang="pt-br">
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

<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>


    <div class="container" id="tamanhocontainer" style="margin-top: 40px;">

    <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary" style="margin-top: 10px;">Voltar</a>

    </div>

        <h4>Cadastro de Fornecedores</h4>

        <form action="_inserir_fornecedor.php" method="post" style="margin-top: 20px;">

            <div class="form-group">
                <label>Nome do Fornecedor</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do fornecedor" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Cnpj</label>
                <input type="number" class="form-control" name="cnpj" placeholder="Insira o cnpj do fornecedor" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Insira o endereço do fornecedor" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="number" class="form-control" name="telefone" placeholder="Insira o telefone do fornecedor" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="descricao" placeholder="Insira a descrição do fornecedor (opcional)" autocomplete="off">
            </div>

            <div style="text-align: right;">
              <button type="submit" id="botao" class="btn btn-sm btn-primary" style="margin-top: 10px;">Cadastrar</button>
            </div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
<html>