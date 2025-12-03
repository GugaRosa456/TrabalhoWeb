<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Cadastrar.css">
    <title>Cadastra Usuario</title>
</head>
<body>
<header>
</header>
    <form action="processa_cadastro.php" method="POST" class="box">
    <div class="container">
    <h1>Cadastro de Usuário</h1>
</div>
<br>
        <div class="container">
        <label for="nome" class="texto">Nome:</label>
        </div>
        <div class="container">
        <input type="text" id="nome" name="nome" required><br><br>
          </div>
           <div class="container">
        <label for="login" class="texto">Login:</label>
           </div>
            <div class="container">
        <input type="text" id="login" name="login" required><br><br>
        </div>
          <div class="container">
        <label for="senha" class="texto">senha:</label>
         </div>
          <div class="container">
        <input type="password" id="senha" name="senha" required><br><br>
        </div>
            <div class="container">
        <input type="submit" value="Cadastrar" class="botao1">
    </form>
    </div>
</body>
</html>