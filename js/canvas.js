var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

ctx.font = "75px Impact";
ctx.fillText("Travel Trails", 350, 80);

ctx.font = "25px Monotype Corsiva";
ctx.fillText("Making travellers happy since 1969", 650, 110);

window.onload = function() {
    var c=document.getElementById("myCanvas");
    var ctx=c.getContext("2d");
    var img=new Image();
    img.onload = function () {
    ctx.drawImage(img,0,0,200,200);
    } 
    img.src = "images/log.jpg";    
};