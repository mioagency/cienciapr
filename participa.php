<?php

$PageTitle = "Participa | Ciencia Puerto Rico";
$page = "participa"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Participa" => SERVER_URI . 'participa.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 participa-hero d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Participa</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
        
    </section>
    
    <section id="oportunidades_resaltadas" class="py-7">
			<div class="container">
				<!-- CABECERA Y CONTROLES -->
				<div class="d-flex flex-wrap align-items-end justify-content-between mb-4">
					<div class="d-flex col-lg-8 col-md-8 align-items-center justify-content-between gap-4 w-100">
							<h2 class="fs-2 text-body fw-bold">Oportunidades resaltadas</h2>
							<!-- Botones de navegación -->
							<div class="pt-3 pt-md-0 d-flex">
									<button class="btn bg-primary text-white rounded-circle p-0" style="width: 32px; height: 32px;" id="btnPrev" aria-label="Anterior">
											<i class="fa-solid fa-arrow-left"></i>
									</button>
									<button class="btn bg-primary text-white rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="btnNext" aria-label="Siguiente">
											<i class="fa-solid fa-arrow-right"></i>
									</button>
							</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 ps-md-5">

				<!-- 
					CONTENEDOR DEL SLIDER 
					- row flex-nowrap: Alinea horizontalmente sin saltar de línea.
					- overflow-x-auto: Activa el scroll.
					- g-4: Espacio entre tarjetas (gap).
				-->
				<div id="sliderContainer" class="row flex-nowrap overflow-x-auto no-scrollbar g-4 scroll-smooth">
						
						<!-- ITEM 1 -->
						<!-- 
								col-11: Móvil (91%)
								col-md-5: Tablet (41%)
								col-lg-peek-3: Desktop (30%)
						-->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Convocatorias</h3>
													<p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 2 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/2-programas.png" class="card-img-top border-bottom border-8 border-info" alt="Programas">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Fondo de Innovación</h5>
													<p class="text-start fs-7">Apoyo para proyectos de investigación o divulgación con impacto en Puerto Rico. </p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 3 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/3-eventos.png" class="card-img-top border-bottom border-8 border-info" alt="Eventos">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Mentoría Comunitaria</h5>
													<p class="text-start fs-7">Conecta con escuelas y organizaciones para ofrecer talleres o charlas científicas.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestros programas</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 4 (Este se asoma en desktop) -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Ciencia Ciudadana</h3>
													<p class="text-start fs-7">Únete a proyectos donde la comunidad participa en la observación y recolección de datos científicos.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Entérate de nuestros eventos</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 5 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Convocatorias</h3>
													<p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>
						
						<!-- ITEM 6 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Convocatorias</h3>
													<p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
	</section>
	<section id="foro-oportunidades" class="py-8 bg-light">
        <div class="container">
            <div class="row gx-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="card bg-white rounded-20 p-5 h-100 d-flex flex-column justify-content-center border-0">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Participa en nuestro foro de oportunidades</h2>
                            <p class="fs-5 card-text fw-normal">Un espacio dinámico donde nuestra comunidad comparte actividades, proyectos, colaboraciones, posiciones voluntarias, llamados a participación y recursos que pueden impulsarte en tu trayectoria. Aquí puedes descubrir iniciativas nuevas y también publicar las tuyas para conectar con personas interesadas en ciencia desde diferentes áreas.</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a href="<?= SERVER_URI ?>foro.php" class="btn btn-primary text-white btn-lg fs-7 me-3">Participar en el foro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <img class="rounded-20 w-100 h-100 object-fit-cover" src="<?= SERVER_URI ?>images/1-participa.webp" alt="Doctor de ls comunidad de CienciaPR" >
                </div>
            </div>
        </div>
    </section>
		<!-- ESPACIO PARA ANUNCIO -->
    <section class="pt-4">
			<?php include_once ('templates/fila-de-anuncio.php'); ?>
		</section>
		<!-- Eventos resaltados -->
		<section class="pb-7 carousel-module">
			<div class="container">
				<!-- CABECERA Y CONTROLES -->
				<div class="d-flex flex-wrap align-items-end justify-content-between mb-4">
					<div class="d-flex col-lg-8 col-md-8 align-items-center justify-content-between gap-4 w-100">
							<h2 class="fs-2 text-body fw-bold">Eventos resaltados</h2>
							<!-- Botones de navegación -->
							<div class="pt-3 pt-md-0 d-flex">
									<button class="btn bg-primary text-white js-prev rounded-circle p-0" style="width: 32px; height: 32px;" id="btnPrev" aria-label="Anterior">
											<i class="fa-solid fa-arrow-left"></i>
									</button>
									<button class="btn bg-primary text-white js-next rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="btnNext" aria-label="Siguiente">
											<i class="fa-solid fa-arrow-right"></i>
									</button>
							</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 ps-md-5">

				<!-- 
					CONTENEDOR DEL SLIDER 
					- row flex-nowrap: Alinea horizontalmente sin saltar de línea.
					- overflow-x-auto: Activa el scroll.
					- g-4: Espacio entre tarjetas (gap).
				-->
				<div class="slider-track slider-wrapper row flex-nowrap overflow-x-auto no-scrollbar g-4 py-3 scroll-smooth">
						
						<!-- ITEM 1 -->
						<!-- 
								col-11: Móvil (91%)
								col-md-5: Tablet (41%)
								col-lg-peek-3: Desktop (30%)
						-->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Fondo de Innovación</h3>
													<p class="text-start fs-7">Apoyo para proyectos de investigación o divulgación con impacto en Puerto Rico.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 2 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/2-programas.png" class="card-img-top border-bottom border-8 border-info" alt="Programas">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Mentoría Comunitaria</h5>
													<p class="text-start fs-7">Conecta con escuelas y organizaciones para ofrecer talleres o charlas científicas.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestros programas</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 3 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/3-eventos.png" class="card-img-top border-bottom border-8 border-info" alt="Eventos">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Ciencia Ciudadana</h5>
													<p class="text-start fs-7">Únete a proyectos donde la comunidad participa en la observación y recolección de datos científicos.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Entérate de nuestros eventos</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 4 (Este se asoma en desktop) -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Ciencia Ciudadana</h3>
													<p class="text-start fs-7">Únete a proyectos donde la comunidad participa en la observación y recolección de datos científicos.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Entérate de nuestros eventos</a>
												</div>
										</div>
								</div>
						</div>

						<!-- ITEM 5 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Convocatorias</h3>
													<p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>
						
						<!-- ITEM 6 -->
						<div class="col-11 col-md-5 col-lg-peek-3 flex-shrink-0">
								<div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
										<img src="<?= SERVER_URI ?>images/1-convocatorias.png" class="card-img-top border-bottom border-8 border-info" alt="Convocatorias">
										<div class="card-body d-flex flex-column justify-content-between p-4">
												<div>
													<h3>Convocatorias</h3>
													<p class="text-start fs-7">Becas, internados, fondos y vacantes STEM de nuestra red. Explora y comparte oportunidades para estudiantes, docentes y científicxs.</p>
												</div>
												<div>
													<a href="#" class="btn btn-primary btn-lg fs-8 text-white">Conoce nuestras convocatorias</a>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
	</section>
<!-- Calendario -->
<section id="seccion-eventos" class="container-fluid bg-primary py-7 calendar-bg">
	<div class="container pb-7">
		<div class="row">
			<div class="col-12 col-md-4">
				<h2 class="fs-2 text-white fw-bold">Nuestros Eventos</h2>
			</div>
			<div class="col-12 col-md-8">
				<p class="text-white fs-5">El calendario de CienciaPR reúne eventos relevantes para la comunidad científica. Haz clic en cualquier evento para ver detalles o añadirlo a tu calendario. Si deseas compartir un evento con la comunidad, envía la información.</p>
				<a href="#" class="btn btn-success btn-lg fw-bold text-dark fs-7">Compartir Evento</a>	
			</div>
		</div>
	</div>
	<div class="container bg-light p-3 p-md-6 rounded-20 mb-7" style="max-width:1300px">

        <!-- Título + Navegación -->
        <div class="d-flex justify-content-between align-items-center mb-4">
					<h2 id="calendar-title" class="fs-4 fw-bold text-body m-0">Diciembre 2025</h2>
					<!-- Botones de navegación -->
					<div class="pt-3 pt-md-0 d-flex">
							<button class="btn bg-primary text-white rounded-circle p-0" style="width: 32px; height: 32px;" id="prev-month" aria-label="Anterior">
									<i class="fa-solid fa-arrow-left"></i>
							</button>
							<button class="btn bg-primary text-white rounded-circle p-0 ms-2" style="width: 32px; height: 32px;" id="next-month" aria-label="Siguiente">
									<i class="fa-solid fa-arrow-right"></i>
							</button>
					</div>
        </div>

        <div id="calendarWrapper">

            <!-- ===================================================== -->
            <!-- MES 1: DICIEMBRE 2025 -->
            <!-- ===================================================== -->
            <div class="calendar-month" data-title="Diciembre 2025" style="display:block;">
                <div class="calendar-scroll">

                    <!-- Dec 2025 starts MONDAY → 1 empty cell -->
                    <div class="row g-0">
                        <div class="col calendar-cell"></div> <!-- Sunday empty -->
                        <div class="col calendar-cell"><span class="day-number">1</span></div>
                        <div class="col calendar-cell"><span class="day-number">2</span></div>
                        <div class="col calendar-cell"><span class="day-number">3</span></div>
                        <div class="col calendar-cell"><span class="day-number">4</span></div>
                        <div class="col calendar-cell event">
                            <span class="day-number">5</span>
                            <div class="event-text">Evento ejemplo</div>
                        </div>
                        <div class="col calendar-cell"><span class="day-number">6</span></div>
                    </div>

                    <!-- WEEK 2 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">7</span></div>
                        <div class="col calendar-cell"><span class="day-number">8</span></div>
                        <div class="col calendar-cell"><span class="day-number">9</span></div>
                        <div class="col calendar-cell"><span class="day-number">10</span></div>
                        <div class="col calendar-cell"><span class="day-number">11</span></div>
                        <div class="col calendar-cell"><span class="day-number">12</span></div>

                        <div class="col calendar-cell event">
                            <span class="day-number">13</span>
                            <div class="event-text">Evento especial</div>
                        </div>
                    </div>

                    <!-- WEEK 3 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">14</span></div>
                        <div class="col calendar-cell"><span class="day-number">15</span></div>
                        <div class="col calendar-cell"><span class="day-number">16</span></div>
                        <div class="col calendar-cell"><span class="day-number">17</span></div>
                        <div class="col calendar-cell"><span class="day-number">18</span></div>
                        <div class="col calendar-cell"><span class="day-number">19</span></div>
                        <div class="col calendar-cell"><span class="day-number">20</span></div>
                    </div>

                    <!-- WEEK 4 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">21</span></div>
                        <div class="col calendar-cell"><span class="day-number">22</span></div>
                        <div class="col calendar-cell"><span class="day-number">23</span></div>
                        <div class="col calendar-cell"><span class="day-number">24</span></div>
                        <div class="col calendar-cell"><span class="day-number">25</span></div>
                        <div class="col calendar-cell"><span class="day-number">26</span></div>
                        <div class="col calendar-cell"><span class="day-number">27</span></div>
                    </div>

                    <!-- WEEK 5 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">28</span></div>
                        <div class="col calendar-cell"><span class="day-number">29</span></div>
                        <div class="col calendar-cell"><span class="day-number">30</span></div>
                        <div class="col calendar-cell"><span class="day-number">31</span></div>
                        <div class="col calendar-cell"></div>
                        <div class="col calendar-cell"></div>
                        <div class="col calendar-cell"></div>
                    </div>

                </div>
            </div>

            <!-- ===================================================== -->
            <!-- MES 2: ENERO 2026 -->
            <!-- ===================================================== -->
            <div class="calendar-month" data-title="Enero 2026" style="display:none;">
                <div class="calendar-scroll">

                    <!-- Jan 2026 starts THURSDAY → 3 empty cells -->
                    <div class="row g-0">
                        <div class="col calendar-cell"></div> <!-- Sunday -->
                        <div class="col calendar-cell"></div> <!-- Monday -->
                        <div class="col calendar-cell"></div> <!-- Tuesday -->
                        <div class="col calendar-cell"><span class="day-number">1</span></div>
                        <div class="col calendar-cell"><span class="day-number">2</span></div>
                        <div class="col calendar-cell"><span class="day-number">3</span></div>
                        <div class="col calendar-cell"><span class="day-number">4</span></div>
                    </div>

                    <!-- WEEK 2 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">5</span></div>
                        <div class="col calendar-cell"><span class="day-number">6</span></div>
                        <div class="col calendar-cell"><span class="day-number">7</span></div>
                        <div class="col calendar-cell event">
                            <span class="day-number">8</span>
                            <div class="event-text">Evento ejemplo</div>
                        </div>
                        <div class="col calendar-cell"><span class="day-number">9</span></div>

                        <div class="col calendar-cell event">
                            <span class="day-number">10</span>
                            <div class="event-text">Evento especial</div>
                        </div>

                        <div class="col calendar-cell"><span class="day-number">11</span></div>
                    </div>

                    <!-- WEEK 3 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">12</span></div>
                        <div class="col calendar-cell"><span class="day-number">13</span></div>
                        <div class="col calendar-cell"><span class="day-number">14</span></div>
                        <div class="col calendar-cell"><span class="day-number">15</span></div>
                        <div class="col calendar-cell"><span class="day-number">16</span></div>
                        <div class="col calendar-cell"><span class="day-number">17</span></div>
                        <div class="col calendar-cell"><span class="day-number">18</span></div>
                    </div>

                    <!-- WEEK 4 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">19</span></div>
                        <div class="col calendar-cell"><span class="day-number">20</span></div>
                        <div class="col calendar-cell"><span class="day-number">21</span></div>
                        <div class="col calendar-cell"><span class="day-number">22</span></div>
                        <div class="col calendar-cell"><span class="day-number">23</span></div>
                        <div class="col calendar-cell"><span class="day-number">24</span></div>
                        <div class="col calendar-cell"><span class="day-number">25</span></div>
                    </div>

                    <!-- WEEK 5 -->
                    <div class="row g-0">
                        <div class="col calendar-cell"><span class="day-number">26</span></div>
                        <div class="col calendar-cell"><span class="day-number">27</span></div>
                        <div class="col calendar-cell"><span class="day-number">28</span></div>
                        <div class="col calendar-cell"><span class="day-number">29</span></div>
                        <div class="col calendar-cell"><span class="day-number">30</span></div>
                        <div class="col calendar-cell"><span class="day-number">31</span></div>
                        <div class="col calendar-cell"></div>
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