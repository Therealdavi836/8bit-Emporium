document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar

    const nameInput = document.getElementById("name");
    const dateInput = document.getElementById("date");
    const descriptionInput = document.getElementById("description");

    function validateForm() {
        const nameValid = nameInput.value.trim() !== "";
        const dateValid = dateInput.value.trim() !== ""; // Solo valida que no esté vacío
        const descriptionValid = descriptionInput.value.trim() !== "";

        if (nameValid && dateValid && descriptionValid) {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Agregar eventos para validar los campos en tiempo real
    nameInput.addEventListener("input", validateForm);
    dateInput.addEventListener("change", validateForm);
    descriptionInput.addEventListener("input", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe completar todos los campos.");
        }
    });

    // Desactivar el botón por defecto hasta que se valide el formulario
    validateForm();
});
