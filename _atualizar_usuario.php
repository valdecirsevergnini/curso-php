<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acesso inválido.");
}

$id     = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$nome   = isset($_POST['nome']) ? mysqli_real_escape_string($conexao, trim($_POST['nome'])) : '';
$mail   = isset($_POST['mail']) ? mysqli_real_escape_string($conexao, trim($_POST['mail'])) : '';
$senha  = isset($_POST['senha']) ? trim($_POST['senha']) : '';
$nivel  = isset($_POST['nivel']) ? (int)$_POST['nivel'] : 0;
$status = isset($_POST['status']) ? mysqli_real_escape_string($conexao, trim($_POST['status'])) : '';

if ($id <= 0) die("ID inválido.");
if ($nome === '') die("Nome obrigatório.");
if ($mail === '') die("Email obrigatório.");
if ($nivel <= 0) die("Nível inválido.");
if ($status === '') die("Status inválido.");

// Se senha vier vazia, não altera
if ($senha === '') {

    $sql = "
        UPDATE usuarios
           SET nome_usuario  = '$nome',
               mail_usuario  = '$mail',
               nivel_usuario = $nivel,
               status        = '$status'
         WHERE id_usuario    = $id
        LIMIT 1
    ";

} else {

    // Se seu login usa MD5 (parece que sim), faça hash aqui também:
    $senha_hash = md5($senha);

    $sql = "
        UPDATE usuarios
           SET nome_usuario  = '$nome',
               mail_usuario  = '$mail',
               senha_usuario = '$senha_hash',
               nivel_usuario = $nivel,
               status        = '$status'
         WHERE id_usuario    = $id
        LIMIT 1
    ";
}

$atualizar = mysqli_query($conexao, $sql);

if (!$atualizar) {
    die("Erro ao atualizar: " . mysqli_error($conexao) . "<br><br>SQL:<br>$sql");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 20px; text-align: center;">
    <h4>Usuário atualizado com sucesso!</h4>

    <div style="padding-top: 20px;">
        <a href="listar_usuario.php" class="btn btn-sm btn-warning text-white">
            Voltar para a lista de Usuários
        </a>
    </div>
</div>
