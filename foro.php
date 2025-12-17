<?php

$PageTitle = "Foro | Ciencia Puerto Rico"; 
$page = "foro"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Foros" => SERVER_URI . 'foros.php',
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
    
    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="container py-6">
        
        <div class="card-body p-0">
                    <h2 class="fs-2 fw-semibold">¡Bienvenido a nuestros Foros!</h2>
                    <p class="fs-5 card-text fw-normal">Por favor utilice esta sección para compartir y discutir sus oportunidades de trabajo, investigación o becas, eventos próximos, opiniones, ideas y cualquier otro tema relacionado a las ciencias y Puerto Rico. Los temas en los foros pueden verse sin una cuenta de CienciaPR pero debe estar registrado para poder añadir temas o comentar. Por favor sea respetuoso con sus comentarios. No permitimos anuncios comerciales y nos reservamos el derecho de remover cualquier mensaje que no respete las reglas de uso. Los mensajes en esta sección no representan necesariamente las opiniones de CienciaPR o sus miembros.</p>
        </div>
        
    </section>

    <!-- SECCIÓN TABLE DEL FORO -->
    	<section class="container-fluid p-0">
		<div class="p-4 p-lg-6 bg-primary text-white">
			<h2 class="fs-2 fw-bold text-white text-center mb-4">Investigación y Divulgación PR</h2>

			<!-- Contenedor para scroll horizontal de pestañas en móvil -->
			<div class="container d-flex overflow-x-auto mb-5">

				<!-- Tabs/Pestañas de Navegación -->
				<ul class="nav nav-pills flex-wrap justify-content-center mx-auto" id="categories" role="tablist" style="width: max-content;">
					<li class="nav-item mx-2 mb-3 flex-shrink-0" role="categories">
						<button class="btn btn-outline-light active text-nowrap" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-content" type="button" role="tab" aria-controls="all-content" aria-selected="true">All</button>
					</li>
					<li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="discuss-tab" data-bs-toggle="tab" data-bs-target="#discuss-content" type="button" role="tab" aria-controls="discuss-content" aria-selected="false">Discusión General</button>
					</li>
					<li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="job-tab" data-bs-toggle="tab" data-bs-target="#job-content" type="button" role="tab" aria-controls="job-content" aria-selected="false">Empleos STEM</button>
					</li>
					<li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="k12-tab" data-bs-toggle="tab" data-bs-target="#k12-content" type="button" role="tab" aria-controls="k12-content" aria-selected="false">Profesores & K-12</button>
					</li>
                    <li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="student-tab" data-bs-toggle="tab" data-bs-target="#student-content" type="button" role="tab" aria-controls="student-content" aria-selected="false">Estudiantes de grado & posdoctorados</button>
					</li>
                    <li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="Grad-tab" data-bs-toggle="tab" data-bs-target="#Grad-content" type="button" role="tab" aria-controls="Grad-content" aria-selected="false">Estudiantes de posgrado & profesionales</button>
					</li>
                    <li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="Postdocs-tab" data-bs-toggle="tab" data-bs-target="#Postdocs-content" type="button" role="tab" aria-controls="Postdocs-content" aria-selected="false">Postdoctorados</button>
					</li>
                    <li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="teachers-tab" data-bs-toggle="tab" data-bs-target="#teachers-content" type="button" role="tab" aria-controls="teachers-content" aria-selected="false">Profesores</button>
					</li>
                    <li class="nav-item mx-2 mb-3 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="stem-tab" data-bs-toggle="tab" data-bs-target="#stem-content" type="button" role="tab" aria-controls="stem-content" aria-selected="false">Profesionales STEM</button>
					</li>
				</ul>
			</div>

			<!-- Contenido de las tablas -->
			<div class="container px-0 px-md-3">

				<!-- Forum Posts Table -->
				<div class="table-responsive rounded-3">
					<table class="table table-hover align-middle bg-white mb-0" style="min-width: 800px;">
						<thead class="table-light">
							<tr>
								<th scope="col" class="fw-semibold" style="min-width: 250px;">Subject</th>
								<th scope="col" class="fw-semibold" style="min-width: 150px;">Author</th>
								<th scope="col" class="fw-semibold" style="min-width: 120px;">Replies</th>
								<th scope="col" class="fw-semibold" style="min-width: 180px;">Posted in</th>
								<th scope="col" class="fw-semibold" style="min-width: 100px;">Deadline</th>
							</tr>
						</thead>
						<tbody>
							<!-- Sample forum post - Replace with PHP loop -->
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Oportunidad de investigación en biología marina</a></td>
								<td>María González</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Empleos STEM</span></td>
								<td>2025-12-28</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Becas para estudiantes de posgrado en química</a></td>
								<td>Dr. Carlos Rodríguez</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Estudiantes de posgrado & profesionales</span></td>
								<td>2026-01-15</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Conferencia anual de ciencias ambientales 2026</a></td>
								<td>Ana Torres</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Discusión General</span></td>
								<td>2026-03-20</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Recursos didácticos para enseñar física en K-12</a></td>
								<td>Prof. Luis Martínez</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Profesores & K-12</span></td>
								<td>2025-12-30</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Posición postdoctoral en neurociencias disponible</a></td>
								<td>Dra. Isabel Sánchez</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Postdoctorados</span></td>
								<td>2026-01-10</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Taller de programación en Python para análisis de datos</a></td>
								<td>Dr. Roberto Pérez</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Estudiantes de posgrado & profesionales</span></td>
								<td>2026-02-05</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Proyecto colaborativo en energías renovables</a></td>
								<td>Ing. Carmen Rivera</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Discusión General</span></td>
								<td>2026-01-25</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Oportunidad de pasantía en farmacología</a></td>
								<td>Dr. José Morales</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Empleos STEM</span></td>
								<td>2026-02-15</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Simposio de biotecnología y genética 2026</a></td>
								<td>Dra. Patricia Vega</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Discusión General</span></td>
								<td>2026-03-10</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Guía para escribir propuestas de investigación exitosas</a></td>
								<td>Prof. Miguel Ortiz</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Estudiantes de posgrado & profesionales</span></td>
								<td>2026-01-20</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Recursos para enseñar ciencias naturales en primaria</a></td>
								<td>Profa. Elena Díaz</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Profesores & K-12</span></td>
								<td>2026-02-01</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Vacante de investigador en cambio climático</a></td>
								<td>Dr. Fernando Ramos</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Empleos STEM</span></td>
								<td>2026-02-28</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Fondo para proyectos de astronomía y astrofísica</a></td>
								<td>Dra. Laura Méndez</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Estudiantes de posgrado & profesionales</span></td>
								<td>2026-03-05</td>
							</tr>
							<tr>
								<td><a href="#" class="text-decoration-none fw-medium">Seminario web sobre ética en la investigación científica</a></td>
								<td>Prof. Andrés Cruz</td>
								<td>
									<button class="btn btn-sm btn-outline-primary">
										<i class="bi bi-chat-dots"></i> Reply
									</button>
								</td>
								<td><span class="badge bg-secondary">Discusión General</span></td>
								<td>2026-01-18</td>
							</tr>
							<!-- Add more rows in PHP loop -->
						</tbody>
					</table>
				</div>

				<!-- Pagination -->
				<nav aria-label="Forum posts pagination" class="mt-4">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
						</li>
						<li class="page-item active" aria-current="page">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>

			</div>

			<!-- FIN: De la table luego de la paginación -->
					<div class="text-center mt-3 mt-md-5"><a href="#" class="btn btn-success fs-6">Publicar un nuevo tema</a></div>

		</div>
	</section>

		<!-- ESPACIO PARA ANUNCIO -->
    <section class="pt-4">
			<?php include_once ('templates/fila-de-anuncio.php'); ?>
	</section>

<!-- ESPACIO PARA ANUNCIO -->
<section class="pb-5 py-md-8 pattern-grey-2">
        <div class="container">
            <div class="row p-3">
                <div class="col-md-10 bg-primary rounded-20 mx-auto">
                    <div class="row mx-md-5 my-4 d-flex flex-column flex-md-row py-4">
                        <div class="col col-md-6">
                            <h2 class="fs-2 text-white">RSS de Trabajos!</h2>
                        </div>
                        <div class="col col-md-6">
                            <p class="fs-7 text-white">Mira los últimos anuncios de trabajo de varias fuentes </p>
                            <div class="mt-3 mt-md-4"><a href="#" class="btn btn-success fs-6">Ver más</a></div>
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