const btnLeft = document.querySelector(".btn-left"),
    btnRight = document.querySelector(".btn-right"),
    slider = document.querySelector("#slider"),
    sliderSection = document.querySelectorAll(".slider-section");

    console.log(sliderSection);


    btnLeft.addEventListener("click", e => moveToLeft())
    btnRight.addEventListener("click", e => moveToRight())

    let operacion = 0;
    let counter = 0;
    widthImg = 100 /sliderSection.length;


    setInterval(() => {
        moveToRight()
    },3000);

    function moveToRight() {
        if (counter >= sliderSection.length-1) {
            counter = 0;
            operacion = 0;
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "none"
            return;
        } else {
            counter++;

            operacion = operacion + widthImg
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "all ease .6s"
        }

        
    }

    function moveToLeft() {

        if(counter <= 0) {
            counter = sliderSection.length-1;
            operacion = widthImg * (sliderSection.length-1)
            slider.style.transform = `translate(-${operacion}%)`;
                slider.style.transition = "none"
                return;
        }
            operacion = operacion - widthImg;
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "all ease .6s"
            

        
    }