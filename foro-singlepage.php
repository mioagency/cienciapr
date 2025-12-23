<?php

$PageTitle = "Foro | Ciencia Puerto Rico"; 
$page = "foro-single"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Titulo de la noticia" => SERVER_URI . 'foros.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

<!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
  <section class="container-fluid p-0 explora-hero d-flex align-items-center page-hero-bg bg-foro overflow-hidden">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Foros de la ciencia</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>            
        </div>

    </section>
    
    <!-- SECCIÓN CONTENIDO -->
    <section class="container py-6">

      <div class="row gap-5">
        
<!-- INICIO COLUMNA 1 -->
     <!-- CONTENIDO DEL FORO -->
                <article class="col">


                      <div>
                    
                        <!-- INICIO: Url de la categoría -->
                        <div class="mb-5"><a href="#" class="btn btn-success fs-6">Nombre de Categoría</a></div>        
            
                        <!-- TITULO DEL FORO -->        
                        <h2 class="fs-2 fw-semibold">ML Research Software Engineer for Neuroscience - Wu Tsai Institute</h2>
                    
                      <!-- IMAGEN + DATOS DEL USUARIO -->    
                      <div class="d-flex align-items-center py-4">
                          
                          <div class="flex-shrink-0">
                              <img src="/images/img-usuarioforo.webp" class="rounded-circle" alt="Usuario">
                          </div>

                          <div class="flex-grow-1 ms-3">
                              <p class="text-user m-0">Por Giovanna Guerrero-Medina - 11 diciembre 2025 - 10:41 am</p>
                          </div>

                      </div>

                
                        <p class="m-0">The Wu Tsai Institute seeks a Research Software Engineer to design, develop, and deploy complex software systems, driving advances in machine learning models for neuroscience and behavioral data. The position will collaborate with laboratory scientists to build data-specific pipelines for existing and new datasets to help advance research into cognition. Learn more and apply.</p>
                        
                        <h2 class="fs-3 fw-medium my-3">Salary Range</h2>
                        <p class="m-0">$90,000.00 - $165,750.00</p>
                        
                        <h2 class="fs-3 fw-medium my-3">Overview</h2>
                        <p class="m-0">The Wu Tsai Institute is a university-wide initiative with the mission to understand human cognition and explore human potential by sparking interdisciplinary inquiry. We bring together biological, psychological, and computational perspectives through shared facilities, training and mentorship, innovative faculty hiring, collaborative spaces, community-building events, and moonshot projects. We prioritize mission-driven research that bridges disciplines and advances a more integrated understanding of the mind and brain across scales and species. We aim to connect this understanding with other sectors of society to gain insight into the broader use and impact of research.

The Institute seeks a highly motivated and skilled Research Software Engineer to join our dynamic team at Yale University. Working closely with the Director of the Center for Neurocomputation and Machine Intelligence and reporting to the Managing Director, the incumbent joins a team science initiative at the Institute titled Grand Challenges in Cognition to create new machine learning models including large language models of the brain and of neuroscience. This role involves working with scientists across labs to understand their data and build workflows to prepare their data for use in AI models. The work includes systematically surveying and cataloging a wide range of research across multiple laboratories and external, publicly available datasets.</p>
                        
                        <h2 class="fs-3 fw-medium my-3">Major Responsibilities:</h2>
                        <ol>
                            <li>Interface with neuroscientists to understand their research methods and workflows.</li>
                            <li>Systematically survey, evaluate, and catalog ongoing research and existing datasets at shared/open data repositories.</li>
                            <li>Collaborate with data scientists and software engineers to map data into desirable formats.</li>
                            <li>Build data-specific pipelines for pre-processing, visualization, and quality control.</li>
                            <li>Lead training sessions for neuroscientists and specialists, ensuring they are equipped with the necessary skills and knowledge to make the best use of software and datasets developed.</li>
                        </ol>

                        <h2 class="fs-3 fw-medium my-3">Required Skills and Abilities</h2>
                        <ol>
                            <li>Solid coding skills and good experience in AI/ML; demonstrated ability to translate experience from an equivalent language</li>
                            <li>Familiarity with GPU computing environments and ML frameworks and libraries.</li>
                            <li>Ability to execute multiple simultaneous data-oriented projects with impeccable quality and attention to detail.</li>
                            <li>Strong written and oral technical communication skills, including when interacting with non-technical audiences.</li>
                            <li>Strong leadership and team skills with the ability to manage multiple projects and stakeholders.</li>
                        </ol>

                        <h2 class="fs-3 fw-medium my-3">Required Education</h2>
                        <p class="m-0">Requires a bachelor's degree in a related area and 4-6 years of experience in the field or in a related area.</p>

                        <h2 class="fs-3 fw-medium my-3">Preferred Skills and Abilities</h2>
                        <ol>
                            <li>Advanced degree in computer science, engineering, or related field.</li>
                            <li>Familiarity working with various modalities of neural, cognitive, and/or behavioral data from public or internal sources.</li>
                            <li>Experience working with researchers to understand their data and build workflows to prepare their data for use in AI models.</li>
                            <li>Experience leading training sessions on data workflows.</li>
                        </ol>
                

                    <!-- COMPARTIR FORO + REDES -->    
                    <div class="row align-items-center mt-5 gap-4">
                        
                        <div class="col-md-7 text-center text-md-start">
                            <p class="m-0 fw-bold fs-5">Comparte esta noticia</p>
                        </div>

                        <div class="col-md-4 text-center text-md-end">
                          <a href="#" class="text-light me-2 px-2 py-1 bg-success rounded-2 text-dark"><i class="fab fa-facebook-f"></i></a>
                          <a href="#" class="text-light me-2 px-2 py-1 bg-success rounded-2 text-dark"><i class="fab fa-instagram"></i></a>
                          <a href="#" class="text-light me-2 px-2 py-1 bg-success rounded-2 text-dark"><i class="fab fa-twitter"></i></a>
                          <a href="#" class="text-light me-2 px-2 py-1 bg-success rounded-2 text-dark"><i class="fab fa-tiktok"></i></a>
                          <a href="#" class="text-light px-2 py-1 bg-success rounded-2 text-dark"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>

              <!-- ESPACIO PARA ANUNCIO -->
                  <section class="pt-4">
                    <?php include_once ('templates/fila-de-anuncio.php'); ?>
                </section>

              <!-- FORMULARIO PARA COMENTAR -->
                <section>
                    <!-- Formulario de Comentario -->

                    <h2 class="fs-3 fw-bold">Añade un Comentario</h2>
                    <form class="card border-0 p-4 bg-white mt-4">

                      <!-- Nombre del usuario -->
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                      </div>

                      <!-- Asunto -->
                      <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" class="form-control" id="asunto" placeholder="Escribe el asunto">
                      </div>

                      <!-- Comentario -->
                      <div class="mb-3">
                        <label for="comentario" class="form-label">Comentario</label>
                        <textarea class="form-control" id="comentario" rows="4" placeholder="Escribe tu comentario"></textarea>
                      </div>

                      <!-- Formato de texto -->
                      <div class="mb-3">
                        <label for="formato" class="form-label">Formato de texto</label>
                        <select class="form-select" id="formato">
                          <option selected>Texto plano</option>
                          <option>Negrita</option>
                          <option>Cursiva</option>
                          <option>Subrayado</option>
                        </select>
                      </div>

                      <!-- Botones -->
                      <div class="d-flex gap-3">
                        <button type="submit" class="btn btn-primary text-white">Guardar</button>
                        <button type="button" class="btn btn-outline-secondary text-hover-white" onclick="mostrarVistaPrevia()">Vista previa</button>
                      </div>
                    </form>

                    <!-- Vista previa -->
                    <div id="vistaPrevia" class="card mt-4 p-4 d-none">
                      <h4 class="mb-3">Vista previa del comentario</h4>
                      <p><strong>Nombre:</strong> <span id="prevNombre"></span></p>
                      <p><strong>Asunto:</strong> <span id="prevAsunto"></span></p>
                      <p><strong>Comentario:</strong> <span id="prevComentario"></span></p>
                      <p><strong>Formato:</strong> <span id="prevFormato"></span></p>
                    </div>
                  </section>

                </div>

            </article>
<!-- FIN COLUMNA 1 -->       
        
            

<!-- INICIO COLUMNA ASIDE -->

    <aside class="col-lg-4">
              <!-- FORM BUSCADOR -->
                <div>
                    <form class="position-relative" role="search" style="max-width:auto;">
                        <input class="form-control p-3 bg-white" type="search" placeholder="Buscar..." aria-label="Search">
                        <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-4"></i>
                    </form>
                </div>

            <div>
            <!-- CABECERA Y CONTROLES -->
                <div class="d-flex align-items-center justify-content-between mt-5">
                    <h2 class="fs-3 fw-bold">Nuestras iniciativas</h2>
                    <!-- Botones de navegación -->
                    <div class="pt-3 pt-md-0 d-flex">
                        <button class="btn bg-white rounded-circle p-0" style="width: 32px; height: 32px;" id="btnPrev" aria-label="Anterior">
                            <i class="fa-solid fa-arrow-left text-user"></i>
                        </button>
                        <button class="btn bg-white rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="btnNext" aria-label="Siguiente">
                            <i class="fa-solid fa-arrow-right text-user"></i>
                        </button>
                    </div>
                </div>
            <!-- FIN CABECERA Y CONTROLES -->

            <!-- LINEA SEPARADORA -->
                <div class="cpr-border">
                  <div class="progress-bar"></div>
                </div>
            <!-- FIN LINEA SEPARADORA -->

    <div class="container-fluid pt-4 px-0">

      <!-- 
        CONTENEDOR DEL SLIDER 
        - row flex-nowrap: Alinea horizontalmente sin saltar de línea.
        - overflow-x-auto: Activa el scroll.
        - g-4: Espacio entre tarjetas (gap).
      -->
      <div id="sliderContainer" class="row flex-nowrap overflow-x-auto no-scrollbar g-4 p-0 scroll-smooth">
          
          <!-- ITEM 1 -->
          <!-- 
              col-11: Móvil (91%)
              col-md-5: Tablet (41%)
              col-lg-peek-3: Desktop (30%)
          -->
        <!-- Columna 1 -->
        <div class="mt-5">
          <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
          <div class="h-100 d-flex bg-white flex-column align-items-start rounded-4">
            <img src="<?= SERVER_URI ?>images/ico-1.svg" alt="Imagen descriptiva 1" class="img-fluid mb-3 rounded">
            <div class="h-100 p-4 d-flex flex-column justify-content-between align-items-start">
              <div>
                <h3>Participación Pública</h3>
                <p>Promovemos decisiones basadas en evidencia y la participación de la ciencia en políticas sociales y comunitarias.</p>
              </div>
              <div>
                <a href="#" class="btn btn-lg fs-8 btn-outline-secondary text-hover-white">Leer más</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Columna 2 -->
        <div class="mt-5">
          <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
          <div class="h-100 d-flex bg-white flex-column align-items-start rounded-4">
            <img src="<?= SERVER_URI ?>images/ico-2.svg" alt="Imagen descriptiva 1" class="img-fluid mt-3 mb-3 rounded">
            <div class="h-100 p-4 d-flex flex-column justify-content-between align-items-start">
              <div>
                <h3>Educación K-12</h3>
                <p>Creando experiencias significativas en ciencia para estudiantes mediante recursos culturales, charlas y formación docente.</p>
              </div>
              <div>
                <a href="#" class="btn btn-lg fs-8 btn-outline-secondary text-hover-white">Leer más</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Columna 3 -->
        <div class="mt-5">
          <!-- Se añade d-flex flex-column y align-items-center para estructura vertical -->
          <div class="h-100 d-flex bg-white flex-column align-items-start rounded-4">
            <img src="<?= SERVER_URI ?>images/ico-3.svg" alt="Imagen descriptiva 1" class="img-fluid mt-2 mb-3 rounded">
            <div class="h-100 p-4 d-flex flex-column justify-content-between align-items-start">
              <div>
                <h3>Desarrollo Profesional</h3>
                <p>Potenciamos carreras científicas con tutoría, redes, becas y programas como Yale Ciencia Academy.</p>
              </div>
              <div>
                <a href="#" class="btn btn-lg fs-8 btn-outline-secondary text-hover-white">Leer más</a>
              </div>
            </div>
          </div>
        </div>
     </div>
  </div>
</div>

  <!-- SLIDER MIEMBROS -->

<div class="slider-wrapper">
  <div class="d-flex align-items-center justify-content-between mt-5">
      <h2 class="fs-3 fw-bold">Nuestros miembros</h2>
      <!-- Botones de navegación -->
      <div class="pt-3 pt-md-0 d-flex">
          <button class="btn-prev btn bg-white rounded-circle p-0" style="width: 32px; height: 32px;" id="btnPrev" aria-label="Anterior">
              <i class="fa-solid fa-arrow-left text-user"></i>
          </button>
          <button class="btn-next btn bg-white rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="btnNext" aria-label="Siguiente">
              <i class="fa-solid fa-arrow-right text-user"></i>
          </button>
      </div>
  </div>

  <!-- FIN CABECERA Y CONTROLES -->
             
            <!-- LINEA SEPARADORA -->
                <div class="cpr-border">
                  <div class="progress-bar"></div>
                </div>
            <!-- FIN LINEA SEPARADORA -->

  <div class="slider-container d-flex overflow-x-auto no-scrollbar gap-4 mt-5">
      
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column justify-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
      <div class="h-100 member d-flex flex-column align-items-center card-member">
        <a href="#"><img src="/images/miembro1.jpg" alt="Imagen miembros1" class="mb-3"></a>
        <div class="d-flex flex-column">
          <div>
            <p class="m-0 text-center">Gabriel Lázaro-Muñoz, PhD, JD</p>
            </div>
          </div>
      </div>
    
  </div>
</div>

<!-- END SLIDER MIEMBRES -->


  <!-- SECCION CONECTATE CON NOSOTROS -->
        <div class="d-flex align-items-center justify-content-between mt-5">
            <h2 class="fs-3 fw-bold">Conéctate con nosotros</h2>
        </div>
    
     <!-- LINEA SEPARADORA -->
          <div class="cpr-border">
              <div class="progress-bar"></div>
          </div>
     <!-- FIN LINEA SEPARADORA -->

     <!-- PLUGIN REDES -->
<div class="p-4 bg-white mt-5 rounded-4">
  <p class="m-0 fs-5 fw-bold">Colocar código del plugin de las redes</p>
</div>
<!-- FIN SECCION CONECTATE CON NOSOTROS -->


     <!-- SECCION INGRESA A UIPR -->
        <div class="mt-5">
            <h2 class="fs-3 fw-bold">Ingresa a UPR - IPERT</h2>
        </div>
    
     <!-- LINEA SEPARADORA -->
          <div class="cpr-border">
              <div class="progress-bar"></div>
          </div>
     <!-- FIN LINEA SEPARADORA -->
      
      <div class="mt-5 bg-white p-3">
          <a href="#"><img src="/images/UPR-IPERT logo.svg" alt="Imagen UPR"></a>
      </div>
      <!-- FIN SECCION INGRESA A UIPR -->


<!-- INICIO SLIDER NOTICIAS CIENTIFICAS -->

<div class="slider-wrapper">
  <div class="d-flex align-items-center justify-content-between mt-5">
      <h2 class="fs-3 fw-bold">Noticias científicas</h2>
      <!-- Botones de navegación -->
      <div class="pt-3 pt-md-0 d-flex">
          <button class="btn-prev btn bg-white rounded-circle p-0" style="width: 32px; height: 32px;" id="btnPrev" aria-label="Anterior">
              <i class="fa-solid fa-arrow-left text-user"></i>
          </button>
          <button class="btn-next btn bg-white rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="btnNext" aria-label="Siguiente">
              <i class="fa-solid fa-arrow-right text-user"></i>
          </button>
      </div>
  </div>

  <!-- FIN CABECERA Y CONTROLES -->
             
            <!-- LINEA SEPARADORA -->
                <div class="cpr-border">
                  <div class="progress-bar"></div>
                </div>
            <!-- FIN LINEA SEPARADORA -->

    <div class="slider-container d-flex overflow-x-auto no-scrollbar row flex-nowrap gap-4 mt-5">
      
      <!-- CONTENEDOR GROUP 1 -->
        <div class="member d-flex flex-column gap-3">

          <div class=" bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

        </div>
    <!-- FIN CONTENEDOR GROUP 1 -->


    <!-- CONTENEDOR GROUP 2 -->
        <div class="member d-flex flex-column gap-3">

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

        </div>
    <!-- FIN CONTENEDOR GROUP 2 -->

    <!-- CONTENEDOR GROUP 3 -->
        <div class="member d-flex flex-column gap-3">

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

        </div>
    <!-- FIN CONTENEDOR GROUP 3 -->

    <!-- CONTENEDOR GROUP 4 -->
        <div class="member d-flex flex-column gap-3">

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

        </div>
    <!-- FIN CONTENEDOR GROUP 4 -->

    <!-- CONTENEDOR GROUP 5 -->
        <div class="member d-flex flex-column gap-3">

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

          <div class="bg-white p-3 rounded-3 d-flex flex-column align-items-start shadow-sm">
              <a href="#" class="btn btn-success fs-6">Noticias Científicas</a>
              <a href="#" class="m-0 pt-2 text-decoration-none text-reset">¡Viva el líder comunitario, tabonucos de Puerto Rico!</a>
          </div>

        </div>
    <!-- FIN CONTENEDOR GROUP 5 -->
      
      </div>
    </div>
<!-- FIN SLIDER NOTICIAS CIENTIFICAS -->


<!-- INICIO NEWSLETTER -->
        <div class="mt-5">
            <h2 class="fs-3 fw-bold">Suscríbete al Newsletter</h2>
        </div>
    
     <!-- LINEA SEPARADORA -->
          <div class="cpr-border">
              <div class="progress-bar"></div>
          </div>
      <!-- FIN LINEA SEPARADORA -->

      <!-- FORM NEWSLETTER -->      
          <form class="d-flex flex-column mt-5">
            <input class="form-control bg-white p-3" type="email" placeholder="Ingresa tu correo">
            <button class="btn btn-success mt-3 p-3" type="submit">Suscribirme</button>
          </form>
          <div class="mt-2">
              <div>Al registrarme, acepto los <a href="#" class="m-0 text-decoration-none fw-bold text-reset">Términos y Condiciones</a></div>
          </div>
      <!-- FIN NEWSLETTER -->

  </aside>

<!-- FIN COLUMNA ASIDE -->

</div>

</section>

</main>
<?php
include_once ('templates/footer.php');
?>
