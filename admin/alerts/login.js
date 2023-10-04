document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch("./controladores/login.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "Error sesion"){
            console.log(data);
            Swal.fire({
                title: "¡Error al iniciar sesion!",
                icon: "error",
                confirmButtonText: "Aceptar"
            }).then(function() {
                // Redirigir al usuario a una página de error
                window.location.href = "index.php";
            });
        }else {
            Swal.fire({
                title: "¡Iniciando sesión!",
                icon: "success",
                confirmButtonText: "Ir ahora",
                timer: 4000

            }).then(function() {
                // Redirigir al usuario a una página de éxito
                window.location.href = "./Forms/welcome.php";
            });
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
});
