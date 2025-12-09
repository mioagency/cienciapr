<?php
/**
 * Función para generar las migas de pan (breadcrumbs) con estilo Bootstrap.
 *
 * @param array $path Array asociativo de rutas: [ 'Texto del Enlace' => 'URL' ]
 * @param string $active_page Nombre de la página activa (último elemento, sin enlace)
 */
function display_breadcrumbs(array $path, string $active_page) {
    // Si no hay elementos en la ruta, no mostramos nada
    if (empty($path) && empty($active_page)) {
        return;
    }
?>
    <nav class="py-1" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb mb-0">
                
                <!-- Enlace de Inicio (Fijo) -->
                <li class="breadcrumb-item">
                    <a href="<?= SERVER_URI ?>index.php" class="text-decoration-none">Inicio</a>
                </li>
                
                <?php
                $count = count($path);
                $i = 0;
                
                foreach ($path as $title => $url) {
                    $i++;
                    $is_last = ($i == $count);
                    
                    if ($is_last) {
                        // Último elemento: es la página actual y no tiene enlace
                        echo '<li class="breadcrumb-item active" aria-current="page">' . htmlspecialchars($title) . '</li>';
                    } else {
                        // Elementos intermedios: tienen enlace
                        echo '<li class="breadcrumb-item"><a href="' . htmlspecialchars($url) . '" class="text-decoration-none">' . htmlspecialchars($title) . '</a></li>';
                    }
                }
                ?>
            </ol>
        </div>
    </nav>
<?php
}
?>