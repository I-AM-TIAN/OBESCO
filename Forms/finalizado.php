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
    <iframe title="Reportes OBESCO" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=4db104c8-595f-4a9e-84c0-cfcc62169c0b&autoAuth=true&ctid=8d36836e-6b75-4de6-bab9-5f4b1775427f" frameborder="0" allowFullScreen="true"></iframe>
</body>

</html>