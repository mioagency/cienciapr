    <footer id="footer" class="bg-dark text-light pt-5 pb-4 bg-footer-gradient">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
						<a class="navbar-brand" href="<?= SERVER_URI ?>index.php">
							<img src="<?= SERVER_URI ?>images/logo-footer.svg" width="205" alt="Ciencia Puerto Rico Logo">
						</a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 mb-4">
            <h5 class="mb-3">Navegación</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="<?= SERVER_URI ?>index.php" class="text-light text-decoration-none">Inicio</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Convocatorias</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Iniciativas</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Noticias</a></li>
              <li class="mb-2"><a href="<?= SERVER_URI ?>participa.php#seccion-eventos" class="text-light text-decoration-none">Eventos</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Recursos</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Comunidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-4 col-6 mb-4">
            <h5 class="mb-3">Privacidad</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="<?= SERVER_URI ?>politica-de-uso-y-de-privacidad.php" class="text-light text-decoration-none">Política de Privacidad</a></li>
              <li class="mb-2"><a href="<?= SERVER_URI ?>politica-de-uso-y-de-privacidad.php" class="text-light text-decoration-none">Términos y Condiciones</a></li>
              <li class="mb-2"><a href="<?= SERVER_URI ?>normas-comunidad.php" class="text-light text-decoration-none">Normas de la Comunidad</a></li>
              <li class="mb-2"><a href="<?= SERVER_URI ?>conoce.php" class="text-light text-decoration-none">Sobre CienciaPR</a></li>
              <li class="mb-2"><a href="mailto:contact@cienciapr.org" class="text-light text-decoration-none">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-4 mb-4">
            <h5 class="mb-3">Contáctanos</h5>
            <p class="mb-2 small">85 Market Street, Suite 2100 New York, NY 10001</p>
            <p class="mb-2"><a href="tel:+15552124040" class="text-light text-decoration-none">+1 (555) 212-4040</a></p>
            <p class="mb-2"><a href="mailto:contact@cienciapr.org" class="text-light text-decoration-none">contact@cienciapr.org</a></p>
          </div>
        </div>
        
        <hr class="my-4">

        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
            <p class="mb-0 small">Copyright © 2006-Presente CienciaPR y CAPRI, excepto donde sea indicado lo contrario</p>
          </div>
          <div class="col-md-4 text-center text-md-end">
            <a target="_blank" href="https://www.facebook.com/cienciapr" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.instagram.com/ciencia.pr" class="text-light me-2"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://twitter.com/cienciapr" class="text-light me-2"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="https://www.youtube.com/@CienciaprOrg" class="text-light me-2"><i class="fab fa-youtube"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/ciencia-puerto-rico" class="text-light"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" class="scroll-to-top" aria-label="Volver arriba">
      <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="<?= SERVER_URI ?>js/custom.js"></script>

    <!-- Piloto Digital -->
    <!-- <script>
    (function(d, t, g, k) {
      var ph = d.createElement(t),
      s = d.getElementsByTagName(t)[0],
      t = (new URLSearchParams(window.location.search)).get(k);
      t && localStorage.setItem(k, t);
      t = localStorage.getItem(k);
      ph.type = 'text/javascript';
      ph.async = true;
      ph.defer = true;
      ph.charset = 'UTF-8';
      ph.src = g + '&v=' + (new Date()).getTime();
      ph.src += t ? '&' + k + '=' + t : '';
      s.parentNode.insertBefore(ph, s);
    })(document, 'script', '//demo.pilotodigital.com/?p=17602&ph_apikey=e6f2714e5467ffbda7f38e63173a9f29', 'ph_access_token');
    </script>     -->
  </body>
</html>