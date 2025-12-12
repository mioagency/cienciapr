<?php

$PageTitle = "Normas de la comunidad | Ciencia Puerto Rico"; 
$page = ""; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Normas de la comunidad" => SERVER_URI . 'normas-comunidad.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 explora-hero page-hero-bg bg-img-normas-comunidad d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Normas de la comunidad</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
    </section>


    <!-- ANUNCIO -->
    <?php include_once ('templates/fila-de-anuncio.php'); ?>

    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="pb-5">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 bg-white rounded-20 p-5 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Bienvenides a CienciaPR</h2>
                            <p class="fs-5 card-text fw-normal">Somos una comunidad comprometida con democratizar el acceso a la ciencia, transformar la educación científica y empoderar a individuos con conocimiento científico. Esto es posible porque trabajamos desde la <strong class="fw-bold">solidaridad, la responsabilidad, la inclusión y el cuidado colectivo</strong>, priorizando el <strong class="fw-bold">acceso a información y las acciones guiadas por evidencia.</strong> Nuestra expectativa es que las personas que participan de nuestro sitio en línea y redes sociales*,  actúen de forma ética y consistente con estos valores. De esta forma potenciamos un ambiente de respeto mutuo e inclusivo dónde todas las personas pueden disfrutar la Ciencia Boricua.</p>
                            
                            <p class="fs-5 card-text fw-normal">* Incluyendo el escribir o contestar a comentarios y/o enviar mensajes directos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/normas-comunidad-top.png" alt="Grupo de profesionales saludando" >
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
                    <div class="card border-0 bg-white rounded-20 p-5">
                        <div class="card-body p-0">
                            <h3 class="fs-4 fw-semibold">Publicar y compartir contenido éticamente</h3>
                            <p class="mb-0 fs-5 card-text fw-light">La desinformación se ha multiplicado en las redes sociales, pero son una herramienta para compartir conocimiento. Al compartir y publicar contenido utiliza fuentes fiables y verificables y brinda crédito apropiado a otres por su trabajo.</p>                    
                        </div>
                    </div>
                    <div class="card border-0 bg-white rounded-20 p-5">
                        <div class="card-body p-0">
                            <h3 class="fs-4 fw-semibold">Respetar la privacidad</h3>
                            <p class="mb-0 fs-5 card-text fw-light">Es importante salvaguardar la integridad e intimidad de toda nuestra comunidad. No compartas información personal sobre ninguna persona. Esto incluye fotos, direcciones físicas o postales, números de teléfono, información de contacto o cualquier otro contenido publicado sin permiso explícito. Para más detalles, puedes revisar nuestras políticas y prácticas de privacidad.</p>                    
                        </div>
                    </div>
                    <div class="card border-0 bg-white rounded-20 p-5">
                        <div class="card-body p-0">
                            <h3 class="fs-4 fw-semibold">Conectar con otros</h3>
                            <p class="mb-0 fs-5 card-text fw-light">En esta comunidad hay miles de personas con diversos niveles académicos, intereses y disciplinas. Aprovéchala para establecer colaboraciones, relaciones de mentoría y conversar.</p>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pt-md-8">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-12 col-md-6 mx-auto text-center mb-md-5">
                    <h2 class="fs-2 fw-semibold">Todos merecemos disfrutar de nuestra comunidad, por eso no permitiremos</h2>
                </div>
                <div class="col-12 mx-auto text-center">
                    <p class="fs-5 card-text fw-light">Publicaciones, comentarios, acciones, o mensajes racistas, sexistas, homofóbicos, capacitistas, transfóbicos, o de cualquier otro contenido discriminatorio que vulnere los derechos humanos. Esto incluye, material difamatorio, abusivo, obsceno, amenazante o ilegal y cualquier tipo de contenido que infrinja la capacidad de otres disfrutar de nuestra comunidad en línea.</p>
                    <p class="mb-0 fs-5 card-text fw-light">Nos reservamos el derecho a eliminar, mover o editar cualquier publicación que llegue a nuestro conocimiento y que consideremos inaceptable o inapropiada, ya sea por razones legales o de otro tipo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN VIOLACIONES A LAS NORMAS-->
    <section class="py-5 py-md-8">
        <div class="container">
            <div class="row gx-md-5 gy-4 align-items-stretch">
                <div class="col-12 col-md-6 d-flex flex-column">
                    <img class="rounded-20 w-100 flex-grow-1 object-fit-cover" src="<?= SERVER_URI ?>images/normas-comunidad-bottom.png" alt="Profesional con bata disgustada, haciendo gesto de pulgar abajo" >
                </div>
                <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="card border-0 bg-white rounded-20 p-5 flex-grow-1">
                        <div class="card-body p-0">
                            <h2 class="fs-2 fw-semibold">Repotes de violaciones a estas normas</h2>
                            <p class="fs-5 card-text fw-normal">Violar las normas de conducta podría resultar en eliminación de tu cuenta de membresía y bloqueo de cuenta en redes sociales de CienciaPR. Reportes sobre violaciones al código de conducta pueden ser dirigidos a contact@cienciapr.org y un miembro del equipo atenderá la denuncia confidencialmente. Cada informe se atenderá como un caso individual. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto text-center">
                    <p class="fs-5 card-text fw-light">Cada red social tiene sus respectivas políticas de uso. Recomendamos que si notas algún usuario violando las mismas al compartir o comentar contenido relacionado a CienciaPR que lo reportes en el canal respectivo. Puedes ver aquí para conocer el proceso para reportar usuarios en las diversas redes sociales: <a href="https://www.facebook.com/help/contact/485974059259751">Facebook</a>; <a href="https://help.twitter.com/en/rules-and-policies/twitter-report-violation">Twitter</a>; <a href="https://help.instagram.com/2922067214679225">Instagram</a>; <a href="https://www.linkedin.com/help/linkedin/answer/146/report-inappropriate-content-messages-or-safety-concerns?lang=en">Linkedin</a></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include_once ('templates/footer.php');
?>