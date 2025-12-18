<?php

$PageTitle = "Talento y Liderazgo | Ciencia Puerto Rico"; 
$page = "educación"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Talento y Liderazgo" => SERVER_URI . 'talento-y-liderazgo.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 explora-hero page-hero-bg bg-img_talento-y-liderazgo d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Desarrollo de Talento</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
    </section>

    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="py-5 py-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 bg-white rounded-20 p-5 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Impulsa tu carrera científica y profesional</h2>
                            <p class="fs-5 card-text fw-normal">Explora recursos, conexiones y oportunidades pensadas para profesionales en ciencia —desde postdoctorados hasta emprendedores— que desean marcar la diferencia en Puerto Rico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/talento-liderazgo-top.png" alt="Profesional con bata" >
                </div>
            </div>
        </div>
    </section>

    <!-- INICIATIVAS -->
    <section id="iniciativas" class="py-8 bg-primary pattern-grey">
      <div class="container">
        <!-- CABECERA Y CONTROLES -->
        <div class="d-flex flex-wrap align-items-end justify-content-start mb-4">
          <div class="d-flex col-lg-8 col-md-8 align-items-center justify-content-start gap-4">
            <h2 class="fs-2 text-primary fw-bold text-white">Nuestras Iniciativas</h2>
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
              <img src="<?= SERVER_URI ?>images/iniciativas-semillas.jpg" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
              <div class="card-body d-flex flex-column justify-content-between p-4">
                <div>
                  <h3>Inclusive Reflexive Fellowship</h3>
                  <p class="text-start fs-7">Programa que inspira a niñas de 7mo a 9no grado a explorar la ciencia, la ingeniería y la tecnología, desarrollando liderazgo y confianza.</p>
                </div>
                <div>
                  <a href="#" class="btn btn-secondary btn-lg fs-8 text-white">Ver más detalles</a>
                </div>
              </div>
            </div>
          </div>

          <!-- ITEM 2 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
            <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
              <img src="<?= SERVER_URI ?>images/iniciativas-centificos-servicio.jpg" class="card-img-top border-bottom border-8 border-info" alt="Programas">
              <div class="card-body d-flex flex-column justify-content-between p-4">
                <div>
                  <h3>Yale Ciencia Academy</h3>
                  <p class="text-start fs-7">Iniciativa que conecta científicos con maestros y estudiantes para llevar la ciencia al aula mediante proyectos y experiencias prácticas.</p>
                </div>
                <div>
                  <a href="#" class="btn btn-secondary btn-lg fs-8 text-white">Explorar iniciativa</a>
                </div>
              </div>
            </div>
          </div>

          <!-- ITEM 3 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
            <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
              <img src="<?= SERVER_URI ?>images/iniciativas--yale-academy.jpg" class="card-img-top border-bottom border-8 border-info" alt="Eventos">
              <div class="card-body d-flex flex-column justify-content-between p-4">
                <div>
                  <h3>PR Science Policy Action Network</h3>
                  <p class="text-start fs-7">Programa de mentoría y desarrollo profesional para estudiantes graduados en ciencias, enfocado en liderazgo, comunicación y comunidad.</p>
                </div>
                <div>
                  <a href="#" class="btn btn-secondary btn-lg fs-8 text-white">Leer más</a>
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
                  <h3>Webinarios y certificaciones UPR-IPERT</h3>
                  <p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
                </div>
                <div>
                  <a href="#" class="btn btn-secondary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
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
                  <a href="#" class="btn btn-secondary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
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
                  <a href="#" class="btn btn-secondary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECCIÓN IMPACTO -->
    <section class="bg-white pb-5 pb-md-0">
        <div class="container-fluid px-0">
            <div class="container-xxl px-4">
                <div class="row gx-5 gy-4 gy-sm-0">
                    <!-- Columna 1 -->
                    <div class="col-12 col-md-3 d-flex flex-column justify-content-center">
                      <div class="border-bottom">
                        <p class="fs-2 fw-semibold">1,200+</p>
                        <p class="fs-5 fw-normal">Profesionales registrados en la red</p>
                      </div>
                      <div class="border-bottom">
                        <p class="fs-2 fw-semibold">300+</p>
                        <p class="fs-5 fw-normal">0rganizaciones científicas en Puerto Rico colaborando</p>
                      </div>
                      <div>
                        <p class="fs-2 fw-semibold">150+</p>
                        <p class="fs-5 fw-normal">Oportunidades de fondos compartidas</p>
                      </div>
                    </div>

                    <!-- Columna 2 -->
                    <div class="col-12 col-md-4">
                        <img src="<?= SERVER_URI ?>images/talento-liderazgo-impacto.jpg" alt="Descripción de imagen" class="w-100 h-100 object-fit-cover rounded-20">
                    </div>

                    <!-- Columna 3 -->
                    <div class="col-12 col-md-5 d-flex flex-column justify-content-center">
                        <h2 class="fs-2 fw-semibold mb-md-3">Profesionales que transforman ciencia en impacto</h2>
                        <p class="fs-5 card-text fw-normal">Durante años, Ciencia Puerto Rico ha trabajado para que el conocimiento científico sea accesible, relevante y parte esencial de la vida diaria de nuestra comunidad. A través de contenido educativo, noticias, proyectos comunitarios y colaboraciones con expertos, hemos construido un movimiento de divulgación que sigue creciendo y fortaleciendo la cultura científica del país.</p>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a href="<?= SERVER_URI ?>conoce.php" class="btn btn-primary text-white btn-lg fs-7 me-3">Conócenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- RECURSOS -->
    <section class="py-5 py-md-7 bg-body">
        <div class="container">
        
            <div class="row mb-3 mb-md-5">
                <div class="col-12 text-center">
                <h2 class="text-primary fw-bold text-dark">Explora nuestros recursos</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Columna 1 -->
                <div class="col-12 col-md-4">
                    <img src="<?= SERVER_URI ?>/images/educacion-recursos-1.png" alt="Imagen descriptiva 1" class="mb-3 rounded blog_image-size-y">

                    <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
                    <div class="h-100 d-flex flex-column align-items-start">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <div>
                                <h4>Postdoctorado</h4>
                                <p>Herramientas para que des el próximo paso en investigación y ganes autonomía.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Ver postdoc</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna 2 -->
                <div class="col-12 col-md-4">
                    <img src="<?= SERVER_URI ?>/images/educacion-recursos-2.png" alt="Imagen descriptiva 2" class="img-fluid mb-3 rounded blog_image-size-y">

                    <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
                    <div class="h-100 d-flex flex-column align-items-start">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <div>
                                <h4>Profesorado universitario</h4>
                                <p>Apoyo para equilibrar docencia, investigación y servicio en la universidad.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Ver facultad</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna 3 -->
                <div class="col-12 col-md-4">
                    <img src="<?= SERVER_URI ?>/images/educacion-recursos-3.png" alt="Imagen descriptiva 3" class="blog_image-size-y mb-3 rounded">

                    <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
                    <div class="h-100 d-flex flex-column align-items-start">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <div>
                                <h4>Educadores de ciencia</h4>
                                <p>Recursos y metodologías para enriquecer la enseñanza formal e informal de la ciencia.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Ver educadores</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COLABORACIONES -->
    <section class="pb-5 py-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="card bg-white border-0 rounded-20 p-5 h-100 d-flex flex-column">
                        <div class="p-0">
                            <h2 class="fs-2 fw-semibold">Únete a la red profesional de ciencia en Puerto Rico</h2>
                            <p class="fs-5 card-text fw-normal">Ya seas investigador emergente, docente universitario, educador o empresario en ciencia, este es tu espacio para conectar, crecer y contribuir.</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a href="<?= SERVER_URI ?>donativos.php#alianzasVoluntariado" class="btn btn-primary text-white btn-lg fs-7 me-3">Explorar alianzas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <img class="rounded-20 w-100 h-100 object-fit-cover" src="<?= SERVER_URI ?>images/talento-liderazgo-unete-red.png" alt="Doctor de ls comunidad de CienciaPR" >
                </div>
            </div>
        </div>
    </section>

    <!-- PATROCINADORES -->
    <?php include_once ('templates/patrocinadores.php'); ?>

</main>

<?php
include_once ('templates/footer.php');
?>