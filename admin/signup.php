<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="./styles/admin.css">
</head>

<body>
  <div class="container">
    <div class="registration form">
      <header>Signup</header>
      <form action="controladores/registrar.php" method="POST" id="registrationForm">
        <input type="text" placeholder="Ingrese su nombre de usuario" id="user_name" name="user_name">
        <input type="text" placeholder="Ingrese su email" id="email" name="email">
        <input type="password" placeholder="Ingrese una contraseña" id="password" name="password">
        <input type="text" placeholder="Ingrese su nombre" id="name" name="name">
        <input type="text" placeholder="Ingrese su apellido" id="lastname" name="lastname">
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">
          <a href="index.php">Already have an account?</a>
        </span>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="script.js"></script>
</body>

</html>