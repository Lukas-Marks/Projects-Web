let board = ['', '', '', '', '', '', '', '', ''];
let playerTime = 0; // Jogador 0 começa
let gameOver = false;
let symbols = ['x', 'o'];

let winStates = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

function handleMove(position) {
    if (gameOver || board[position] !== '') {
        return false;
    }

    board[position] = symbols[playerTime];

    if (isWin()) {
        gameOver = true;
        return true;
    }

    playerTime = (playerTime + 1) % 2;
    return false;
}

function isWin() {
    for (let seq of winStates) {
        let [pos1, pos2, pos3] = seq;
        if (board[pos1] === board[pos2] && board[pos1] === board[pos3] && board[pos1] !== '') {
            return true;
        }
    }
    return false;
}
