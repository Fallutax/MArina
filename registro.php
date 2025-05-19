<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/comandante.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">
    <title>Login de Usuario - Crear Cuenta</title>
    <link rel="stylesheet" href="stylesR.css">
</head>

<body>

    
<header>
        <div class="container1">
            <img class="logo1" src="img/escudo.png" alt="">
            <p class="logo">Armada Bolivariana</p>
        </div>

        <nav class="container1">
            <form action="index.php" method="post">
                <button>Inicio</button>
            </form>
            <form action="embarcaciones.php" method="post">
                <button>Embarcaciones</button>
            </form>
            <form action="aviones.php" method="post">
                <button>Aeronaves</button>
            </form>
            <form action="login.php" method="post">
                <button>Reclutamiento</button>
            </form>
        </nav>
    </header>








<section class="login-section">


    <div class="container">
        <div class="card">
            <!-- Register Form -->
            <div id="registerForm" class="form-container">
                <div class="form-header">
                    <h2>Crear una cuenta</h2>
                    <p>Regístrate para empezar</p>
                </div>
                
                <form id="registerFormElement" method="post" action="login.php">
                    <div class="form-group">
                        <label for="firstName">Nombre</label>
                        <input type="text" id="firstName" class="input-field" placeholder="Introduce tu Nombre" required maxlength="20" minlength="3">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Apellido</label>
                        <input type="text" id="lastName" class="input-field" placeholder="Introduce tu Apellido" required maxlength="20" minlength="3">
                    </div>
                    
                    <div class="form-group">
                        <label for="registerEmail">Dirección de correo electrónico</label>
                        <input type="email" id="registerEmail" class="input-field" placeholder="Introduce tu @email.com" required maxlength="40" minlength="5">
                    </div>
                    
                    <div class="form-group">
                        <label for="registerPassword">Contraseña</label>
                        <input type="password" id="registerPassword" class="input-field" placeholder="••••••••" required maxlength="12" minlength="8">
                        <p class="password-info">La contraseña debe tener al menos 8 caracteres</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmPassword">Confirmar contraseña</label>
                        <input type="password" id="confirmPassword" class="input-field" placeholder="••••••••" required maxlength="12" minlength="8">
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <input id="terms" type="checkbox" required>
                        <label for="terms">Acepto la <a href="#">Condiciones de uso</a> y <a href="#">Política de privacidad</a></label>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn-primary">
                            Crear cuenta
                        </button>
                    </div>
                </form>
                
                <div class="form-footer">
                    <p>¿Ya tiene una cuenta? <a href="login.php">Iniciar sesión</a></p>
                </div>
            </div>
        </div>

        <div class="video-container">
            <video muted autoplay loop>
                <source src="img/248124_small.mp4" type="video/mp4">
            </video>
        </div>

    
    </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
