export let cart =[{
    productId : 'e43638ce-6aa0-4b85-b27f-e1d07eb678c6',
    quantity : 6
},{
    productId : '15b6fc6f-327a-4ec4-896f-486349e85a3d',
    quantity : 3
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
                quantity:1
            }
        );
        
    }
  }
  
export function updateCartValue(){
    let totalCart=0;
    cart.forEach((cartItem)=>{
            totalCart+=cartItem.quantity;
            
        }
  
    );
    document.querySelector('.js-cart-quantity').innerHTML = totalCart;
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
}