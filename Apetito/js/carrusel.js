/* Variables */
const btnLeft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");

let operacion = 0
let i = 0
let mover = 100 / sliderSection.length;

slider.style.transition = "all ease .6s"

/* EVENTOS */
btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

/*Se Mueve cada X segundos*/
setInterval(() => {
    moveToRight()
}, 3000);

/* Funciones */
console.log(sliderSection.length);
function moveToRight() {
    if (i >= sliderSection.length-3) {
        i = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        return;
    } 
    i++;
    operacion = operacion + mover;
    slider.style.transform = `translate(-${operacion}%)`;
    
}  

function moveToLeft() {
    i--;
    if (i < 0 ) {
        operacion = mover * (sliderSection.length-3)
        slider.style.transform = `translate(-${operacion}%)`;
        i = sliderSection.length-3;
        return;
    }else if(i == 0){
        i--;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        return;
        /*Por algún motivo si i vale 0 sin esto la operacion explota*/
    }
    operacion = operacion - mover;
    slider.style.transform = `translate(-${operacion}%)`;
}
 
/*
aplica para el responsive
function moveToRight() {
    if (i >= sliderSection.length-1) {
        i = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        console.log(i);
        console.log(operacion);
        return;
    } 
    i++;
    operacion = operacion + mover;
    slider.style.transform = `translate(-${operacion}%)`;
    console.log(i);
    console.log(operacion);
    
}  

function moveToLeft() {
    if (i <= 0 ) {
        i = sliderSection.length-1;
        operacion = mover * (sliderSection.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        console.log(i);
        console.log(operacion);
        return;
    }else if(i == 0){
        i--;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        console.log(i);
        console.log(operacion);
        return;
    }
    i--;
    operacion = operacion - mover;
    slider.style.transform = `translate(-${operacion}%)`;
    console.log(i);
    console.log(operacion);
} */