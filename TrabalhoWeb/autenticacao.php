<?php
require_once 'conexao.php';
session_start();
if(!isset($_POST['login']) || !isset($_POST['senha'])){
    header("Location: login.php?error=faltando_dados");
    exit();
}
$username = $_POST['login'];
$password = $_POST['senha'];

$user = get_usuario($username);

if ($user && $user['login'] === $username && $user['senha'] === $password) {
    header("Location: lista-usuarios.php");
}
else{
    header("Location: login.php?error=credenciais_invalidas");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>