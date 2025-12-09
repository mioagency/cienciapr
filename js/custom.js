const container = document.getElementById('sliderContainer');
    const btnPrev = document.getElementById('btnPrev');
    const btnNext = document.getElementById('btnNext');

    // Obtenemos el ancho de una tarjeta dinámicamente para hacer scroll exacto
    function getCardWidth() {
        const card = container.querySelector('.col-11'); // Selecciona la primera tarjeta
        return card ? card.offsetWidth + 24 : 350; // Ancho + gap (g-4 es aprox 24px)
    }

    btnNext.addEventListener('click', () => {
        container.scrollBy({ left: getCardWidth(), behavior: 'smooth' });
    });

    btnPrev.addEventListener('click', () => {
        container.scrollBy({ left: -getCardWidth(), behavior: 'smooth' });
    });