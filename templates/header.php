<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$script_name = $_SERVER['SCRIPT_NAME'];

// SOLUCIÓN ESTABLE: Calcula la ruta base del proyecto (subdirectorio incluido)
$base_uri = rtrim(dirname($script_name), '/\\') . '/'; 

define('SERVER_URI', $protocol . $domain . $base_uri);
define('ACTIVE_PAGE', basename($_SERVER['PHP_SELF'], ".php"));
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title><?= isset($PageTitle) ? $PageTitle : "Default Title" ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" xintegrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="<?= SERVER_URI ?>css/main.css" rel="stylesheet">
    <link href="<?= SERVER_URI ?>css/winsgton.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">


  <?php if (function_exists('customPageHeader')) {
    customPageHeader();
  } 
  ?>
</head>

<body>

  <!-- INICIO: Topbar -->
  <div id="topbar" class="bg-dark text-light d-none d-lg-block">
    <div class="container d-flex justify-content-end align-items-center py-2">
      <a href="#" class="text-light text-decoration-none me-3"><i class="fas fa-search"></i></a>
      <a href="#" class="text-light text-decoration-none me-3">Inglés</a>
      <a href="<?= SERVER_URI ?>register.php"" class="text-light text-decoration-none me-3"><i class="fas fa-user-plus me-1"></i> Regístrate</a>
      <a href="#" class="text-light text-decoration-none me-3"><i class="fas fa-user me-1"></i> Mi cuenta</a>
      <a href="<?= SERVER_URI ?>login.php"" class="text-light text-decoration-none"><i class="fas fa-arrow-right-to-bracket me-1"></i> Ingresar</a>
    </div>
  </div>
  <!-- FIN: Topbar -->

  <header id="header" class="container-fluid bg-light">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?= SERVER_URI ?>index.php">
          <!-- Logo para Desktop -->
          <img src="<?= SERVER_URI ?>images/logo-header.svg" width="214" alt="Logo" class="d-none d-lg-inline-block align-text-top">
          <!-- Logo para Móviles -->
          <img src="<?= SERVER_URI ?>images/logo-header.svg" width="140" alt="Logo" class="d-inline-block d-lg-none align-text-top">
        </a>
        <div class="d-flex d-lg-none ms-auto"> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navItems"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        
        <div class="collapse navbar-collapse" id="navItems">
          <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 align-items-xl-center">
            <li class="nav-item">
              <a class="<?= (ACTIVE_PAGE == 'index') ? 'active text-primary':''; ?> nav-link" aria-current="page" href="<?= SERVER_URI ?>index.php">Inicio</a>
            </li>
            
            <!-- INICIO: Mega Menu "Conócenos" -->
            <li class="nav-item dropdown position-static">
              <!-- ELIMINADO data-bs-toggle. El JS lo inserta en mobile. -->
              <a class="nav-link dropdown-toggle <?= (ACTIVE_PAGE == 'conocenos') ? 'active text-primary':''; ?>" href="<?= SERVER_URI ?>conocenos.php" id="conocenosDropdown" role="button" aria-expanded="false" data-bs-auto-close="outside">
                Conócenos <i class="fa-solid fa-chevron-down fa-xs ms-1 text-primary"></i>
              </a>
              <ul class="dropdown-menu w-100 mt-0 border-0 mega-menu-desktop-center bg-light shadow" aria-labelledby="conocenosDropdown">
                <li>
                  <!-- INICIO: Vista Desktop (Conócenos) -->
                  <div class="container d-none d-lg-block py-3">
                    <span class="dropdown-item-text text-muted small px-3">más sobre la organización</span>
                    <hr class="my-3">
                    <div class="row pt-4 pb-5">
                      <!-- Columna de la Imagen -->
                      <div class="col-lg-3">
                        <img src="https://placehold.co/400x300/EBF3E4/EBF3E4" class="img-fluid rounded" alt="Placeholder Menú Conócenos" 
                             onerror="this.onerror=null;this.src='https://placehold.co/400x300/EEEEEE/EEEEEE'">
                      </div>
                      
                      <!-- Contenedor de las columnas de enlaces -->
                      <div class="col-lg-9">
                        <div class="row">
                          <!-- Columna 1: Sobre CienciaPR -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Sobre CienciaPR</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php">Resumen</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#mision-vision-valores">Misión / Visión / Valores</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#nuestro-equipo">Nuestro equipo</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#nuestros-patrocinadores">Nuestros patrocinadores</a></li>
                            </ul>
                          </div>
                          <!-- Columna 2: Prensa y publicaciones -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Prensa y publicaciones</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#comunicados-prensa">Comunicados de prensa/media kit</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#noticias-boricua">Noticias sobre CienciaPR</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#publicaciones">Publicaciones (libros, artículos peer-review)</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#reportes-anuales">Reportes anuales</a></li>
                            </ul>
                          </div>
                          <!-- Columna 3: Servicios -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Servicios</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>conocenos.php#servicios-contrataciones">Servicios y contrataciones</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- FIN: Vista Desktop (Conócenos) -->
                  <!-- INICIO: Vista Móvil (Conócenos) -->
                  <div class="d-lg-none px-2 py-2">
                    <ul class="list-unstyled" id="conocenosMobileAccordion">
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuConocenos-1" role="button" aria-expanded="false" aria-controls="menuConocenos-1">
                          Sobre CienciaPR
                        </a>
                        <div class="collapse" id="menuConocenos-1" data-bs-parent="#conocenosMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="<?= SERVER_URI ?>conocenos.php">Resumen / Misión / Visión / Valores</a></li>
                            <li><a class="dropdown-item" href="#">Equipo (Junta, staff)</a></li>
                            <li><a class="dropdown-item" href="#">Patrocinadores</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuConocenos-2" role="button" aria-expanded="false" aria-controls="menuConocenos-2">
                          Prensa y publicaciones
                        </a>
                        <div class="collapse" id="menuConocenos-2" data-bs-parent="#conocenosMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Comunicados de prensa/media kit</a></li>
                            <li><a class="dropdown-item" href="#">Noticias sobre CienciaPR</a></li>
                            <li><a class="dropdown-item" href="#">Publicaciones (libros, artículos peer-review)</a></li>
                            <li><a class="dropdown-item" href="#">Reportes anuales</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuConocenos-3" role="button" aria-expanded="false" aria-controls="menuConocenos-3">
                          Servicios
                        </a>
                        <div class="collapse" id="menuConocenos-3" data-bs-parent="#conocenosMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Servicios y contrataciones</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- FIN: Vista Móvil (Conócenos) --></li>
              </ul>
            </li><!-- FIN: Mega Menu "Conócenos" -->
            <!-- INICIO: Mega Menu "Explora" -->
            <li class="nav-item dropdown position-static">
              <!-- ELIMINADO data-bs-toggle. El JS lo inserta en mobile. -->
              <a class="nav-link dropdown-toggle <?= (ACTIVE_PAGE == 'explora') ? 'active text-primary':''; ?>" href="<?= SERVER_URI ?>explora.php" id="exploraDropdown" role="button" aria-expanded="false" data-bs-auto-close="outside">
                Explora <i class="fa-solid fa-chevron-down fa-xs ms-1 text-primary"></i>
              </a>
              <ul class="dropdown-menu w-100 mt-0 border-0 mega-menu-desktop-center bg-light shadow" aria-labelledby="exploraDropdown">
                <li>
                  <!-- INICIO: Vista Desktop (Explora) -->
                  <div class="container d-none d-lg-block py-3">
                    <span class="dropdown-item-text text-muted small px-3">las iniciativas e impacto de CienciaPR</span>
                    <hr class="my-3">
                    <div class="row pt-4 pb-5">
                      <!-- Columna de la Imagen -->
                      <div class="col-lg-3">
                        <img src="https://placehold.co/400x300/F3F0EB/F3F0EB" class="img-fluid rounded" alt="Placeholder Menú Explora" 
                             onerror="this.onerror=null;this.src='https://placehold.co/400x300/EEEEEE/EEEEEE'">
                      </div>
                      
                      <!-- Contenedor de las columnas de enlaces -->
                      <div class="col-lg-9">
                        <div class="row">
                          <!-- Columna 1: Comunicación e iniciativas comunitarias -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Comunicación e iniciativas comunitarias</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>comunicacion-iniciativas-comunitarias.php">Comunicación y Participación Pública</a></li>
                              <li><a class="dropdown-item px-0" href="#">Comunicación científica</a></li>
                              <li><a class="dropdown-item px-0" href="#">Colaboraciones mediáticas</a></li>
                              <li><a class="dropdown-item px-0" href="#">Perfiles de la Ciencia Boricua</a></li>
                              <li><a class="dropdown-item px-0" href="#">Blog CienciaPR</a></li>
                              <li><a class="dropdown-item px-0" href="#">Aquí Nos Cuidamos</a></li>
                              <li><a class="dropdown-item px-0" href="#">CienciaCoLab</a></li>
                            </ul>
                          </div>
                          <!-- Columna 2: Educación K-12 -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Educación K-12</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>educacion-k-12.php">Educación K-12</a></li>
                              <li><a class="dropdown-item px-0" href="#">Catálogo de Recursos Educativos</a></li>
                              <li><a class="dropdown-item px-0" href="#">Visitas a escuelas y charlas virtuales</a></li>
                              <li><a class="dropdown-item px-0" href="#">Semillas de Triunfo</a></li>
                              <li><a class="dropdown-item px-0" href="#">For Girls in Science-PR</a></li>
                              <li><a class="dropdown-item px-0" href="#">Otras iniciativas</a></li>
                            </ul>
                          </div>
                          <!-- Columna 3: Talento y liderazgo científico -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Talento y liderazgo científico</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>talento-y-liderazgo.php">Desarrollo de talento y liderazgo científico</a></li>
                              <li><a class="dropdown-item px-0" href="#">Inclusive Reflexive Fellowship</a></li>
                              <li><a class="dropdown-item px-0" href="#">Libro de Reflexividad</a></li>
                              <li><a class="dropdown-item px-0" href="#">Yale Ciencia Academy</a></li>
                              <li><a class="dropdown-item px-0" href="#">PR Science Policy Action Network</a></li>
                              <li><a class="dropdown-item px-0" href="#">Webinarios y certificaciones UPR-IPERT</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- FIN: Vista Desktop (Explora) -->
                  <!-- INICIO: Vista Móvil (Explora) -->
                  <div class="d-lg-none px-2 py-2">
                    <ul class="list-unstyled" id="exploraMobileAccordion">
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuExplora-1" role="button" aria-expanded="false" aria-controls="menuExplora-1">
                          Comunicación e iniciativas comunitarias
                        </a>
                        <div class="collapse" id="menuExplora-1" data-bs-parent="#exploraMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Comunicación y Participación Pública</a></li>
                            <li><a class="dropdown-item" href="#">Comunicación científica</a></li>
                            <li><a class="dropdown-item" href="#">Colaboraciones mediáticas</a></li>
                            <li><a class="dropdown-item" href="#">Perfiles de la Ciencia Boricua</a></li>
                            <li><a class="dropdown-item" href="#">Blog CienciaPR</a></li>
                            <li><a class="dropdown-item" href="#">Aquí Nos Cuidamos</a></li>
                            <li><a class="dropdown-item" href="#">CienciaCoLab</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuExplora-2" role="button" aria-expanded="false" aria-controls="menuExplora-2">
                          Educación K-12
                        </a>
                        <div class="collapse" id="menuExplora-2" data-bs-parent="#exploraMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Educación K-12</a></li>
                            <li><a class="dropdown-item" href="#">Catálogo de Recursos Educativos</a></li>
                            <li><a class="dropdown-item" href="#">Visitas a escuelas y charlas virtuales</a></li>
                            <li><a class="dropdown-item" href="#">Semillas de Triunfo</a></li>
                            <li><a class="dropdown-item" href="#">For Girls in Science-PR</a></li>
                            <li><a class="dropdown-item" href="#">Otras iniciativas</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuExplora-3" role="button" aria-expanded="false" aria-controls="menuExplora-3">
                          Talento y liderazgo científico
                        </a>
                        <div class="collapse" id="menuExplora-3" data-bs-parent="#exploraMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Desarrollo de talento y liderazgo científico</a></li>
                            <li><a class="dropdown-item" href="#">Inclusive Reflexive Fellowship</a></li>
                            <li><a class="dropdown-item" href="#">Libro de Reflexividad</a></li>
                            <li><a class="dropdown-item" href="#">Yale Ciencia Academy</a></li>
                            <li><a class="dropdown-item" href="#">PR Science Policy Action Network</a></li>
                            <li><a class="dropdown-item" href="#">Webinarios y certificaciones UPR-IPERT</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- FIN: Vista Móvil (Explora) --></li>
              </ul>
            </li><!-- FIN: Mega Menu "Explora" -->
            <!-- INICIO: Mega Menu "Participa" -->
            <li class="nav-item dropdown position-static">
              <!-- ELIMINADO data-bs-toggle. El JS lo inserta en mobile. -->
              <a class="nav-link dropdown-toggle <?= (ACTIVE_PAGE == 'participa') ? 'active text-primary':''; ?>" href="<?= SERVER_URI ?>participa.php" id="participaDropdown" role="button" aria-expanded="false" data-bs-auto-close="outside">
                Participa <i class="fa-solid fa-chevron-down fa-xs ms-1 text-primary"></i>
              </a>
              <ul class="dropdown-menu w-100 mt-0 border-0 mega-menu-desktop-center bg-light shadow" aria-labelledby="participaDropdown">
                <li>
                  <!-- INICIO: Vista Desktop (Participa) -->
                  <div class="container d-none d-lg-block py-3">
                    <span class="dropdown-item-text text-muted small px-3">en oportunidades, convocatorias y eventos de CienciaPR y otras organizaciones</span>
                    <hr class="my-3">
                    <div class="row pt-4 pb-5">
                      <!-- Columna de la Imagen -->
                      <div class="col-lg-3">
                        <img src="https://placehold.co/400x300/F0EBF3/F0EBF3" class="img-fluid rounded" alt="Placeholder Menú Participa" 
                             onerror="this.onerror=null;this.src='https://placehold.co/400x300/EEEEEE/EEEEEE'">
                      </div>
                      
                      <!-- Contenedor de las columnas de enlaces -->
                      <div class="col-lg-9">
                        <div class="row">
                          <!-- Columna 1: Oportunidades -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Oportunidades</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>participa.php#convocatorias">Convocatorias</a></li>
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>participa.php#foro-oportunidades">Foro de oportunidades</a></li>
                            </ul>
                          </div>
                          <!-- Columna 2: Eventos -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Eventos</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="<?= SERVER_URI ?>participa.php#seccion-eventos">Eventos</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <!-- FIN: Vista Desktop (Participa) -->
                  <!-- INICIO: Vista Móvil (Participa) -->
                  <div class="d-lg-none px-2 py-2">
                    <ul class="list-unstyled" id="participaMobileAccordion">
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuParticipa-1" role="button" aria-expanded="false" aria-controls="menuParticipa-1">
                          Oportunidades
                        </a>
                        <div class="collapse" id="menuParticipa-1" data-bs-parent="#participaMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Convocatorias</a></li>
                            <li><a class="dropdown-item" href="#">Foro de oportunidades</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuParticipa-2" role="button" aria-expanded="false" aria-controls="menuParticipa-2">
                          Eventos
                        </a>
                        <div class="collapse" id="menuParticipa-2" data-bs-parent="#participaMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Eventos</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- FIN: Vista Móvil (Participa) --></li>
              </ul>
            </li><!-- FIN: Mega Menu "Participa" -->
            <!-- INICIO: Mega Menu "Descubre" -->
            <li class="nav-item dropdown position-static">
              <!-- ELIMINADO data-bs-toggle. El JS lo inserta en mobile. -->
              <a class="nav-link dropdown-toggle <?= (ACTIVE_PAGE == 'descubre') ? 'active text-primary':''; ?>" href="<?= SERVER_URI ?>descubre.php" id="descubreDropdown" role="button" aria-expanded="false" data-bs-auto-close="outside">
                Descubre <i class="fa-solid fa-chevron-down fa-xs ms-1 text-primary"></i>
              </a>
              <ul class="dropdown-menu w-100 mt-0 border-0 mega-menu-desktop-center bg-light shadow" aria-labelledby="descubreDropdown">
                <li>
                  <!-- INICIO: Vista Desktop (Descubre) -->
                  <div class="container d-none d-lg-block py-3">
                    <span class="dropdown-item-text text-muted small px-3">contenidos que celebran y divulgan la ciencia puertorriqueña</span>
                    <hr class="my-3">
                    <div class="row pt-4 pb-5">
                      <!-- Columna de la Imagen -->
                      <div class="col-lg-3">
                        <img src="https://placehold.co/400x300/EBF3F3/EBF3F3" class="img-fluid rounded" alt="Placeholder Menú Descubre" 
                             onerror="this.onerror=null;this.src='https://placehold.co/400x300/EEEEEE/EEEEEE'">
                      </div>
                      
                      <!-- Contenedor de las columnas de enlaces -->
                      <div class="col-lg-9">
                        <div class="row">
                          <!-- Columna 1: Ciencia Boricua -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Ciencia Boricua</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Blog CienciaPR</a></li>
                              <li><a class="dropdown-item px-0" href="#">Noticias científicas</a></li>
                              <li><a class="dropdown-item px-0" href="#">Perfiles de la Ciencia Boricua</a></li>
                              <li><a class="dropdown-item px-0" href="#">Ciencia Boricua TV (youtube)</a></li>
                              <li><a class="dropdown-item px-0" href="#">Jueves de Ciencia Boricua</a></li>
                            </ul>
                          </div>
                          <!-- Columna 2: Recursos y archivos -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Recursos y archivos</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Catálogo de Recursos Educativos</a></li>
                              <li><a class="dropdown-item px-0" href="#">Colección de Latinas en STEM</a></li>
                              <li><a class="dropdown-item px-0" href="#">Mapa de ecosistema STEM de PR</a></li>
                              <li><a class="dropdown-item px-0" href="#">Archivo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- FIN: Vista Desktop (Descubre) -->
                  <!-- INICIO: Vista Móvil (Descubre) -->
                  <div class="d-lg-none px-2 py-2">
                    <ul class="list-unstyled" id="descubreMobileAccordion">
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuDescubre-1" role="button" aria-expanded="false" aria-controls="menuDescubre-1">
                          Ciencia Boricua
                        </a>
                        <div class="collapse" id="menuDescubre-1" data-bs-parent="#descubreMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Blog CienciaPR</a></li>
                            <li><a class="dropdown-item" href="#">Noticias científicas</a></li>
                            <li><a class="dropdown-item" href="#">Perfiles de la Ciencia Boricua</a></li>
                            <li><a class="dropdown-item" href="#">Ciencia Boricua TV (youtube)</a></li>
                            <li><a class="dropdown-item" href="#">Jueves de Ciencia Boricua</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuDescubre-2" role="button" aria-expanded="false" aria-controls="menuDescubre-2">
                          Recursos y archivos
                        </a>
                        <div class="collapse" id="menuDescubre-2" data-bs-parent="#descubreMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Catálogo de Recursos Educativos</a></li>
                            <li><a class="dropdown-item" href="#">Colección de Latinas en STEM</a></li>
                            <li><a class="dropdown-item" href="#">Mapa de ecosistema STEM de PR</a></li>
                            <li><a class="dropdown-item" href="#">Archivo</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- FIN: Vista Móvil (Descubre) --></li>
              </ul>
            </li><!-- FIN: Mega Menu "Descubre" -->
            <!-- INICIO: Mega Menu "Únete" -->
            <li class="nav-item dropdown position-static">
              <!-- ELIMINADO data-bs-toggle. El JS lo inserta en mobile. -->
              <a class="nav-link dropdown-toggle <?= (ACTIVE_PAGE == 'unete') ? 'active text-primary':''; ?>" href="<?= SERVER_URI ?>unete.php" id="uneteDropdown" role="button" aria-expanded="false" data-bs-auto-close="outside">
                Únete <i class="fa-solid fa-chevron-down fa-xs ms-1 text-primary"></i>
              </a>
              <ul class="dropdown-menu w-100 mt-0 border-0 mega-menu-desktop-center bg-light shadow" aria-labelledby="uneteDropdown">
                <li>
                  <!-- INICIO: Vista Desktop (Únete) -->
                  <div class="container d-none d-lg-block py-3">
                    <span class="dropdown-item-text text-muted small px-3">a la comunidad interesada en la ciencia y Puerto Rico más grande del mundo</span>
                    <hr class="my-3">
                    <div class="row pt-4 pb-5">
                      <!-- Columna de la Imagen -->
                      <div class="col-lg-3">
                        <img src="https://placehold.co/400x300/EBF3F3/EBF3F3" class="img-fluid rounded" alt="Placeholder Menú Únete" 
                             onerror="this.onerror=null;this.src='https://placehold.co/400x300/EEEEEE/EEEEEE'">
                      </div>
                      
                      <!-- Contenedor de las columnas de enlaces -->
                      <div class="col-lg-9">
                        <div class="row">
                          <!-- Columna 1: Comunidad de CienciaPR -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Comunidad de CienciaPR</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Membresía individual y organizacional</a></li>
                              <li><a class="dropdown-item px-0" href="#">Búsqueda de miembros</a></li>
                            </ul>
                          </div>
                          <!-- Columna 2: Registro de iniciativas STEM de PR -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Registro de iniciativas STEM de PR</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Registro de iniciativas STEM de PR</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- FIN: Vista Desktop (Únete) -->
                  <!-- INICIO: Vista Móvil (Únete) -->
                  <div class="d-lg-none px-2 py-2">
                    <ul class="list-unstyled" id="uneteMobileAccordion">
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuUnete-1" role="button" aria-expanded="false" aria-controls="menuUnete-1">
                          Comunidad de CienciaPR
                        </a>
                        <div class="collapse" id="menuUnete-1" data-bs-parent="#uneteMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Membresía individual y organizacional</a></li>
                            <li><a class="dropdown-item" href="#">Búsqueda de miembros</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuUnete-2" role="button" aria-expanded="false" aria-controls="menuUnete-2">
                          Registro de iniciativas STEM de PR
                        </a>
                        <div class="collapse" id="menuUnete-2" data-bs-parent="#uneteMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Registro de iniciativas STEM de PR</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- FIN: Vista Móvil (Únete) --></li>
              </ul>
            </li><!-- FIN: Mega Menu "Únete" -->
            <!-- INICIO: Mega Menu "Involúcrate" -->
            <li class="nav-item dropdown position-static">
              <!-- ELIMINADO data-bs-toggle. El JS lo inserta en mobile. -->
              <a class="nav-link dropdown-toggle <?= (ACTIVE_PAGE == 'involucrate') ? 'active text-primary':''; ?>" href="<?= SERVER_URI ?>involucrate.php" id="involucrateDropdown" role="button" aria-expanded="false" data-bs-auto-close="outside">
                Involúcrate <i class="fa-solid fa-chevron-down fa-xs ms-1 text-primary"></i>
              </a>
              <ul class="dropdown-menu w-100 mt-0 border-0 mega-menu-desktop-center bg-light shadow" aria-labelledby="involucrateDropdown">
                <li>
                  <!-- INICIO: Vista Desktop (Involúcrate) -->
                  <div class="container d-none d-lg-block py-3">
                    <span class="dropdown-item-text text-muted small px-3">donando, apoyando y/o colaborando</span>
                    <hr class="my-3">
                    <div class="row pt-4 pb-5">
                      <!-- Columna de la Imagen -->
                      <div class="col-lg-3">
                        <img src="https://placehold.co/400x300/F0F3EB/F0F3EB" class="img-fluid rounded" alt="Placeholder Menú Involúcrate" 
                             onerror="this.onerror=null;this.src='https://placehold.co/400x300/EEEEEE/EEEEEE'">
                      </div>
                      
                      <!-- Contenedor de las columnas de enlaces -->
                      <div class="col-lg-9">
                        <div class="row">
                          <!-- Columna 1: Donativos -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Donativos</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Donativos individuales</a></li>
                              <li><a class="dropdown-item px-0" href="#">Programa de donativos recurrentes</a></li>
                              <li><a class="dropdown-item px-0" href="#">Duplicación de donativos</a></li>
                              <li><a class="dropdown-item px-0" href="#">Embajadores de CienciaPR</a></li>
                              <li><a class="dropdown-item px-0" href="#">Amazon Wishlist</a></li>
                              <li><a class="dropdown-item px-0" href="#">Donativos corporativos y filantrópicos</a></li>
                            </ul>
                          </div>
                          <!-- Columna 2: Ventas -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Ventas</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Tienda</a></li>
                              <li><a class="dropdown-item px-0" href="#">Publicaciones en Amazon</a></li>
                              <li><a class="dropdown-item px-0" href="#">Anuncios</a></li>
                            </ul>
                          </div>
                          <!-- Columna 3: Alianzas y voluntariado -->
                          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <h6 class="text-dark fw-bold mega-menu-title">Alianzas y voluntariado</h6>
                            <ul class="list-unstyled mt-3 mb-0">
                              <li><a class="dropdown-item px-0" href="#">Alianzas</a></li>
                              <li><a class="dropdown-item px-0" href="#">Voluntariado</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <!-- FIN: Vista Desktop (Involúcrate) -->
                  <!-- INICIO: Vista Móvil (Involúcrate) -->
                  <div class="d-lg-none px-2 py-2">
                    <ul class="list-unstyled" id="involucrateMobileAccordion">
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuInvolucrate-1" role="button" aria-expanded="false" aria-controls="menuInvolucrate-1">
                          Donativos
                        </a>
                        <div class="collapse" id="menuInvolucrate-1" data-bs-parent="#involucrateMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Donativos individuales (home)</a></li>
                            <li><a class="dropdown-item" href="#">Programa de donativos recurrentes</a></li>
                            <li><a class="dropdown-item" href="#">Duplicación de donativos</a></li>
                            <li><a class="dropdown-item" href="#">Embajadores de CienciaPR</a></li>
                            <li><a class="dropdown-item" href="#">Amazon Wishlist</a></li>
                            <li><a class="dropdown-item" href="#">Donativos corporativos y filantrópicos</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuInvolucrate-2" role="button" aria-expanded="false" aria-controls="menuInvolucrate-2">
                          Ventas
                        </a>
                        <div class="collapse" id="menuInvolucrate-2" data-bs-parent="#involucrateMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Tienda</a></li>
                            <li><a class="dropdown-item" href="#">Publicaciones en Amazon</a></li>
                            <li><a class="dropdown-item" href="#">Anuncios</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="collapse" href="#menuInvolucrate-3" role="button" aria-expanded="false" aria-controls="menuInvolucrate-3">
                          Alianzas y voluntariado
                        </a>
                        <div class="collapse" id="menuInvolucrate-3" data-bs-parent="#involucrateMobileAccordion">
                          <ul class="list-unstyled ms-4">
                            <li><a class="dropdown-item" href="#">Alianzas</a></li>
                            <li><a class="dropdown-item" href="#">Voluntariado</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- FIN: Vista Móvil (Involúcrate) --></li>
              </ul>
            </li><!-- FIN: Mega Menu "Involúcrate" -->
            <!-- INICIO: Enlaces del Topbar para móvil -->
            <li class="d-lg-none"><hr class="dropdown-divider"></li>
            <li class="nav-item d-lg-none">
                <div class="d-flex justify-content-evenly pt-2">
                    <a href="#" class="nav-link text-center px-1">
                        <i class="fas fa-search d-block mb-1"></i>
                        <small>Buscar</small>
                    </a>
                    <a href="#" class="nav-link text-center px-1">
                        <i class="fas fa-globe d-block mb-1"></i>
                        <small>Inglés</small>
                    </a>
                    <a href="#" class="nav-link text-center px-1">
                        <i class="fas fa-user-plus d-block mb-1"></i>
                        <small>Únete</small>
                    </a>
                    <a href="#" class="nav-link text-center px-1">
                        <i class="fas fa-user d-block mb-1"></i>
                        <small>Mi cuenta</small>
                    </a>
                    <a href="#" class="nav-link text-center px-1">
                        <i class="fas fa-arrow-right-to-bracket d-block mb-1"></i>
                        <small>Ingresar</small>
                    </a>
                </div>
            </li>
            <!-- FIN: Enlaces del Topbar para móvil -->
            <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                <div class="d-grid">
                  <a href="<?= SERVER_URI ?>donar.php" class="btn btn-primary text-white">Donar</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>