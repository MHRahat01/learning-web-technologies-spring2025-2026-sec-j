let divElement =document.createElement("div");
divElement.id = "div1";
divElement.style.backgroundColor="red";
divElement.style.height="200px";
divElement.style.width = "200px";
divElement.style.padding ="10px";
divElement.style.background = "Blue";
divElement.style.textAlign="center";

divElement.style.position = "absolute";
divElement.style.top = "40%";
divElement.style.left = "40%";



document.body.appendChild(divElement);


let display = document.createElement("input");
display.type ="text";
display.style.width = "180px";
display.style.height = "30px";
divElement.appendChild(display);

let buttons = [
    "7","8","9",
    "4","5","6",
    "1","2","3","-",
    "0",".","=","+",
    "/","C","*"
];

buttons.forEach(function(value){

    let btn = document.createElement("button");
    btn.innerText = value;
    btn.style.width = "30px";
    btn.style.height ="30px";
    btn.style.margin = "2px";
    divElement.appendChild(btn);

    btn.addEventListener("click",function(){

        if(value === "="){
            display.value = eval(display.value);
        }
        else if(value === "C"){
        display.value = "";
    }
        else{
            display.value += value;
        }
    })

      

})
