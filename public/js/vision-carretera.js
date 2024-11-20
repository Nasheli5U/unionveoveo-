document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll('.animated-image');
    
    images.forEach(image => {
        image.addEventListener('mouseover', () => {
            image.classList.add('image-zoom');
        });
        image.addEventListener('mouseleave', () => {
            image.classList.remove('image-zoom');
        });
    });
});
