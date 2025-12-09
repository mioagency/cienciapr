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
    
    <section class="pt-8">
        <div class="container">
            <div class="row gx-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="card bg-white rounded-20 p-5">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Ciencia Boricua</h2>
                            <p class="fs-5 card-text fw-normal">es compromiso con nuestra gente, nuestras raíces y nuestro futuro. Desde los laboratorios hasta las comunidades, las voces puertorriqueñas en la ciencia están transformando la manera en que entendemos el mundo y cómo lo compartimos. CienciaPR impulsa esta misión conectando investigadores, educadores y ciudadanos en una red vibrante que celebra la curiosidad, la colaboración y el poder de la ciencia hecha en y para Puerto Rico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <img class="rounded-20 w-100 h-100 object-fit-cover"" src="<?= SERVER_URI ?>images/descubre_ciencia-boricua.webp" alt="Comunidad Ciencia Puerto Rico" >
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

    <!-- ESPACIO PARA ANUNCIO -->
    <?php include_once ('templates/fila-de-anuncio.php'); ?>

    <!-- LOOP DE NOTICIAS -->
    <?php include_once ('templates/noticias.php'); ?>

    

</main>

<?php
include_once ('templates/footer.php');
?>