/* Scroll to Top Button */
const scrollToTopBtn = document.getElementById("scrollToTop");

if (scrollToTopBtn) {
  // Scroll to top when button is clicked
  scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}

/* Carousel de Tarjetas */
document.addEventListener("DOMContentLoaded", function () {
  // --- FUNCIÓN MOTOR (Lógica reutilizable) ---
  function initCarousel(track, btnPrev, btnNext) {
    if (!track || !btnPrev || !btnNext) return;

    const getCardWidth = () => {
      // Intenta encontrar la tarjeta o columna para medir
      // Agregamos .col-12 y .col-md-6 para soportar tu nuevo layout
      const card =
        track.querySelector(".col-11") ||
        track.querySelector(".col-12") ||
        track.querySelector(".card");

      // Ajustamos el gap (24px por defecto para g-4)
      return card ? card.offsetWidth + 24 : 350;
    };

    btnNext.addEventListener("click", (e) => {
      e.preventDefault();
      track.scrollBy({ left: getCardWidth(), behavior: "smooth" });
    });

    btnPrev.addEventListener("click", (e) => {
      e.preventDefault();
      track.scrollBy({ left: -getCardWidth(), behavior: "smooth" });
    });
  }

  // ============================================================
  // 1. SOPORTE LEGACY (IDs antiguos)
  // ============================================================
  const legacyTrack = document.getElementById("sliderContainer");
  const legacyBtnPrev = document.getElementById("btnPrev");
  const legacyBtnNext = document.getElementById("btnNext");

  if (legacyTrack && legacyBtnPrev && legacyBtnNext) {
    initCarousel(legacyTrack, legacyBtnPrev, legacyBtnNext);
  }

  // ============================================================
  // 2. SISTEMA MÓDULO (Estructura Vertical: Título/Botones arriba)
  // Selector padre: .carousel-module
  // ============================================================
  const modules = document.querySelectorAll(".carousel-module");

  modules.forEach((module) => {
    const track = module.querySelector(".slider-track");
    const btnPrev = module.querySelector(".js-prev");
    const btnNext = module.querySelector(".js-next");

    initCarousel(track, btnPrev, btnNext);
  });

  // ============================================================
  // 3. SISTEMA NAVIGABLE (Estructura Horizontal: Flecha - Track - Flecha)
  // Selector padre: .carousel-navigable (Tu nueva sección de Prensa)
  // ============================================================
  const navigableCarousels = document.querySelectorAll(".carousel-navigable");

  navigableCarousels.forEach((wrapper) => {
    // Buscamos las clases específicas de tu HTML de Prensa
    const track = wrapper.querySelector(".carousel-scrollable");
    const btnPrev = wrapper.querySelector(".carousel-prev-btn");
    const btnNext = wrapper.querySelector(".carousel-next-btn");

    initCarousel(track, btnPrev, btnNext);
  });
});
/* END Carousel de Tarjetas */

/* Calendario */
/* ===================================================
   Lógica del Calendario (Solo en Sección Eventos)
   =================================================== */
document.addEventListener('DOMContentLoaded', () => {
  
  // 1. Buscamos la sección contenedora
  const eventosSection = document.getElementById("seccion_eventos");

  // 2. CONDICIONAL DE SEGURIDAD:
  // Si la sección NO existe, detenemos la función aquí con un 'return'.
  // Esto evita que el resto del código intente buscar elementos que no existen.
  if (!eventosSection) {
    return; 
  }

  // --- Si llegamos aquí, es porque la sección existe. Ejecutamos el calendario. ---
  const months = document.querySelectorAll(".calendar-month");
  const title = document.getElementById("calendar-title");
  const nextBtn = document.getElementById("next-month");
  const prevBtn = document.getElementById("prev-month");

  // Validación extra por si acaso faltan los botones dentro de la sección
  if (!nextBtn || !prevBtn || !title) return;

  let current = 0;

  nextBtn.addEventListener("click", () => {
    months[current].style.display = "none";
    current = (current + 1) % months.length;
    months[current].style.display = "block";
    // Asegúrate de que el dataset title exista
    if (months[current].dataset.title) {
        title.textContent = months[current].dataset.title;
    }
  });

  prevBtn.addEventListener("click", () => {
    months[current].style.display = "none";
    current = (current - 1 + months.length) % months.length;
    months[current].style.display = "block";
    if (months[current].dataset.title) {
        title.textContent = months[current].dataset.title;
    }
  });

});



/* News Container */
document.addEventListener("DOMContentLoaded", function () {
  // Seleccionamos el elemento por el nuevo ID
  var myCarouselElement = document.querySelector("#carouselTicker");

  // Lo inicializamos manualmente con las opciones de Bootstrap
  var carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: false, // false para manual, o número (ej: 2000) para automático
    wrap: true, // true para que vuelva al principio al terminar
  });

  console.log("Carousel Ticker inicializado manualmente");
});




/* Carousel de Patrocinadores */
document.addEventListener('DOMContentLoaded', () => {
  // 1. Seleccionamos la nueva clase
  const slider = document.querySelector('.slider-scrollable');
  
  // Si no existe el slider en esta página, detenemos el script
  if (!slider) return;

  let isDown = false;
  let startX;
  let scrollLeft;

  // Evento: Clic presionado (MouseDown)
  slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active'); 
    // Guardamos la posición inicial
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });

  // Evento: Salir del área (MouseLeave)
  slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
  });

  // Evento: Soltar el clic (MouseUp)
  slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
  });

  // Evento: Mover el mouse (MouseMove) -> Aquí ocurre la magia
  slider.addEventListener('mousemove', (e) => {
    if (!isDown) return; // Si no está presionado, no hacer nada
    e.preventDefault();
    
    const x = e.pageX - slider.offsetLeft;
    // Multiplicador de velocidad (* 2). 
    // Auméntalo a 3 para que sea más rápido o bájalo a 1 para que sea 1:1
    const walk = (x - startX) * 2; 
    slider.scrollLeft = scrollLeft - walk;
  });
});