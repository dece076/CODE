export let cart =JSON.parse(localStorage.getItem('cart')) || [{
    productId : 'e43638ce-6aa0-4b85-b27f-e1d07eb678c6',
    quantity : 6,
    deliveryOptionId : '1'
},{
    productId : '15b6fc6f-327a-4ec4-896f-486349e85a3d',
    quantity : 3,
    deliveryOptionId: '3'
}];
 
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

const checkoutHeader = document.querySelector('.js-checkout-header-middle-section .return-to-home-link');
  if (checkoutHeader) {
      checkoutHeader.textContent = 2;
  }

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
    updateCheckoutCart();
  }
  
export function addedToCart(productId){
    let addedBtn=document.querySelector(`.js-added-to-cart${productId}`);
    addedBtn.style.opacity='1';
    let timeoutId;
    if(addedBtn.timepoutId){
      clearTimeout(addedBtn.timeoutId);
    }
    timeoutId=setTimeout(()=>{
      addedBtn.style.opacity='0';
    },1000);
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
export function updateCheckoutCart(){
    let x=document.querySelector(`.return-to-home-link`);
    if (x){
        x.innerHTML=Number(JSON.parse(localStorage.getItem('totalCart')))+` items`;
    }
    console.log('hi');
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