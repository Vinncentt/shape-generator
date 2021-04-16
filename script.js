function setup() {
    createCanvas(500, 500)
    background(244)
    
}


var rx = document.querySelector("body > div > div > input.input-num.rect-x");
var ry = document.querySelector("body > div > div > input.input-num.rect-y");
var rw = document.querySelector("body > div > div > input.input-num.rect-y");
var rh = document.querySelector("body > div > div > input.input-num.rect-y");


 btn1.onclick = function draw(){
    rect(rx.value, ry.value, rw.value, rh.value);
}


var ex = document.querySelector("body > div > div > input:nth-child(8)");
var ey = document.querySelector("body > div > div > input:nth-child(9)");
var er = document.querySelector("body > div > div > input.input-num.rect-r");

btn2.onclick = function(){
    ellipse(ex.value, ey.value, er.value);
}

var sx = document.querySelector("body > div > div > input:nth-child(13)");
var sy = document.querySelector("body > div > div > input:nth-child(14)");
var ss = document.querySelector("body > div > div > input:nth-child(15)");

btn3.onclick = function(){
    rect(sx.value, sy.value, ss.value, ss.value);
}

// function draw(){
//     background(240);

// }


