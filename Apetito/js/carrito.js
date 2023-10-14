
//carrito de compras
//item1
const btnResta1 = document.getElementById('btnResta1');
const btnSuma1 = document.getElementById('btnSuma1');

var cantidad1 = document.getElementById('canti1');
var precio1 = document.getElementById('precio1');
var precio11 = parseInt(precio1.innerText.match(/\d+/)[0])

var totalProducto1 = document.getElementById('resul1');

cantidad1.value = 1;
var acumulador1 = 1;

btnResta1.addEventListener('click',()=>{
    if(acumulador1 > 0){
        acumulador1--;
    }
    cantidad1.value = acumulador1;
    totalProducto1.innerText = (precio11 * acumulador1);
})


btnSuma1.addEventListener('click',()=>{
    acumulador1++;
    cantidad1.value = acumulador1;
    totalProducto1.innerText = (precio11 * acumulador1);
})

//item2
const btnResta2 = document.getElementById('btnResta2');
const btnSuma2 = document.getElementById('btnSuma2');

var cantidad2 = document.getElementById('canti2');
var precio2 = document.getElementById('precio2');
var precio22 = parseInt(precio2.innerText.match(/\d+/)[0])

var totalProducto2 = document.getElementById('resul2');




cantidad2.value = 1;
var acumulador2 = 1;

btnResta2.addEventListener('click',()=>{
    if(acumulador2 > 0){
        acumulador2--;
    }
    cantidad2.value = acumulador2;
    totalProducto2.innerText = (precio22 * acumulador2);
    
})


btnSuma2.addEventListener('click',()=>{
    acumulador2++;
    cantidad2.value = acumulador2;
    totalProducto2.innerText = (precio22 * acumulador2);
})

//total final
const total = document.querySelectorAll("");
var totalFinal = document.getElementById('totalfinal');
totalFinal.innerText = (totalProducto1 + totalProducto2);