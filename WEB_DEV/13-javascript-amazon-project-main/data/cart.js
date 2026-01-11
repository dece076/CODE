import { renderCheckoutHeader } from "../scripts/checkout/checkoutheader.js";
import dayjs from "https://cdn.jsdelivr.net/npm/dayjs@1/+esm";
export let cart =JSON.parse(localStorage.getItem('cart')) || [{
    productId : 'e43638ce-6aa0-4b85-b27f-e1d07eb678c6',
    quantity : 6,
    deliveryOptionId : '1'
},{
    productId : '15b6fc6f-327a-4ec4-896f-486349e85a3d',
    quantity : 3,
    deliveryOptionId: '3'
}];

export function totalCartQty(){
    let totalQty=0;
    cart.forEach((cartItem)=>{
        totalQty=totalQty+cartItem.quantity;
    });
    return totalQty;
}

export function addToCart(productId,q){
    let matchingItem;
    cart.forEach((cartItem)=>{
            if(cartItem.productId===productId){
                matchingItem=cartItem;
            }
        }
    );
    if (matchingItem){
        matchingItem.quantity+=q;
    }
    else{
        cart.push(
            {
                productId:productId,
                quantity:q||1
            }
        );
        
    }
    localStorage.setItem("cart",JSON.stringify(cart));
}

export function updateCartItem(pId,qty){
    cart.forEach((value)=>{
        if (value.productId===pId){
            value.quantity=qty;
            let xyz=document.querySelector(`.js-quantity-label-${pId}`);
            if (xyz){
                xyz.innerHTML=qty;
            }
        }
    }
    );
    localStorage.setItem('cart',JSON.stringify(cart));
    
    updateCartValue();
}

/*const checkoutHeader = document.querySelector('.js-checkout-header-middle-section .return-to-home-link');
  if (checkoutHeader) {
      checkoutHeader.textContent = 2;
  }*/

export function updateCartValue(){
    let totalCart=0;
    cart.forEach((cartItem)=>{
            totalCart+=cartItem.quantity;
            let totalCartItem = document.querySelector('.js-cart-quantity');
            if (totalCartItem){
                totalCartItem.innerHTML=totalCart;
            }

            //console.log(totalCart);
        }
    );
    localStorage.setItem('totalCart',JSON.stringify(totalCart));
    renderCheckoutHeader();
  }
  
export function addedToCart(productId){
    console.log('as');
    let addedBtn=document.querySelector(`.js-added-to-cart${productId}`);
    addedBtn.style.opacity='1';
    let timeoutId;
    if(addedBtn.timeoutId){
      clearTimeout(addedBtn.timeoutId);
    }
    timeoutId=setTimeout(()=>{
      addedBtn.style.let 
      x=dayjs().format("dddd");
    console.log(x);opacity='0';
    },1000);
    console.log('as');
  }
  
export function removeFromCart(x){
    let UCart=cart.filter((value)=>{
        if (value.productId!=x){
            return true;
        }
        else
            return false;
    });
    cart=UCart;
    localStorage.setItem("cart",JSON.stringify(cart));
    updateCartValue();
}

export function updateDeliveryOptionId(productId,deliveryOptionId){
    let matchingItem;
    cart.forEach((cartItem)=>{
        if (cartItem.productId===productId){
            matchingItem=cartItem;
        }
    });
    matchingItem.deliveryOptionId=deliveryOptionId;
    console.log('ok');
    localStorage.setItem("cart",JSON.stringify(cart));
}


export function isWeekend(day){
    return (day===0||day===6);
}
export function deliveryDays(x){
    let date = dayjs();
    let newDate = 0;
    while (newDate<x){
        date=date.add(1,"day");
        if (!isWeekend(date.day())){
                newDate++;
        }
    }
    return date.format("dddd, DD MMMM");
}

  