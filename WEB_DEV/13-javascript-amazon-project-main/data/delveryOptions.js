export const deliveryOptions = [{
    id : '1',
    deliveryDays : 7,
    priceCents : 0
},{
    id : '2',
    deliveryDays : 3,
    priceCents : 499
},{
    id : '3',
    deliveryDays : 1,
    priceCents : 999
}];

export function getDeliveryOptionObj(cartItem){
    let deliveryOptionObj;
    deliveryOptions.forEach((deliveryOptionItem)=>{
        if (deliveryOptionItem.id===cartItem.deliveryOptionId){
        deliveryOptionObj=deliveryOptionItem;
        }
    })
    return deliveryOptionObj.priceCents;
}