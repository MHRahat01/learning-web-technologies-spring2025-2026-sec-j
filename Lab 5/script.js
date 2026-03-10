let body = document.body;

let title = document.createElement("h1");
title.textContent = "Tic-Tac-Toe";
body.appendChild(title);

let stat = document.createElement("div");
stat.id = "stat";
stat.textContent = "Current Player: X";
stat.style.fontSize = "24px";
stat.style.margin = "20px";
body.appendChild(stat);

let bDiv = document.createElement("div");
bDiv.style.display = "grid";
bDiv.style.gridTemplateColumns = "repeat(3, 100px)";
bDiv.style.gridGap = "5px";
bDiv.style.margin = "20px";
body.appendChild(bDiv);

let resetBtn = document.createElement("button");
resetBtn.textContent = "Reset Game";
resetBtn.style.fontSize = "16px";
resetBtn.style.margin = "20px";
body.appendChild(resetBtn);

let scoreDiv = document.createElement("div");
scoreDiv.style.margin = "20px";
scoreDiv.style.fontSize = "18px";

let x = document.createElement("p");
x.textContent = "X Wins: 0";

let o = document.createElement("p");
o.textContent = "O Wins: 0";

scoreDiv.appendChild(x);
scoreDiv.appendChild(o);
body.appendChild(scoreDiv);

let board = ["", "", "", "", "", "", "", "", ""];
let currentPlayer = "X";
let isGameOver = false;
let xScore = 0;
let oScore = 0;

let winCombos = [
  [0,1,2],[3,4,5],[6,7,8],
  [0,3,6],[1,4,7],[2,5,8],
  [0,4,8],[2,4,6]
];

let cells = [];
for (let i = 0; i < 9; i++) {
    let cell = document.createElement("div");
    cell.style.width = "100px";
    cell.style.height = "100px";
    cell.style.backgroundColor = "lightgray";
    cell.style.fontSize = "60px";
    cell.style.textAlign="Center";
    cell.dataset.index = i;

    
    cell.addEventListener("mouseover", function() {
        if (!isGameOver && cell.textContent === "") cell.style.backgroundColor = "lightblue";
    });
    cell.addEventListener("mouseout", function() {
        if (!isGameOver && cell.textContent === "") cell.style.backgroundColor = "lightgray";
    });

 
    cell.addEventListener("click", function() {

    
    if (board[i] !== "" || isGameOver) {
        return; 
    }

    board[i] = currentPlayer;
    cell.textContent = currentPlayer;

    checkWinner();

    
    if (!isGameOver) {
        if (currentPlayer === "X") {
            currentPlayer = "O";
        } else {
            currentPlayer = "X";
        }
        stat.textContent = "Current Player: " + currentPlayer;
    }
});

    bDiv.appendChild(cell);
    cells.push(cell);
}

function checkWinner() {

    
    for (let i = 0; i < winCombos.length; i++) {
        let combo = winCombos[i];
        let a = combo[0];
        let b = combo[1];
        let c = combo[2];

        
        if (board[a] !== "" && board[a] === board[b] && board[a] === board[c]) {
            isGameOver = true;
            stat.textContent = "Player " + currentPlayer + " Wins!";

            
            cells[a].style.backgroundColor = "yellow";
            cells[b].style.backgroundColor = "yellow";
            cells[c].style.backgroundColor = "yellow";

           
            if (currentPlayer === "X") {
                xScore++;
                x.textContent = "X Wins: " + xScore;
            } else {
                oScore++;
                o.textContent = "O Wins: " + oScore;
            }
            return; 
        }
    }

    
    let isDraw = true;
    for (let j = 0; j < board.length; j++) {
        if (board[j] === "") {
            isDraw = false;
            break;
        }
    }
    if (isDraw && !isGameOver) {
        isGameOver = true;
        stat.textContent = "It's a draw!";
    }
}


resetBtn.addEventListener("click", function() {
    board = [ "", "", "", 
              "", "", "", 
              "", "", ""];

    currentPlayer = "X";
    isGameOver = false;
    stat.textContent = `Current Player: ${currentPlayer}`;
    for (let i = 0; i < cells.length; i++) {
    cells[i].textContent = "";
    cells[i].style.backgroundColor = "lightgray";
}
});