<?php

$PageTitle = "Ciencia Boricua | Ciencia Puerto Rico";
$page = "descubre";

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Descubre" => SERVER_URI . 'ciencia-boricua.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>
    
     <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 explora-hero d-flex align-items-center page-hero-bg bg-img_ciencia-boricua overflow-hidden">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Descubre</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
        
    </section>
    
    <section class="pt-5 pt-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 bg-white rounded-20 p-5 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Ciencia Boricua</h2>
                            <p class="fs-5 card-text fw-normal">es compromiso con nuestra gente, nuestras raíces y nuestro futuro. Desde los laboratorios hasta las comunidades, las voces puertorriqueñas en la ciencia están transformando la manera en que entendemos el mundo y cómo lo compartimos. CienciaPR impulsa esta misión conectando investigadores, educadores y ciudadanos en una red vibrante que celebra la curiosidad, la colaboración y el poder de la ciencia hecha en y para Puerto Rico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/descubre_ciencia-boricua.webp" alt="Comunidad Ciencia Puerto Rico">
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3 COLUMNAS -->
    <section id="blogCiencia" class="py-7 bg-body">
        <div class="container">
        
            <div class="row mb-4">
                <div class="col-12 text-center">
                <h2 class="text-primary fw-bold text-dark">Avances científicos con impacto puertorriqueño</h2>
                </div>
            </div>

            <div class="row gy-5">
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

    <!-- LOOP DE NOTICIAS -->
    <section id="noticias" class="py-8 bg-primary pattern-grey">
        <?php include_once ('templates/noticias.php'); ?>
    </section>

    <!-- PERFILES -->
    <section id="perfiles" class="py-5 py-md-8">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto text-center d-flex flex-column gap-3">
                    <h2 class="fs-2 fw-semibold">Perfiles de la Ciencia Boricua</h2>
                    <p class="fs-5 card-text fw-normal">Cada mes resaltamos el trabajo de un miembro de CienciaPR que se ha distinguido por su trabajo o discutimos un tema de interés y relevancia para nuestra comunidad.</p>
                </div>
                <div id="perfiles" class="col-12 loop-element-border mx-auto border-0 bg-white card rounded-20 p-4 mt-4 gap-4">
                    <div class="row ">
                        <div class="col-12 col-md-4">
                            <img src="<?= SERVER_URI ?>images/ciencia-solidaridad.jpg" class="img-fluid" alt="Profile Image">
                        </div>
                        <div class="col-12 col-md-8 px-4 d-flex flex-column gap-2 pt-3 pt-sm-0 justify-content-center">
                            <h4>¡Qué vivan los líderes comunitarios, tabonucos de Puerto Rico!</h4>
                            <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Mónica Ivelisse Feliú-Mójer | Marzo 2, 2024</small>
                            <p class="card-text fw-normal">Los líderes y lideresas comunitarias de Puerto Rico son fibra esencial de nuestro país. Constituyen una importante red de apoyo y de seguridad para un sinnúmero de personas, en especial aquellas que son vulneradas y marginadas...</p>
                            <a href="#" class="btn btn-light text-primary align-self-start">Leer más</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="<?= SERVER_URI ?>images/seCaribe.jpg" class="img-fluid" alt="Profile Image">
                        </div>
                        <div class="col-12 col-md-8 px-4 d-flex flex-column gap-2 pt-3 pt-sm-0 justify-content-center">
                            <h4>SECARIBE: Investigando conexiones entre las sequías del Caribe y el polvo del Sahara</h4>
                            <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Joel Alejandro Mercado-Díaz | Junio 14, 2022</small>
                            <p class="card-text fw-normal">En 2015, 75 de los 78 municipios de Puerto Rico se vieron afectados por una sequía que causó escasez severa y racionamientos en los suministros de agua. Según el Monitor de Sequías de Estados Unidos, ésta ha sido la sequía más...</p>
                            <a href="#" class="btn btn-light text-primary align-self-start">Leer más</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="<?= SERVER_URI ?>images/mariposas-en-el-yunque.jpg" class="img-fluid" alt="Profile Image">
                        </div>
                        <div class="col-12 col-md-8 px-4 d-flex flex-column gap-2 pt-3 pt-sm-0  justify-content-center">
                            <h4>Buscando mariposas bajo la luna nueva en El Yunque</h4>
                            <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Mónica Ivelisse Feliú-Mójer | Marzo 2, 2024</small>
                            <p class="card-text fw-normal">Iba caminando y pensando dos cosas: en que ya no aguantaba las piernas y en que quería ver un coquí. Llevábamos casi cuatro horas bosque adentro en El Yunque. Aunque quería mirar hacia arriba y apreciar el revolú de estrellas...</p>
                            <a href="#" class="btn btn-light text-primary align-self-start">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Ver más</a>
                </div>
            </div>

            </div>
        </div>
    </section>

    <section id="cienciaBoricuaTV" class="pb-5 pb-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">CienciaPR TV</h2>
                            <p class="fs-5 card-text fw-normal">La serie presenta videos cortos desarrollados para complementar el currículo de ciencia de 7mo a 9no grado y contiene ejemplos positivos de científicos, ingenieros, y profesionales en carreras tecnológicas, además de ilustrar las ciencias de manera excitante y relevante para las vidas de estudiantes puertorriqueños.</p>
                            <p class="fs-5 card-text fw-normal">A través de la narración de <a href="https://www.cienciapr.org/en/user/yajaira" target="_blank"> Yajaira Sierra-Sastre</a>, una joven científica y educadora, los estudiantes observarán estrellas con la Sociedad Astronómica del Caribe, visitarán el Radiotelescopio de Arecibo, escucharán consejos del astronauta puertorriqueño Joseph Acabá y observarán cómo investigaciones de científicos puertorriqueños están revolucionando la exploración espacial.</p>
                            <p class="fs-5 card-text fw-normal">Los videos están acompañados de guías para maestros que facilitan la integración del recurso al salón de clases.</p>
                            <div class="col">
                                <a href="https://www.youtube.com/" target="_blank" class="fs-7 btn bg-white d-inline-flex align-items-center shadow rounded-3 text-decoration-none px-3 py-2" style="border: 1px solid #eef0f2;">
                                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-3">
                                        <rect x="2" y="4" width="20" height="16" rx="4" fill="#EE1D23"/>
                                        <path d="M10 8.5L16 12L10 15.5V8.5Z" fill="white"/>
                                    </svg>
                                    <span class="text-dark fw-normal fs-6">Accede a nuestro canal en YouTube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/video-placeholder.webp" alt="CienciaPr en YouTube">
                </div>
            </div>
        </div>
    </section>
    <section id="juevesCienciaBoricua" class="pb-5 py-md-8 pattern-grey-2">
        <div class="container">
            <div class="row p-3">
                <div class="col-md-10 bg-primary rounded-20 mx-auto">
                    <div class="row mx-md-5 my-4 d-flex flex-column flex-md-row p-2">
                        <div class="col col-md-6">
                            <h2 class="fs-2 text-white">¡Es jueves de Ciencia Boricua!</h2>
                        </div>
                        <div class="col col-md-6">
                            <p class="fs-7 text-white">Hoy celebramos el poder transformador de la ciencia hecha en y para Puerto Rico. Con cada historia, cada descubrimiento, y cada voz boricua en STEM, construimos un futuro más justo, sabio y resiliente.</p>
                            <div class="col-md-6 text-center text-md-start social-icons d-flex flex-row gap-1">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-tiktok"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
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