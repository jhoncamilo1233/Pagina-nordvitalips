document.addEventListener('DOMContentLoaded', (event) => {
    const buttons = document.querySelectorAll('.usuarios__btn');
    let activeButton = null;

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            if (activeButton) {
                activeButton.classList.remove('active');
            }
            button.classList.add('active');
            activeButton = button;
        });
    });
});


// Sedes 

document.addEventListener('DOMContentLoaded', (event) => {
    const buttonsSedes = document.querySelectorAll('.sedes__btn');
    let activeButton = null;

    buttonsSedes.forEach(button => {
        button.addEventListener('click', () => {
            if (activeButton) {
                activeButton.classList.remove('active');
            }
            button.classList.add('active');
            activeButton = button;
        });
    });
});

// Deberes y derechos 

document.addEventListener('DOMContentLoaded', (event) => {
    const buttonsSedes = document.querySelectorAll('.db__btn');
    let activeButton = null;

    buttonsSedes.forEach(button => {
        button.addEventListener('click', () => {
            if (activeButton) {
                activeButton.classList.remove('active');
            }
            button.classList.add('active');
            activeButton = button;
        });
    });
});