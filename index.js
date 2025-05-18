let citaElement = document.getElementById('cita');

function generarEnteroAleatorio(min, max) {
    // sin incluir max en los valores posibles
    return Math.floor(Math.random() * (max - min) + min);
}
citaElement.style.transition = 'opacity 0.5s, transform 0.5s';

function cambiarCita() {
    citaElement.style.opacity = 0;
    citaElement.style.transform = 'translateY(-20px)'
    ;

    setTimeout(() => {
        let indiceAleatorio = generarEnteroAleatorio(0, citas.length);
        citaElement.innerText = `"${citas[indiceAleatorio].texto}"`;
        citaElement.style.opacity = 1;
        citaElement.style.transform = 'translateY(0)';
    }, 500);
}


// Cambiar la cita cada 10 segundos
setInterval(cambiarCita, 15000);