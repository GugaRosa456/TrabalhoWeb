<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style_Login.css">
    <title>Editar Usuario</title>
        <?php
require_once "conexao.php";
echo $id;  
$usuarios = get_usuario($id);

//echo var_dump ($usuarios);
?>
<div class="container">
<h1>Edição Usuario</h1>
<br>
<table border="1">
   <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Login</th>
    <th>Senha</th>
   </tr> 
   <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?php echo htmlspecialchars($usuario['id']);?></td>
        <td><?php echo htmlspecialchars($usuario['nome']);?></td>
        <td><?php echo htmlspecialchars($usuario['login']);?></td>
        <td><?php echo htmlspecialchars($usuario['senha']);?></td>
         </tr>
<?php endforeach; ?>
</table>
</div>
</head>

<body>
    <br>
    <div class="container">
        <input type="submit" value="Editar"><br><br>
      </div>
<br>
      <div class="container">
        <input type="submit" value="Deletar"><br><br>
      </div>
      <form action="lista-usuarios.php" method="POST">
      <div class="container">
        <input type="submit" value="voltar"><br><br>
        </form>
      </div>
</body>
</html>