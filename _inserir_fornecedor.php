<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'] ?? '';
    $cnpj = $_POST['cnpj'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $descricao = $_POST['descricao'] ?? '';

    $sql = "INSERT INTO fornecedor (nome, cnpj, endereco, telefone, descricao)
            VALUES ('$nome', '$cnpj', '$endereco', '$telefone', '$descricao')";

    mysqli_query($conexao, $sql);
}
?>
 

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


 <div class="container" style="width: 500px;margin-top: 20px;  text-align: center;"> 

    <h4>Fornecedor adicionado com sucesso!</h4>

    <div style="padding-top: 20px;">
        <center>
        <a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Fornecedor</a>
        </center>
    </div>
</div>