document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar
    const videogameSelect = document.getElementById("videogames_id"); // Select de videojuegos
    const platformSelect = document.getElementById("platforms_id"); // Select de plataformas

    function validateForm() {
        if (videogameSelect.value !== "videogames_id" && platformSelect.value !== "platforms_id") {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Escuchar cambios en los selectores
    videogameSelect.addEventListener("change", validateForm);
    platformSelect.addEventListener("change", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (videogameSelect.value === "videogames_id" || platformSelect.value === "platforms_id") {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe seleccionar un videojuego y una plataforma.");
        }
    });
});
