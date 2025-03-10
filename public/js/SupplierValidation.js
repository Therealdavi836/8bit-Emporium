document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton");

    const nameInput = document.getElementById("name");
    const addressInput = document.getElementById("address");
    const phoneInput = document.getElementById("phone");

    function validateForm() {
        const nameValid = nameInput.value.trim().length >= 3;
        const addressValid = addressInput.value.trim().length >= 5;
        const phoneValid = /^[\d-.]{7,150}$/.test(phoneInput.value.trim()); // Permite dígitos y guiones

        if (nameValid && addressValid && phoneValid) {
            saveButton.removeAttribute("disabled");
        } else {
            saveButton.setAttribute("disabled", "true");
        }
    }

    nameInput.addEventListener("input", validateForm);
    addressInput.addEventListener("input", validateForm);
    phoneInput.addEventListener("input", validateForm);

    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault();
            alert("Debe completar todos los campos correctamente.\n- El nombre debe tener al menos 3 caracteres.\n- La dirección debe tener al menos 5 caracteres.\n- El teléfono debe tener entre 7 y 15 dígitos numéricos.");
        }
    });

    validateForm();
});
