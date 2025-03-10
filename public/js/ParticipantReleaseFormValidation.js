document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar
    const userSelect = document.getElementById("users_id"); // Select de usuarios
    const releaseSelect = document.getElementById("releases_id"); // Select de lanzamientos

    function validateForm() {
        if (userSelect.value !== "users_id" && releaseSelect.value !== "releases_id") {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Escuchar cambios en los selectores
    userSelect.addEventListener("change", validateForm);
    releaseSelect.addEventListener("change", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (userSelect.value === "users_id" || releaseSelect.value === "releases_id") {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe seleccionar un usuario y un lanzamiento.");
        }
    });
});