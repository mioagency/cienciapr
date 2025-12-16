<?php

$PageTitle = "Inicia sesión | Ciencia Puerto Rico";
$page = "inicia sesion"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 
?>

<main>

    
    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="container py-5 py-md-8">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <h2 class="mb-4">Inicia sesión</h2>

                <form method="POST" action="">
                    <!-- Username Field -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Alias o correo electrónico</label>
                        <p class="text-muted small mb-2">Puedes iniciar sesión con tu nombre de usuario asignado o con tu dirección de correo electrónico.</p>
                        <input type="text" class="form-control bg-white" id="username" name="username" required>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <p class="text-muted small mb-2">El campo de contraseña distingue entre mayúsculas y minúsculas.</p>
                        <input type="password" class="form-control bg-white" id="password" name="password" required>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input bg-white" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Recuérdame
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary text-white">Iniciar sesión</button>
                    </div>

                    <!-- Links -->
                    <div class="d-flex justify-content-between">
                        <a href="register.php">Regístrate</a>
                        <a href="forgot-password.php">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
include_once ('templates/footer.php');
?>