<?php
session_start();

include 'conexao.php';

$usuario = $_POST['usuario'] ?? '';
$senhausuario = $_POST['senha'] ?? '';

if ($usuario === '' || $senhausuario === '') {
    header('Location: erro.php');
    exit;
}

// Busca usuário no banco (SEM SQL Injection)
$stmt = mysqli_prepare($conexao, "SELECT mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = ?");
mysqli_stmt_bind_param($stmt, "s", $usuario);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Se não encontrou usuário
if (!$row) {
    header('Location: erro.php');
    exit;
}

$senhaBanco = $row['senha_usuario'];
$senhaDigitada = sha1($senhausuario);

// Se senha confere
if ($senhaDigitada === $senhaBanco) {
    $_SESSION['usuario'] = $row['mail_usuario']; 
    header('Location: menu.php');
    exit;
}

// Senha errada
header('Location: erro.php');
exit;
