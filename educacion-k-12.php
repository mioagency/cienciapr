<?php

$PageTitle = "Educación K-12 | Ciencia Puerto Rico"; 
$page = "educación"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Educación K-12" => SERVER_URI . 'educacion-k-12.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 explora-hero page-hero-bg bg-img_educacion-k12 d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Educación K-12</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
    </section>

    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="py-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="card bg-white rounded-20 p-5 h-100 d-flex flex-column justify-content-center">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">¿Tienes interés en una carrera científica?</h2>
                            <p class="fs-5 card-text fw-normal">En nuestras páginas encontrarás información sobre oportunidades de investigación y entrenamiento, becas, fondos y otros recursos que te ayudarán a familiarizarte con carreras científicas y adquirir la experiencia necesaria para lograr tus metas académicas y profesionales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <img class="rounded-20 w-100 h-100 object-fit-cover" src="<?= SERVER_URI ?>images/educacion-2section.jpg" alt="Comunidad Ciencia Puerto Rico" >
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 bg-tertiary pattern-grey">
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
              <img src="<?= SERVER_URI ?>images/iniciativas-semillas.jpg" class="card-img-top border-bottom border-8 border-primary" alt="Convocatorias">
              <div class="card-body d-flex flex-column justify-content-between p-4">
                <div>
                  <h3>Semillas de Triunfo</h3>
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
              <img src="<?= SERVER_URI ?>images/iniciativas-centificos-servicio.jpg" class="card-img-top border-bottom border-8 border-primary" alt="Programas">
              <div class="card-body d-flex flex-column justify-content-between p-4">
                <div>
                  <h3>Científicos al Servicio</h3>
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
              <img src="<?= SERVER_URI ?>images/iniciativas--yale-academy.jpg" class="card-img-top border-bottom border-8 border-primary" alt="Eventos">
              <div class="card-body d-flex flex-column justify-content-between p-4">
                <div>
                  <h3>Yale Ciencia Academy</h3>
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
              <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-primary" alt="Convocatorias">
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

          <!-- ITEM 5 -->
          <div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
            <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
              <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-primary" alt="Convocatorias">
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
              <img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-primary" alt="Convocatorias">
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

 <!-- ESPACIO PARA ANUNCIO -->
    <?php include_once ('templates/fila-de-anuncio.php'); ?>

    <!-- SECCIÓN IMPACTO -->
    <section class="my-7 bg-white">
        <div class="container-fluid px-0">
            <div class="container-xxl px-4">
                <div class="row gx-3 gy-4 gy-sm-0">
                    <!-- Columna 1 -->
                    <div class="col-12 col-md-3">
                        <h3>Título 1</h3>
                        <p>Contenido de la columna 1</p>
                    </div>

                    <!-- Columna 2 -->
                    <div class="col-12 col-md-3">
                        <img src="<?= SERVER_URI ?>images/educacion-seccion-numeros.jpg" alt="Descripción de imagen" class="w-100 h-100 object-fit-cover">
                    </div>

                    <!-- Columna 3 -->
                    <div class="col-12 col-md-6">
                        <h2 class="fs-2 fw-semibold">Impactando generaciones a través de la ciencia y la educación</h2>
                        <p class="fs-5 card-text fw-normal">Ciencia Puerto Rico ha conectado a miles de estudiantes con experiencias que despiertan la curiosidad y fortalecen su aprendizaje. A través de programas, mentorías y recursos educativos, seguimos formando jóvenes comprometidos con el conocimiento y el futuro de la ciencia en Puerto Rico.</p>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Conócenos</a>
                            </div>
                        </div>
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
                <h2 class="text-primary fw-bold text-dark">Avances científicos con impacto puertorriqueño</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Columna 1 -->
                <div class="col-12 col-md-4">
                    <img src="<?= SERVER_URI ?>/images/descubre_blog-1.webp" alt="Imagen descriptiva 1" class="mb-3 rounded blog_image-size-y">

                    <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
                    <div class="h-100 d-flex flex-column align-items-start">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <div>
                                <h4>Ciencia Puerto Rico presenta el libro Siembra tu Semilla de Triunfo</h4>
                                <p>La publicación es una invitación a la juventud para descubrir el impacto transformador de las disciplinas STEM en sus vidas y comunidades...</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-lg fs-8 btn-outline-secondary text-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna 2 -->
                <div class="col-12 col-md-4">
                    <img src="<?= SERVER_URI ?>/images/descubre_blog-2.webp" alt="Imagen descriptiva 2" class="img-fluid mb-3 rounded blog_image-size-y">

                    <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
                    <div class="h-100 d-flex flex-column align-items-start">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <div>
                                <h4>El acetaminofén y el embarazo</h4>
                                <p>Esta columna fue publicada en la sección de Opinión de El Nuevo Día como parte de la colaboración entre CienciaPR y ese medio...</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-lg fs-8 btn-outline-secondary text-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna 3 -->
                <div class="col-12 col-md-4">
                    <img src="<?= SERVER_URI ?>/images/descubre_blog-3.webp" alt="Imagen descriptiva 3" class="blog_image-size-y mb-3 rounded">

                    <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
                    <div class="h-100 d-flex flex-column align-items-start">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <div>
                                <h4>Ni el Tylenol (ni las vacunas) causan autismo</h4>
                                <p>El pasado lunes 22 de septiembre el presidente de los Estados Unidos Donald Trump afirmó falsamente que consumir acetaminofén o paracetamol (ingrediente activo en Tylenol...</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-lg fs-8 btn-outline-secondary text-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Únete a la comunidad</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container">
            <div class="row gx-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="card bg-white rounded-20 p-5 h-100 d-flex flex-column justify-content-center">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Colaboramos para transformar la educación científica</h2>
                            <p class="fs-5 card-text fw-normal">Nuestro impacto es posible gracias a una red de organizaciones, universidades, escuelas y profesionales que comparten nuestra misión de acercar la ciencia a todas las comunidades.  
                            </br></br>   
                            Juntos creamos oportunidades, impulsamos proyectos y fortalecemos el futuro científico de Puerto Rico.</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Explorar alianzas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <img class="rounded-20 w-100 h-100 object-fit-cover" src="<?= SERVER_URI ?>images/educacion-seccion-alianza.jpg" alt="Doctor de ls comunidad de CienciaPR" >
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