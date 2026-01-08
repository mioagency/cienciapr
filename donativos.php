<?php

$PageTitle = "Donativos | Ciencia Puerto Rico"; 
$page = ""; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Donativos" => SERVER_URI . 'donativos.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 explora-hero page-hero-bg bg-img-donativos d-flex align-items-center" style="min-height: 250px; background-position:top !important;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">¡Contribuye a la Ciencia Boricua!</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
    </section>


    <!-- ANUNCIO -->
    <?php include_once ('templates/fila-de-anuncio.php'); ?>

    <!-- SECCIÓN CONTENIDO INICIAL -->
    <section class="pb-5">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="card bg-white border-0 rounded-20 p-5 h-100 d-flex flex-column">
                        <div class="p-0">
                            <h2 class="fs-2 fw-semibold">Apóyanos con tu donativo</h2>
                            <p class="fs-5 card-text fw-normal">Preferimos recibir tu donativo a través de Givebutter, una plataforma segura que acepta pagos con tarjetas de crédito, PayPal, Venmo y ACH.</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <a href="http://givebutter.com/Tt7CRd" class="me-3">
                                    <img src="<?= SERVER_URI ?>images/Givebutter-logo.svg" alt="Logo de plafaorma de donaciones Givebuttero" >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/donativos-top.png" alt="Grupo de profesionales saludando" >
                </div>
            </div>
        </div>
    </section>

    <section id="donativosRecurrentes" class="py-5 py-md-8">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-12 text-center mb-md-5">
                    <h2 class="fs-2 fw-semibold">También puedes usar las siguientes opciones</h2>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 text-center">
                    <div class="p-4 h-100">
                        <img class="w-100 mb-4" src="<?= SERVER_URI ?>images/paypal.svg" alt="Logo de Paypal">
                        <a target="_blank" href="#" class="btn btn-primary text-white btn-lg fs-7">Donar con PayPal</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 text-center">
                    <div class="p-4 h-100">
                        <img class="w-100 mb-4" src="<?= SERVER_URI ?>images/ATH Movil.svg" alt="Logo de ATH Móvil">
                        <a target="_blank" href="https://drive.google.com/file/d/1_9VmzaJciQwHvnAe-FvWcpxj6xK4721p/view?usp=sharing" class="btn btn-primary text-white btn-lg fs-7">Donar con ATH Móvil</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <div class="p-4 h-100">
                        <img class="w-100 mb-4" src="<?= SERVER_URI ?>images/donativos-Banco.svg" alt="Donativo por banco">
                        <a target="_blank" href="https://drive.google.com/file/d/1LeDzG9R40zGK_mKI8TnyURPtb3BV-vyG/view?usp=sharing" class="btn btn-primary text-white btn-lg fs-7">Donar cuenta bancaria</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: SEMBRADORES CONOCIMIENTO (TABS) -->
	<section id="" class="container-fluid p-3 p-lg-6">
		<div class="p-4 p-lg-6 bg-primary text-white rounded-20">
			<h2 class="fs-2 fw-bold text-white text-center mb-4">Sembradores de conocimiento</h2>

			<!-- Contenedor para scroll horizontal de pestañas en móvil -->
			<div class="d-flex overflow-x-auto mb-5">
				<!-- Tabs/Pestañas de Navegación -->
				<ul class="nav nav-pills flex-nowrap mx-auto" id="sembradoresTabs" role="tablist" style="width: max-content;">
					<li class="nav-item mx-2 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light active text-nowrap" id="staff-tab" data-bs-toggle="tab" data-bs-target="#complices-content" type="button" role="tab" aria-controls="complices-content" aria-selected="true">Complices</button>
					</li>
					<li class="nav-item mx-2 flex-shrink-0" role="presentation">
						<button class="btn btn-outline-light text-nowrap" id="catalizadores-tab" data-bs-toggle="tab" data-bs-target="#catalizadores-content" type="button" role="tab" aria-controls="catalizadores-content" aria-selected="false">Catalizadores</button>
					</li>
				</ul>
			</div>

			<!-- Contenido de las Pestañas -->
			<div class="tab-content" id="teamTabContent">
				
				<!-- Contenido:Complices (Activo por defecto) -->
				<div class="tab-pane fade show active" id="complices-content" role="tabpanel" aria-labelledby="staff-tab">
                    <div class="row gx-md-5 gy-4 align-items-stretch">
                        <div class="col-12 col-md-6 d-flex flex-column">
                            <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/donativos-sembradores-conocimiento.png" alt="Estudiantes y profesor observando a través de un microscopio" >
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                            <div class="p-5">
                                <div class="p-0">
                                    <h2 class="fs-2 fw-semibold mb-3">Cómplices de la ciencia boricua</h2>
                                    <p class="fs-5 card-text fw-normal mb-4">Una comunidad de donantes de CienciaPR, que por medio de su donativo recurrente, demuestra un compromiso con el desarrollo de la ciencia y la educación en el archipiélago.</p>
                                    <a href="#" class="btn btn-success text-dark btn-lg fs-7">se parte del cambio</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

				<!-- Contenido: catalizadores (Replicando estructura y alterando orden) -->
				<div class="tab-pane fade" id="catalizadores-content" role="tabpanel" aria-labelledby="catalizadores-tab">
                    <div class="row gx-md-5 gy-4 align-items-stretch">
                        <div class="col-12 col-md-6 d-flex flex-column">
                            <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/donativos-sembradores-conocimiento.png" alt="Estudiantes y profesor observando a través de un microscopio" >
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                            <div class="p-5">
                                <div class="p-0">
                                    <h2 class="fs-2 fw-semibold mb-3">Catalizadores de la ciencia boricua</h2>
                                    <p class="fs-5 card-text fw-normal mb-4">Una comunidad de donantes de CienciaPR, que por medio de su donativo recurrente, demuestra un compromiso con el desarrollo de la ciencia y la educación en el archipiélago.</p>
                                    <a href="#" class="btn btn-success text-dark btn-lg fs-7">se parte del cambio</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>

    <!-- APORTACION PATRONO -->
    <section id="duplicacionDonativos" class="pt-5 pt-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Duplica tu aportación</h2>
                            <p class="fs-5 card-text fw-normal">¿Sabías que miles de empresas parean el donativo que realizan sus empleados a organizaciones como la nuestra? Ingresa en la barra de búsqueda (abajo) el nombre de tu patrono para verificar si tiene un programa de pareo de donativos y acceder a las guías para solicitarle que iguale tu donativo a CienciaPR. Para duplicar tu donativo con mayor facilidad recomendamos que lo realices a través de Givebutter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 bg-white rounded-20 p-5 flex-grow-1">
                        <div class="card-body p-0">
                            <h4 class="fs-4 fw-semibold">¡Verifica si tu patrono igualará tu donativo!</h4>
                            <form action="#" method="GET" class="mt-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" id="employer-search" name="employer" placeholder="Nombre de tu patrono" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 text-white btn-lg fs-7">Buscar</button>
                            </form>
                            <div class="mt-4 text-center">
                                <p class="fs-6 mb-2">Toda la información proporcionada por</p>
                                <img class="d-block mx-auto" style="max-width: 200px;" src="<?= SERVER_URI ?>images/Double the donation - logo.svg" alt="Logo de Double the Donation">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AMAZON WISHLIST -->
    <section id="amazonWishlist" class="pt-5 py-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6">
                    <img class="flex-grow-1 object-fit-cover w-75" src="<?= SERVER_URI ?>images/Amazon Wishlist-logo.svg" alt="Logo de Amazon Wishlist" >
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Apoya con recursos esenciales</h2>
                            <p class="fs-5 card-text fw-normal">Sigue estos pasos:</p>
                            <ol class="fs-5 fw-normal mb-4">
                                <li class="mb-2">Visita nuestra lista de deseos en Amazon.</li>
                                <li class="mb-2">Escoge los artículos que deseas donar </li>
                                <li class="mb-2">Elige la dirección de envío asociada a la lista de deseos (Ciencia Puerto Rico) y completa tu compra como de costumbre.</li>
                            </ol>
                            <a href="#" class="btn btn-primary text-white btn-lg fs-7 me-3">Explorar la lista de recursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
		<!-- CORPORATIVO -->
    <section id="corporativosFilantropicos" class="bg-primary py-3 pt-md-4 pb-md-7">
        <div class="container-fluid">
            <div class="row">
                <div class="row gx-md-5 gy-4 align-items-stretch">
									<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
											<div class="p-5">
													<div class="p-0">
															<h2 class="fs-2 fw-semibold text-white mb-3">Donativo Corporativo</h2>
															<p class="fs-5 fw-light text-white mb-5">Tu empresa puede ser parte del cambio. Con un donativo apoyas programas que inspiran a jóvenes, fortalecen la educación científica y conectan la ciencia con nuestra comunidad. Cada aporte suma y abre puertas hacia un Puerto Rico más innovador y justo.</p>
													</div>
													<!--<a href="#" class="btn btn-success text-dark btn-lg fs-7">Haz tu aporte a la ciencia</a>-->
											</div>
									</div>
									<div class="col-12 col-md-6 d-flex flex-column">
											<img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/donation.webp" alt="Estudiantes de Ciencia PR" >
									</div>
								</div>
            </div>
        </div>
    </section>


    <section id="ventas" class="py-5 py-md-8">
        <div class="container">
            <div class="row mb-3 mb-md-5">
                <div class="col-12 col-md-7 mx-auto text-center">
                    <h2 class="fs-2 fw-semibold mb-4">Compra con propósito</h2>
                    <p class="fs-5 card-text fw-light">Nuestros artículos no son solo productos: son herramientas para inspirar aprendizaje y apoyar la ciencia en comunidades. Tu compra deja huella.</p>
                </div>
            </div>
            <div class="row d-flex gap-4 gap-sm-0">
                <!-- ITEM 1 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                        <div class="col-12 bg-primary rounded-2 d-flex flex-column justify-content-center align-items-center" style="min-height:300px;">
                            <img src="<?= SERVER_URI ?>images/donativos-carrito.svg" class="mb-3" alt="Convocatorias" style="max-width:125px;">
                            <p class="fs-4 fw-bold text-white mb-0">Tiendita de Cienca PR</p>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div>
                                <p class="text-start fs-7">Compra con cada artículo que adquieres apoya la educación científica en Puerto Rico y visítala y lleva contigo el orgullo de nuestra comunidad.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Visitar la tienda</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                        <div class="col-12 bg-info rounded-2 d-flex flex-column justify-content-center align-items-center" style="min-height:300px;">
                            <img src="<?= SERVER_URI ?>images/donativos-Book.svg" class="mb-3" alt="Convocatorias" style="max-width:125px;">
                            <p class="fs-4 fw-bold text-white mb-0">Nuestros libros</p>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div>
                                <p class="text-start fs-7">Tu apoyo nos permite crear publicaciones que conectan la ciencia, cultura puertorriqueña. Llegan a más estudiantes, maestros y comunidades.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 min-h-card border-0 shadow-sm rounded-2 bg-light">
                        <div class="col-12 bg-tertiary rounded-2 d-flex flex-column justify-content-center align-items-center" style="min-height:300px;">
                            <img src="<?= SERVER_URI ?>images/donativos-Megafono.svg" class="mb-3" alt="Convocatorias" style="max-width:125px;">
                            <p class="fs-4 fw-bold text-white mb-0">Anuncios</p>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div>
                                <p class="text-start fs-7">Un mensaje que conecta ciencia y comunidad, acercando oportunidades a quienes más lo necesitan.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary btn-lg fs-8 text-white">Ver propuestas en PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alianzasVoluntariado" class="pb-5 py-md-8 pattern-grey-2 pg-centered">
        <div class="container">
            <div class="row mx-1 mx-sm-0">
                <div class="col-md-10 bg-primary rounded-20 mx-auto p-4 p-md-5">
                    <div class="row d-flex flex-column flex-md-row gap-4 gap-md-0">
                        <div class="col col-md-6">
                            <h2 class="fs-2 text-white mb-3">Alianzas y voluntariado</h2>
                            <p class="text-white fw-normal card-text fs-5">Construimos puentes con organizaciones, empresas y personas comprometidas con la ciencia y la educación. A través de alianzas estratégicas y el voluntariado, multiplicamos nuestro impacto y acercamos oportunidades a más comunidades.</p>
                            <a href="#" class="btn btn-success text-darkwhite btn-lg fs-7 me-3">Hazte parte</a>
                        </div>
                        <div class="col col-md-6">
                            <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/donativos-top.png" alt="Grupo de profesionales saludando" >
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