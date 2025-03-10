document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar
    const videogameSelect = document.getElementById("videogame_id"); // Select de videojuegos
    const promotionSelect = document.getElementById("promotion_id"); // Select de promociones

    function validateForm() {
        if (videogameSelect.value !== "" && promotionSelect.value !== "") {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Escuchar cambios en los selectores
    videogameSelect.addEventListener("change", validateForm);
    promotionSelect.addEventListener("change", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (videogameSelect.value === "" || promotionSelect.value === "") {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe seleccionar un videojuego y una promoción.");
        }
    });

    // Desactivar el botón por defecto hasta que se valide el formulario
    validateForm();
});
