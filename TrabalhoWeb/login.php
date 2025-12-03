<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Login.css">
    <title>Login</title>
</head>
<body>

    <form action="autenticacao.php" method="POST" class="box">

          <div class="container">
            <label for="username" class="texto">Login</label>
          </div>
          <div class="container">
            <input type="text" id="username" name="username"  class="tx" required>
                 <br><br> 
          </div>
      <div class="container">
         <label for="password" class="texto">Password</label>
      </div>
      <div class="container">
           <input type="password" id="password" name="password" class="tx" required>
      <br><br>
      </div>
<div class="container">
        <input type="submit" value="Login" class="botao1">
</div>
<br>
    </form>
    <form action="cadastro_usuario.php" class="box">
      <div class="container">
        <input type="submit" value="Cadastro" class="botao2"><br><br>
      </div>
</form>
</body>
</html>