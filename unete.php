<?php

$PageTitle = "¡Únete! | Ciencia Puerto Rico";
$page = "unete"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Únete" => SERVER_URI . 'unete.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>
	<!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
	<section class="container-fluid p-0 unete-hero d-flex align-items-center" style="min-height: 250px;">
		<div class="container">
				<!-- TÍTULO H1 -->
				<h1 class="fw-bold mb-3 text-body">¡Únete!</h1>
				<!-- BREADCRUMBS: Aparece justo debajo del H1 -->
				<?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
		</div>
	</section>
	<!-- ESPACIO PARA ANUNCIO -->
	<section class="py-0 pt-lg-4 pb-lg-4">
		<?php include_once ('templates/fila-de-anuncio.php'); ?>
	</section>
	<!-- SECCIÓN DE TEXTO PRINCIPAL -->
	<section id="comunidadCienciaPR" class="container py-5 py-lg-8 pt-lg-4 pb-lg-4">
		<!-- Eliminamos row-cols-2 para forzar el apilamiento en móviles -->
		<div class="row row-cols-1 row-cols-md-2 g-4 g-lg-5">
			<div class="col">
				<div class="card bg-white h-100 p-5 rounded-20 border-0">
					<h2 class="fs-2 fw-bold display-5 mb-4">Comunidad de CienciaPR</h2>
					<p class="fs-5 text-body">La red de miembros de CienciaPR es la comunidad más grande del mundo de personas interesadas en la ciencia y Puerto Rico. Fundada en el año 2006, la red ya cuenta con más de 17,000 miembros de Puerto Rico, Estados Unidos y otros países.</p>
					<p class="fs-5 text-body">¡Las empresas, programas educativos, entidades gubernamentales y organizaciones sin fines de lucro, también pueden formar parte de nuestra vibrante comunidad interesada en las ciencias y Puerto Rico.</p>
					<p class="fs-5 text-body fw-bold">¡Conecta, colabora y visibiliza tu compromiso con la ciencia y Puerto Rico!</p>
						<!-- Botón conoce más -->
						<div class="mt-4">
							<a href="#" class="btn btn-primary text-white btn-lg fs-7">Únete a la comunidad de Ciencia PR</a>
						</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100 border-0 rounded-20 overflow-hidden">
					<img src="<?= SERVER_URI ?>/images/1-unete.webp" class="img-equal"
						alt="Grupo de científicos sonriendo">
				</div>
			</div>
		</div>
	</section>
	<section class="container py-5">
		<div class="row">
			<div class="col-12 col-md-10 offset-md-1">
				<h2 class="fs-2 fw-bold display-5 mb-4 text-start text-lg-center">La membresía de CienciaPR está diseñada para individuos y organizaciones que desean</h2>
				<ul class="fs-5">
					<li>Unirse a la comunidad interesada en la ciencia y Puerto Rico más grande del mundo y aumentar su visibilidad dentro del ecosistema STEM</li>
					<li>Explorar las iniciativas de CienciaPR y su impacto en Puerto Rico y más allá</li>
					<li>Participar en oportunidades, convocatorias y eventos de CienciaPR y otras organizaciones</li>
					<li>Descubrir contenidos que celebran y divulgan la ciencia puertorriqueña</li>
					<li>Involucrarse con la misión de CienciaPR o crear una alianza</li>
				</ul>
				<h2 class="fs-2 fw-bold display-5 mt-4 mb-4 text-start text-lg-center">¿Quiénes pueden ser miembros?</h2>
				<ul class="fs-5">
					<li><strong>Individuos:</strong> Cualquier personas mayor de 13 años de edad interesada en la ciencia y Puerto Rico</li>
					<li><strong>Organizaciones:</strong></li>
						<ul>
							<li>Universidades, departamentos académicos o centros de investigación</li>
							<li>Escuelas y clubes estudiantiles</li>
							<li>Museos y centros de ciencia</li>
							<li>Programas educativos STEM/STEAM</li>
							<li>Empresas privadas con enfoque o interés en ciencia, tecnología o innovación</li>
							<li>Organizaciones sin fines de lucro y fundaciones </li>
							<li>Agencias gubernamentales o programas públicos con enfoque educativo, científico y/o tecnológico</li>
							<li>Centros comunitarios y bibliotecas con programas educativos</li>
						</ul>
				</ul>
				<div class="mt-6 text-center">
							<a href="#" class="btn btn-primary text-white btn-lg fs-7">Únete a la comunidad de Ciencia PR</a>
				</div>
			</div>
		</div>
	</section>
	<section id="redDeMuseosyCentrosDeCiencia" class="py-7 bg-primary pattern-grey">
    <div class="container">
      <h2 class="fs-2 text-primary fw-bold text-white text-center">Beneficios y oportunidades para miembros</h2>
      
      <div class="table-responsive shadow-sm pt-4">
        
        <table class="table table-striped rounded-3 overflow-hidden table-hover align-middle mb-0 fs-6" style="border-collapse: separate; border-spacing: 0;">
          
          <thead class="table-dark">
            <tr>
              <th scope="col" class="py-3 ps-4 text-center" style="min-width: 250px; border-right: 1px solid rgba(255,255,255,0.3)">Beneficio / Oportunidad</th>
              
              <th scope="col" class="py-3 text-center" style="min-width: 300px; border-right: 1px solid rgba(255,255,255,0.3)">Miembro Individual</th>
              
              <th scope="col" class="py-3 pe-4 text-center" style="min-width: 300px;">Miembro Organizacional</th>
            </tr>
          </thead>
          
          <tbody>
            
            <tr>
              <td class="ps-4 py-3">
                <span class="fw-bold">Visibilidad:</span><br>
								<ol class="fs-6">
									<li>Perfil en CienciaPR.org</li>
									<li>Website y otras plataformas de comunicaciones</li>
								</ol>
              </td>
              <td>
								<ol>
									<li>Sí – Perfil personal con biografía, intereses y publicaciones</li>
									<li>Limitada – Si se resalta algún logro o participación destacada del miembro</li>
								</ol>
              </td>
              <td class="pe-4">
								<ol>
									<li>Sí – Perfil organizacional con misión, áreas de trabajo, enlaces y contactos clave</li>
									<li>Sí – Oportunidad de ser incluído en el Mapa de Iniciativas STEM (si aplica) y oportunidad de colaboración para amplificar actividades y logros organizacionales a través de los canales de CienciaPR.</li>
								</ol>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Conexión con talentos y expertos</td>
              <td>Sí- Acceso a la red de +17,000 miembros</td>
              <td class="pe-4">Sí- Acceso a la red de +17,000 miembros</td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Publicación de eventos, convocatorias y oportunidades</td>
              <td>Sí – En foro y calendario de eventos desde el perfil personal</td>
              <td class="pe-4">Sí – En foro y calendario de eventos. A nombre de la organización</td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Descuentos</td>
              <td>Sí –Recibe periódicamente códigos de descuento en productos de la tienda (pronto)</td>
              <td class="pe-4">Sí –Precio especial como miembro organizacional en anuncios pagados, productos y servicios de CienciaPR (pronto)</td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Participación en programas y campañas de CienciaPR</td>
              <td>Sí – Según convocatoria o elegibilidad</td>
              <td class="pe-4">Sí – Oportunidad de invitaciones para colaborar con programas, campañas y/o esfuerzos de impacto liderados por CienciaPR.</td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Boletines informativos</td>
              <td>Sí – Recibe boletines según suscripción</td>
              <td class="pe-4">Sí – Recibe boletines según suscripción.</td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Acceso a oportunidades de mentoría</td>
              <td>Sí – Como mentor/a o mentoreado/a en iniciativas específicas</td>
              <td class="pe-4">Sí –Puede facilitar participación de su personal como mentor/a o mentoreado/a</td>
            </tr>

            <tr>
              <td class="ps-4 py-3">
                <span class="fw-bold">Catálogo de Recursos Educativos</span><br>
								<ol>
									<li>Acceso</li>
									<li>Diseminación</li>
								</ol>
              </td>
              <td>Sí –Acceso completo a contenido abierto del Catálogo</td>
              <td class="pe-4">
								<ol>
									<li>Sí –Acceso completo a contenido abierto del Catálogo.</li>
									<li>Oportunidad de añadir recursos de su organización al Catálogo (opción premium pronto)</li>
								</ol>
              </td>
            </tr>

            <tr>
              <td class="ps-4 fw-bold py-3">Costo</td>
              <td>Gratuito (opciones premium pronto)</td>
              <td class="pe-4">Gratuito (opciones premium pronto)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
	<!--Sección Compromisos de los miembros de CienciaPR -->
	<section id="registroDeiniciativasStemPR" class="container py-5 py-lg-8">
		<div class="row row-cols-1 row-cols-md-2 g-4 g-lg-5">
			<div class="col">
				<div class="card h-100 border-0 rounded-20 overflow-hidden">
					<img src="<?= SERVER_URI ?>/images/2-unete.webp" class="img-equal"
						alt="Grupo de científicos sonriendo">
				</div>
			</div>
			<div class="col">
				<div class="card h-100 border-0">
					<h2 class="fs-2 fw-bold display-5 mb-4">Compromisos de los miembros de CienciaPR</h2>
					<ul class="fs-5">
						<li>Respetar las normas de la comunidad de CienciaPR y sus plataformas de comunicación, foros y calendarios</li>
						<li>Mantener actualizado su perfil institucional. Recomendamos revisar anualmente</li>
					</ul>
					<h2 class="fs-2 fw-bold display-5 mb-4">¿Cómo obtener la membresía?</h2>
					<ul class="fs-5">
						<li>Completa la información básica en CienciaPR.org. Puedes hacer sign up usando la cuenta organizacional de Google o LinkedIn</li>
						<li>Una vez ha abierto su membresía, puede llenar la información adicional (opcional)</li>
						<li>Asegure marcar la suscripción a nuestro boletín</li>
					</ul>
						<div class="mt-4">
							<a href="#" class="btn btn-primary text-white btn-lg fs-7">Únete a la comunidad de Ciencia PR</a>
						</div>
				</div>
			</div>
		</div>
	</section>
	<section id="busquedaDeMiembros" class="pb-5 py-md-8 pattern-grey-2">
        <div class="container">
            <div class="row p-3">
                <div class="col-md-10 bg-primary rounded-20 mx-auto p-5">
                    <h2 class="fs-2 fw-bold display-5 text-white mb-4 text-center">Búsqueda avanzada de miembros</h2>
										<p class="fs-5 text-white text-center">¿Quieres encontrar a alguien que comparta tus intereses? Con la búsqueda avanzada de miembros puedes descubrir científicos, educadores y estudiantes según su especialidad, país o proyectos. Es una forma sencilla y rápida de conectar con personas que pueden inspirarte, ayudarte en tus estudios o colaborar contigo en nuevas ideas.</p>
										<div class="text-center mt-3 pt-3"><a href="#" class="btn btn-success fs-6">Explora perfiles avanzados</a></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once ('templates/footer.php');
?>