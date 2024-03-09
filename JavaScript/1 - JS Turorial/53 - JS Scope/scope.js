// Block Scope

{
    let x = 2;
}
// x can NOT be used here

{
    var x = 2;
}
// x CAN be used here

// Local Scope
myFunction();

function myFunction() {
  let carName = "Thar";
  document.getElementById("demo1").innerHTML = typeof carName + " " + carName;
}

document.getElementById("demo2").innerHTML = typeof carName;

// Global JavaScript Variables
let carName1 = "Thar";
myFunction1();

function myFunction1() {
  document.getElementById("demo3").innerHTML = "I can display " + carName1;
}

// Global Scope
// var x = 2;
// let x = 2;
// const x = 2;


// Automatically Global
myFunction2();
// code here can use carName as a global variable
document.getElementById("demo4").innerHTML = "I can display " + car;

function myFunction2() {
  car = "Verna";
}

// Global Variables in HTML
var name = "Disha";
let name1 = "Disha";
document.getElementById("demo5").innerHTML = "I can display " + window.name + "<br>"+
"I can not display " + window.name1;