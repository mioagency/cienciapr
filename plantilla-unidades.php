<?php

$PageTitle = "Plantilla para Unidades | Ciencia Puerto Rico";
$page = "plantilla"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Plantilla Unidades" => SERVER_URI . 'recursos-educativos.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 descubre-hero d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Plantilla para Unidades</h1>
            
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
                            <h2 class="fs-2 fw-semibold">Título principal para la sección</h2>
                            <p class="fs-5 card-text fw-normal">The industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/educacion-2section.jpg" alt="Comunidad Ciencia Puerto Rico" >
                </div>
            </div>
        </div>
    </section>

    <section id="servicios-contrataciones" class="container-fluid pb-4 pb-lg-8">
		<h2 class="fs-2 fw-bold text-body text-center mb-4">Recursos de la unidad</h2>
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pt-3">
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<h3 class="card-title fw-bold mb-3">Recurso #1</h3>
							<p class="fs-6 text-body">Lorem ipsum dolor sit amet consectetur. Scelerisque nulla vel faucibus magna ac lectus nec enim.</p>
							<a href="#" class="btn btn-outline-secondary text-body mt-3 me-auto">Leer más</a>
						</div>
					</div>
				</div>
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<h3 class="card-title fw-bold mb-3">Recurso #2</h3>
							<p class="fs-6 text-body">Lorem ipsum dolor sit amet consectetur. Scelerisque nulla vel faucibus magna ac lectus nec enim.</p>
							<a href="#" class="btn btn-outline-secondary text-body mt-3 me-auto">Leer más</a>
						</div>
					</div>
				</div>
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<h3 class="card-title fw-bold mb-3">Recurso #3</h3>
							<p class="fs-6 text-body">Lorem ipsum dolor sit amet consectetur. Scelerisque nulla vel faucibus magna ac lectus nec enim.</p>
							<a href="#" class="btn btn-outline-secondary text-body mt-3 me-auto">Leer más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-tertiary text-white fs-6">Cargar más recursos</a></div>
	</section>

    <!-- SECCION NOTICIAS -->
    <?php
	include_once('templates/noticias.php');
    ?>

    <section class="mt-2 mt-md-7 py-7 pattern-grey-2">
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