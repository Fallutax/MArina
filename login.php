<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/comandante.png">
    <title>Login de Usuario🪖</title>
    <link rel="stylesheet" href="styles.css">
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
            <!-- Login Form -->
            <div id="loginForm" class="form-container">
                <div class="form-header">
                    <h2>Bienvenido otra vez</h2>
                    <p>Acceda a su cuenta</p>
                </div>
                
                <form id="loginFormElement" method="POST" action="reclutamiento.php">
                    <div class="form-group">
                        <label for="loginEmail">Dirección de correo electrónico</label>
                        <input type="email" id="loginEmail" class="input-field" placeholder="Introduce tu @email.com" required maxlength="40" minlength="5">
                    </div>
                    
                    <div class="form-group">
                        <div class="form-group-header">
                            <label for="loginPassword">Contraseña</label>
                        </div>
                        <input type="password" id="loginPassword" class="input-field" placeholder="••••••••" required maxlength="12" minlength="8">
              
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn-primary">
                            Ingresar
                        </button>
                    </div>
                    
                </form>
                
                <div class="form-footer">
                    <p>¿No tiene cuenta? <a href="registro.php" id="showRegister"><a href="registro.php">Crear una cuenta</a></a></p>
                </div>
            </div>
            
        </div>

        <div class="video-container">
            <video muted autoplay loop>
                <source src="img/248124_small.mp4" type="video/mp4">
            </video>
        </div>
        </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <script>
        window.onload = function() {
            Swal.fire({
                title: '¡Bienvenido!',
                text: 'Para ingresar al formulario deberas ingresar tu Usuario🪖',
                icon: 'info',
                confirmButtonText: 'Aceptar'
            });
        };
    </script>
    <script src="script.js"></script>


</body>
</html>
