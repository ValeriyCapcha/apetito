/* Variables */
const btnLeft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");

let operacion = 0
let i = 0
let mover = 100 / sliderSection.length;
let varia = 3
slider.style.transition = "all ease .6s"


/*Responsive */
function variable(x) {
    if (x.matches) {
        varia = 1
    } else {
        varia = 3
    }
}
var x = window.matchMedia("(max-width: 600px)")
variable(x)

/*Se Mueve cada X segundos*/
setInterval(() => {
    moveToRight()
}, 3000); 

/* EVENTOS */
btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

/* Funciones */
console.log(sliderSection.length);
function moveToRight() {
    if (i >= sliderSection.length-varia) {
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
        operacion = mover * (sliderSection.length-varia)
        slider.style.transform = `translate(-${operacion}%)`;
        i = sliderSection.length-varia;
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