<?php

$PageTitle = "Ciencia Puerto Rico - Inicio";
$page = "Inicio";

function customPageHeader()
{ ?>
  <!-- Estilos inicio -->
<?php }

include_once ('templates/header.php'); ?>

<main>

  <!-- SECCIÓN HÉROE -->
  <section class="container-fluid text-white home-hero overflow-hidden p-0">
    <!-- Carousel -->
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <div class="hero-slide home-hero">
        <div class="container px-4 px-md-5">
          <div class="row align-items-center py-5" style="min-height: 80vh;"> 
            <div class="col-lg-6 pe-lg-5 ps-lg-4"> 
              <h1 class="display-4 fw-bold mb-3 text-body">La <span class="text-primary">red global</span> que conecta ciencia y Puerto Rico</h1>
              <p class="fs-5 mb-4 text-body">Conectamos a científicos, estudiantes y educadores con interés en la ciencia y Puerto Rico para transformar la educación, la investigación y la cultura científica.</p>
              <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Conoce más</a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background: url('https://placehold.co/1920x800/2b493d/3d5f52') no-repeat center center / cover;">
        <div class="container px-4 px-md-5">
          <div class="row align-items-center py-5" style="min-height: 80vh;">
            <div class="col-lg-6 pe-lg-5 ps-lg-4">
              <h1 class="display-4 fw-bold mb-3 text-white">Educación <span class="text-primary">científica</span> de calidad</h1>
              <p class="fs-5 mb-4 text-white">Proveemos recursos educativos y programas que inspiran a la próxima generación de científicos puertorriqueños.</p>
              <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Ver programas</a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background: url('https://placehold.co/1920x800/434343/595959') no-repeat center center / cover;;">
        <div class="container px-4 px-md-5">
          <div class="row align-items-center py-5" style="min-height: 80vh;">
            <div class="col-lg-6 pe-lg-5 ps-lg-4">
              <h1 class="display-4 fw-bold mb-3 text-white">Únete a <span class="text-primary">nuestra comunidad</span></h1>
              <p class="fs-5 mb-4 text-white">Forma parte de la red de profesionales y estudiantes comprometidos con el desarrollo científico de Puerto Rico.</p>
              <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Regístrate</a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <button class="btn btn-primary rounded-circle position-absolute top-50 start-0 translate-middle-y ms-1 d-flex d-md-none align-items-center justify-content-center border-0 shadow" 
          type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" 
          style="width: 35px; height: 35px; z-index: 5;">
    <span class="carousel-control-prev-icon" style="width: 1rem; height: 1rem;" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="btn btn-primary rounded-circle position-absolute top-50 end-0 translate-middle-y me-1 d-flex d-md-none align-items-center justify-content-center border-0 shadow" 
          type="button" data-bs-target="#heroCarousel" data-bs-slide="next" 
          style="width: 35px; height: 35px; z-index: 5;">
    <span class="carousel-control-next-icon" style="width: 1rem; height: 1rem;" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
  <button class="btn btn-primary rounded-circle position-absolute top-50 start-0 translate-middle-y ms-4 d-none d-md-flex align-items-center justify-content-center border-0 shadow" 
          type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" 
          style="width: 50px; height: 50px; z-index: 5;">
    <span class="carousel-control-prev-icon" style="width: 1.5rem; height: 1.5rem;" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="btn btn-primary rounded-circle position-absolute top-50 end-0 translate-middle-y me-4 d-none d-md-flex align-items-center justify-content-center border-0 shadow" 
          type="button" data-bs-target="#heroCarousel" data-bs-slide="next" 
          style="width: 50px; height: 50px; z-index: 5;">
    <span class="carousel-control-next-icon" style="width: 1.5rem; height: 1.5rem;" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>

</div>

      <!-- Banner 2 Columnas -->
      <div class="container-fluid p-0"> 
        <div class="row g-0 align-items-center bg-primary -ms-3 -me-3 bg-opacity-75 difuminado-10">
          <div class="col-12 col-lg-6 p-5 border-end border-white">
            <p class="fs-4 fw-light lh-base">Únete a los sobre 15,000 científicos, estudiantes, educadores y aliados construyendo un futuro más justo y próspero desde la ciencia.</p>
          </div>
          <div class="col-12 col-lg-6 p-md-5">
            <h3 class="fs-4 fw-bold">¿Quieres respaldar este movimiento?</h3>
            <div class="p-4 rounded bg-white bg-opacity-25 d-flex justify-content-between align-items-center">
              <p class="fw-light fs-7 m-0 me-4">Haz tu donación libre de impuestos y amplifica nuestro impacto.</p>
              <a href="https://givebutter.com/Tt7CRd" target="_blank" class="btn btn-success btn-lg fw-bold text-dark fs-7 text-nowrap">Donar aquí</a>
            </div>
          </div>
        </div>
      </div> 
  </section>

  <!-- SECCIÓN 3 COLUMNAS -->
  <section class="py-7 bg-body">
    <div class="container">
      
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="fs-2 text-primary fw-bold text-dark">Nuestros ejes de acción científica</h2>
        </div>
      </div>

      <div class="row gx-4">
        
        <!-- Columna 1 -->
        <div class="col-12 col-md-4 mt-3">
          <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
          <div class="h-100 d-flex bg-white flex-column align-items-start rounded-4">
            <img src="<?= SERVER_URI ?>images/ico-1.svg" alt="Imagen descriptiva 1" class="img-fluid mb-3 rounded">
            <div class="h-100 p-4 d-flex flex-column justify-content-between align-items-start">
              <div>
                <h3>Participación Pública</h3>
                <p>Promovemos decisiones basadas en evidencia y la participación de la ciencia en políticas sociales y comunitarias.</p>
              </div>
              <div>
                <a href="<?= SERVER_URI ?>comunicacion-iniciativas-comunitarias.php" class="btn btn-lg fs-8 btn-outline-secondary text-hover-white">Leer más</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Columna 2 -->
        <div class="col-12 col-md-4 rounded-4 mt-3">
          <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
          <div class="h-100 d-flex bg-white flex-column align-items-start rounded-4">
            <img src="<?= SERVER_URI ?>images/ico-2.svg" alt="Imagen descriptiva 1" class="img-fluid mt-3 mb-3 rounded">
            <div class="h-100 p-4 d-flex flex-column justify-content-between align-items-start">
              <div>
                <h3>Educación K-12</h3>
                <p>Creando experiencias significativas en ciencia para estudiantes mediante recursos culturales, charlas y formación docente.</p>
              </div>
              <div>
                <a href="<?= SERVER_URI ?>educacion-k-12.php" class="btn btn-lg fs-8 btn-outline-secondary text-hover-white">Leer más</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Columna 3 -->
        <div class="col-12 col-md-4 rounded-4 mt-3">
          <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
          <div class="h-100 d-flex bg-white flex-column align-items-start rounded-4">
            <img src="<?= SERVER_URI ?>images/ico-3.svg" alt="Imagen descriptiva 1" class="img-fluid mt-2 mb-3 rounded">
            <div class="h-100 p-4 d-flex flex-column justify-content-between align-items-start">
              <div>
                <h3>Desarrollo Profesional</h3>
                <p>Potenciamos carreras científicas con tutoría, redes, becas y programas como Yale Ciencia Academy.</p>
              </div>
              <div>
                <a href="<?= SERVER_URI ?>talento-y-liderazgo.php" class="btn btn-lg fs-8 btn-outline-secondary text-hover-white">Leer más</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <section class="py-7 bg-primary pattern-grey">
    <div class="container">
      <!-- CABECERA Y CONTROLES -->
      <div class="d-flex flex-wrap align-items-end justify-content-start mb-4">
          <div class="d-flex col-lg-8 col-md-8 align-items-center justify-content-start gap-4">
              <h2 class="fs-2 text-primary fw-bold text-white">Nuestros Destacados</h2>
              <!-- Botones de navegación -->
              <div class="pt-3 pt-md-0 d-flex">
                  <button class="btn bg-white rounded-circle p-0" style="width: 32px; height: 32px;" id="btnPrev" aria-label="Anterior">
                      <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <button class="btn bg-white rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="btnNext" aria-label="Siguiente">
                      <i class="fa-solid fa-arrow-right"></i>
                  </button>
              </div>
          </div>
      </div>
    </div>
    <div class="container-fluid px-4 ps-md-5 py-5">

      <!-- 
        CONTENEDOR DEL SLIDER 
        - row flex-nowrap: Alinea horizontalmente sin saltar de línea.
        - overflow-x-auto: Activa el scroll.
        - g-4: Espacio entre tarjetas (gap).
      -->
      <div id="sliderContainer" class="row flex-nowrap overflow-x-auto no-scrollbar g-4 pb-5 scroll-smooth">
          
          <!-- ITEM 1 -->
          <!-- 
              col-11: Móvil (91%)
              col-md-5: Tablet (41%)
              col-lg-peek-3: Desktop (30%)
          -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
              <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                  <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
                  <div class="card-body d-flex flex-column justify-content-between p-4">
                      <div>
                        <h3>Convocatorias</h3>
                        <p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
                      </div>
                      <div>
                        <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- ITEM 2 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
              <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                  <img src="<?= SERVER_URI ?>images/2-programas.png" class="card-img-top border-bottom border-8 border-info" alt="Programas">
                  <div class="card-body d-flex flex-column justify-content-between p-4">
                      <div>
                        <h3>Programas</h5>
                        <p class="text-start fs-7">Mentoría, formación y oportunidades STEM que conectan a estudiantes, docentes y comunidades con la ciencia en Puerto Rico.</p>
                      </div>
                      <div>
                        <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestros programas</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- ITEM 3 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
              <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                  <img src="<?= SERVER_URI ?>images/3-eventos.png" class="card-img-top border-bottom border-8 border-info" alt="Eventos">
                  <div class="card-body d-flex flex-column justify-content-between p-4">
                      <div>
                        <h3>Eventos</h5>
                        <p class="text-start fs-7">Charlas, talleres y ferias científicas para escuelas y comunidades. Descubre los próximos encuentros y regístrate para participar.</p>
                      </div>
                      <div>
                        <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Entérate de nuestros eventos</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- ITEM 4 (Este se asoma en desktop) -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
              <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                  <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
                  <div class="card-body d-flex flex-column justify-content-between p-4">
                      <div>
                        <h3>Convocatorias</h3>
                        <p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
                      </div>
                      <div>
                        <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- ITEM 5 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
              <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                  <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
                  <div class="card-body d-flex flex-column justify-content-between p-4">
                      <div>
                        <h3>Convocatorias</h3>
                        <p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
                      </div>
                      <div>
                        <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
                      </div>
                  </div>
              </div>
          </div>
          
          <!-- ITEM 6 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
              <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                  <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
                  <div class="card-body d-flex flex-column justify-content-between p-4">
                      <div>
                        <h3>Convocatorias</h3>
                        <p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
                      </div>
                      <div>
                        <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="py-7">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col col-md-6 d-flex flex-column gap-4">
        <div class="card bg-white border-0 rounded-20 p-5 h-100">
          <div class="card-body">
            <h2 class="fs-1 fw-bold">Únete a nuestra comunidad de la <span class="text-primary">#CienciaBoricua</span></h2>
            <p class="fs-5 card-text">El arma secreta de CienciaPR es su talentosa, dedicada y diversa red de miembros. Crea tu perfil, crece tu comunidad, participa de eventos, y descubre oportunidades para impulsar la ciencia en beneficio de Puerto Rico.</p>
            <a href="<?= SERVER_URI ?>unete.php" class="btn btn-primary text-white btn-lg fs-7 me-3 mt-3">Únete a la comunidad</a>
          </div>
        </div>
        <img src="<?= SERVER_URI ?>images/1-comunidad.webp" alt="Comunidad Ciencia Puerto Rico">
      </div>
      <div class="col col-md-6 d-flex h-100">
        <img class="img-fluid img-equal rounded-20 h-100" src="<?= SERVER_URI ?>images/2-comunidad.webp" alt="Comunidad Ciencia Puerto Rico">
      </div>
    </div>
  </div>
</section>

<!-- ============================================ -->
<!-- SECCIÓN: NOTICIAS SOBRE CIENCIA BORICUA -->
<!-- ============================================ -->
<?php
	include_once('templates/noticias.php');
?>

<!-- ============================================ -->
<!-- SECCIÓN: NEWSLETTER + VIDEO -->
<!-- ============================================ -->
<section class="py-7 pattern-grey-2">
  <div class="container">
    <div class="row align-items-center g-4 mx-1 mx-md-0">
      <div class="col-12 bg-primary rounded-20">
        <div class="row mx-5 my-4">
          <div class="col col-md-6">
            <h2 class="fs-2 text-white">Descubre la ciencia desde una nueva perspectiva</h2>
          </div>
          <div class="col col-md-6">
            <p class="fs-7 text-white">A través de nuestro canal de YouTube, compartimos conocimiento, curiosidad y el impacto real de la ciencia en Puerto Rico y el mundo.</p>
            <a href="https://www.youtube.com/@CienciaprOrg" target="_blank" class="fs-7 btn bg-white d-inline-flex align-items-center shadow rounded-3 text-decoration-none px-3 py-2" style="border: 1px solid #eef0f2;">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                  <rect x="2" y="4" width="20" height="16" rx="4" fill="#EE1D23"/>
                  <path d="M10 8.5L16 12L10 15.5V8.5Z" fill="white"/>
              </svg>
              <span class="text-dark fw-normal fs-6">Accede a nuestro canal en YouTube</span>
          </a>
          </div>
        </div>
      </div>
      <div id="yt-video" class="col-12 bg-white rounded-20 p-3">
        <div class="position-relative rounded-4 overflow-hidden shadow-lg video-placeholder vh-100">
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center z-2">
            <a href="#" class="play-icon-link">
               <img src="<?= SERVER_URI ?>images/icon-play-button.svg" alt="Play Video" style="width: 90px; height: auto;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
</main>
<?php
include_once ('templates/footer.php');
?>