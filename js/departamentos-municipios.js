document.addEventListener('DOMContentLoaded', function() {
    // URL de la API que contiene los departamentos y municipios
    const apiURL = 'https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.json';

    // Realizar la solicitud a la API
    fetch(apiURL)
        .then(response => response.json())
        .then(data => {
            // Llenar el select de departamentos
            const departamentoSelect = document.querySelector('.departamento');
            data.forEach(departamento => {
                const option = document.createElement('option');
                option.value = departamento.departamento;
                option.textContent = departamento.departamento;
                departamentoSelect.appendChild(option);
            });

            // Manejar el cambio de departamento
            departamentoSelect.addEventListener('change', function() {
                const selectedDepartamento = this.value;
                const municipioSelect = document.querySelector('.municipio');
                municipioSelect.innerHTML = '<option selected disabled value="">Choose...</option>';

                const municipios = data.find(dep => dep.departamento === selectedDepartamento).ciudades;
                municipios.forEach(municipio => {
                    const option = document.createElement('option');
                    option.value = municipio;
                    option.textContent = municipio;
                    municipioSelect.appendChild(option);
                });

                // Habilitar el select de municipios
                municipioSelect.removeAttribute('disabled');
            });
        })
        .catch(error => console.error('Error al cargar los datos:', error));
});

// script.js

// Array con las opciones de identificación
const opcionesIdentificacion = [
    "Cedula de Ciudadania",
    "Cedula de Extranjeria",
    "Pasaporte",
    "Tarjeta de Identidad",
    "Permiso de Protección Temporal",
    "Salvoconducto"
];

// Array con las opciones de PQRSFD
const opcionesPQRSFD = [
    "Petición",
    "Queja",
    "Reclamo",
    "Sugerencia",
    "Felicitaciones",
    "Denuncia"
];

// Función para poblar el select con las opciones de identificación
function poblarSelectIdentificacion() {
    const selectsIdentificacion = document.querySelectorAll('.tipo-identificacion');
    
    selectsIdentificacion.forEach(select => {
        opcionesIdentificacion.forEach(opcion => {
            const optionElement = document.createElement("option");
            optionElement.value = opcion.toLowerCase().replace(/\s/g, '-'); // Ajusta el valor según sea necesario
            optionElement.textContent = opcion;
            select.appendChild(optionElement);
        });
    });
}

// Función para poblar el select con las opciones de PQRSFD
function poblarSelectPQRSFD() {
    const selectsPQRSFD = document.querySelectorAll('.tipo-pqrsfd');
    
    selectsPQRSFD.forEach(select => {
        opcionesPQRSFD.forEach(opcion => {
            const optionElement = document.createElement("option");
            optionElement.value = opcion.toLowerCase().replace(/\s/g, '-'); // Ajusta el valor según sea necesario
            optionElement.textContent = opcion;
            select.appendChild(optionElement);
        });
    });
}

// Función para manejar el cambio en cualquier select
function manejarCambio(event) {
    const optionDefault = event.target.querySelector('option[value=""]');
    
    if (optionDefault) {
        optionDefault.remove();
    }
}

// Ejecutar las funciones para poblar los selects al cargar la página
document.addEventListener("DOMContentLoaded", () => {
    poblarSelectIdentificacion();
    poblarSelectPQRSFD();
    const selectsIdentificacion = document.querySelectorAll('.tipo-identificacion');
    const selectsPQRSFD = document.querySelectorAll('.tipo-pqrsfd');
    selectsIdentificacion.forEach(select => {
        select.addEventListener("change", manejarCambio);
    });
    selectsPQRSFD.forEach(select => {
        select.addEventListener("change", manejarCambio);
    });
});
