document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar

    const nameInput = document.getElementById("name");
    const descriptionInput = document.getElementById("description");
    const percentageDiscountInput = document.getElementById("percentage_discount");
    const startDateInput = document.getElementById("start_date");
    const endDateInput = document.getElementById("end_date");

    function validateForm() {
        const nameValid = nameInput.value.trim() !== "";
        const descriptionValid = descriptionInput.value.trim() !== "";
        const percentageValid = percentageDiscountInput.value.trim() !== "" && percentageDiscountInput.value > 0;
        const startDateValid = startDateInput.value.trim() !== "";
        const endDateValid = endDateInput.value.trim() !== "";

        // Validar que la fecha de fin no sea anterior a la fecha de inicio
        const datesValid = startDateValid && endDateValid && (new Date(startDateInput.value) <= new Date(endDateInput.value));

        if (nameValid && descriptionValid && percentageValid && datesValid) {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Agregar eventos para validar los campos en tiempo real
    nameInput.addEventListener("input", validateForm);
    descriptionInput.addEventListener("input", validateForm);
    percentageDiscountInput.addEventListener("input", validateForm);
    startDateInput.addEventListener("change", validateForm);
    endDateInput.addEventListener("change", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe completar todos los campos y asegurarse de que la fecha de finalización sea posterior a la de inicio.");
        }
    });

    // Desactivar el botón por defecto hasta que se valide el formulario
    validateForm();
});
