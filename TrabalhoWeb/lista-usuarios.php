<?php session_start();
    if (!isset($_SESSION["usr"])){
        echo var_dump($_SESSION["usr"]);
        header("Location: login.php?error=deslogado");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style_Login.css">
    <title>Document</title>
    <?php
require_once "conexao.php";
$usuarios = get_usuarios();

//echo var_dump ($usuarios);
?>
<div class="container">
<h1>Lista de Usuários</h1>
<br>
<table border="1">
   <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Login</th>
    <th>Editar</th>
   </tr> 
   <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?php echo htmlspecialchars($usuario['id']);?></td>
        <td><?php echo htmlspecialchars($usuario['nome']);?></td>
        <td><?php echo htmlspecialchars($usuario['login']);?></td>
        <td><a href="EditarUsuario.php?id=<?php echo urldecode($usuario['id']);?>">Editar</a></td>
    </tr>
<?php endforeach; ?>
</table>
</div>
</head>
<body>
<form action="login.php" method="POST">
      <div class="container">
        <input type="submit" value="voltar"><br><br>
        </form>
      </div>
</body>
</html>