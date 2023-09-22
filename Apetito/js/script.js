
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
})