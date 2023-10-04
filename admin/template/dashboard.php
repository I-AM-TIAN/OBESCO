<?php
require_once "../../Config/conexion.php";
?>

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
            <a href=""><img src="../../images/salir.png" alt="home" id="closeSesion" /></a>
        </abbr>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    const logoutButton = document.getElementById("closeSesion");

    // Agrega un evento de clic al botón
    logoutButton.addEventListener("click", function() {
        event.preventDefault();
        // Muestra una alerta SweetAlert2
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Quieres cerrar sesión?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, cerrar sesión',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            // Si el usuario confirma, realiza la acción de cerrar sesión
            if (result.isConfirmed) {
                // Aquí puedes realizar las acciones necesarias para cerrar la sesión, como redirigir al usuario a la página de inicio de sesión.
                Swal.fire(
                    'Sesión cerrada',
                    'Tu sesión ha sido cerrada correctamente.',
                    'success'
                );
                window.location.href = "../logout.php";

            }
        });
    });
</script>