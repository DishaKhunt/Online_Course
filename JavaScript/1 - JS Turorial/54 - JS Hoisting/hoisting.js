// hoisting
x = 5;

element1 = document.getElementById("demo1");
element1.innerHTML = x;

var x;


var y;
y = 2;

element2 = document.getElementById("demo2");
element2.innerHTML = y;

//  let and const Keywords
try {
    carName = "Saab";
    let carName = "Verna";
  }
  catch(err) {
    document.getElementById("demo3").innerHTML = err;
  }


  try {
    carName = "Saab";
    const carName = "Verna";
  }
  catch(err) {
    document.getElementById("demo4").innerHTML = err;
  }

//  Initializations are Not Hoisted
var x1 = 5;
var y1 = 2;

ans1 = document.getElementById("demo5");
ans1.innerHTML = x1 + " "+ y1;


var x2 = 5;
ans2 = document.getElementById("demo6");
ans2.innerHTML = " x is "+x2 +" and y is "+y2; 
var y2 = 2;


var x3 = 5;
var y3;
ans2 = document.getElementById("demo7");
ans2.innerHTML = " x is "+x3 +" and y is "+y3; 
y3 = 2;
