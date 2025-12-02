<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Login.css">
    <title>Login</title>
</head>
<body>

    <form action="lista-usuarios.php" method="POST">

          <div class="container">
            <label for="username">Login</label>
          </div>
          <div class="container">
            <input type="text" id="username" name="username" required>
                 <br><br> 
          </div>
      <div class="container">
         <label for="password">Password</label>
      </div>
      <div class="container">
           <input type="password" id="password" name="password" required>
      <br><br>
      </div>
<div class="container">
        <input type="submit" value="Login">
</div>
    </form>
    <br>
    <form action="cadastro_usuario.php">
      <div class="container">
        <input type="submit" value="Cadastro"><br><br>
      </div>
    </form>
</body>
</html>