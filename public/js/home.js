let currentIndex = 0;
const images = [
    '/imagenes/images2.jpg',
    '/imagenes/images3.jpg',
    '/imagenes/images4.jpg',
    '/imagenes/images5.jpg',
    '/imagenes/images6.jpg'
];

function changeImage(imageUrl) {
    document.getElementById('currentImage').src = imageUrl;
}

function prevImage() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
    document.getElementById('currentImage').src = images[currentIndex];
}

function nextImage() {
    currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
    document.getElementById('currentImage').src = images[currentIndex];
}
