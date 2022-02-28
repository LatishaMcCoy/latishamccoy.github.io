var canvas;


function setup() {
  canvas = createCanvas(windowWidth, windowHeight);
  canvas.position(0,0);
  canvas.style('z-index', '-1');



for (var i = 0; i < 80; i++) {
  var n = random(width + 2);
  var e = random(height);
  var r = 28;
  fill(28, 176, 142, 60);
  noStroke();
  ellipse(n, e, r*2, r*2);
}

}

function draw() {
}