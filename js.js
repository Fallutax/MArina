
const cadenaTextH3 = document.querySelector('.cadena-text h3');
const registro = document.getElementById('registro');
const items = document.querySelectorAll('.slider .item');
const next = document.getElementById('btn-right');
const prev = document.getElementById('btn-left');
const back =  document.getElementsByClassName('login-section');


    const btnLeft = document.querySelector(".btn-left2"),
    btnRight = document.querySelector(".btn-right2"),
    slider = document.querySelector("#slider2"),
    sliderSection = document.querySelectorAll(".slider-section");
    const personas = document.getElementById('people');
    const personasImg = document.querySelectorAll('.persona');




    personasImg.forEach(img => {
      img.addEventListener('mouseover', () => {
        personas.style.transition = 'background-color 2s'; // Añade una transición de 3 segundos
        personas.style.backgroundColor = 'orange';  

      
      });

      img.addEventListener('mouseout', () => {
        personas.style.transition = 'background-color 1s'; // Añade una transición de 3 segundos
        personas.style.backgroundColor = ''; // Restaura el color original
      });
    });




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
        items[i].style.filter = 'blur(1px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    
    stt = 0;
    // Estilos para los elementos anteriores
    for (var i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-190 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
        items[i].style.zndex = -stt;
        items[i].style.filter = 'blur(1px)';
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









    // function validarPascalCase(event) {
    //   const nombres = document.getElementById("nombres").value.trim();
    //   const apellidos = document.getElementById("apellido").value.trim();

    //   // Expresión regular para validar PascalCase
    //   const pascalCaseRegex = /^([A-Z][a-z]+)(\s[A-Z][a-z]+)*$/;

    //   // Validar nombres
    //   if (!pascalCaseRegex.test(nombres)) {
    //     Swal.fire({
    //       title: "Formato incorrecto en Nombres",
    //       text: "Por favor, escribe los nombres en formato PascalCase. Ejemplo: Juan Carlos",
    //       icon: "error",
    //       showClass: {
    //         popup: `
    //           animate__animated
    //           animate__fadeInUp
    //           animate__faster
    //         `
    //       },
    //       hideClass: {
    //         popup: `
    //           animate__animated
    //           animate__fadeOutDown
    //           animate__faster
    //         `
    //       }
    //     });
    //     event.preventDefault(); // Prevenir el envío del formulario
    //     return false;
    //   }

    //   // Validar apellidos
    //   if (!pascalCaseRegex.test(apellidos)) {
    //     Swal.fire({
    //       title: "Formato incorrecto en Apellidos",
    //       text: "Por favor, escribe los apellidos en formato PascalCase. Ejemplo: Pérez Gómez",
    //       icon: "error",
    //       showClass: {
    //         popup: `
    //           animate__animated
    //           animate__fadeInUp
    //           animate__faster
    //         `
    //       },
    //       hideClass: {
    //         popup: `
    //           animate__animated
    //           animate__fadeOutDown
    //           animate__faster
    //         `
    //       }
    //     });
    //     event.preventDefault(); // Prevenir el envío del formulario
    //     return false;
    //   }

    //   // Si ambos campos son válidos
    //   Swal.fire({
    //     title: "Campos válidos",
    //     text: "Los nombres y apellidos están en formato PascalCase.",
    //     icon: "success",
    //     showClass: {
    //       popup: `
    //         animate__animated
    //         animate__fadeInUp
    //         animate__faster
    //       `
    //     },
    //     hideClass: {
    //       popup: `
    //         animate__animated
    //         animate__fadeOutDown
    //         animate__faster
    //       `
    //     }
    //   });

    //   return true; // Permitir el envío del formulario
    // }



  