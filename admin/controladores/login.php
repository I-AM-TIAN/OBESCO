<?php
session_start();
if (!empty($_SESSION['active'])) {
  header('location: welcome.php');
  session_destroy();
} else {
  if (!empty($_POST)) {
    if (empty($_POST['user_name']) || empty($_POST['password'])) {
      echo 'Error sesion';
    } else {
      require_once "../../Config/conexion.php";
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
        header('location: ../Forms/welcome.php');
      } else {
        session_destroy();
      }
    }
  }
}
?>
