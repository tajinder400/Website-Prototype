function resizeCanvas(){
    var con = document.getElementById("container"),
        canvas = document.getElementById("canvas"),
        aspect = canvas.height/canvas.width,    
        width = con.offsetWidth,
        height = con.offsetHeight;
    
    canvas.width = width;
    canvas.height = Math.round(width * aspect);
}

window.onresize = resizeCanvas;
window.onload = resizeCanvas;
    
var dR = 1, r = 10;
    
function drawSomething(){
    var canvas = document.getElementById("canvas"),
        ctx = canvas.getContext('2d');
    
    ctx.fillStyle = "#000";
    ctx.fillRect(0,0,canvas.width, canvas.height);
    
    ctx.fillStyle = "#fff";
    ctx.beginPath();
    ctx.arc(canvas.width/2, canvas.height/2, r, 0, Math.PI * 2, false);
    ctx.fill();
    
    r += dR;
    
    if (r > 99 || r < 10) dR = -dR;

    
    webkitRequestAnimationFrame(drawSomething);
}

webkitRequestAnimationFrame(drawSomething);