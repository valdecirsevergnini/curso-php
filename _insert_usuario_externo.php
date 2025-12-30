<?php
include "conexao.php";
include "script/password.php";

$nomeusuario = $_POST['nome'];
$mail = $_POST['mail'];
$senha = $_POST['senha'];
//$nivelusuario = $_POST['nivelusuario'];
$status = 'Inativo';

if ($nomeusuario == '' || $mail == '' || $senha <= 0) {
    die("Preencha todos os campos corretamente.");
}

$sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, status) VALUES ('$nomeusuario', '$mail', sha1('$senha'), '$status')";

$inserir = mysqli_query($conexao, $sql);



?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


 <div class="container" style="width: 500px;margin-top: 20px;  text-align: center;"> 

    <h4>Usuário adicionado com sucesso, esperando aprovação!</h4>

    <div style="padding-top: 20px;">
        <center>
        <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Usuário</a>
        </center>
    </div>
 </div>