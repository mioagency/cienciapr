<?php

$PageTitle = "Regístrate! | Ciencia Puerto Rico";
$page = "register"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Regístrate" => SERVER_URI . 'register.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>
	<!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
	<section class="container-fluid p-0 unete-hero d-flex align-items-center" style="min-height: 250px;">
		<div class="container">
				<!-- TÍTULO H1 -->
				<h1 class="fw-bold mb-3 text-body">¡Regístrate!</h1>
				<!-- BREADCRUMBS: Aparece justo debajo del H1 -->
				<?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
		</div>
	</section>
	<!-- ESPACIO PARA ANUNCIO -->
	<section class="pt-4">
		<?php include_once ('templates/fila-de-anuncio.php'); ?>
	</section>

	<!-- Accordion con formulario -->
	<section class="container pb-5 pb-md-8">
		<div class="row w-75 mx-auto mb-5">
			<div class="accordion" id="mainAccordion">
				<!-- ========================= -->
				<!--   ITEM 1 — FORMULARIO    -->
				<!-- ========================= -->
				<div class="accordion-item bg-white">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button fs-7 fw-bolder bg-white" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Información de Cuenta y Contraseña
						</button>
					</h2>

					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
						data-bs-parent="#mainAccordion">
					<div class="accordion-body">

						<!-- ========================= -->
						<!-- ✦ FORMULARIO COMPLETO ✦ -->
						<!-- ========================= -->
						<form>

							<!-- Alias -->
							<div class="mb-3">
								<label class="form-label fw-bolder">Alias de usuario <span class="text-warning"><span class="text-warning">*</span></span></label>
								<div class="form-text">Se permiten espacios en blanco, puntos, guiones cortos, apóstrofes y guiones bajos.</div>
								<input type="text" class="form-control">
							</div>

							<!-- Email -->
							<div class="mb-3">
								<label class="form-label fw-bolder">Correo electrónico <span class="text-red"><span class="text-warning">*</span></span></label>
								<div class="form-text">
										Todos los correos del sistema se enviaran a esta dirección. Su dirección de correo será privada y sólo podrá ser vista por los administradores de CienciaPR.
								</div>
								<input type="email" class="form-control">
							</div>
							<!-- Confirmar email -->
							<div class="mb-3">
								<label class="form-label fw-bolder">Confirme su correo electrónico <span class="text-red"><span class="text-warning">*</span></span></label>
								<div class="form-text">
										Favor de volver a entrar su dirección de correo electrónico para asegurarnos de que esté correcta.
								</div>
								<input type="email" class="form-control">
							</div>

							<!-- Nombre -->
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label fw-bolder">Nombre <span class="text-red"><span class="text-warning">*</span></span></label>
									<input type="text" class="form-control">
								</div>

								<div class="col-md-6">
									<label class="form-label fw-bolder">Segundo nombre</label>
									<input type="text" class="form-control">
								</div>
							</div>

							<!-- Apellidos -->
							<div class="mt-3">
									<label class="form-label fw-bolder">Apellido(s) <span class="text-red"><span class="text-warning">*</span></span></label>
									<input type="text" class="form-control">
							</div>

							<!-- Género + Idioma -->
							<div class="row mt-4">
									<div class="col-md-6">
											<label class="form-label fw-bolder d-block">Género</label>

											<div class="form-check">
													<input class="form-check-input" type="radio" name="genero">
													<label class="form-check-label">N/D</label>
											</div>

											<div class="form-check">
													<input class="form-check-input" type="radio" name="genero">
													<label class="form-check-label">Femenino</label>
											</div>

											<div class="form-check">
													<input class="form-check-input" type="radio" name="genero">
													<label class="form-check-label">Masculino</label>
											</div>
									</div>

									<div class="col-md-6">
											<label class="form-label d-block fw-bolder">Idioma</label>
											<div class="form-text">
												El idioma predeterminado de esta cuenta para mensajes de correo y para la presentación del sitio.
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="idioma">
													<label class="form-check-label">Inglés</label>
											</div>

											<div class="form-check">
													<input class="form-check-input" type="radio" name="idioma">
													<label class="form-check-label">Español</label>
											</div>
									</div>
							</div>

							<!-- Subir imagen -->
							<div class="mt-4">
									<label class="form-label fw-bolder">Subir imagen</label>
									<div class="form-text">
											Añade una foto tuya. Te ayudará a facilitar conexiones profesionales y de entrenamiento.
									</div>
									<input type="file" class="form-control">
							</div>

							<!-- Institución -->
							<div class="mt-4">
									<label class="form-label fw-bolder">Institución académica o de trabajo actual <span class="text-red"><span class="text-warning">*</span></span></label>
									<div class="form-text">
										Pon el nombre de la institución donde estudias o trabajas. Si tienes más de un trabajo, pon tu institución primaria. Si en este momento no estas asociado a una institución deja el espacio vacío. Este campo se autocompleta, empieza a escribir un nombre y te dará los resultados más probables para que escojas de ellos.
									</div>
									<input type="text" class="form-control">
							</div>

							<!-- Relación -->
							<div class="mt-3">
									<label class="form-label fw-bolder">Relación con la institución <span class="text-red"><span class="text-warning">*</span></span></label>
									<select class="form-select">
											<option>Seleccione un valor</option>
									</select>
							</div>

							<!-- Especialidad -->
							<div class="row mt-3">
									<div class="col-md-9">
											<label class="form-label fw-bolder">Área de especialidad o interés principal<span class="text-warning">*</span></label>
											<div class="form-text">
												Escoge un máximo de tres temas que describan tu área de interés o investigación científica. Después de escoger el tema, acuérdate de presionar "Agregar."
											</div>
											<select class="form-select">
													<option>Ninguno</option>
											</select>
									</div>

									<div class="col-md-3 d-flex align-items-end">
											<button class="btn btn-secondary w-100">Agregar</button>
									</div>
								</div>

								<!-- Dirección -->
								<h5 class="mt-4 fw-bolder">Dirección</h5>
								<div class="form-text mb-2">Pon la dirección donde vives o trabajas. Queremos facilitar que los miembros de CienciaPR se puedan encontrar para propósitos académicos o profesionales.</div>
								<div class="mb-3">
									<label class="form-label fw-bolder">Buscar<span class="text-warning">*</span></label>
									<div class="form-text">Empieza a escribir una dirección y podrás seleccionar tu dirección entre las entradas que salgan.</div>
									<input type="text" class="form-control">
								</div>

								<div class="row g-3">
									<div class="col-md-4">
										<label class="form-label fw-bolder">Ciudad/Pueblo</label>
										<input type="text" class="form-control">
									</div>

									<div class="col-md-4">
										<label class="form-label fw-bolder">Provincia/Estado/País</label>
										<input type="text" class="form-control">
									</div>

									<div class="col-md-4">
										<label class="form-label fw-bolder">País</label>
										<select class="form-select">
												<option>Puerto Rico</option>
										</select>
									</div>
								</div>

								<div class="row">
									<!-- Mapa -->
									 <div class="form-text mt-4">Para usar el mapa para encontrar una ubicación, arrastre el marcador o haga clic en el mapa.</div>
									<div class="col-12 col-md-6">
										<div class="mt-4">
											<img src="<?= SERVER_URI ?>images/mapa.webp" class="img-fluid rounded border">
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="mt-4">
											<label class="form-label fw-bolder">Latitud</label>
											<input type="text" class="form-control">
											<label class="form-label fw-bolder">Longitud</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-check mt-4">
										<input class="form-check-input" type="checkbox">
										<label class="form-check-label">Privado</label>
										<div class="form-text">Marca aquí si quieres esconder esta información de los otros miembros.</div>
								</div>
								</form>
							</div>
						</div>
					</div>

					<!-- ========================= -->
					<!--   ITEMS 2 — 5 VACÍOS     -->
					<!-- ========================= -->

					<div class="accordion-item bg-white my-1">
							<h2 class="accordion-header">
									<button class="accordion-button bg-white fs-7 fw-bolder collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseTwo">Sobre mí y mis proyectos</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#mainAccordion">
									<div class="accordion-body">
											Contenido pendiente…
									</div>
							</div>
					</div>

					<div class="accordion-item bg-white my-1">
							<h2 class="accordion-header">
									<button class="accordion-button bg-white fs-7 fw-bolder collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseThree">Historial académico</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#mainAccordion">
									<div class="accordion-body">
											Contenido pendiente…
									</div>
							</div>
					</div>

					<div class="accordion-item bg-white my-1">
							<h2 class="accordion-header">
									<button class="accordion-button bg-white fs-7 fw-bolder collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseFour">Premios y logros</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#mainAccordion">
									<div class="accordion-body">
											Contenido pendiente…
									</div>
							</div>
					</div>

					<div class="accordion-item bg-white my-1">
							<h2 class="accordion-header">
									<button class="accordion-button bg-white fs-7 fw-bolder collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseFive">Intereses de mentoría</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#mainAccordion">
									<div class="accordion-body">
											Contenido pendiente…
									</div>
							</div>
					</div>

					<div class="accordion-item bg-white my-1">
							<h2 class="accordion-header">
									<button class="accordion-button bg-white fs-7 fw-bolder collapsed" data-bs-toggle="collapse"
											data-bs-target="#collapseSix">Websites y medios sociales</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#mainAccordion">
									<div class="accordion-body">
											Contenido pendiente…
									</div>
							</div>
					</div>

			</div>
			<div class="bg-primary rounded-2 mt-4 p-4">
				<label class="form-label fw-bolder d-block fs-7 text-white">¿Deseas subscribirte a nuestros boletines?</label>
				<div class="form-check">
						<input class="form-check-input" type="checkbox" name="suscribirse">
						<label class="form-check-label text-white">Suscribirse</label>
				</div>
				<label class="form-label fw-bolder d-block fs-7 text-white mt-4">Grupos de interés</label>
				<div class="form-check mb-2">
						<input class="form-check-input" type="radio" name="grupos_de_interes">
						<label class="form-check-label text-white">Boletín informativo general de CienciaPR</label>
				</div>
				<div class="form-check mb-2">
						<input class="form-check-input" type="radio" name="grupos_de_interes">
						<label class="form-check-label text-white">Boletín informativo sobre carreras STEM y desarrollo profesional</label>
				</div>
				<div class="form-check mb-2">
						<input class="form-check-input" type="radio" name="grupos_de_interes">
						<label class="form-check-label text-white">Boletín informativo de la Red de Acción Política Científica de Relaciones Públicas</label>
				</div>
				<div class="form-check mb-2">
						<input class="form-check-input" type="radio" name="grupos_de_interes">
						<label class="form-check-label text-white">Boletín informativo sobre educación STEM K-12</label>
				</div>
				<div class="form-check mb-2">
						<input class="form-check-input" type="radio" name="grupos_de_interes">
						<label class="form-check-label text-white">Semillas del éxito: noticias sobre oportunidades para niñas en STEM</label>
				</div>
				<div class="form-check mb-2">
						<input class="form-check-input" type="radio" name="grupos_de_interes">
						<label class="form-check-label text-white">Información ocasional de CienciaPR sobre oportunidades académicas/profesionales</label>
				</div>
			</div>
			<div class="mt-4">
				<div class="form-check">
						<input class="form-check-input bg-white" type="checkbox" name="terminos">
						<label class="form-check-label"><span class="text-warning">*</span></label>
				</div>
				<p class="fs-6">He leído y entendido los términos y la política de privacidad de CienciaPR. Favor entender que cualquier información contenida en los materiales que suba al portal, incluyendo su CV/resume, no está sujeta a la política de privacidad de CienciaPR. Tenga cuidado de no incluir información privada en su CV/resumé</p>
				<button class="btn btn-primary text-white mt-2">Registrse como miembro</button>
			</div>
		</div>
	</section>
</main>

<?php
include_once ('templates/footer.php');
?>