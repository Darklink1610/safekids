<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8">
      <title>Inicio de sesión</title>
      <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
      <div class="container">
          <img src="../img/user.png" class="avatar" alt="Avatar Image">
          <div class="h1"> Inicio de sesión  </div>
          <form action="..\controllers\login.php" method="POST">
              <label class="label" for="email">E-mail</label>
              <input class="input" type="text" name="email" placeholder="Ingrese su correo">
              <label class="label" for="Ap_paterno">Contraseña</label>
              <input class="input" type="text" name="pass" placeholder="Ingrese su contraseña">
              <button class="button-primary " name="Entrar" type="submit"> Entrar </button>
          </form>
          <a class="a" href="#">¿Olvidaste tu contraseña?</a><br>
          <a class="a" href="rejistroPadre.php">¿Aun no estas registrado?</a>
      </div>
  </body>
</html>