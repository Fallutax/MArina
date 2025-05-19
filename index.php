<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="05.css">
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
    
    <section id="hero">
        <div class="container">
            <h1 id="cita">"La <span class="color-acento2">guerra</span> es el arte de destruir a los hombres, la <span class="color-acento2">política</span> es el arte de <span class="">engañarlos.</span>"</h1>
            <p id="simon">Simón Bolívar</p>
            <span class="text">
                <p>Somos responsable de garantizar el apresto operacional del poder naval, defendiendo los espacios acuáticos estratégicos y contribuyendo a la seguridad territorial</p>
            </span>
            <form action="sabermas.php" method="get">
                <!-- <input class="control" type="email" name="email" id="email1" placeholder="Correo electrónico" required maxlength="30"> -->
                <button class="controls" type="submit" >Saber más</button>
            </form>
        </div>
        <!-- <video muted autoplay loop>
            <source src="/img/hatsune-miku-s-room-moewalls-com.mp4" type="video/mp4">
        </video> -->
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



    <script src="js.js"> </script>
    <script src="citas.js"></script>
    <script src="index.js"></script>
</body>
</html>