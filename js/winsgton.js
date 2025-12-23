document.querySelectorAll('.slider-wrapper').forEach((wrapper) => {
  const container = wrapper.querySelector('.slider-container');
  const btnPrev = wrapper.querySelector('.btn-prev');
  const btnNext = wrapper.querySelector('.btn-next');

  function getCardWidth() {
    const card = container.querySelector('.member');
    return card ? card.offsetWidth + 24 : 300;
  }

  btnNext.addEventListener('click', () => {
    container.scrollBy({
      left: getCardWidth(),
      behavior: 'smooth',
    });
  });

  btnPrev.addEventListener('click', () => {
    container.scrollBy({
      left: -getCardWidth(),
      behavior: 'smooth',
    });
  });
});


/*esto es para que afecte al formulario del articulo donde se deja los comenterio*/
function mostrarVistaPrevia() {
    document.getElementById("prevNombre").innerText = document.getElementById("nombre").value;
    document.getElementById("prevAsunto").innerText = document.getElementById("asunto").value;
    document.getElementById("prevComentario").innerText = document.getElementById("comentario").value;
    document.getElementById("prevFormato").innerText = document.getElementById("formato").value;
    document.getElementById("vistaPrevia").classList.remove("d-none");
  }
