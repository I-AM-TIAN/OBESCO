<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OBESCO</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="./styles/admin.css">

</head>

<body>
  <div class="container">
    <div class="login form">
      <header>Iniciar sesion</header>
      <form action="controladores/login.php" method="POST" id="loginForm">
        <input type="text" placeholder="Ingrese su usuario" id="user_name" name="user_name">
        <input type="password" placeholder="Ingrese su contraseña" id="password" name="password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup"><a href="signup.php">Don't have an account?</a></span>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="alerts/login.js"></script>
</body>

</html>