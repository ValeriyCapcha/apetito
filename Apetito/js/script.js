/*
const $d = document;
const $template = $d.getElementById("arepa-template").content;
const $fragment = $d.createDocumentFragment();
const options = { headers: {Authorization: `Bearer ${KEYS.secret}`}}
const FormatoDeMoneda = num => `$${num.slice(0, -2)}.${num.slice(-2)}`;


let products, prices;

Promise.all([
    fetch("https://api.stripe.com/v1/products", options),
    fetch("https://api.stripe.com/v1/prices", options)
])

$d.addEventListener("click", e => {
    if (e.target.matches(".btnAgregarCarrito1 *")) {
        let priceId = e.target.parentElement.getAttribute("data-price");

        Stripe(KEYS.public).redirectToCheckout({
            lineItems: [{
                price: priceId,
                quantity: 1
            }],
            mode: "only",
            successUrl:"../assets/success.html",
            cancelUrl:"../assets/cancel.html"
        })
        .then(res => {
            if (res.error){
                $arepas.insertAdjacentElement("afterend", res.error.message)
            }
        })
    }
})*/
const boton = document.querySelector('.lista');
const nav   = document.querySelector('.nav');
boton.addEventListener('click',()=>{
    nav.classList.toggle('activo')
})


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
var totalFinal = document.getElementById('totalfinal');
totalFinal.innerText = (totalProducto1 + totalProducto2);