<?php

$PageTitle = "Involúcrate | Ciencia Puerto Rico";
$page = "involucrate"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 

// 1. Definición de la ruta de breadcrumbs
$breadcrumb_path = [
    "Involúcrate" => SERVER_URI . 'involucrate.php',
];

// Incluimos el archivo de lógica de breadcrumbs
include_once ('templates/breadcrumbs.php'); 
?>

<main>

    <!-- SECCIÓN HÉROE CON IMAGEN DE FONDO -->
    <section class="container-fluid p-0 involucrate-hero d-flex align-items-center" style="min-height: 250px;">
        
        <div class="container">
            <!-- TÍTULO H1 -->
            <h1 class="fw-bold mb-3 text-body">Involúcrate</h1>
            
            <!-- BREADCRUMBS: Aparece justo debajo del H1 -->
            <?php display_breadcrumbs($breadcrumb_path, $PageTitle); ?>
            
        </div>
        
    </section>
    
    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="container py-5">
        
        <p class="lead">Aquí comienza el contenido detallado de la página Involúcrate.</p>
        
    </section>
</main>

<?php
include_once ('templates/footer.php');
?>