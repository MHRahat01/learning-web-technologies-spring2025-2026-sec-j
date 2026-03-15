let unitPrice = 1000;

let qty = document.getElementById("qty");
let total = document.getElementById("total");
let button = document.getElementById("enterBtn");

button.addEventListener("click", function(){

    let quantity = qty.value;

    if(quantity < 0){
        quantity = 0;
        qty.value = 0;
    }

    let result = unitPrice * quantity;

    total.textContent = result;

    if(result > 1000){
        alert("You are eligible for a gift coupon!");
    }

});

clearBtn.addEventListener("click", function(){
    qty.value = "";
    total.textContent = 0;
});