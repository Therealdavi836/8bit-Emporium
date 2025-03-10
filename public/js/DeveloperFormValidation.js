document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form"); // Selecciona el formulario
    const saveButton = document.getElementById("saveButton"); // Botón Guardar
    const nameInput = document.getElementById("name"); // Campo Nombre del desarrollador
    const countryInput = document.getElementById("country"); // Campo País del desarrollador

    function validateForm() {
        if (nameInput.value.trim() !== "" && countryInput.value.trim() !== "") {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Escuchar eventos de entrada en los campos
    nameInput.addEventListener("input", validateForm);
    countryInput.addEventListener("input", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (nameInput.value.trim() === "" || countryInput.value.trim() === "") {
            event.preventDefault(); // Evita el envío del formulario
            alert("Todos los campos son obligatorios.");
        }
    });
});
