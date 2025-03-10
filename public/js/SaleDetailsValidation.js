document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton");

    const userSelect = document.getElementById("users_id");
    const videogameSelect = document.getElementById("videogames_id");
    const quantityInput = document.getElementById("quantity");
    const saleDateInput = document.getElementById("sale_date");

    function validateForm() {
        const userValid = userSelect.value !== "users_id";
        const videogameValid = videogameSelect.value !== "videogames_id";
        const quantityValid = quantityInput.value > 0;
        const saleDateValid = saleDateInput.value.trim() !== "";

        if (userValid && videogameValid && quantityValid && saleDateValid) {
            saveButton.removeAttribute("disabled");
        } else {
            saveButton.setAttribute("disabled", "true");
        }
    }

    userSelect.addEventListener("change", validateForm);
    videogameSelect.addEventListener("change", validateForm);
    quantityInput.addEventListener("input", validateForm);
    saleDateInput.addEventListener("input", validateForm);

    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault();
            alert("Debe completar todos los campos correctamente.\n- Seleccione un usuario válido.\n- Seleccione un videojuego válido.\n- Ingrese una cantidad mayor a 0.\n- Ingrese una fecha de venta válida.");
        }
    });

    validateForm();
});
