document.addEventListener('DOMContentLoaded', () => {
    let squares = document.querySelectorAll(".square");
    squares.forEach(square => {
        square.addEventListener('click', handleClick);
    });
});

function handleClick(event) {
    let square = event.target;
    let position = square.id;

    if (handleMove(position)) {
        setTimeout(() => {
            alert('O jogo acabou! Parabéns, jogador ' + (playerTime + 1));
        }, 10);
    }

    updateSquare(position);
}

function updateSquare(position) {
    let square = document.getElementById(position.toString());
    let symbol = board[position];
    square.innerHTML = `<div class='${symbol}'></div>`;
}

function reset() {
    let squares = document.querySelectorAll(".square");
    squares.forEach(square => {
        square.innerHTML = '';
    });

    board.fill('');
    gameOver = false;
    playerTime = 0;
}
