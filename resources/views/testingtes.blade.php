<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flappy Bird</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body, html {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #70c5ce;
    overflow: hidden;
}

canvas {
    border: 2px solid #000;
    background-color: #70c5ce;
}

    </style>
</head>
<body>
    <canvas id="gameCanvas"></canvas>
    <script src="script.js"></script>
    <script>
      const canvas = document.getElementById('gameCanvas');
const context = canvas.getContext('2d');

const canvasWidth = 320;
const canvasHeight = 480;

canvas.width = canvasWidth;
canvas.height = canvasHeight;

const bird = {
    x: 50,
    y: 150,
    width: 20,
    height: 20,
    gravity: 0.6,
    lift: -15,
    velocity: 0,
};

const pipeWidth = 40;
const pipeGap = 100;
let pipeX = canvasWidth;
let pipeHeight = Math.floor(Math.random() * (canvasHeight - pipeGap)) + 20;

const update = () => {
    context.clearRect(0, 0, canvasWidth, canvasHeight);

    // Draw bird
    context.fillStyle = 'yellow';
    context.fillRect(bird.x, bird.y, bird.width, bird.height);

    // Draw pipes
    context.fillStyle = 'green';
    context.fillRect(pipeX, 0, pipeWidth, pipeHeight);
    context.fillRect(pipeX, pipeHeight + pipeGap, pipeWidth, canvasHeight - pipeHeight - pipeGap);

    bird.velocity += bird.gravity;
    bird.y += bird.velocity;

    pipeX -= 2;
    if (pipeX < -pipeWidth) {
        pipeX = canvasWidth;
        pipeHeight = Math.floor(Math.random() * (canvasHeight - pipeGap)) + 20;
    }

    // Check for collision
    if (
        bird.y + bird.height >= canvasHeight || 
        bird.y <= 0 || 
        (bird.x + bird.width >= pipeX && bird.x <= pipeX + pipeWidth && 
        (bird.y <= pipeHeight || bird.y + bird.height >= pipeHeight + pipeGap))
    ) {
        bird.y = 150;
        bird.velocity = 0;
        pipeX = canvasWidth;
    }

    requestAnimationFrame(update);
};

document.addEventListener('keydown', () => {
    bird.velocity = bird.lift;
});

update();

    </script>
</body>
</html>
