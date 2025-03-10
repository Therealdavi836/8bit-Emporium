document.addEventListener("DOMContentLoaded", function () {
    const saveButton = document.getElementById("saveButton");

    const videogameSelect = document.getElementById("videogame_id");
    const promotionSelect = document.getElementById("promotion_id");

    function validateForm() {
        const videogameValid = videogameSelect.value !== "videogame_id";
        const promotionValid = promotionSelect.value !== "promotion_id";

        if (videogameValid && promotionValid) {
            saveButton.removeAttribute("disabled");
        } else {
            saveButton.setAttribute("disabled", "true");
        }
    }

    videogameSelect.addEventListener("change", validateForm);
    promotionSelect.addEventListener("change", validateForm);

    saveButton.addEventListener("click", function (event) {
        if (saveButton.hasAttribute("disabled")) {
            event.preventDefault();
            alert("Debe seleccionar un videojuego y una promoción antes de guardar.");
        }
    });

    validateForm();
});
