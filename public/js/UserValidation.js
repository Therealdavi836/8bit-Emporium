document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton");

    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    function validateForm() {
        const nameValid = nameInput.value.trim().length >= 3;
        const emailValid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailInput.value.trim());
        const passwordValid = passwordInput.value.trim().length >= 6;

        if (nameValid && emailValid && passwordValid) {
            saveButton.removeAttribute("disabled");
        } else {
            saveButton.setAttribute("disabled", "true");
        }
    }

    nameInput.addEventListener("input", validateForm);
    emailInput.addEventListener("input", validateForm);
    passwordInput.addEventListener("input", validateForm);

    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault();
            alert("Debe completar todos los campos correctamente.\n- El nombre debe tener al menos 3 caracteres.\n- El correo debe ser válido.\n- La contraseña debe tener al menos 6 caracteres.");
        }
    });

    validateForm();
});
