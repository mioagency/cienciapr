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

    <section id="opciones-donaciones" class="py-5 py-md-8">
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


    <section class="py-5 py-md-8 bg-primary pattern-grey">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-12 col-md-6 mx-auto text-center text-white mb-md-5">
                    <h2 class="fs-2 fw-medium">Exhortamos a nuestros miembros y participantes en nuestras redes a:</h2>
                </div>
                <div class="col-12 d-flex flex-column gap-4">
                     <div class="card border-0 bg-white rounded-20 p-5">
                        <div class="card-body p-0">
                            <h3 class="fs-4 fw-semibold">Interactuar de manera civil</h3>
                            <p class="mb-0 fs-5 card-text fw-light">Es normal que surjan debates con diferentes puntos de vista, que pueden ser útiles para expandir conocimientos. Comunícate con consideración y recuerda que las oportunidades para malentendidos en las plataformas digitales son mayores.</p>                    
                        </div>
                    </div>
                    <div class="card border-0 bg-white rounded-20 p-5">
                        <div class="card-body p-0">
                            <h3 class="fs-4 fw-semibold">Practicar la inclusividad</h3>
                            <p class="mb-0 fs-5 card-text fw-light">Queremos inspirar a todas las personas de nuestra comunidad con la emoción de la ciencia, sobre todo a grupos que históricamente han sido excluidos. Utiliza el lenguaje inclusivo, por ejemplo, honrando los pronombres adecuados al referirte a una persona (y si no los conoces pregunta), evitando términos o prácticas capacitistas, etc. Puedes obtener más información sobre pronombres y lenguaje inclusivo que nos ofrece la Sombrilla Cuir. El lenguaje también sostiene el racismo, por eso promovemos el uso de lenguaje antirracista que busca desmantelar un sistema anti-negro. Te animamos a leer la Guía de Lenguaje Inclusivo y Antirracista de MPA.</p>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APORTACION PATRONO -->
    <section class="pt-5 pt-md-8">
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


    <section class="pt-5 pt-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6">
                    <img class="flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/Amazon Wishlist-logo.svg" alt="Logo de Amazon Wishlist" >
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

    <!-- SECCIÓN DONATIVO -->
    <section class="py-5 py-md-8">
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
    
    <section class="bg-primary py-5 p-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-7 mx-auto text-center">
                    <h2 class="fs-2 fw-semibold text-white">Donativo Corporativo</h2>
                    <p class="fs-5 fw-normal text-white mb-5">Tu empresa puede ser parte del cambio. Con un donativo apoyas programas que inspiran a jóvenes, fortalecen la educación científica y conectan la ciencia con nuestra comunidad. Cada aporte suma y abre puertas hacia un Puerto Rico más innovador y justo.</p>
                    <a href="#" class="btn btn-success text-dark btn-lg fs-7">Haz tu aporte a la ciencia</a>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
include_once ('templates/footer.php');
?>