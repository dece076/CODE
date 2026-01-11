import { totalCartQty } from "../../data/cart.js";

export function renderCheckoutHeader(){
    let html=`Checkout (<a class="return-to-home-link" href="amazon.html">${totalCartQty()}</a>)`;
    document.querySelector('.checkout-header-middle-section').innerHTML=html;
}