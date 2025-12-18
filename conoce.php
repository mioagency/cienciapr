<?php

$PageTitle = "Conoce | Ciencia Puerto Rico";
$page = "conoce";

// Incluimos el header primero, ya que define SERVER_URI
include_once('templates/header.php');

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
	"Conoce" => SERVER_URI . 'conoce.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once('templates/breadcrumbs.php');
?>

<main>

	<!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
	<section class="container-fluid p-0 conocenos-hero d-flex align-items-center" style="min-height: 250px;">

		<div class="container">
			<!-- TÍTULO H1 -->
			<h1 class="fw-bold mb-3 text-body">Nuestra Organización</h1>

			 <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
			<?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>

		</div>

	</section>

	<!-- SECCIÓN DE MISIÓN/VISIÓN Y TEXTO PRINCIPAL -->
	<section class="container py-5 py-lg-8">
		<!-- Eliminamos row-cols-2 para forzar el apilamiento en móviles -->
		<div class="row row-cols-1 row-cols-md-2 g-4 g-lg-5">
			<div class="col">
				<div class="card bg-white h-100 p-5 rounded-20 border-0">
					<h2 class="fs-2 fw-bold display-5 mb-4">Conoce a Ciencia Puerto Rico</h2>
					<p class="fs-5 text-body">Ciencia Puerto Rico es una comunidad que reúne a científic@s, educadores,
						profesionales y ciudadanos comprometidos con fortalecer la ciencia en la isla. A través de programas,
						recursos y colaboraciones, trabajamos para que el conocimiento científico sea accesible, relevante y motor
						de cambio para nuestro país.</p>
				</div>
			</div>
			<div class="col">
				<div class="card h-100 border-0 rounded-20 overflow-hidden">
					<img src="<?= SERVER_URI ?>/images/1-conoce.webp" class="img-equal"
						alt="Grupo de científicos sonriendo">
				</div>
			</div>
		</div>
	</section>

	<section id="mision-vision-valores" class="container-fluid pt-2 pb-5 pb-lg-8">
		<h2 class="fs-2 fw-bold text-center mb-5">Principios que impulsan nuestro trabajo</h2>
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pt-3">
				<!-- Misión -->
				<div class="col">
					<div class="card bg-white h-100 p-4 rounded-20 border-0">
						<h3 class="fs-4 fw-semibold display-5 mb-4">Misión</h3>
						<p class="fs-7 text-body">Promover la investigación, la educación científica y la participación ciudadana, creando oportunidades que fortalezcan la comunidad científica de Puerto Rico y contribuyan al bienestar social, económico y educativo del país.</p>
					</div>
				</div>
				<!-- Imagen 2 -->
				<div class="col">
					<div class="card h-100 border-0 rounded-20 overflow-hidden">
						<img src="<?= SERVER_URI ?>/images/2-conoce.webp" class="img-equal"
							alt="Grupo de científicos sonriendo">
					</div>
				</div>
				<!-- Visión -->
				<div class="col">
					<div class="card bg-white h-100 p-4 rounded-20 border-0">
						<h3 class="fs-4 fw-semibold display-5 mb-4">Visión</h3>
						<p class="fs-7 text-body">Construir una comunidad diversa, colaborativa y comprometida, donde la ciencia sea accesible para todos y utilizada como herramienta para mejorar vidas, fortalecer decisiones y transformar el futuro de Puerto Rico.</p>
					</div>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pt-4">
				<!-- Imagen 3 -->
				<div class="col">
					<div class="card h-100 border-0 rounded-20 overflow-hidden">
						<img src="<?= SERVER_URI ?>/images/3-conoce.webp" class="img-equal"
							alt="Grupo de científicos sonriendo">
					</div>
				</div>
				<!-- Valores -->
				<div class="col">
					<div class="card bg-white h-100 p-4 rounded-20 border-0">
						<h3 class="fs-4 fw-semibold display-5 mb-4">Valores</h3>
						<ul class="list-unstyled fs-7">
							<li class="mb-2">
								<i class="fa-solid fa-check text-primary"></i> Equidad y acceso
							</li>
							<li class="mb-2">
								<i class="fa-solid fa-check text-primary"></i> Colaboración
							</li>
							<li class="mb-2">
								<i class="fa-solid fa-check text-primary"></i> Rigor y credibilidad
							</li>
							<li class="mb-2">
								<i class="fa-solid fa-check text-primary"></i> Servicio a la comunidad
							</li>
							<li class="mb-2">
								<i class="fa-solid fa-check text-primary"></i> Inclusión
							</li>
						</ul>
					</div>
				</div>
				<!-- Imagen 4 -->
				<div class="col">
					<div class="card h-100 border-0 rounded-20 overflow-hidden">
						<img src="<?= SERVER_URI ?>/images/4-conoce.webp" class="img-equal rounded-20"
							alt="Grupo de científicos sonriendo">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SECCIÓN: NUESTRO EQUIPO (TABS) -->
	<section id="nuestro-equipo" class="container-fluid p-3 p-lg-6">
		<div class="p-4 p-lg-6 bg-primary text-white rounded-20">
			<h2 class="fs-2 fw-bold text-white text-center mb-4">Nuestro equipo</h2>

			<!-- Contenedor para scroll horizontal de pestañas en móvil -->
			<div class="d-flex overflow-x-auto mb-5">
				<!-- Tabs/Pestañas de Navegación -->
				<ul class="nav nav-pills flex-nowrap mx-auto" id="teamTabs" role="tablist" style="width: max-content;">
					<li class="nav-item mx-2 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light active text-nowrap" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff-content" type="button" role="tab" aria-controls="staff-content" aria-selected="true">Staff</button>
					</li>
					<li class="nav-item mx-2 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="operative-tab" data-bs-toggle="tab" data-bs-target="#operative-content" type="button" role="tab" aria-controls="operative-content" aria-selected="false">Equipo Operativo</button>
					</li>
					<li class="nav-item mx-2 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin-content" type="button" role="tab" aria-controls="admin-content" aria-selected="false">Equipo Administrativo</button>
					</li>
					<li class="nav-item mx-2 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="past-tab" data-bs-toggle="tab" data-bs-target="#past-content" type="button" role="tab" aria-controls="past-content" aria-selected="false">Pasados Voluntarios</button>
					</li>
				</ul>
			</div>

			<!-- Contenido de las Pestañas -->
			<div class="tab-content" id="teamTabContent">
				
				<!-- Contenido: Staff (Activo por defecto) -->
				<div class="tab-pane fade show active" id="staff-content" role="tabpanel" aria-labelledby="staff-tab">
					<!-- INICIO: Scroll Horizontal para Cards en Móviles -->
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3"> 
						<!-- Tarjeta Miembro 1 (Melissa Mendez) -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/1-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Melissa Mendez</h5>
									<p class="card-text small text-muted">Relaciones Públicas</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 2 (Antonio Martínez) -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/2-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Antonio Martínez</h5>
									<p class="card-text small text-muted">Presidente</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 3 (Marcela Medina) -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/3-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Marcela Medina</h5>
									<p class="card-text small text-muted">Recursos Humanos</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 4 (Pedro Caraballo) -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/4-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Pedro Caraballo</h5>
									<p class="card-text small text-muted">Relaciones Públicas</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- FIN: Scroll Horizontal para Cards en Móviles -->
					<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-success fs-6">Cargar más miembros</a></div>
				</div>

				<!-- Contenido: Equipo Operativo (Replicando estructura y alterando orden) -->
				<div class="tab-pane fade" id="operative-content" role="tabpanel" aria-labelledby="operative-tab">
					<!-- INICIO: Scroll Horizontal para Cards en Móviles -->
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3">
						<!-- Tarjeta Miembro 3 (Marcela Medina) - Orden 1 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/3-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Marcela Medina</h5>
									<p class="card-text small text-muted">Recursos Humanos (Operativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 4 (Pedro Caraballo) - Orden 2 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/4-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Pedro Caraballo</h5>
									<p class="card-text small text-muted">Relaciones Públicas (Operativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 1 (Melissa Mendez) - Orden 3 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/1-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Melissa Mendez</h5>
									<p class="card-text small text-muted">Relaciones Públicas (Operativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 2 (Antonio Martínez) - Orden 4 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/2-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Antonio Martínez</h5>
									<p class="card-text small text-muted">Presidente (Operativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- FIN: Scroll Horizontal para Cards en Móviles -->
					<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-success fs-6">Cargar más miembros</a></div>
				</div>

				<!-- Contenido: Equipo Administrativo (Replicando estructura y alterando orden) -->
				<div class="tab-pane fade" id="admin-content" role="tabpanel" aria-labelledby="admin-tab">
					<!-- INICIO: Scroll Horizontal para Cards en Móviles -->
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3">
						<!-- Tarjeta Miembro 4 (Pedro Caraballo) - Orden 1 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/4-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Pedro Caraballo</h5>
									<p class="card-text small text-muted">Relaciones Públicas (Administrativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 1 (Melissa Mendez) - Orden 2 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/1-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Melissa Mendez</h5>
									<p class="card-text small text-muted">Relaciones Públicas (Administrativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 2 (Antonio Martínez) - Orden 3 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/2-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Antonio Martínez</h5>
									<p class="card-text small text-muted">Presidente (Administrativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 3 (Marcela Medina) - Orden 4 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/3-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Marcela Medina</h5>
									<p class="card-text small text-muted">Recursos Humanos (Administrativo)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-success fs-6">Cargar más miembros</a></div>
				</div>

				<!-- Contenido: Pasados Voluntarios (Replicando estructura y alterando orden) -->
				<div class="tab-pane fade" id="past-content" role="tabpanel" aria-labelledby="past-tab">
					<!-- INICIO: Scroll Horizontal para Cards en Móviles -->
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3">
						<!-- Tarjeta Miembro 2 (Antonio Martínez) - Orden 1 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/2-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Antonio Martínez</h5>
									<p class="card-text small text-muted">Presidente (Voluntario)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 4 (Pedro Caraballo) - Orden 2 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/4-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Pedro Caraballo</h5>
									<p class="card-text small text-muted">Relaciones Públicas (Voluntario)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 3 (Marcela Medina) - Orden 3 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/3-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Marcela Medina</h5>
									<p class="card-text small text-muted">Recursos Humanos (Voluntario)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Tarjeta Miembro 1 (Melissa Mendez) - Orden 4 -->
						<div class="col-10 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 overflow-hidden border-0">
								<img src="<?= SERVER_URI ?>/images/1-nuestro-equipo.webp" class="card-img-top img-equal" alt="Nuestro Equipo">
								<div class="card-body p-4 text-start">	
									<h5 class="card-title fs-5 fw-bold mb-1">Melissa Mendez</h5>
									<p class="card-text small text-muted">Relaciones Públicas (Voluntario)</p>
									<hr class="border-primary border-1 mt-3 mb-3">
									<div class="d-flex gap-2 justify-content-center">
										<a href="#" class="text-body"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="text-body"><i class="fab fa-instagram"></i></a>
										<a href="#" class="text-body"><i class="fab fa-linkedin-in"></i></a>
										<a href="#" class="text-body"><i class="fas fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-success fs-6">Cargar más miembros</a></div>
				</div>

			</div>
		</div>
	</section>

	<!-- SECCIÓN: PATROCINADORES -->
	<section id="nuestros-patrocinadores" class="container-fluid py-5">
		<div class="row d-flex justify-content-center mb-5">
			<div class="col-12 text-center">
				<h2 class="fs-2 fw-bold text-body mb-3">Patrocinadores</h2>
				<p class="lead text-muted col-lg-8 mx-auto">CienciaPR trabaja de la mano con docenas de organizaciones locales e internacionales que apoyan su misión mediante alianzas, programas educativos, fondos y recursos.</p>
			</div>
		</div>
		
		<!-- Contenedor para Scroll Horizontal -->
		<div class="container-fluid p-0">
			<!-- CLASE RENOMBRADA: 'carousel-scrollable' -->
			<div class="row g-4 flex-nowrap overflow-x-auto pb-3 align-items-center carousel-scrollable">
				<!-- Logo 1 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+1" class="img-fluid opacity-75" alt="Logo Patrocinador 1">
				</div>
				<!-- Logo 2 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+2" class="img-fluid opacity-75" alt="Logo Patrocinador 2">
				</div>
				<!-- Logo 3 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+3" class="img-fluid opacity-75" alt="Logo Patrocinador 3">
				</div>
				<!-- Logo 4 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+4" class="img-fluid opacity-75" alt="Logo Patrocinador 4">
				</div>
				<!-- Logo 5 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+5" class="img-fluid opacity-75" alt="Logo Patrocinador 5">
				</div>
				<!-- Logo 6 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+6" class="img-fluid opacity-75" alt="Logo Patrocinador 6">
				</div>
				<!-- Logo 7 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+7" class="img-fluid opacity-75" alt="Logo Patrocinador 7">
				</div>
				<!-- Logo 8 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+8" class="img-fluid opacity-75" alt="Logo Patrocinador 8">
				</div>
				<!-- Logo 9 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+9" class="img-fluid opacity-75" alt="Logo Patrocinador 9">
				</div>
				<!-- Logo 10 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+10" class="img-fluid opacity-75" alt="Logo Patrocinador 10">
				</div>
				<!-- Logo 11 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+11" class="img-fluid opacity-75" alt="Logo Patrocinador 11">
				</div>
				<!-- Logo 12 -->
				<div class="col-auto flex-shrink-0 text-center" style="width: 200px;">
					<img src="https://placehold.co/150x60/f8f9fa/75848F?text=Company+12" class="img-fluid opacity-75" alt="Logo Patrocinador 12">
				</div>
			</div>
		</div>
	</section>

	<!-- SECCIÓN: COMUNICADOS DE PRENSA -->
	<section id="comunicados-prensa" class="container-fluid bg-primary py-5">
		<div class="container">
			
			<!-- CABECERA DE LA SECCIÓN (TÍTULO Y BOTONES) -->
			<div class="row mb-4 align-items-center">
				<div class="col-12 text-center mb-3">
					<h2 class="fs-2 fw-bold text-white">Comunicados de prensa/media kit</h2>
					<p class="fs-5 text-white col-lg-7 mx-auto mb-0">Aquí encontrarás los comunicados de prensa y noticias más recientes relacionadas con CienciaPR, sus miembros e iniciativas.</p>
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
					<div class="row g-4 flex-nowrap overflow-x-auto pb-3 carousel-scrollable carousel-content">
						<!-- Card 1 -->
						<div class="col-12 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="card-header p-4 rounded-4 border-0 fs-9">
									<span class="fa-stack fa-2x">
										<i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
										<i class="fa-regular fa-file-lines fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-outline-primary mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
						
						<!-- Card 2 -->
						<div class="col-12 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="card-header p-4 rounded-4 border-0 fs-9">
									<span class="fa-stack fa-2x">
										<i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
										<i class="fa-regular fa-file-pdf fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-outline-primary mt-3 mx-auto">Descargar recurso</a>
								</div>
							</div>
						</div>
						
						<!-- Card 3 -->
						<div class="col-12 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="card-header p-4 rounded-4 border-0 fs-9">
									<span class="fa-stack fa-2x">
										<i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
										<i class="fa-regular fa-file-word fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-outline-primary mt-3 mx-auto">Descargar recurso</a>
								</div>
							</div>
						</div>

						<!-- Card 4 -->
						<div class="col-12 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="card-header p-4 rounded-4 border-0 fs-9">
									<span class="fa-stack fa-2x">
										<i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
										<i class="fa-regular fa-file-lines fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-outline-primary mt-3 mx-auto">Conoce más</a>
								</div>
							</div>
						</div>
						
						<!-- Card 5 (Adicional) -->
						<div class="col-12 col-md-6 col-lg-3 flex-shrink-0">
							<div class="card h-100 rounded-4 overflow-hidden shadow-sm border-0 text-center bg-white">
								<div class="card-header p-4 rounded-4 border-0 fs-9">
									<span class="fa-stack fa-2x">
										<i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
										<i class="fa-regular fa-file-lines fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="card-body text-start">
									<h3 class="fs-6 card-title fw-medium">Título del Comunicado de Prensa o Noticia Destacada</h5>
									<a href="#" class="btn btn-sm btn-outline-primary mt-3 mx-auto">Conoce más</a>
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
					<a href="#" class="btn btn-light fs-6">Ver todos los recursos</a>
				</div>
			</div>

		</div>
	</section>
	<!-- ============================================ -->
	<!-- SECCIÓN: NOTICIAS SOBRE CIENCIA BORICUA -->
	<!-- ============================================ -->
	<section id="noticias-boricua" class="container-fluid p-3 p-lg-6">
		<?php
			include_once('templates/noticias.php');
		?>
	</section>
	<!-- ============================================ -->
	<!-- SECCIÓN: PUBLICACIONES -->
	<!-- ============================================ -->
	<?php
		include_once('templates/publicaciones.php');
	?>
	<!-- ============================================ -->
	<!-- SECCIÓN: REPORTES (TABS) -->
	<!-- ============================================ -->
	<section id="reportes-anuales" class="container-fluid bg-light pt-5 p-lg-6">
		<div class="container">
			<h2 class="fs-2 fw-bold text-body text-center mb-4">Reportes Anuales</h2>

			<!-- Contenedor para scroll horizontal de pestañas en móvil -->
			<div class="d-flex overflow-x-auto mb-5">
				<!-- ====== NAV PILLS DE AÑOS ====== -->
				<ul class="nav nav-pills mx-auto d-flex justify-content-center flex-nowrap mb-4" id="reportesTabs" role="tablist">
					<!-- Año -->
					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2016-tab" data-bs-toggle="pill" data-bs-target="#y2016" type="button" role="tab">2016</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 active" id="y2017-tab" data-bs-toggle="pill" data-bs-target="#y2017" type="button" role="tab">2017</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2018-tab" data-bs-toggle="pill" data-bs-target="#y2018" type="button" role="tab">2018</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2019-tab" data-bs-toggle="pill" data-bs-target="#y2019" type="button" role="tab">2019</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2020-tab" data-bs-toggle="pill" data-bs-target="#y2020" type="button" role="tab">2020</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2021-tab" data-bs-toggle="pill" data-bs-target="#y2021" type="button" role="tab">2021</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2022-tab" data-bs-toggle="pill" data-bs-target="#y2022" type="button" role="tab">2022</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2023-tab" data-bs-toggle="pill" data-bs-target="#y2023" type="button" role="tab">2023</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2024-tab" data-bs-toggle="pill" data-bs-target="#y2024" type="button" role="tab">2024</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="btn btn-outline-secondary me-2 " id="y2025-tab" data-bs-toggle="pill" data-bs-target="#y2025" type="button" role="tab">2025</button>
					</li>
				</ul>
			</div>
			<!-- ====== CONTENIDO DE CADA AÑO ====== -->
			<div class="tab-content" id="reportesTabsContent">

				<!-- 2017 (Ejemplo con contenido, es el activo) -->
				<div class="tab-pane fade show active" id="y2017" role="tabpanel" aria-labelledby="y2017-tab">

					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>

				</div>

				<!-- PANEL VACÍO PARA LOS DEMÁS AÑOS -->
				<div class="tab-pane fade" id="y2016" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2018" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2019" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2020" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2021" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2022" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2023" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2024" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="y2025" role="tabpanel">
					<div class="container">
						<div class="row g-4">

							<!-- Card -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>

							<!-- Duplicar más cards... -->
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="p-4 rounded shadow-sm bg-white d-flex justify-content-between align-items-center gap-3">
									<div>
										<p class="mb-0">
											Lorem ipsum dolor sit amet consectetur. Adipiscing sed in et egestas tristique faucibus non.
										</p>
									</div>
									<a href="#" class="btn btn-outline-primary text-nowrap">Ver informe</a>
								</div>
							</div>
						</div>

						<!-- Botón cargar más -->
						<div class="text-center mt-6">
							<button class="btn btn-primary text-white px-4">Cargar más informes</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ============================================ -->
	<!-- SECCIÓN: SERVICIOS -->
	<!-- ============================================ -->
	<section id="servicios-contrataciones" class="container-fluid pt-5 p-lg-6">
		<h2 class="fs-2 fw-bold text-body text-center mb-4">Nuestros Servicios</h2>
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pt-3">
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<h3 class="card-title fw-bold mb-3">Catálogo de Recursos Educativos</h3>
							<p class="fs-6 text-body">Lorem ipsum dolor sit amet consectetur. Scelerisque nulla vel faucibus magna ac lectus nec enim.</p>
							<a href="#" class="btn btn-outline-secondary text-body mt-3 me-auto">Leer más</a>
						</div>
					</div>
				</div>
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<h3 class="card-title fw-bold mb-3">Programa "Científicos al Servicio"</h3>
							<p class="fs-6 text-body">Lorem ipsum dolor sit amet consectetur. Scelerisque nulla vel faucibus magna ac lectus nec enim.</p>
							<a href="#" class="btn btn-outline-secondary text-body mt-3 me-auto">Leer más</a>
						</div>
					</div>
				</div>
				<!-- Servicio 1 -->
				<div class="col">
					<div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
						<div class="card-body d-flex flex-column justify-content-between p-4">
							<h3 class="card-title fw-bold mb-3">Científicos al Servicio en Línea</h3>
							<p class="fs-6 text-body">Lorem ipsum dolor sit amet consectetur. Scelerisque nulla vel faucibus magna ac lectus nec enim.</p>
							<a href="#" class="btn btn-outline-secondary text-body mt-3 me-auto">Leer más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-primary text-white fs-6">Ver todos los servicios</a></div>
	</section>
</main>
<?php
include_once('templates/footer.php');
?>