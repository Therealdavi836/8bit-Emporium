document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar

    const nameInput = document.getElementById("name");
    const labelInput = document.getElementById("label");
    const descriptionInput = document.getElementById("description");

    function validateForm() {
        const nameValid = nameInput.value.trim().length >= 3;
        const labelValid = /^[a-z]+$/.test(labelInput.value.trim()); // Solo minúsculas sin espacios
        const descriptionValid = descriptionInput.value.trim().length >= 5;

        if (nameValid && labelValid && descriptionValid) {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Agregar eventos para validar los campos en tiempo real
    nameInput.addEventListener("input", validateForm);
    labelInput.addEventListener("input", validateForm);
    descriptionInput.addEventListener("input", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe completar todos los campos correctamente.\n- El nombre debe tener al menos 3 caracteres.\n- La etiqueta debe estar en minúsculas y sin espacios.\n- La descripción debe tener al menos 5 caracteres.");
        }
    });

    // Desactivar el botón por defecto hasta que se valide el formulario
    validateForm();
});
