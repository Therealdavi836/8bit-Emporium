document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton"); // Botón Guardar

    const codeInput = document.getElementById("code");
    const nameInput = document.getElementById("name");
    const typeInput = document.getElementById("type");
    const currencyInput = document.getElementById("currency");
    const amountInput = document.getElementById("amount");
    const creationDateInput = document.getElementById("creation_date");
    const expirationDateInput = document.getElementById("expiration_date");

    function validateForm() {
        const codeValid = codeInput.value.trim() !== "";
        const nameValid = nameInput.value.trim() !== "";
        const typeValid = typeInput.value.trim() !== "";
        const currencyValid = currencyInput.value.trim() !== "";
        const amountValid = amountInput.value.trim() !== "" && amountInput.value > 0;
        const creationDateValid = creationDateInput.value.trim() !== "";
        const expirationDateValid = expirationDateInput.value.trim() !== "";

        // Validar que la fecha de expiración no sea anterior a la fecha de creación
        const datesValid = creationDateValid && expirationDateValid && (new Date(creationDateInput.value) <= new Date(expirationDateInput.value));

        if (codeValid && nameValid && typeValid && currencyValid && amountValid && datesValid) {
            saveButton.removeAttribute("disabled"); // Activa el botón
        } else {
            saveButton.setAttribute("disabled", "true"); // Desactiva el botón
        }
    }

    // Agregar eventos para validar los campos en tiempo real
    codeInput.addEventListener("input", validateForm);
    nameInput.addEventListener("input", validateForm);
    typeInput.addEventListener("change", validateForm);
    currencyInput.addEventListener("input", validateForm);
    amountInput.addEventListener("input", validateForm);
    creationDateInput.addEventListener("change", validateForm);
    expirationDateInput.addEventListener("change", validateForm);

    // Validar al hacer clic en "Guardar"
    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault(); // Evita el envío del formulario
            alert("Debe completar todos los campos y asegurarse de que la fecha de expiración sea posterior a la de creación.");
        }
    });

    // Desactivar el botón por defecto hasta que se valide el formulario
    validateForm();
});
