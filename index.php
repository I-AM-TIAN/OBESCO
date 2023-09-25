<?php
session_start();
if (!empty($_SESSION['active'])) {
  header('location: welcome.php');
} else {
  if (!empty($_POST)) {
    $alert = '';
    if (empty($_POST['user_name']) || empty($_POST['password'])) {
      $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
      echo $alert;
    } else {
      require_once "Config/conexion.php";
      $user = mysqli_real_escape_string($conexion, $_POST['user_name']);
      $password = mysqli_real_escape_string($conexion, $_POST['password']);
      $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user_name = '$user' AND password = '$password'");
      mysqli_close($conexion);
      $resultado = mysqli_num_rows($query);
      if ($resultado > 0) {
        $dato = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['id_user'] = $dato['id_user'];
        $_SESSION['user_name'] = $dato['user_name'];
        $_SESSION['email'] = $dato['email'];
        $_SESSION['password'] = $dato['password'];
        $_SESSION['Apellido'] = $dato['Apellido'];
        $_SESSION['Nombre'] = $dato['Nombre'];
        header('location: ./Forms/welcome.php');
      } else {
        echo $alert;
        session_destroy();
      }
    }
  }
}
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OBESCO</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="./styles/index.css">
  <link rel="stylesheet" href="./styles/alerts.css">

</head>

<body>
  <div class="container">
    <div class="login form">
      <header>Iniciar sesion</header>
      <form action="" method="POST">
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
  
</body>

</html>