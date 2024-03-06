// Obtener los elementos necesarios
const autoplay = document.querySelector('.autoplay');
const slides = document.querySelectorAll('.slide-open');

// Función para cambiar al siguiente slide
function nextSlide() {
    const checked = document.querySelector('.slide-open:checked');
    const index = Array.from(slides).indexOf(checked);
    slides[(index + 1) % slides.length].checked = true;
}

// Cambiar al siguiente slide cada 5 segundos
setInterval(nextSlide, 3000); // Cambio cada 5 segundos