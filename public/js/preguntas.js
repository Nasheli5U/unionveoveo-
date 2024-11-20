document.addEventListener('DOMContentLoaded', function () {
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;

            // Alternar la visibilidad del contenido
            content.style.display = content.style.display === 'block' ? 'none' : 'block';

            // Alternar la clase activa para cambiar estilos si es necesario
            button.classList.toggle('active');
        });
    });
});
