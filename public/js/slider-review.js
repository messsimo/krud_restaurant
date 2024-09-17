const blocks = document.querySelectorAll('.block');
let currentBlock = 0;

function updateBlocks(next = true) {
    blocks[currentBlock].classList.remove('active-review');
    currentBlock = next 
        ? (currentBlock + 1) % blocks.length 
        : (currentBlock - 1 + blocks.length) % blocks.length;
    blocks[currentBlock].classList.add('active-review');
}

document.querySelectorAll('.nextBtn').forEach(button => {
    button.addEventListener('click', () => updateBlocks(true));
});

document.querySelectorAll('.prevBtn').forEach(button => {
    button.addEventListener('click', () => updateBlocks(false));
});