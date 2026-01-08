<?php

$PageTitle = "Noticias | Ciencia Puerto Rico"; 
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
<section class="pt-5 pb-3 border-bottom border-secondary border-1 border-opacity-25">
  <div class="container">
    <div class="row align-items-center justify-content-between mb-4">
      <div class="col-10 col-md-11">
				<div id="carouselTicker" class="carousel slide" data-bs-ride="false"> 
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="d-flex gap-3 align-items-center w-100">
              	<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Noticias Científicas</a>
								<h2 class="fs-5 fw-bold mb-0 text-truncate">
										<a class="text-decoration-none text-reset" href="#">Reafirmando nuestro compromiso con la ciencia.</a>
								</h2>
							</div>
						</div>
						<div class="carousel-item">
							<div class="d-flex gap-3 align-items-center w-100">
              	<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Educación</a>
								<h2 class="fs-5 fw-bold mb-0 text-truncate">
										<a class="text-decoration-none text-reset" href="#">Estudiantes ganan premio internacional.</a>
								</h2>
							</div>
						</div>
						<div class="carousel-item">
							<div class="d-flex gap-3 align-items-center w-100">
              	<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Noticias Científicas</a>
								<h2 class="fs-5 fw-bold mb-0 text-truncate">
										<a class="text-decoration-none text-reset" href="#">Iniciativas de conservación costera.</a>
								</h2>
							</div>
						</div>
					</div>
				</div>
      </div>
      <div class="col-2 col-md-1 text-end">
				<div class="d-flex justify-content-end gap-2">
					<button class="btn bg-white rounded-circle p-0 text-secondary" 
									style="width: 32px; height: 32px;" 
									type="button" 
									data-bs-target="#carouselTicker" 
									data-bs-slide="prev" 
									aria-label="Anterior">
							<i class="fa-solid fa-arrow-left"></i>
					</button>

					<button class="btn bg-white rounded-circle p-0 text-secondary" 
									style="width: 32px; height: 32px;" 
									type="button" 
									data-bs-target="#carouselTicker" 
									data-bs-slide="next" 
									aria-label="Siguiente">
							<i class="fa-solid fa-arrow-right"></i>
					</button>
				</div>
      </div>
    </div>
  </div>
</section>
<section class="container py-5">
  <div class="row g-5">
    <main class="col-lg-8">
      <div id="heroCarousel" class="carousel slide mb-5 rounded-3 overflow-hidden shadow-sm" data-bs-ride="carousel">
  
				<div class="carousel-inner">
					
					<div class="carousel-item active">
						<div style="height: 620px;"> 
							<img src="<?= SERVER_URI ?>images/1-news-archive.webp"
									class="d-block w-100 h-100 object-fit-cover" 
									alt="Noticia Principal">
						</div>
						
						<div class="carousel-caption d-flex flex-column justify-content-end align-items-start text-start p-5 w-100" 
								style="height: 60%; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%); left: 0; right: 0;">
							
              <a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Noticias Científicas</a>
							
							<h2 class="fs-3 fw-bold text-white my-2">
								<a href="#" class="text-white text-decoration-none stretched-link">
									Jóvenes puertorriqueños representarán a Puerto Rico en la ExpoCiencias Internacional MILSET en Abu Dhabi.
								</a>
							</h2>
							<div class="mt-3">
								<small class="text-uppercase text-white fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div style="height: 620px;">
							<img src="https://placehold.co/900x620/555/fff?text=Imagen+Alta+2" 
									class="d-block w-100 h-100 object-fit-cover" 
									alt="Segunda Noticia">
						</div>
						
						<div class="carousel-caption d-flex flex-column justify-content-end align-items-start text-start p-5 w-100" 
								style="height: 60%; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%); left: 0; right: 0;">
							
              <a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Ciencia</a>
							
							<h2 class="fs-3 fw-bold text-white my-2">
								<a href="#" class="text-white text-decoration-none stretched-link">
									Nueva investigación revela datos impactantes sobre los manglares.
								</a>
							</h2>
							<div class="mt-3">
								<small class="text-uppercase text-white fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
							</div>
						</div>
					</div>

				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Anterior</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Siguiente</span>
				</button>
			</div>
			<!-- ESPACIO PARA ANUNCIO -->
			<?php include_once ('templates/fila-de-anuncio.php'); ?>
			<!-- SECCIÓN DESTACADOS -->
			<div id="destacados" class="pt-2 pb-5">
				<h2 class="fs-3 fw-bold">Destacados</h2>
				<!-- Línea divisora -->
				<?php include 'templates/linea-divisora.php'; ?>
					<div class="row row-cols-1 row-cols-md-2 g-4 pt-3 pt-md-5">
    
						<div class="col">
								<div class="card h-100 border-0 bg-white p-0 shadow-sm">
										<div class="d-flex align-items-end bg-cover bg-center p-3 rounded-3 position-relative" style="background-image: url('<?= SERVER_URI ?>images/noticia-destacados.webp'); min-height: 280px; background-size: cover; background-position: center;">
												<span class="badge fw-medium bg-success text-dark px-3 py-2">Tecnología</span>
										</div>              
										<div class="card-body p-3">
												<h3 class="fs-4 card-title fw-bold mb-2">Lorem ipsum dolor sit amet consectetur.</h3>
												<p class="fs-7 text-muted">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicles.</p>
												<small class="text-uppercase text-muted d-block mt-3" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
										</div>
								</div>
						</div>

						<div class="col">
								<div class="card h-100 border-0 bg-white p-0 shadow-sm">
										<div class="d-flex align-items-end bg-cover bg-center p-3 rounded-3" style="background-image: url('<?= SERVER_URI ?>images/noticia-destacados.webp'); min-height: 280px; background-size: cover; background-position: center;">
												<span class="badge fw-medium bg-success text-dark px-3 py-2">Tecnología</span>
										</div>              
										<div class="card-body p-3">
												<h3 class="fs-4 card-title fw-bold mb-2">Lorem ipsum dolor sit amet consectetur.</h3>
												<p class="fs-7 text-muted">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicles.</p>
												<small class="text-uppercase text-muted d-block mt-3" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
										</div>
								</div>
						</div>

						<div class="col">
								<div class="card h-100 border-0 bg-white p-0 shadow-sm">
										<div class="d-flex align-items-end bg-cover bg-center p-3 rounded-3" style="background-image: url('<?= SERVER_URI ?>images/noticia-destacados.webp'); min-height: 280px; background-size: cover; background-position: center;">
												<span class="badge fw-medium bg-success text-dark px-3 py-2">Tecnología</span>
										</div>              
										<div class="card-body p-3">
												<h3 class="fs-4 card-title fw-bold mb-2">Lorem ipsum dolor sit amet consectetur.</h3>
												<p class="fs-7 text-muted">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicles.</p>
												<small class="text-uppercase text-muted d-block mt-3" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
										</div>
								</div>
						</div>

						<div class="col">
								<div class="card h-100 border-0 bg-white p-0 shadow-sm">
										<div class="d-flex align-items-end bg-cover bg-center p-3 rounded-3" style="background-image: url('<?= SERVER_URI ?>images/noticia-destacados.webp'); min-height: 280px; background-size: cover; background-position: center;">
												<span class="badge fw-medium bg-success text-dark px-3 py-2">Tecnología</span>
										</div>              
										<div class="card-body p-3">
												<h3 class="fs-4 card-title fw-bold mb-2">Lorem ipsum dolor sit amet consectetur.</h3>
												<p class="fs-7 text-muted">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicles.</p>
												<small class="text-uppercase text-muted d-block mt-3" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
										</div>
								</div>
						</div>

				</div>
			</div>
		  <!-- Noticias sobre CienciaPR -->
			<div class="py-3 carousel-module">
				<div class="container">
					<div class="d-flex flex-wrap align-items-end justify-content-start mb-4">
						<div class="d-flex col-12 align-items-center justify-content-between gap-4">
							<h2 class="fs-3 fw-bold">Noticias sobre CienciaPR</h2>
							
							<div class="pt-3 pt-md-0 d-flex">
								<button class="btn bg-white rounded-circle p-0 js-prev text-secondary" style="width: 32px; height: 32px;" aria-label="Anterior">
										<i class="fa-solid fa-arrow-left"></i>
								</button>
								
								<button class="btn bg-white rounded-circle p-0 ms-2 js-next text-secondary" style="width: 32px; height: 32px;" aria-label="Siguiente">
										<i class="fa-solid fa-arrow-right"></i>
								</button>
							</div>
						</div>
						
						<?php include 'templates/linea-divisora.php'; ?>
					</div>
				</div>

				<div class="container-fluid">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-4 py-3 scroll-smooth">
						
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
							<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('https://ciencia-pr.local/images/2-noticias.jpg');">
									<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">CienciaPR</a>
								</div>
								<div class="card-body d-flex flex-column justify-content-between p-4">
									<div>
										<a href="<?= SERVER_URI ?>noticia.php>" class="text-decoration-none text-body"><h3 class="fs-6">Lorem ipsum dolor sit amet consectetur. Nam sed tellus dolor.</h3></a>
									</div>
									<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>						
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
							<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('https://ciencia-pr.local/images/3-noticias.jpg');">
									<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">CienciaPR</a>
								</div>
								<div class="card-body d-flex flex-column justify-content-between p-4">
									<div>
										<a href="<?= SERVER_URI ?>noticia.php>" class="text-decoration-none text-body"><h3 class="fs-6">Lorem ipsum dolor sit amet consectetur. Nam sed tellus dolor.</h3></a>
									</div>
									<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>						
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
							<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('https://ciencia-pr.local/images/4-noticias.jpg');">
									<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">CienciaPR</a>
								</div>
								<div class="card-body d-flex flex-column justify-content-between p-4">
									<div>
										<a href="<?= SERVER_URI ?>noticia.php>" class="text-decoration-none text-body"><h3 class="fs-6">Lorem ipsum dolor sit amet consectetur. Nam sed tellus dolor.</h3></a>
									</div>
									<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>						
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
							<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
								<div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('https://ciencia-pr.local/images/5-noticias.jpg');">
									<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">CienciaPR</a>
								</div>
								<div class="card-body d-flex flex-column justify-content-between p-4">
									<div>
										<a href="<?= SERVER_URI ?>noticia.php>" class="text-decoration-none text-body"><h3 class="fs-6">Lorem ipsum dolor sit amet consectetur. Nam sed tellus dolor.</h3></a>
									</div>
									<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		  <!-- Perfiles de historias -->
			<div class="py-3 carousel-module">
				<div class="container">
					<div class="d-flex flex-wrap align-items-end justify-content-start mb-4">
						<div class="d-flex col-12 align-items-center justify-content-between gap-4">
							<h2 class="fs-3 fw-bold">Perfiles de historias</h2>
							
							<div class="pt-3 pt-md-0 d-flex">
								<button class="btn bg-white rounded-circle p-0 js-prev text-secondary" style="width: 32px; height: 32px;" aria-label="Anterior">
										<i class="fa-solid fa-arrow-left"></i>
								</button>
								
								<button class="btn bg-white rounded-circle p-0 ms-2 js-next text-secondary" style="width: 32px; height: 32px;" aria-label="Siguiente">
										<i class="fa-solid fa-arrow-right"></i>
								</button>
							</div>
						</div>
						<!-- Línea Divisora -->
						<?php include 'templates/linea-divisora.php'; ?>
					</div>
				</div>

				<div class="container-fluid py-3">
					<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-4 py-3 scroll-smooth">
						<div class="row gap-3">
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">Long live community leaders, tabonucos of Puerto Rico!</h2></a>
								</div>
							</div>
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">New short documentary highlights the journey of a Puerto Rican scientist</h2></a>
								</div>
							</div>
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">Puerto Rican students receive awards in prestigious scholarship programs</h2></a>
								</div>
							</div>
						</div>																	
						<div class="row gap-3">
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">Long live community leaders, tabonucos of Puerto Rico!</h2></a>
								</div>
							</div>
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">New short documentary highlights the journey of a Puerto Rican scientist</h2></a>
								</div>
							</div>
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">Puerto Rican students receive awards in prestigious scholarship programs</h2></a>
								</div>
							</div>
						</div>																	
						<div class="row gap-3">
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">Long live community leaders, tabonucos of Puerto Rico!</h2></a>
								</div>
							</div>
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">New short documentary highlights the journey of a Puerto Rican scientist</h2></a>
								</div>
							</div>
							<div class="col-12">
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Perfiles de Hotorias</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php>"><h2 class="fs-4 text-body">Puerto Rican students receive awards in prestigious scholarship programs</h2></a>
								</div>
							</div>
						</div>																	
					</div>
				</div>
			</div>
			<!-- Últimas Noticias -->
			<div class="py-3">
				<div class="container">
						
						<div class="row pb-2">
								<div class="col-12">
										<h2 class="fs-3 fw-bold pb-2">Ultimas noticias</h2>
										<?php include 'templates/linea-divisora.php'; ?>
								</div>
						</div>

						<div class="row pt-4 g-4">
								<div class="col-12 col-lg-4">
										<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
												<div class="card h-100 border-0 rounded-2 overflow-hidden">
														<img src="<?= SERVER_URI ?>/images/2-noticias.jpg" class="img-equal" alt="Grupo de científicos sonriendo">
												</div>
										</a>
								</div>
								<div class="col-12 col-lg-8">
										<div class="card bg-white h-100 p-4 rounded-2 border-0">
												<div>
														<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Talento PR</a>
												</div>
												<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
														<h2 class="fs-4 fw-bold display-5 my-3">Lorem ipsum dolor sit amet consectetur. Tortor vulputate lectus eget id dictumst congue. Id laoreet sit.</h2>
												</a>
												<p class="fs-7 text-body">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicula nulla vulputate.</p>
												<div class="mt-3">
														<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
												</div>
										</div>
								</div>
						</div>

						<div class="row pt-4 g-4">
								<div class="col-12 col-lg-4">
										<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
												<div class="card h-100 border-0 rounded-2 overflow-hidden">
														<img src="<?= SERVER_URI ?>/images/2-noticias.jpg" class="img-equal" alt="Grupo de científicos sonriendo">
												</div>
										</a>
								</div>
								<div class="col-12 col-lg-8">
										<div class="card bg-white h-100 p-4 rounded-2 border-0">
												<div>
														<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Talento PR</a>
												</div>
												<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
														<h2 class="fs-4 fw-bold display-5 my-3">Lorem ipsum dolor sit amet consectetur. Tortor vulputate lectus eget id dictumst congue. Id laoreet sit.</h2>
												</a>
												<p class="fs-7 text-body">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicula nulla vulputate.</p>
												<div class="mt-3">
														<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
												</div>
										</div>
								</div>
						</div>

						<div class="row pt-4 g-4">
								<div class="col-12 col-lg-4">
										<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
												<div class="card h-100 border-0 rounded-2 overflow-hidden">
														<img src="<?= SERVER_URI ?>/images/2-noticias.jpg" class="img-equal" alt="Grupo de científicos sonriendo">
												</div>
										</a>
								</div>
								<div class="col-12 col-lg-8">
										<div class="card bg-white h-100 p-4 rounded-2 border-0">
												<div>
														<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Talento PR</a>
												</div>
												<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
														<h2 class="fs-4 fw-bold display-5 my-3">Lorem ipsum dolor sit amet consectetur. Tortor vulputate lectus eget id dictumst congue. Id laoreet sit.</h2>
												</a>
												<p class="fs-7 text-body">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicula nulla vulputate.</p>
												<div class="mt-3">
														<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
												</div>
										</div>
								</div>
						</div>

						<div class="row pt-4 g-4">
								<div class="col-12 col-lg-4">
										<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
												<div class="card h-100 border-0 rounded-2 overflow-hidden">
														<img src="<?= SERVER_URI ?>/images/2-noticias.jpg" class="img-equal" alt="Grupo de científicos sonriendo">
												</div>
										</a>
								</div>
								<div class="col-12 col-lg-8">
										<div class="card bg-white h-100 p-4 rounded-2 border-0">
												<div>
														<a href="<?= SERVER_URI ?>noticias.php" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Talento PR</a>
												</div>
												<a class="text-decoration-none text-body" href="<?= SERVER_URI ?>noticia.php">
														<h2 class="fs-4 fw-bold display-5 my-3">Lorem ipsum dolor sit amet consectetur. Tortor vulputate lectus eget id dictumst congue. Id laoreet sit.</h2>
												</a>
												<p class="fs-7 text-body">Lorem ipsum dolor sit amet consectetur. Posuere mauris vulputate mattis vehicula nulla vulputate.</p>
												<div class="mt-3">
														<small class="text-uppercase text-secondary fw-medium" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
												</div>
										</div>
								</div>
						</div>

						<div class="row mt-5">
								<div class="col-12">
										<nav aria-label="Navegación de noticias">
												<ul class="pagination justify-content-center gap-2 m-0">
														
														<li class="page-item">
																<a class="page-link border-0 bg-transparent text-secondary" href="#" aria-label="Anterior">
																		<i class="fa-solid fa-chevron-left fa-xs"></i>
																</a>
														</li>

														<li class="page-item"><a class="page-link border-0 bg-transparent text-secondary" href="#">1</a></li>
														<li class="page-item"><a class="page-link border-0 bg-transparent text-secondary" href="#">2</a></li>
														
														<li class="page-item active" aria-current="page">
																<a class="page-link border-0 bg-transparent fw-bold text-success" href="#">3</a>
														</li>

														<li class="page-item"><a class="page-link border-0 bg-transparent text-secondary" href="#">4</a></li>
														<li class="page-item"><a class="page-link border-0 bg-transparent text-secondary" href="#">5</a></li>

														<li class="page-item">
																<a class="page-link border-0 bg-transparent text-secondary" href="#" aria-label="Siguiente">
																		<i class="fa-solid fa-chevron-right fa-xs"></i>
																</a>
														</li>

												</ul>
										</nav>
								</div>
						</div>

					</div>
				</div>
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
									<p class="small fw-bold lh-sm mb-0 text-dark">Nombre<br>Apellido</p>
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
									<p class="small fw-bold lh-sm mb-0 text-dark">Nombre<br>Apellido</p>
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
									<p class="small fw-bold lh-sm mb-0 text-dark">Nombre<br>Apellido</p>
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
									<p class="small fw-bold lh-sm mb-0 text-dark">Nombre<br>Apellido</p>
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
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Long live community leaders, tabonucos of Puerto Rico!</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">New short documentary highlights the journey of a scientist</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
									<div>
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
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
										<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
									</div>
									<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
										<h2 class="fs-6 text-body mb-0">Another interesting headline goes here right now</h2>
									</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
										<div>
												<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
										</div>
										<a class="text-decoration-none text-muted" href="<?= SERVER_URI ?>noticia.php">
												<h2 class="fs-6 text-body mb-0">Science is advancing in Puerto Rico rapidly</h2>
										</a>
								</div>
								<div class="card border-0 shadow-sm rounded-2 bg-light p-4 flex-column gap-2">
										<div>
												<a href="<?= SERVER_URI ?>noticias.php" class="fs-9 badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative text-nowrap" style="z-index: 1;">Noticias Científicas</a>
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