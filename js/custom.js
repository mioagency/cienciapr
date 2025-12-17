
/* Scroll to Top Button */
const scrollToTopBtn = document.getElementById("scrollToTop");

if (scrollToTopBtn) {
  // Scroll to top when button is clicked
  scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}


const container = document.getElementById("sliderContainer");
const btnPrev = document.getElementById("btnPrev");
const btnNext = document.getElementById("btnNext");

// Obtenemos el ancho de una tarjeta dinámicamente para hacer scroll exacto
function getCardWidth() {
  const card = container.querySelector(".col-11"); // Selecciona la primera tarjeta
  return card ? card.offsetWidth + 24 : 350; // Ancho + gap (g-4 es aprox 24px)
}

btnNext.addEventListener("click", () => {
  container.scrollBy({ left: getCardWidth(), behavior: "smooth" });
});

btnPrev.addEventListener("click", () => {
  container.scrollBy({ left: -getCardWidth(), behavior: "smooth" });
});

/* Calendario */

const months = document.querySelectorAll(".calendar-month");
const title = document.getElementById("calendar-title");

let current = 0;

document.getElementById("next-month").addEventListener("click", () => {
  months[current].style.display = "none";
  current = (current + 1) % months.length;
  months[current].style.display = "block";
  title.textContent = months[current].dataset.title;
});

document.getElementById("prev-month").addEventListener("click", () => {
  months[current].style.display = "none";
  current = (current - 1 + months.length) % months.length;
  months[current].style.display = "block";
  title.textContent = months[current].dataset.title;
});

