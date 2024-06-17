// Maneja envio

document.addEventListener('DOMContentLoaded', function() {
    const miFormulario = document.querySelector(".manejarEnvio");

    if (miFormulario) {
        miFormulario.addEventListener('submit', (event) => {
            // Mensaje de confirmación de envio
            if (!miFormulario.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                alert('Faltan campos por llenar. Por favor, complete todos los campos requeridos.');
            } else {
                alert("El formulario ha sido enviado con éxito.");
            }
        });
    } else {
        console.error('El formulario con la clase .manejarEnvio no existe en el DOM.');
    }
});
