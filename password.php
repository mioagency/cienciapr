<?php

$PageTitle = "Recuperar contraseña | Ciencia Puerto Rico";
$page = "password"; 

// Incluimos el header, ya que define SERVER_URI
include_once ('templates/header.php'); 
?>


<main>

    <!-- SECCIÓN CONTENIDO PRINCIPAL -->
    <section class="container py-5 py-md-8">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <h2 class="mb-4">Recuperar contraseña</h2>

                <form method="POST" action="">
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Correo electrónico</label>
                        <p class="text-muted small mb-2">Ingresa tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
                        <input type="email" class="form-control bg-white" id="email" name="email" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary text-white">Enviar enlace de recuperación</button>
                    </div>

                    <!-- Links -->
                    <div class="d-flex justify-content-between">
                        <a href="login.php">Volver a iniciar sesión</a>
                        <a href="register.php">Regístrate</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
include_once ('templates/footer.php');
?>