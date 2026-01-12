<?php

$PageTitle = "Mi Cuenta | Ciencia Puerto Rico"; 
$page = "mi-cuenta"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

?>

<section class="container py-5">
  <div class="row g-5">
		<!-- Contenido Principal -->
    <main class="col-lg-8">
    
			<nav class="d-flex flex-nowrap gap-2 mb-4 overflow-x-auto pb-3">
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">Ver</a>
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">Bookmarks</a>
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">Coursers</a>
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">Editar</a>
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">MailChimp Activity</a>
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">Mensajes</a>
				<a href="#" class="btn btn-outline-secondary border border-secondary text-secondary px-3 btn-hover-primary-interaction text-nowrap">Mis Resultados</a>
			</nav>
			<!-- Card Principal -->
			<div class="card bg-white border-0 shadow-sm rounded-3 p-4 mb-4">
				<div class="row g-4 align-items-center">
					<div class="col-md-4 col-lg-3 text-center">
						<img src="<?= SERVER_URI ?>images/team-gdm-5.webp" 
								alt="Greetchen Díaz-Muñoz" 
								class="rounded-circle shadow-sm mb-3" 
								style="width: 140px; height: 140px; object-fit: cover;">
						<div>
							<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">CienciaPR Team</a>
						</div>
					</div>
					<div class="col-md-8 col-lg-9">
						<h1 class="fs-4 fw-bold mb-1">Greetchen Díaz-Muñoz</h1>
						<p class="fs-6 text-secondary mb-3">Executive director Ciencia Puerto Rico</p>
						
						<hr class="text-secondary opacity-25 my-3">

						<div class="d-flex flex-column gap-2 small">
							<p class="fs-6 mb-0">
								<span class="fw-bold text-body">Sector & Position:</span>
								<span class="text-secondary">Tercer Sector: Científico o Investigador</span>
							</p>
							<p class="fs-6 mb-0">
								<span class="fw-bold text-body">Primary Scientific Interest:</span>
								<span class="text-secondary">Ciencias biológicas, Microbiología, Bacteriología</span>
							</p>
							<p class="fs-6 mb-0">
								<span class="fw-bold text-body">Other Interests:</span>
								<span class="text-secondary">Biología celular y molecular, Astrobiology, Public engagement with science</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- My Websites -->
			<div id="my-websites" class="py-4">
				<h2 class="fs-3 fw-bold">My Websites</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
				<div class="row row-cols-1 g-4 py-4">
    
					<div class="col">
						<div class="card h-100 border-0 bg-white shadow-sm p-4">
							<ul class="list-unstyled d-flex flex-column gap-3 mb-0">
  
								<li class="d-flex align-items-center">
									<a href="#" class="text-decoration-none d-flex align-items-center gap-3 text-secondary">
										<span class="fa-stack fa-1x">
											<i class="fas fa-circle fa-stack-2x text-warning"></i>
											<i class="fab fa-linkedin-in fa-stack-1x text-body"></i>
										</span>
										<span class="fs-6">LinkedIn</span>
									</a>
								</li>

								<li class="d-flex align-items-center">
									<a href="#" class="text-decoration-none d-flex align-items-center gap-3 text-secondary">
										<span class="fa-stack fa-1x">
											<i class="fas fa-circle fa-stack-2x text-warning"></i>
											<i class="fab fa-facebook-f fa-stack-1x text-body"></i>
										</span>
										<span class="fs-6">Facebook</span>
									</a>
								</li>

								<li class="d-flex align-items-center">
									<a href="#" class="text-decoration-none d-flex align-items-center gap-3 text-secondary">
										<span class="fa-stack fa-1x">
											<i class="fas fa-circle fa-stack-2x text-warning"></i>
											<i class="fa-brands fa-x-twitter fa-stack-1x text-body"></i>
										</span>
										<span class="fs-6">X</span>
									</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Training Information -->
			<div id="training-information" class="py-4">
				<h2 class="fs-3 fw-bold">Training Information</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
				<div class="row row-cols-1 g-4 py-4">
    
					<div class="col">
						<div class="card h-100 border-0 bg-white shadow-sm p-4">
							<div class="d-flex flex-column gap-2 small">
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">2024:</span>
									<span class="text-secondary">Postdoc or Clinical Fellow, Virology, University of Nebraska–Lincoln</span>
								</p>
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">2012:</span>
									<span class="text-secondary"> Ph.D., Genetics / Cell and Molecular Biology, The Ohio State University</span>
								</p>
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">2006:</span>
									<span class="text-secondary">M.S., Biología, Universidad de Puerto Rico, Recinto de Mayagüez</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Awards & Achievements -->
			<div id="awards-achievements" class="py-4">
				<h2 class="fs-3 fw-bold">Awards & Achievements</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
				<div class="row row-cols-1 g-4 py-4">
					<div class="col">
						<div class="card h-100 border-0 bg-white shadow-sm p-4">
							<div class="d-flex flex-column gap-2 small">
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Abril 2020</span>
								</p>
								<hr class="text-secondary opacity-25 my-1">
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">User Badge:</span>
								</p>
								<p class="fs-6 mb-0">
									<span class="text-secondary">Certificación en Destrezas de Investigación en Etnobotánica y Productos Naturales</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Me and Project Info -->
			<div id="about-me" class="py-4">
				<h2 class="fs-3 fw-bold">About Me and Project Info</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
				<div class="row row-cols-1 g-4 py-4">
					<div class="col">
						<div class="card h-100 border-0 bg-white shadow-sm p-4">
							<div class="d-flex flex-column gap-2 small">
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Sobre Mí:</span>
								</p>
								<hr class="text-secondary opacity-25 my-1">
								<p class="fs-6 mb-3">
									<span class="text-secondary">Científica, educadora, comunicadora y defensora de la diversidad e inclusión en ciencia. Su trabajo se centra en empoderar a niñas y mujeres, así como en promover la educación científica, la divulgación y la incidencia en política pública en Puerto Rico y a nivel internacional.</span>
								</p>
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Rol actual:</span>
								</p>
								<hr class="text-secondary opacity-25 my-1">
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Directora Ejecutiva de Ciencia Puerto Rico (CienciaPR)</span>
								</p>
								<p class="fs-6 mb-3">
									<span class="text-secondary">Lidera la misión de democratizar la ciencia y transformar la educación mediante iniciativas impulsadas por la comunidad.</span>
								</p>
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Trayectoria en CienciaPR:</span>
								</p>
								<hr class="text-secondary opacity-25 my-1">
								<ul class="ps-3 text-secondary fs-6 d-flex flex-column gap-2 mb-3">
									<li>Directora del Programa de Educación Científica y Alianzas Comunitarias.</li>
									<li>Supervisó programas para docentes y estudiantes K-12 en colaboración con la red de expertos de CienciaPR.</li>
									<li>Fundadora del blog Borinqueña, enfocado en empoderar a mujeres y niñas hispanas y puertorriqueñas en ciencia.</li>
									<li>Impulsora del primer programa de embajadoras “Girls in STEM” en Puerto Rico: Semillas de Triunfo.</li>
								</ul>
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Experiencia previa:</span>
								</p>
								<hr class="text-secondary opacity-25 my-1">
								<ul class="ps-3 text-secondary fs-6 d-flex flex-column gap-2 mb-0">
									<li><strong class="text-body">Directora del Programa de Subvenciones</strong> en el Puerto Rico Science, Technology and Research Trust (PRSTRT).</li>
									<li>
										Implementó el primer mecanismo local de subvenciones en Puerto Rico y coordinó iniciativas como:
										<ul class="mt-1">
											<li>Research & Innovation Meetups</li>
											<li>Forward Research & Innovation Summit</li>
											<li>Forward Grantees Symposium</li>
										</ul>
									</li>
								</ul>
								<div>
									<a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3 mt-3">Seguir leyendo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Location and Contact Info -->
			<div id="location-contact-info" class="py-4">
				<h2 class="fs-3 fw-bold">Location and Contact Info</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
				<div class="row row-cols-1 g-4 py-4">
					<div class="col">
						<div class="card h-100 border-0 bg-white shadow-sm p-4">
							<div class="d-flex flex-column gap-2 small">
								<p class="fs-6 mb-0">
									<span class="fw-bold text-body">Greetchen Díaz-Muñoz</span>
								</p>
								<hr class="text-secondary opacity-25 my-1">
								<p class="fs-6 mb-0">
									<span class="text-secondary">San Juan</span>
								</p>
								<a class="fs-6" href="#">Ver en un mapa</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Miembros Cercanos -->
			<div id="map-miembros-cercanos" class="py-4">
				<h2 class="fs-3 fw-bold">Miembros Cercanos</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
				<div class="row row-cols-1 g-4 py-4">
					<div class="col">
						<div class="card h-100 border-0 bg-white shadow-sm p-4">
							<img class="w-100 img-fluid" src="<?= SERVER_URI ?>images/mapa-miembros-cercanos.webp" alt="Mapa temporal">
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Sidebar -->
		<aside class="col-lg-4">
			<div class="mb-3">
				<form action="#" method="GET">
					<div class="input-group bg-white border rounded-3 p-1 shadow-sm">
						<input type="search" class="form-control border-0 shadow-none bg-transparent ps-3" placeholder="Buscar" aria-label="Buscar" name="q">
						<button class="btn border-0 bg-transparent text-secondary pe-3" type="submit">
								<i class="fas fa-search"></i>
						</button>
					</div>
				</form>
			</div>
			<!-- Mis Insignias -->
			<div class="py-3">
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Mis Insignias</h2>
					</div>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0 p-0 my-1" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/image-placeholder.jpg" 
										alt="Insignia" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Insignia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Nuestros Miembros -->
			<div class="py-3 carousel-module">
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Nuestros Miembros</h2>
						<div class="d-flex">
							<button class="btn bg-white rounded-circle p-0 js-prev text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Anterior">
									<i class="fa-solid fa-arrow-left fa-xs"></i>
							</button>
							<button class="btn bg-white rounded-circle p-0 ms-2 js-next text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Siguiente">
									<i class="fa-solid fa-arrow-right fa-xs"></i>
							</button>
						</div>
					</div>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div class="container-fluid px-0">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-0 py-3 scroll-smooth" style="scroll-snap-type: x mandatory;">
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-da-1.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-gg-2.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-mifm-3.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-wdj-4.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-da-1.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-gg-2.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-mifm-3.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
						<div class="col-3 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="card h-100 border-0 bg-transparent align-items-center">
								<img src="<?= SERVER_URI ?>images/team-wdj-4.webp" 
										alt="Nombre" 
										class="rounded-circle shadow-sm mb-2" 
										style="width: 80px; height: 80px; object-fit: cover;">
								<div class="text-center">
									<p class="small fw-bold lh-sm mb-0 text-body">Nombre<br>Apellido</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mis Blogs -->
			<div class="py-3 carousel-module">
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Mis Blogs</h2>
						<div class="d-flex">
							<button class="btn bg-white rounded-circle p-0 js-prev text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Anterior">
								<i class="fa-solid fa-arrow-left fa-xs"></i>
							</button>
							<button class="btn bg-white rounded-circle p-0 ms-2 js-next text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Siguiente">
								<i class="fa-solid fa-arrow-right fa-xs"></i>
							</button>
						</div>
					</div>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div class="container-fluid px-0">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-3 py-3 scroll-smooth" style="scroll-snap-type: x mandatory;">
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="d-flex flex-column gap-3">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Long live community leaders, tabonucos of Puerto Rico!</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">New short documentary highlights the journey of a scientist</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Puerto Rican students receive awards in prestigious programs</h2>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="d-flex flex-column gap-3">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Another interesting headline goes here right now</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Science is advancing in Puerto Rico rapidly</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Final news item for this specific block</h2>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mis Artículos -->
			<div class="py-3 carousel-module">
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Mis Artículos</h2>
						<div class="d-flex">
							<button class="btn bg-white rounded-circle p-0 js-prev text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Anterior">
								<i class="fa-solid fa-arrow-left fa-xs"></i>
							</button>
							<button class="btn bg-white rounded-circle p-0 ms-2 js-next text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Siguiente">
								<i class="fa-solid fa-arrow-right fa-xs"></i>
							</button>
						</div>
					</div>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div class="container-fluid px-0">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-3 py-3 scroll-smooth" style="scroll-snap-type: x mandatory;">
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="d-flex flex-column gap-3">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Long live community leaders, tabonucos of Puerto Rico!</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">New short documentary highlights the journey of a scientist</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Puerto Rican students receive awards in prestigious programs</h2>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="d-flex flex-column gap-3">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Another interesting headline goes here right now</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Science is advancing in Puerto Rico rapidly</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-body px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Final news item for this specific block</h2>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mis Foros -->
			<div class="py-3 carousel-module">
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Mis Foros</h2>
						<div class="d-flex">
							<button class="btn bg-white rounded-circle p-0 js-prev text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Anterior">
								<i class="fa-solid fa-arrow-left fa-xs"></i>
							</button>
							<button class="btn bg-white rounded-circle p-0 ms-2 js-next text-secondary border shadow-sm" style="width: 28px; height: 28px;" aria-label="Siguiente">
								<i class="fa-solid fa-arrow-right fa-xs"></i>
							</button>
						</div>
					</div>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div class="container-fluid px-0">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-3 py-3 scroll-smooth" style="scroll-snap-type: x mandatory;">
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="d-flex flex-column gap-3">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Long live community leaders, tabonucos of Puerto Rico!</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">New short documentary highlights the journey of a scientist</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Puerto Rican students receive awards in prestigious programs</h2>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="d-flex flex-column gap-3">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Another interesting headline goes here right now</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Science is advancing in Puerto Rico rapidly</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Final news item for this specific block</h2>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</aside>
  </div>
</section>
<?php
include_once('templates/footer.php');
?>