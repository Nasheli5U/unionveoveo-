document.querySelectorAll('.star-rating input').forEach(input => {
    input.addEventListener('change', function() {
        const selectedRating = document.querySelector('input[name="rating"]:checked').value;
        console.log('Rating selected: ' + selectedRating);  // Verifica en la consola si se selecciona el valor correcto
    });
});
