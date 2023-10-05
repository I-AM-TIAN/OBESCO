<?php
require_once "../../Config/conexion.php";
session_start();
?>


<head><link rel="stylesheet" href="../styles/generaladmin.css"></head>
<div class="container-dashboard">
    <img id="logod" src="../../images/Logod.png" alt="">
    <ul class="opciones-dash">
        <li><a href="../Forms/welcome.php">Inicio</a>
            <img src="../../images/casa.png" alt="home" />
        </li>
        <hr>
        <li><a href="caracterizacion.php">Caracterizacion</a></li>
        <hr>
        <li><a href="asociatividad.php">Asociatividad</a></li>
        <hr>
    </ul>
    <div class="usuario">
        <h1 class="username"> <?php echo $_SESSION['user_name'] ?></h1>
        <abbr title="Cerrar sesion">
            <a href="../logout.php"><img src="../../images/salir.png" alt="home" /></a>
        </abbr>
    </div>
</div>