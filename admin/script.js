document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch("controladores/registrar.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            Swal.fire({
                title: "¡Registro exitoso!",
                icon: "success",
                confirmButtonText: "Aceptar"
            }).then(function() {
                // Redirigir al usuario a una página de éxito
                window.location.href = "index.php";
            });
        } else {
            console.log(data);
            Swal.fire({
                title: "¡Error en el registro!",
                icon: "error",
                confirmButtonText: "Aceptar"
            }).then(function() {
                // Redirigir al usuario a una página de error
                window.location.href = "signup.php";
            });
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
});
