<?php

$PageTitle = "Semillas de Triunfo | Ciencia Puerto Rico";
$page = "semillas-de-triunfo.php"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Semillas de Triunfo" => SERVER_URI . 'semillas-de-triunfo.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 recursos-hero d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Semillas de Triunfo</h1>
            
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
                            <h2 class="fs-2 fw-semibold">Despierta tu curiosidad científica desde la escuela</h2>
                            <p class="fs-5 card-text fw-normal">Descubre el poder de la curiosidad y aprende cómo la ciencia está presente en todo lo que te rodea. En esta sección encontrarás oportunidades, programas y recursos diseñados para estudiantes de primaria y secundaria que quieren explorar, experimentar y construir un futuro lleno de descubrimientos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/1-semillas-de-triunfo.webp" alt="Comunidad Ciencia Puerto Rico" >
                </div>
            </div>
        </div>
    </section>

    <section id="servicios-contrataciones" class="container-fluid pb-4 pb-lg-8">
		<h2 class="fs-2 fw-bold text-body text-center mb-4">Más sobre Semillas de Triunfo</h2>
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pt-3">
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4 text-center">
							<h3 class="card-title fw-bold mb-3">Estudiantes</h3>
							<a href="#" class="btn btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
						</div>
					</div>
				</div>
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4 text-center">
							<h3 class="card-title fw-bold mb-3">Madres / Padres / Tutores</h3>
							<a href="#" class="btn btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
						</div>
					</div>
				</div>
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4 text-center">
							<h3 class="card-title fw-bold mb-3">Mentoras</h3>
							<a href="#" class="btn btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SECCIÓN: RECURSOS EDUCATIVOS -->
	<section id="recursos-educativos" class="container-fluid py-3 pt-md-3 pb-md-6">
		<div class="container">
			
			<!-- CABECERA DE LA SECCIÓN (TÍTULO Y BOTONES) -->
			<div class="row mb-4 align-items-center">
				<div class="col-12 text-center mb-3">
					<h2 class="fs-2 fw-bold text-body">Recursos</h2>
				</div>
			</div>

			<!-- CARRUSEL DE CARDS CON NAVEGACIÓN EXTERNA -->
			<!-- AÑADIDO: g-0 para eliminar el espacio lateral y flexbox para los botones -->
			<div class="row carousel-navigable g-0">
				
				<!-- Columna 1 (Flecha Izquierda) -->
				<div class="col-1 d-none d-lg-flex align-items-center justify-content-center">
					<button class="btn bg-white bg-opacity-50 rounded-circle shadow-lg carousel-prev-btn" aria-label="Anterior">
						<i class="fas fa-chevron-left text-primary"></i>
					</button>
				</div>
				
				<!-- Columna 2 (Contenedor Deslizable de Cards) -->
				<div class="col-12 col-lg-10"> 
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3 carousel-scrollable carousel-content scroll-snap">
						<!-- Card 1 -->
						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="position-relative">
									<img src="<?= SERVER_URI ?>images/educacion-recursos-1.webp" 
											class="card-img-top w-100" 
											alt="Descripción representativa de la imagen"
											style="height: 200px; object-fit: cover;">
									<div>
										<a href="<?= SERVER_URI ?>plantilla-unidades.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-absolute text-nowrap top-0 start-0 m-3" style="z-index: 1;">Maestros</a>
									</div>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
						<!-- Card 2 -->
						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="position-relative">
									<img src="<?= SERVER_URI ?>images/educacion-recursos-2.webp" 
											class="card-img-top w-100" 
											alt="Descripción representativa de la imagen"
											style="height: 200px; object-fit: cover;">
									<div>
										<a href="<?= SERVER_URI ?>plantilla-unidades.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-absolute text-nowrap top-0 start-0 m-3" style="z-index: 1;">Estudiantes</a>
									</div>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
						<!-- Card 3 -->
						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="position-relative">
									<img src="<?= SERVER_URI ?>images/educacion-recursos-3.webp" 
											class="card-img-top w-100" 
											alt="Descripción representativa de la imagen"
											style="height: 200px; object-fit: cover;">
									<div>
										<a href="<?= SERVER_URI ?>plantilla-unidades.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-absolute text-nowrap top-0 start-0 m-3" style="z-index: 1;">Estudiantes</a>
									</div>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
						<!-- Card 4 -->
						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="position-relative">
									<img src="<?= SERVER_URI ?>images/educacion-recursos-1.webp" 
											class="card-img-top w-100" 
											alt="Descripción representativa de la imagen"
											style="height: 200px; object-fit: cover;">
									<div>
										<a href="<?= SERVER_URI ?>plantilla-unidades.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-absolute text-nowrap top-0 start-0 m-3" style="z-index: 1;">Estudiantes</a>
									</div>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
						<!-- Card 5 -->
						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="position-relative">
									<img src="<?= SERVER_URI ?>images/educacion-recursos-1.webp" 
											class="card-img-top w-100" 
											alt="Descripción representativa de la imagen"
											style="height: 200px; object-fit: cover;">
									<div>
										<a href="<?= SERVER_URI ?>plantilla-unidades.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-absolute text-nowrap top-0 start-0 m-3" style="z-index: 1;">Estudiantes</a>
									</div>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-tertiary text-white mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Columna 3 (Flecha Derecha) -->
				<div class="col-1 d-none d-lg-flex align-items-center justify-content-center">
					<button class="btn bg-white bg-opacity-50 rounded-circle shadow-lg carousel-next-btn" aria-label="Siguiente">
						<i class="fas fa-chevron-right text-primary"></i>
					</button>
				</div>

			</div>
			
			<div class="row mt-5">
				<div class="col-12 text-center">
					<a href="#" class="btn btn-tertiary text-white fs-6">Ver todos los recursos</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Historias que Inspiran -->
	<section id="historias-inspiran" class="container-fluid bg-tertiary py-5">
		<div class="container">
			
			<div class="row mb-5 align-items-center">
				<div class="col-12 text-center text-white">
					<h2 class="fs-1 fw-bold mb-3">Historias que inspiran</h2>
					<p class="fs-5 fw-light mx-auto" style="max-width: 700px;">
						Jóvenes que descubrieron su pasión por la ciencia y transforman sus comunidades con el apoyo de nuestra red.
					</p>
				</div>
			</div>

			<div class="row align-items-center carousel-navigable">
				
				<div class="col-1 d-none d-lg-flex justify-content-center">
					<button class="btn bg-white bg-opacity-75 rounded-circle shadow-sm carousel-prev-btn d-flex align-items-center justify-content-center" 
						style="width: 40px; height: 40px;" 
						aria-label="Anterior">
						<i class="fas fa-chevron-left text-tertiary"></i>
					</button>
				</div>
				
				<div class="col-12 col-lg-10">
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3 carousel-scrollable carousel-content scroll-snap">
						
						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card bg-white h-100 rounded-4 border-0 shadow-sm p-4">
								<div class="card-body d-flex flex-column align-items-start text-start p-0">
									
									<div class="mb-3 w-100">
										<i class="fa-solid fa-quote-left text-warning fs-1 opacity-50 me-2"></i>
										<div class="d-inline-block text-warning small">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>

									<p class="card-text mb-4 text-secondary">
										"Gracias a Semillas de Triunfo aprendí que la ciencia no está lejos de mí. Hoy sueño con ser ingeniera biomédica y crear soluciones que mejoren vidas."
									</p>

									<div class="mt-auto">
										<h5 class="fw-bold mb-0 fs-6">Valeria Rodríguez</h5>
										<small class="text-muted">Escuela Secundaria, Ponce</small>
									</div>

								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card bg-white h-100 rounded-4 border-0 shadow-sm p-4">
								<div class="card-body d-flex flex-column align-items-start text-start p-0">
									
									<div class="mb-3 w-100">
										<i class="fa-solid fa-quote-left text-warning fs-1 opacity-50 me-2"></i>
										<div class="d-inline-block text-warning small">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>

									<p class="card-text mb-4 text-secondary">
										"La mentoría que recibí a través de CienciaPR me ayudó a crecer como investigadora y a comunicar mi ciencia con propósito."
									</p>

									<div class="mt-auto">
										<h5 class="fw-bold mb-0 fs-6">Carolina Méndez</h5>
										<small class="text-muted">Estudiante graduada, Yale Ciencia Academy</small>
									</div>

								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card bg-white h-100 rounded-4 border-0 shadow-sm p-4">
								<div class="card-body d-flex flex-column align-items-start text-start p-0">
									
									<div class="mb-3 w-100">
										<i class="fa-solid fa-quote-left text-warning fs-1 opacity-50 me-2"></i>
										<div class="d-inline-block text-warning small">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>

									<p class="card-text mb-4 text-secondary">
										"Participar en un programa de investigación de verano cambió mi visión. Me dio las herramientas y la confianza para aplicar a la escuela graduada."
									</p>

									<div class="mt-auto">
										<h5 class="fw-bold mb-0 fs-6">Andrés Santiago</h5>
										<small class="text-muted">Estudiante subgraduado, UPR Mayagüez</small>
									</div>

								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-lg-4 flex-shrink-0">
							<div class="card bg-white h-100 rounded-4 border-0 shadow-sm p-4">
								<div class="card-body d-flex flex-column align-items-start text-start p-0">
									
									<div class="mb-3 w-100">
										<i class="fa-solid fa-quote-left text-warning fs-1 opacity-50 me-2"></i>
										<div class="d-inline-block text-warning small">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>

									<p class="card-text mb-4 text-secondary">
										"Descubrir CienciaPR fue un punto de inflexión en mi carrera. La comunidad es increíblemente solidaria."
									</p>

									<div class="mt-auto">
										<h5 class="fw-bold mb-0 fs-6">Sofía Torres</h5>
										<small class="text-muted">Doctoranda, San Juan</small>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
				
				<div class="col-1 d-none d-lg-flex justify-content-center">
					<button class="btn bg-white bg-opacity-75 rounded-circle shadow-sm carousel-next-btn d-flex align-items-center justify-content-center" 
						style="width: 40px; height: 40px;" 
						aria-label="Siguiente">
						<i class="fas fa-chevron-right text-tertiary"></i>
					</button>
				</div>

			</div>
		</div>
	</section>
	<!-- SECCION NOTICIAS -->
	<section class="py-7">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<h2 class="fs-2 text-dark fw-bold text-center">Noticias Relacionadas</h2>
				</div>
			</div>
			<div class="row g-4 align-items-stretch">
				<div class="col-12 col-lg-6">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<a href="<?= SERVER_URI ?>post.php?id=<?= $post['id'] ?>" class="text-decoration-none position-relative d-block">
							<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 300px; background-image: url('<?= SERVER_URI ?>images/1-noticias.jpg');">
								<a href="<?= SERVER_URI ?>category.php?id=<?= $post['category_id'] ?>" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Noticias Científicas</a>
							</div>
						</a>
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<div>
								<a href="<?= SERVER_URI ?>post.php?id=<?= $post['id'] ?>" class="text-decoration-none text-dark">
									<h3 class="card-title fw-bold mb-3">Jóvenes puertorriqueños representarán a Puerto Rico en la Feria Internacional MILSET en Abu Dhabi</h3>
								</a>
								<p class="card-text text-muted fs-6">Tres jóvenes científicos de Puerto Rico viajarán para representar a la isla en una competencia internacional de ciencia...</p>
							</div>
							<div class="mt-3">
								<small class="text-uppercase text-muted fw-bold" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 d-flex">
					<div class="row g-4 flex-grow-1">
						<div class="col-12 col-md-6">
							<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
								<!-- <img src="<?= SERVER_URI ?>images/2-noticias.jpg" class="card-img-top" alt="Noticia 2" style="height: 140px; object-fit: cover;"> -->
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/2-noticias.jpg');">
									<span class="badge fw-medium bg-success text-dark px-3 py-2">Talento PR</span>
								</div>
								
								<div class="card-body p-3">
									<h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Talento del Centro Molecular-UPR destaca en EE. UU.</h5>
									<small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
								<!-- <img src="<?= SERVER_URI ?>images/3-noticias.jpg" class="card-img-top" alt="Noticia 3" style="height: 140px; object-fit: cover;"> -->
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/3-noticias.jpg');">
									<span class="badge fw-medium bg-success text-dark px-3 py-2">Exterior</span>
								</div>
								
								<div class="card-body p-3">
									<h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Embajadora del RUM en Fulbright Canadá</h5>
									<small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
								<!-- <img src="<?= SERVER_URI ?>images/4-noticias.jpg" class="card-img-top" alt="Noticia 4" style="height: 140px; object-fit: cover;"> -->
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/4-noticias.jpg');">
									<span class="badge fw-medium bg-success text-dark px-3 py-2">Tecnología</span>
								</div>
															
								<div class="card-body p-3">
									<h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Biología RUM inaugura corredor y laboratorio</h5>
									<small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
								<!-- <img src="<?= SERVER_URI ?>images/5-noticias.jpg" class="card-img-top" alt="Noticia 5" style="height: 140px; object-fit: cover;"> -->
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/5-noticias.jpg');">
									<span class="badge fw-medium bg-success text-dark px-3 py-2">Novedades</span>
								</div>
															
								<div class="card-body p-3">
									<h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Hepatitis C y Parkinson: estudio del RUM</h5>
									<small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-12 text-center">
					<a href="#" class="btn btn-primary text-white btn-lg fs-6">Ver todas las noticias</a>
				</div>
			</div>

		</div>
	</section>
</main>

<?php
include_once ('templates/footer.php');
?>