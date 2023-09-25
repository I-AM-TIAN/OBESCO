<?php
session_start();
require_once "../Config/conexion.php";
$usuario = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/caracterizacion.css">
</head>

<body>
    <nav>
        <h1 id="head"><a class="logo" href="../logout.php">OBESCO</a></h1>
        <h1 class="username"><?php echo $_SESSION['user_name'] ?></h1>
    </nav>
    <H1>HA TERMINADO EL FORMULARIO</H1>
</body>

</html>