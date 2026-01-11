import { addToCart,deliveryDays, updateDeliveryOptionId,cart,removeFromCart, updateCartItem, updateCartValue } from "../../data/cart.js";
import { products } from "../../data/products.js";
import {deliveryOptions} from "../../data/delveryOptions.js";
import dayjs from "https://cdn.jsdelivr.net/npm/dayjs@1/+esm";
import { renderPaymentSummary } from "./paymentSummary.js";

export function renderOrderSummary(){
  let cartHTML='';
  cart.forEach((cartItem)=>{
      let matching;
      products.forEach((product)=>{
          if (cartItem.productId===product.id){
              matching = product;
          }
      });
      let deliveryOptionObj;
      deliveryOptions.forEach((deliveryOptionItem)=>{
        if (deliveryOptionItem.id===cartItem.deliveryOptionId){
          deliveryOptionObj=deliveryOptionItem;
        }
      })
      
      cartHTML += `<div class="cart-item-container">
              <div class="delivery-date">
                Delivery date: ${deliveryDays(deliveryOptionObj.deliveryDays)}
              </div>

              <div class="cart-item-details-grid">
                <img class="product-image"
                  src="${matching.image}">

                <div class="cart-item-details">
                  <div class="product-name">
                    ${matching.name}
                  </div>
                  <div class="product-price">
                    $${(matching.priceCents / 100).toFixed(2)
                    }
                  </div>
                  <div class="product-quantity">
                    <span>
                      Quantity: <span class="quantity-label js-quantity-label-${matching.id}" data-product-id="${matching.id}">${cartItem.quantity}</span>
                    </span>
                    <select class="updateOptions js-select-options">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <span class="update-quantity-link link-primary js-update-quantity-link js-update-quantity-link-${matching.id}"  data-product-id="${matching.id}">
                      Update
                    </span>
                    <span class="delete-quantity-link js-delete-link link-primary" data-product-id="${matching.id}">
                      Delete
                    </span>
                  </div>
                </div>

                <div class="delivery-options ">
                  <div class="delivery-options-title">
                    Choose a delivery option:
                  </div>
                  ${deliveryOption(matching,cartItem)}
                </div>
              </div>
            </div>`;
  });


  function deliveryOption(matching,cartItem){
    
    let html='';
    deliveryOptions.forEach((deliveryOptionItem)=>{
      const isChecked = deliveryOptionItem.id===cartItem.deliveryOptionId;
      const priceUSD = deliveryOptionItem.priceCents ===0?'FREE ':(deliveryOptionItem.priceCents/100).toFixed(2); 
      html+=`<div class="delivery-option js-delivery-option"
              data-product-id="${matching.id}"
              data-delivery-option-id="${deliveryOptionItem.id}">
              <input type="radio" 
              class="delivery-option-input"
              ${isChecked ? 'checked ':''}
              name="delivery-option-${matching.id}">
              <div>
                <div class="delivery-option-date">
                  ${deliveryDays(deliveryOptionItem.deliveryDays)}
                </div>
                <div class="delivery-option-price">
                  ${priceUSD} Shipping
                </div>
              </div> 
            </div>`
    })
    return html;

  }

  document.querySelector('.order-summary').innerHTML = cartHTML;

  document.querySelectorAll('.js-delivery-option').forEach((eachRadio)=>{
    eachRadio.addEventListener('click',()=>{
      const {productId,deliveryOptionId} = eachRadio.dataset;
      updateDeliveryOptionId(productId,deliveryOptionId);
      renderOrderSummary();
      renderPaymentSummary(deliveryOptionId);
    })
  })

  document.querySelectorAll('.js-delete-link').forEach((btn)=>{
    btn.addEventListener('click',()=>{
      let x=btn.dataset.productId;
      removeFromCart(x);
      btn.closest('.cart-item-container').remove();
      renderPaymentSummary();
      }
      );
    }
  );

  document.querySelectorAll('.js-update-quantity-link').forEach((btn)=>{
    
    btn.addEventListener(('click'),()=>{

      const pId=btn.dataset.productId;
        //worked console.log(dataId);
        //<input type="radio" name=productId
      let updateParent=btn.closest('.cart-item-container');
      let updateBtn=updateParent.querySelector('.js-select-options');
      //let pId=btn.dataset.productId;
      function ifUpdateclicked(){if (btn.innerHTML==='Update'){
        updateBtn.style.display='inline';
        btn.innerHTML='Save';
        updateBtn.value=Number(updateParent.querySelector('.quantity-label').innerHTML);
       // qtyLabel=updateBtn.value;
        //updateCartItem(pId,qtyLabel);
        console.log('des');
       
      }
      else
      {
        updateBtn.style.display='none';
        btn.innerHTML='Update';
        let updateQty=Number(updateBtn.value);
        
        updateCartItem(pId,updateQty);
        updateCartValue();
      }}
      ifUpdateclicked();
    });
  }
  );
  updateCartValue();
}




//learnt about mvc model to generate view-view-controller....mvc is fundamental, regenerating html using render, learnt more about data attributes [it is used for event listeners]
