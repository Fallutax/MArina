<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="05.css">
    <link rel="icon" type="image/png" href="img/comandante.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">
    <link rel="icon" type="image/png" href="img/comandante.png">
    <title>Armada Bolivariana🪖</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
</head>
<body>
<header>
        <div class="container">
            <img class="logo1" src="img/escudo.png" alt="">
            <p class="logo">Armada Bolivariana</p>
        </div>

        <nav class="container">
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
                <h2>Formulario de Registro</h2>
                <form method="post" class="form">
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" id="nombres" name="nombres" placeholder="Coloca tus Nombres en este campo" required minlength="10" maxlength="40">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellido" name="apellidos" placeholder="Coloca tus Apellidos en este campo" required minlength="10" maxlength="40">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input type="text" id="cedula" name="cedula" placeholder="Coloca tu Cédula en este campo" required pattern="\d{8}" maxlength="8" minlength="8">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo </label>
                        <input type="email" id="correo" name="correo" placeholder="Coloca un correo gmail en este campo" minlength="10" required maxlength="50">
                        <script>
                            function validarCorreo(correo){
                                var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                                var esValido= expReg.test(correo);
                                if(esValido){
                                    $resultado = true;
                                    return true;
                                }else{
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error",
                                        text: "El correo no es válido",
                                        confirmButtonText: "Aceptar"
                                    });
                                    document.getElementById("correo").value = "";
                                    $resultado = false;
                                }
                            }
                        </script>

                    </div>

                    <div class="column">
                        <div class="form-group">
                            <label for="phone">Teléfono </label>
                            <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu numero de telefono en este campo" required pattern="\d{11}" maxlength="11" minlength="11">
                        </div>
        <!-- asi se separan boludo de mierda -->
                        <div class="form-group" id="birth">
                            <label for="birth">Fecha de Nacimiento </label>
                            <input type="date" id="birth" name="fecha_de_nacimiento"  placeholder="Ingresa tu Fecha de Nacimiento en este campo" required>
                        </div>
                    </div>

                    <div class="column">
                    <div class="gender-box">
                        <h3 class="sex">Sexo</h3>
                        <div class="gender-option">
                            <div class="gender">
                                <input type="radio" id="check-male" name="sexo" title="Selecciona Masculino" value="Masculino" required/>
                                <label for="check-male">Masculino</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-femenino" name="sexo" title="Selecciona Femenino"  value="Femenino" required />
                                <label for="check-femenino">Femenino</label>
                            </div>
                        </div>
                    </div>

                    <div class="estado-box">
                        <h3 class="estado1">Estado Civil</h3>
                        <div class="estado-option">
                            <div class="estado">
                                <input type="radio" id="check-soltero" name="estado_civil" value="Soltero" title="Selecciona soltero"required />
                                <label for="soltero">Soltero</label>
                            </div>
                            <div class="estado">
                                <input type="radio" id="check-casado" name="estado_civil" value="Concubinato" title="Selecciona casado" required/>
                                <label for="check-casado">Concubinato</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column" id="peso-altura">
                    <div class="form-group">
                        <label for="peso">Peso (kg)</label>
                        <input type="number" id="peso" name="peso" placeholder="Ingresa tu peso en kilogramos" required min="50" max="300" step="0.1" required onkeydown="return false">
                    </div>
    <!-- asi se separan boludo de mierda -->
                    <div class="form-group">
                        <label for="altura">Altura (m)</label>
                        <input type="number" id="altura" name="altura" placeholder="Ingresa tu altura en metros" required min="1.5" max="2.5" step="0.01" onkeydown="return false">
                    </div>

                    <div class="form-group" id="nacionalidad">
                        <label for="nacionalidad" class="nacionalidad-label">Estudios</label>
                        <select id="nacionalidad" name="estudios" required class="nacionalidad-select">
                            <option value="" disabled selected>Marca tu nivel de estudios</option>
                            <option  value="Bachillerato">Bachillerato</option>
                            <option  value="Estudios_Superiores">Estudios Superiores</option>
                        </select>
                    </div>

                </div>

                        <button type="submit" required id="registro" name="register" minlength="2" maxlength="50" value="Enviar" onclick="validarCorreo(form.correo.value)">Validar</button>
                    <!-- <button type="submit" id="registro" onclick="validarCorreo()">Ingresar</button> -->
                </form>
                
            </div>
                <div class="video-container">
                    <video muted autoplay loop>
                        <source src="img/248124_small.mp4" type="video/mp4">
                    </video>
                </div>
        </section>

        

    


        <footer>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Condiciones y politica</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                    <p>&copy; <span class="color-acento2">Armando Martinez</span> 2025, All Rights <span class="color-acento2">Reserved</span></p>
                </nav>
                <div class="social-icons">
                    <a href="https://www.facebook.com/ArmadaFANBve/?locale=es_LA"><img src="img/icons8-facebook-nuevo-50.png" alt=""></a>
                    <a href="https://www.instagram.com/armadabolivariana/?hl=es"><img src="img/icons8-instagram-50.png" alt=""></a>
                    <a href="https://x.com/armadafanbvzla?lang=es"><img src="img/icons8-twitterx-50.png" alt=""></a>
                </div>
            </div>
        </footer>

        <?php 
        include("registrarReclu.php");
        ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <script src="js.js"> </script>
</body>
</html>

<!-- funciona we -->