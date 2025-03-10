document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form"); // Selecciona el formulario
    const saveButton = document.getElementById("saveButton"); // Botón Guardar

    saveButton.addEventListener("click", function (event) {
        event.preventDefault(); // Evita que el formulario se envíe de inmediato

        const videogameSelect = document.getElementById("videogames_id");
        const categorySelect = document.getElementById("categories_id");

        if (
            videogameSelect.value === "videogames_id" || 
            videogameSelect.value.trim() === "" || 
            categorySelect.value === "categories_id" || 
            categorySelect.value.trim() === ""
        ) {
            alert("Todos los campos son obligatorios.");
        } else {
            form.submit(); // Envía el formulario si la validación es correcta
        }
    });
});