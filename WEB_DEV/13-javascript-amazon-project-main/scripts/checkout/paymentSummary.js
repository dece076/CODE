import { addToCart, updateDeliveryOptionId,cart,removeFromCart, updateCartItem, updateCartValue } from "../../data/cart.js";
import {products} from "../../data/products.js";
import {getDeliveryOptionObj} from "../../data/delveryOptions.js";
export function renderPaymentSummary(){
    console.log('payment');
    let orderTotal=0;
    let items=0;
    let priceUsd=0;
    let deliveryPriceCents=0;
    cart.forEach((cartItem)=>{
        let matching;
        products.forEach((product)=>{
            if (cartItem.productId===product.id){
                matching = product;
            }
        });
        deliveryPriceCents=deliveryPriceCents+getDeliveryOptionObj(cartItem);
        items=items+cartItem.quantity;
        let semiPriceUsd= cartItem.quantity*matching.priceCents;
        priceUsd=priceUsd+ Number((semiPriceUsd/100).toFixed(2));
    });
    
        let paymentSummary=`<div class="payment-summary">
        <div class="payment-summary-title">
        Order Summary
        </div>

        <div class="payment-summary-row">
        <div>Items (${items}):</div>
        <div class="payment-summary-money">$${priceUsd}</div>
        </div>

        <div class="payment-summary-row">
        <div>Shipping &amp; handling:</div>
        <div class="payment-summary-money">$${Number((deliveryPriceCents/100).toFixed(2))}</div>
        </div>

        <div class="payment-summary-row subtotal-row">
        <div>Total before tax:</div>
        <div class="payment-summary-money">$${priceUsd}</div>
        </div>

        <div class="payment-summary-row">
        <div>Estimated tax (10%):</div>
        <div class="payment-summary-money">$${Number((0.1*priceUsd).toFixed(2))}</div>
        </div>

        <div class="payment-summary-row total-row">
        <div>Order total:</div>
        <div class="payment-summary-money">$${Number(priceUsd+(0.1*priceUsd)).toFixed(2)}</div>
        </div>

        <button class="place-order-button button-primary">
        Place your order
        </button>
        </div>`
    document.querySelector('.payment-summary').innerHTML=paymentSummary;
}