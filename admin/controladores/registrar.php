<?php
require_once "../../Config/conexion.php";

if (isset($_POST)) {
  if (!empty($_POST)) {
    $user = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $apellido = $_POST['lastname'];
    $nombre = $_POST['name'];
    $query = mysqli_query($conexion, "INSERT INTO usuarios(user_name, email, password, Apellido, Nombre) VALUES ('$user', '$email', '$password', '$apellido', '$nombre')");
    if ($query) {
      echo "success";
    } else {
      echo "error";
    }
  }
}
?>