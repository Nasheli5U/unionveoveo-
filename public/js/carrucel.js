// JavaScript para el carrusel

// Seleccionar los elementos
let currentImage = document.getElementById('currentImage');
let thumbnails = document.querySelectorAll('.thumbnail');
let currentIndex = 0;

// Lista de URLs de las imágenes para facilitar la navegación
const images = [
    '/imagenes/images2.jpg',
    '/imagenes/images3.jpg',
    '/imagenes/images4.jpg',
    '/imagenes/images5.jpg',
    '/imagenes/images6.jpg'
];

// Función para cambiar la imagen principal
function changeImage(src) {
    currentImage.src = src;
    currentIndex = images.indexOf(src); // Actualiza el índice actual
}

// Función para la imagen siguiente
function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    currentImage.src = images[currentIndex];
}

// Función para la imagen anterior
function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    currentImage.src = images[currentIndex];
}

// Añadir eventos a las miniaturas
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        changeImage(images[index]);
    });
});
