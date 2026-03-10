
let body = document.body;

let title = document.createElement("h1");
title.textContent = "Tic-Tac-Toe";

body.appendChild(title);


let stat = document.createElement("div");

stat.id = "stat";
stat.textContent = "Current Player: X";
stat.style.fontSize = "24px";
stat.style.margin = "20px"
body.appendChild(stat);


let bDiv = document.createElement("div");




let resetBtn = document.createElement("button");
resetBtn.textContent = "Reset Game";
resetBtn.style.fontSize = "16px";
resetBtn.style.margin = "20px"
body.appendChild(resetBtn);


let scoreDiv = document.createElement('div');
scoreDiv.style.margin = '20px';
scoreDiv.style.fontSize = '18px';
let x = document.createElement('p');
x.textContent = "X Wins: 0";
let o = document.createElement('p');
o.textContent = "O Wins: 0";
scoreDiv.appendChild(x);
scoreDiv.appendChild(o);
body.appendChild(scoreDiv);