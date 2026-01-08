<?php

$PageTitle = "Jóvenes puertorriqueños representarán a Puerto Rico en la ExpoCiencias Internacional MILSET en Abu Dhabi | Ciencia Puerto Rico"; 
$page = "noticias"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Noticias" => SERVER_URI . 'noticias.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php');
?>
<section class="container py-5">
  <div class="row g-5">
    <main class="col-lg-8">
      <article>
        <div>
					<span class="badge fw-medium bg-success text-body px-3 py-2">Noticias científicas</span>
				</div>

        <h1 class="fs-3 fw-bold text-body mt-2 mb-4 display-6">
          Jóvenes puertorriqueños representarán a Puerto Rico en la Expociencias Internacional MILSET en Abu Dhabi.
        </h1>

        <div class="d-flex align-items-center mb-4">
          <div class="flex-shrink-0">
            <img src="<?= SERVER_URI ?>images/admin.webp" alt="Avatar Admin" class="rounded-circle" width="60" height="60">
          </div>
          <div class="ms-3">
            <p class="fs-8 mb-0 fw-bold text-uppercase text-secondary">POR <span class="post-author">ADMIN</span> - <span class="post-date">3 SEPTIEMBRE 2023</span></p>
          </div>
        </div>

        <div class="mb-4">
          <img src="<?= SERVER_URI ?>images/1-news-archive.webp" alt="Grupo de estudiantes" class="img-fluid w-100 rounded-2 shadow-sm object-fit-cover">
        </div>

        <div class="row align-items-center justify-content-between mb-4">
          <div class="col-md-6">
						<h5 class="fs-5 fw-bold me-2">Comparte esta noticia</h5>
					</div>
          <div class="col-md-6 d-flex gap-1 justify-content-end">
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-facebook"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-twitter-x"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-whatsapp"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-envelope"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-linkedin"></i></a>
					</div>
        </div>

        <div class="article-content text-secondary">
          <h3 class="fs-4 lead fw-bold text-body mb-4">
            Lorem ipsum dolor sit amet consectetur. Dolor at tincidunt eget nunc volutpat. Non massa dui sociis dignissim. Aliquam faucibus nibh
					</h3>

          <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur. Nec sagittis id id elit leo in enim semper morbi. Quisque faucibus ut a turpis vitae egestas cursus enim. Mal sed velit habitant cursus lectus. Gravida nisl maecenas leo facilisis eu porttitor. Fames dignissim erat adipiscing consequat.
          </p>

					<!-- ESPACIO PARA ANUNCIO -->
					<?php include_once ('templates/fila-de-anuncio-w100.php'); ?>

          <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur. Et vestibulum enim tristique eget cras id. Elit condimentum morbi lectus urna eu donec aliquet eget. Id id a malesuada at. Donec feugiat adipiscing massa a condimentum at erat in condimentum. Consectetur elit rhoncus ipsum congue blandit sed consectetur. Consectetur morbi tempor orci pellentesque nibh pellentesque diam aliquam. Magna nec pulvinar vulputate vestibulum egestas scelerisque mattis. Leo risus vulputate vitae etiam amet penatibus mi nunc. Bibendum lectus nunc netus quam. Quisque diam ut massa aliquam erat lectus vestibulum. Elit mauris sed scelerisque id. Sed ut amet tristique aliquet adipiscing a nunc.
          </p>

          <p class="mb-4">
            Donec mollis proin arcu tellus. Gravida purus donec quis tellus suspendisse a nisi non. Lacinia sit massa quam odio. Odio nullam pretium viverra pellentesque. Cras pellentesque tempor malesuada ridiculus. Neque condimentum viverra in pulvinar mauris. Amet auctor interdum consectetur interdum cursus vulputate nulla. Egestas proin in nec urna malesuada aliquam velit. Scelerisque condimentum sem mattis sit leo ultricies suscipit. 
          </p>

          <p class="mb-4">
           	Donec commodo vestibulum eget eu risus metus sollicitudin. Faucibus consequat consectetur euismod elit. Cras lectus dolor justo enim dui. Magna purus cras at feugiat elementum. Leo eleifend justo elementum cursus eu. Mauris natoque suspendisse vestibulum habitant quis lacus.
          </p>

          <h3 class="fs-4 fw-bold text-body mt-5 mb-3">
            Morbi ultrices aliquam sollicitudin magna tempus. Netus porttitor praesent commodo ipsum adipiscing egestas gravida in. Integer pretium in eu mattis fusce varius sit et. Feugiat ultrices lacus viverra id morbi ut ac. Amet auctor imperdiet 
          </h3>
          
          <p class="mb-4">
            Libero dictum in velit arcu vel eget id non donec. Elementum viverra sit varius at neque donec purus faucibus integer. Turpis aenean porta felis in sed risus. Erat convallis et nunc purus mi tincidunt nunc. Aliquam praesent tellus at amet leo duis aenean. Lorem consequat tincidunt sit tortor ante. Sapien vulputate amet varius accumsan eget. Dui imperdiet sit nec nunc pulvinar justo eget a. A cursus et habitant mauris. Phasellus donec laoreet vitae velit viverra eget lectus mattis consectetur. In scelerisque ipsum ut amet arcu et. Turpis non nisl nulla amet tincidunt aliquet. Netus nam quis vulputate enim risus gravida ridiculus nullam. Nunc et tellus donec et magna praesent nulla sit.
          </p>

          <p class="mb-4">
            Curabitur eget dui id netus. Malesuada tortor imperdiet venenatis hendrerit in habitant nulla facilisi. Curabitur consequat in morbi ut scelerisque eu tincidunt. Mi fusce erat ullamcorper quis vitae velit. Turpis faucibus massa pretium tellus.
          </p>

					<h4 class="fs-7 fw-bold text-body mb-3">
            Curabitur eget dui id netus. Malesuada tortor imperdiet venenatis hendrerit in habitant nulla facilisi. Curabitur consequat in morbi ut scelerisque eu tincidunt. Mi fusce erat ullamcorper quis vitae velit.
          </h3>

					<p class="mb-4">
            Libero dictum in velit arcu vel eget id non donec. Elementum viverra sit varius at neque donec purus faucibus integer. Turpis aenean porta felis in sed risus. Erat convallis et nunc purus mi tincidunt nunc. Aliquam praesent tellus at amet leo duis aenean. Lorem consequat tincidunt sit tortor ante. Sapien vulputate amet varius accumsan eget. Dui imperdiet sit nec nunc pulvinar justo eget a. A cursus et habitant mauris. Phasellus donec laoreet vitae velit viverra eget lectus mattis consectetur. In scelerisque ipsum ut amet arcu et. Turpis non nisl nulla amet tincidunt aliquet. Netus nam quis vulputate enim risus gravida ridiculus nullam. Nunc et tellus donec et magna praesent nulla sit.
          </p>
        </div>

        <div class="row align-items-center justify-content-between my-5">
          <div class="col-md-6">
						<h5 class="fs-5 fw-bold me-2">Comparte esta noticia</h5>
					</div>
          <div class="col-md-6 d-flex gap-1 justify-content-end">
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-facebook"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-twitter-x"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-whatsapp"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-envelope"></i></a>
						<a href="#" class="btn btn-success btn-sm rounded-circle text-body d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="bi bi-linkedin"></i></a>
					</div>
        </div>
      </article>

      <section class="comments">
        <h3 class="fs-3 fw-bold mb-4">Añade un comentario</h3>
				<div class="bg-white p-4 rounded-2 shadow-sm mb-5">
					<form>
            <div class="mb-3">
                <p class="fs-6 mb-1 fw-bold">Su nombre:</p>
                <p class="text-primary">Mio Digital / Agency</p>
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto*</label>
                <input type="text" class="form-control bg-light border-0 py-3" id="asunto" placeholder="Write your name">
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario*</label>
                <textarea class="form-control bg-light border-0 py-3" id="comentario" rows="5" placeholder="Type your message"></textarea>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <small>
                    <a href="#" class="text-secondary text-decoration-none">Switch to plain text editor</a>
                </small>
            </div>

            <div class="mb-4">
                <div class="accordion accordion-flush" id="formatosTexto">
                    <div class="accordion-item bg-transparent">
                         <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-1 ps-0 bg-transparent shadow-none small text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                Más información sobre los formatos de texto
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body small text-muted ps-0">
                                Las direcciones de las páginas web y las de correo se convierten en enlaces automáticamente.
                            </div>
                        </div>
                    </div>
                </div>
                 <p class="text-muted small mt-2">Las direcciones de las páginas web y las de correo se convierten en enlaces automáticamente</p>
            </div>

            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-primary text-white px-4 py-2 fw-bold rounded-3">Guardar</button>
                <button type="button" class="btn btn-outline-secondary px-4 py-2 fw-bold rounded-3 bg-white">Vista previa</button>
            </div>
        	</form>
				</div>
        
      </section>
		</main>

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
			<div class="py-3 carousel-module">
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Nuestras Iniciativas</h2>
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
				<!-- Nuestras Iniciativas -->
				<div class="container-fluid px-0">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-4 py-3 scroll-smooth" style="scroll-snap-type: x mandatory;">
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="h-100 d-flex bg-white flex-column align-items-start rounded-2 shadow-sm border overflow-hidden">
								<img src="<?= SERVER_URI ?>images/ico-1.svg" alt="Icono" class="img-fluid mb-3 rounded" style="max-width: 80px; opacity: 0.5">
								<div class="h-100 p-4 pt-2 d-flex flex-column justify-content-between align-items-start">
									<div class="mb-4">
										<h3 class="fs-5 fw-bold mb-3">Comunicación e Iniciativas Comunitarias</h3>
										<p class="small text-muted mb-0">Promovemos decisiones basadas en evidencia y la participación de la ciencia en políticas sociales y comunitarias.</p>
									</div>
									<div>
										<a href="#" class="btn btn-outline-secondary btn-sm w-100">Leer más</a>
									</div>
								</div>
							</div>
						</div> 
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="h-100 d-flex bg-white flex-column align-items-start rounded-2 shadow-sm border overflow-hidden">
								<img src="<?= SERVER_URI ?>images/ico-2.svg" alt="Icono" class="img-fluid mb-3 rounded" style="max-width: 80px; opacity: 0.5">
								<div class="h-100 p-4 pt-2 d-flex flex-column justify-content-between align-items-start">
										<div class="mb-4">
												<h3 class="fs-5 fw-bold mb-3">Educación K-12</h3>
												<p class="small text-muted mb-0">Creando experiencias significativas en ciencia para estudiantes mediante recursos culturales, charlas y formación docente.</p>
										</div>
										<div>
											<a href="#" class="btn btn-outline-secondary btn-sm w-100">Leer más</a>
										</div>
								</div>
							</div>
						</div> 
						<div class="col-12 flex-shrink-0" style="scroll-snap-align: start;">
							<div class="h-100 d-flex bg-white flex-column align-items-start rounded-2 shadow-sm border overflow-hidden">
								<img src="<?= SERVER_URI ?>images/ico-3.svg" alt="Icono" class="img-fluid mb-3 rounded" style="max-width: 80px; opacity: 0.5">
								<div class="h-100 p-4 pt-2 d-flex flex-column justify-content-between align-items-start">
									<div class="mb-4">
										<h3 class="fs-5 fw-bold mb-3">Talento y Liderazgo Científico</h3>
										<p class="small text-muted mb-0">Potenciamos carreras científicas con tutoría, redes, becas y programas como Yale Ciencia Academy.</p>
									</div>
									<div>
										<a href="#" class="btn btn-outline-secondary btn-sm w-100">Leer más</a>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
			<!-- Archivo de Noticias -->
			<div class="py-3">
				<div>
					<h2 class="fs-4 fw-bold mb-0">Archivo de Noticias</h2>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div>
					<ul class="list-unstyled mb-0 d-flex flex-column gap-2 mt-3 fs-6 text-body">
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>diciembre 2025 (8)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>noviembre 2025 (6)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>octubre 2025 (9)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>septiembre 2025 (12)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>agosto 2025 (10)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>julio 2025 (6)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>junio 2025 (3)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>mayo 2025 (3)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>abril 2025 (5)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>marzo 2025 (7)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>febrero 2025 (3)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>enero 2025 (1)</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Archivo de Radiocápsulas -->
			<div class="py-3">
				<div>
					<h2 class="fs-4 fw-bold mb-0">Archivo de Radiocápsulas</h2>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div>
					<ul class="list-unstyled mb-0 d-flex flex-column gap-2 mt-3 fs-6 text-body">
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>diciembre 2025 (8)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>noviembre 2025 (6)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>octubre 2025 (9)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>septiembre 2025 (12)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>agosto 2025 (10)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>julio 2025 (6)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>junio 2025 (3)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>mayo 2025 (3)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>abril 2025 (5)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>marzo 2025 (7)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>febrero 2025 (3)</span>
							</a>
						</li>
						<li>
							<a href="#" class="text-decoration-none text-muted d-flex align-items-center transition-hover">
								<i class="fas fa-angle-right text-primary me-2 small"></i>
								<span>enero 2025 (1)</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
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
						<div class="col-4 flex-shrink-0" style="scroll-snap-align: start;">
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
						<div class="col-4 flex-shrink-0" style="scroll-snap-align: start;">
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
						<div class="col-4 flex-shrink-0" style="scroll-snap-align: start;">
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
						<div class="col-4 flex-shrink-0" style="scroll-snap-align: start;">
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
			<div class="py-3">
				<div>
					<h2 class="fs-4 fw-bold mb-0">Conéctate con nosotros</h2>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>
				<div class="my-4">
					<a href="#" class="d-flex text-decoration-none text-white mb-2 overflow-hidden rounded-1" style="height: 46px;">
						<div class="flex-grow-1 d-flex align-items-center px-3" style="background-color: #3b5998;">
							<i class="fab fa-facebook-f fa-lg me-3 text-center" style="width: 20px;"></i>
							<span class="fw-bold fs-6">154,000 Fans</span>
						</div>
						<div class="d-flex align-items-center justify-content-center px-3 fw-bold small" style="background-color: #2d4373; min-width: 90px;">
							Like
						</div>
					</a>
					<a href="#" class="d-flex text-decoration-none text-white mb-2 overflow-hidden rounded-1" style="height: 46px;">
						<div class="flex-grow-1 d-flex align-items-center px-3" style="background-color: #55acee;">
							<i class="fab fa-twitter fa-lg me-3 text-center" style="width: 20px;"></i>
							<span class="fw-bold fs-6">25,000 Seguidores</span>
						</div>
						<div class="d-flex align-items-center justify-content-center px-3 fw-bold small" style="background-color: #4092d6; min-width: 90px;">
							Síguenos
						</div>
					</a>
					<a href="#" class="d-flex text-decoration-none text-white mb-0 overflow-hidden rounded-1" style="height: 46px;">
						<div class="flex-grow-1 d-flex align-items-center px-3" style="background-color: #cd201f;">
							<i class="fab fa-youtube fa-lg me-3 text-center" style="width: 20px;"></i>
							<span class="fw-bold fs-6">23,000 Seguidores</span>
						</div>
						<div class="d-flex align-items-center justify-content-center px-3 fw-bold small" style="background-color: #a3100f; min-width: 90px;">
							Suscríbete
						</div>
					</a>
				</div>
			</div>
			<!-- Noticias Científicas -->
			<div class="py-3 carousel-module">
    
				<div class="d-flex flex-wrap align-items-end justify-content-start mb-3 px-1">
					<div class="d-flex col-12 align-items-center justify-content-between gap-2">
						<h2 class="fs-4 fw-bold mb-0">Noticias Científicas</h2>
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
		<!-- FORM NEWSLETTER --> 
		 <div class="py-3">
				<div>
					<h2 class="fs-4 fw-bold mb-0">Suscríbete al Newsletter</h2>
					<?php include 'templates/linea-divisora.php'; ?>
				</div>    
			<form class="d-flex flex-column mt-3">
				<input class="form-control bg-white p-2" type="email" placeholder="Ingresa tu correo">
				<button class="btn btn-success mt-3 p-2" type="submit">Suscribirme</button>
			</form>
			<div class="mt-2">
					<div class="fs-9">Al registrarme, acepto los <a href="#" class="m-0 text-decoration-none fw-bold text-reset">Términos y Condiciones</a></div>
			</div>
		</div>
		<!-- FIN NEWSLETTER -->
		</aside>
  </div>
</section>
<?php
include_once('templates/footer.php');
?>