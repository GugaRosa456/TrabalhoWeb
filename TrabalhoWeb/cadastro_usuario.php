<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_crud.css">
    <title>Cadastra Usuario</title>
</head>
<body>
<header>
    <h1>Cadastro de Usuário</h1>
</header>
<div class="container">
    <form action="login.php" method="POST">
        <div class="container">
        <label for="nome">Nome:</label>
        </div>
        <div class="container">
        <input type="text" id="nome" name="nome" required><br><br>
          </div>
           <div class="container">
        <label for="login">Login:</label>
           </div>
            <div class="container">
        <input type="text" id="login" name="login" required><br><br>
        </div>
          <div class="container">
        <label for="senha">senha:</label>
         </div>
          <div class="container">
        <input type="password" id="senha" name="senha" required><br><br>
        </div>
            <div class="container">
        <input type="submit" value="Cadastrar">
           </div>
    </form>
    </div>
</body>
</html>