
const cadenaTextH3 = document.querySelector('.cadena-text h3');
const registro = document.getElementById('registro');
const items = document.querySelectorAll('.slider .item');
const next = document.getElementById('btn-right');
const prev = document.getElementById('btn-left');


    const btnLeft = document.querySelector(".btn-left2"),
    btnRight = document.querySelector(".btn-right2"),
    slider = document.querySelector("#slider2"),
    sliderSection = document.querySelectorAll(".slider-section");

    console.log(sliderSection);


// Función para verificar si todos los campos están llenos
function areAllInputsFilled() {
    const inputs = document.querySelectorAll('input');
    let allFilled = true;
    
    inputs.forEach(input => {
        if (input.value.trim() === '') {
            allFilled = false;
        }
    });
    
    return allFilled;
}

// Evento para el botón de registro
if (registro) {
    registro.addEventListener('click', () => {
        if (areAllInputsFilled()) {
            console.log('Registro completado');
        } else {
            alert('Por favor, complete todos los campos antes de continuar.');
        }
    });
} else {
    console.error('El elemento "registro" no está definido en el DOM');
}



// embarcaciones

let active = 3;

function loadShow(){
    let stt = 0;

    // Reiniciar estilos
    items.forEach(item => {
        item.style.transform = '';
        item.style.zIndex = '';
        item.style.filter = '';
        item.style.opacity = '';
    });

    // Estilos para el elemento activo
    items[active].style.transform = `none`;
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;

    // Estilos para los elementos siguientes
    for (var i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${190 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        items[i].style.zndex = -stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    
    stt = 0;
    // Estilos para los elementos anteriores
    for (var i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-190 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
        items[i].style.zndex = -stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
}

// Inicializar la visualización
loadShow();

// Funcionalidad para el botón derecho
next.onclick = function(){
    active = Math.min(active + 1, items.length - 1);
    loadShow();
};

// Funcionalidad para el botón izquierdo
prev.onclick = function(){
    active = Math.max(active - 1, 0);
    loadShow();
};

// embarcaciones

