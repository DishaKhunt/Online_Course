// for loop

const cars = ["Thar" , "BMW", "Verna","Audi","Creata"];

let car = "";
for(let i=0 ; i<cars.length ; i++){
    car += cars[i]+"<br>";
}
document.getElementById("demo1").innerHTML = car;

// print 0 to5 
let number = "";
for(let i= 0 ; i <= 5; i++){
    number += i +"<br>";
}
document.getElementById("demo2").innerHTML = number;

// 
let i = 0;
let len = cars.length;
let text = "";

for (; i < len; ) {
  text += cars[i] + "<br>";
  i++;
}
document.getElementById("demo3").innerHTML = text;

// Loop Scope
var j = 5;
for (var j = 0; j < 10; j++) {
  // some statements
}
document.getElementById("demo4").innerHTML = "ans = "+j;

let k = 5;
for (let k = 0; k < 10; k++) {
  // some statements
}
document.getElementById("demo5").innerHTML = "ans = "+k;

