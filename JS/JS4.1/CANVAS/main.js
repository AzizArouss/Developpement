var canvas = document.getElementById('mon_canvas');
var ctx = canvas.getContext('2d');

ctx.beginPath();
ctx.lineWidth = "5";
ctx.strokeStyle = "red";
ctx.rect(5, 5, 290, 140);
ctx.stroke();

ctx.beginPath();
ctx.lineWidth = "2.5";
ctx.strokeStyle = "yellow";
ctx.rect(30, 30, 50, 50);
ctx.stroke();

ctx.beginPath();
ctx.lineWidth = "10";
ctx.strokeStyle = "orange";
ctx.rect(50, 50, 150, 80);
ctx.stroke();

ctx.beginPath();
ctx.lineWidth = "12.5";
ctx.strokeStyle = "black";
ctx.rect(150, 100, 100, 80);
ctx.stroke();

document.getElementById('clear').addEventListener('click', function() {
	ctx.clearRect(10, 25, 150, 50);
}, false);