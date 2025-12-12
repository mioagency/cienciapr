<?php

$PageTitle = "Política de uso y privacidad | Ciencia Puerto Rico"; 
$page = ""; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Política de uso y privacidad" => SERVER_URI . 'politica-de-uso-y-de-privacidad.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 explora-hero page-hero-bg bg-img-politicas d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Política de uso y privacidad</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
    </section>

    <!-- SECCIÓN DISCLAIMER -->
    <section class="bg-primary py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-white mb-0 fs-4 card-text fw-light">CienciaPR toma su privacidad muy en serio. Por favor lea con cuidado esta sección para aprender más sobre nuestra política de internet, en general y para la protección de su privacidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENIDO -->
    <section class="pt-5">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="col-12 d-flex flex-column gap-3">
                    <h2 class="fs-2 fw-semibold">Lo que esta Política de Privacidad cubre</h2>
                    <p class="mb-0 fs-5 card-text fw-light">Esta política cubre las maneras en las que CienciaPR trata la información de su cuenta registrada. La “información personal” es cualquier información que pueda identificarlo a usted (por ejemplo su nombre, dirección, dirección de correo electrónico, o número de teléfono) y que no fácilmente accesible. Esta política no aplica a las prácticas de compañías externas que CienciaPR no posee ni controla, ni a las personas que CienciaPR no emplea ni administra.</p>
                </div>
                <div class="col-12 d-flex flex-column gap-3">
                    <h2 class="fs-2 fw-semibold">Recopilación y uso de información</h2>
                    <p class="mb-0 fs-5 card-text fw-light">Por favor, lea atentamente esta sección.</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-0 bg-white rounded-20 p-5">
                                <div class="card-body p-0">
                                    <p class="mb-0 fs-5 card-text fw-light"><strong><span style="text-decoration: underline;">NOTA:</span></strong> Si esta política le parece diferente a las políticas de otros sitios, por favor, tenga en cuenta que la misión CienciaPR es difundir información sobre la ciencia en Puerto Rico y producida por puertorriqueños, y facilitar las interacciones entre las personas interesadas en la ciencia y Puerto Rico.</p>
                                    <ul class="fs-5 card-text fw-light pt-2">
                                        <li>Queremos promocionar a los jóvenes y al mundo que nuestra comunidad de investigadores y científicos es vibrante y tiene un impacto a escala global.</li>
                                        <li>Queremos que las personas que pudieran estar interesadas en colaborar, ser mentores o aprendices, o que buscan socios para actividades empresariales, puedan ser capaces de encontrarse los unos a los otros.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0 fs-5 card-text fw-light">Esta política cubre las maneras en las que CienciaPR trata la información de su cuenta registrada. La "información personal" es cualquier información que pueda identificarlo a usted (por ejemplo su nombre, dirección, dirección de correo electrónico, o número de teléfono) y que no fácilmente accesible. Esta política no aplica a las prácticas de compañías externas que CienciaPR no posee ni controla, ni a las personas que CienciaPR no emplea ni administra.</p>
                </div>
                <div class="col-12 d-flex flex-column gap-3">
                    <h3 class="fs-3 fw-semibold">Información que recopilamos</h3>
                    <p class="mb-0 fs-5 card-text fw-light"> CienciaPR sólo recopila la información personal que usted proporciona cuando se registra en CienciaPR. Su información se añade automáticamente a una base de datos, a fin de crear una comunidad científica interactiva en línea. CienciaPR tiene políticas establecidas para salvaguardar y prevenir el acceso indebido a la información en nuestras bases de datos.</p>
                </div>
                <div class="col-12 d-flex flex-column gap-3">
                    <h3 class="fs-3 fw-semibold">Información que compartimos</h3>
                    <p class="mb-0 fs-5 card-text fw-light">Su nombre, cargo, institución, historial académico, y otras facetas de su perfil, estarán disponibles al público a través de Internet a menos que usted indique lo contrario en la configuración de su cuenta. Para proteger su privacidad, sin embargo, <strong class="fw-bold">NO revelamos su dirección física a visitantes no registrados</strong>. Su dirección física sólo se revela a otros usuarios registrados CienciaPR si usted lo permite. Para proteger aún más su privacidad, su dirección de correo electrónico y su teléfono no se publica en absoluto. Miembros de CienciaPR pueden ponerse en contacto con usted a través de nuestro sistema de mensajes en línea pero no tendrán acceso a su dirección de correo electrónico. Usted puede hacer cambios a su configuración de privacidad en cualquier momento  a través de su cuenta.</p>
                    <p class="mb-0 fs-5 card-text fw-light">CienciaPR se reserva el derecho licenciar la información sobre los miembros de CienciaPR a otras organizaciones para propósitos de análisis o de desplegar contenido. Nosotros NO compartimos su información con grupos que desean enviar correo electrónico no solicitado, vender algo, o para hacer otra cosa que analizar o visualizar la información de usuarios. <strong class="fw-bold">Todas nuestras interacciones con otras organizaciones con respecto a nuestras bases de datos se rigen por un acuerdo de no divulgación</strong>, lo que legalmente les obliga a respetar esta política de privacidad. Creemos que nuestra política es razonable dada la misión de CienciaPR, sin embargo, si usted prefiere, es libre en cualquier momento de prohibir que licenciemos su información a terceros. Basta con hacer esta selección en la página de configuración de su cuenta.</p>
                    <p class="mb-0 fs-5 card-text fw-light">CienciaPR también se reserva el derecho de generar estadísticas sobre sus usuarios para efectos de difusión de información acerca de la comunidad científica de Puerto Rico y de nuestra audiencia. Estas estadísticas siempre se crean de tal manera que no contengan información personal. Siempre serán diseñadas para reflejar nuestra base de miembros en conjunto y nunca la información de algun usuario individual.</p>
                </div>
                 <div class="col-12 d-flex flex-column gap-3">
                    <h3 class="fs-3 fw-semibold">Presentación de la información y uso</h3>
                    <p class="mb-0 fs-5 card-text fw-light">Es en contra de los términos de CienciaPR de subir cualquier material a menos de que los derechos de autor le pertenezcan a usted o que haya obtenido los permisos correspondientes del titular. Usuarios CienciaPR retienen los derechos de autor sobre el material que les pertenezca que suban a CienciaPR, a menos de que se indique lo contrario. Sin embargo, los usuarios acceden a extender los privilegios de derechos de autor a CienciaPR para cualquier material que suban. Estos privilegios incluyen, pero no se limitan a, la capacidad de reproducir el material en cualquier formato y la posibilidad de tomar medidas contra cualquier infractor de los derechos de autor del material. Estos privilegios son importantes para el funcionamiento de CienciaPR, ya que permiten a CienciaPR mostrar la información del usuario sin tener que preocuparse acerca de infringir un derecho de autor. Estos privilegios permiten también que CienciaPR pueda proteger su información contra el uso no autorizado. CienciaPR se reserva el derecho de modificar cualquier material subido al sitio por cualquier usuario. Las modificaciones serán marcadas.</p>
                    <p class="mb-0 fs-5 card-text fw-light">Todo el contenido en el sitio web de Ciencia Puerto Rico que no sea de autoría de los miembros está bajo una licencia <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/pr/">Creative Commons Reconocimiento-No comercial-Sin obras derivadas 3.0 Puerto Rico License</a></p>
                    <p class="mb-0 fs-5 card-text fw-light">La función de <strong class="fw-bold">mensajes</strong> disponible a través de los perfiles de los usuarios CienciaPR es sólo para ser utilizada por los miembros CienciaPR para comunicarse entre sí sobre asuntos concretos, preferiblemente con respecto al desarrollo de carreras, mentoría, o cuestiones profesionales. Es <span style="text-decoration: underline;">en contra de la política de CienciaPR</span> utilizar esta función para enviar solicitudes comerciales, irrelevantes, o cualquier material cuestionable. <strong class="fw-bold">Tomamos todas las denuncias de spam o de mensajes cuestionables en serio y podemos suspender o revocar las cuentas de usuarios que abusen de este sistema.</strong></p>
                    <p class="mb-0 fs-5 card-text fw-light">Al utilizar nuestro sitio, usted acepta no publicar o transmitir cualquier material difamatorio, abusivo, obsceno, amenazador o ilegal, o cualquier otro material que infrinja la capacidad de otros para disfrutar de nuestro sitio web o que infrinja en los derechos de los demás. Aunque CienciaPR no puede controlar todos los comentarios, foros, blogs, u otras áreas públicas, nos reservamos el derecho de eliminar, mover o editar cualquier contenido que vengan a nuestra atención que se considera inaceptable o inapropiado, ya sea por razones legales o de otro tipo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ANUNCIO -->
    <?php include_once ('templates/fila-de-anuncio.php'); ?>

    <section class="pb-7">
        <div class="container">
            <div class="row gy-6">
                <div class="col-12 d-flex flex-column gap-3">
                    <h3 class="fs-3 fw-semibold">Preferencias generales y su capacidad de editar y eliminar información de su cuenta</h3>
                    <p class="mb-0 fs-5 card-text fw-light">Puede editar o eliminar información de su cuenta CienciaPR en cualquier momento visitando la configuración de la cuenta.</p>
                    <p class="mb-0 fs-5 card-text fw-light">Cuando se registra en CienciaPR, o en cualquier momento después del registro, puede optar por suscribirse a las listas de CienciaPR de correo electrónico. Puede darse de baja de cualquiera de estas listas en cualquier momento cambiando la configuración de preferencias de su cuenta. Utilizamos la lista de correo para enviar boletines de bajo volumen y de interés para la comunidad CienciaPR. Si usted no ha optado por suscribirse a la lista de correo CienciaPR, usted no recibirá el boletín CienciaPR. Sin embargo, nos reservamos el derecho a enviar a nuestros miembros registrados mensajes especiales bajo circunstancias importantes, tales como un cambio en la política de CienciaPR, la política de privacidad, el estado de la página, etc. Dichos mensajes administrativos son raros y bien poco frecuentes.</p>
                    <p class="mb-0 fs-5 card-text fw-light">De manera predeterminada, su cuenta permite que otros usuarios registrados puedan contactarlo a través de un formulario vinculado a su perfil de usuario. Si recibe mensajes de esta manera que usted califique como spam, por favor que <a href="mailto:contact@cienciapr.org">déjenos saber inmediatamente</a>. Tomamos muy en serio el spam y tomaremos las medidas debidas contra el usuario que lo contactó inapropiadamente. Si quiere desactivar la habilidad de que otros miembros puedan contactarlo a través de su perfil, visite su configuración de la cuenta.</p>
                </div>
                <div class="col-12 d-flex flex-column gap-3">
                    <h2 class="fs-2 fw-semibold">Medidas de seguridad y de prevención de spam</h2>
                    <p class="mb-0 fs-5 card-text fw-light">Tenemos medidas de seguridad para evitar registros falsos u oportunistas. También monitoreamos nuestro sitio web regularmente y con cuidado para asegurarnos de que sólo miembros de CienciaPR verificados tienen acceso. Sin embargo, si usted ve alguna actividad sospechosa o registros en nuestro sitio web, por favor <a href="mailto:contact@cienciapr.org">déjenos saber inmediatamente</a>.</p>
                </div>
                <div class="col-12 d-flex flex-column gap-3">
                    <h2 class="fs-3 fw-semibold">Descargo de responsabilidades</h2>
                    <p class="mb-0 fs-5 card-text fw-light">Las opiniones expresadas en este sitio web o referenciadas aquí no reflejan necesariamente los puntos de vista de CienciaPR o de cualquiera de los patrocinadores o colaboradores de CienciaPR. CienciaPR y sus patrocinadores o colaboradores no asumen ninguna responsabilidad legal o general por la exactitud, integridad o utilidad de cualquier información, aparato, producto o proceso revelado en este sitio web o de sitios externos vinculados o de él. CienciaPR y sus patrocinadores o colaboradores no respaldan ni recomienda necesariamente ningún producto, procesos, servicios, o enlaces que se muestran o se hace referencia en este sitio web.</p>
                </div>
                
                 <div class="col-12 d-flex flex-column gap-3">
                    <h2 class="fs-3 fw-semibold">Actualizaciones de la Política de Privacidad</h2>
                    <p class="mb-0 fs-5 card-text fw-light">CienciaPR está en derecho de actualizar esta política en cualquier momento. Le notificaremos si hacemos algún cambio significativo en la manera en que tratamos su información personal enviando un aviso a la dirección de correo electrónico especificada en su cuenta CienciaPR y / o colocando un aviso prominente en nuestro sitio.</p>
                    <p class="mb-0 fs-5 card-text fw-light">Si usted tiene preguntas o sugerencias, por favor póngase en <a href="mailto:contact@cienciapr.org">contacto con nosotros</a>.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include_once ('templates/footer.php');
?>