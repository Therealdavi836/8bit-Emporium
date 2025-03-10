document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton");

    const titleInput = document.getElementById("title");
    const descriptionInput = document.getElementById("description");
    const priceInput = document.getElementById("price");
    const suppliersSelect = document.getElementById("suppliers_id");
    const developersSelect = document.getElementById("developers_id");

    function validateForm() {
        const titleValid = titleInput.value.trim().length >= 3;
        const descriptionValid = descriptionInput.value.trim().length >= 10;
        const priceValid = /^[0-9]+(\.[0-9]{1,2})?$/.test(priceInput.value.trim()) && parseFloat(priceInput.value) > 0;
        const supplierValid = suppliersSelect.value !== "suppliers_id";
        const developerValid = developersSelect.value !== "developers";

        if (titleValid && descriptionValid && priceValid && supplierValid && developerValid) {
            saveButton.removeAttribute("disabled");
        } else {
            saveButton.setAttribute("disabled", "true");
        }
    }

    titleInput.addEventListener("input", validateForm);
    descriptionInput.addEventListener("input", validateForm);
    priceInput.addEventListener("input", validateForm);
    suppliersSelect.addEventListener("change", validateForm);
    developersSelect.addEventListener("change", validateForm);

    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault();
            alert("Debe completar todos los campos correctamente.\n- El título debe tener al menos 3 caracteres.\n- La descripción debe tener al menos 10 caracteres.\n- El precio debe ser un número mayor a 0.\n- Debe seleccionar un proveedor y un desarrollador.");
        }
    });

    validateForm();
});