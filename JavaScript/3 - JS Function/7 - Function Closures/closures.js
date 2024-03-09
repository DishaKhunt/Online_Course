myFunction();

function myFunction() {
  let a = 4;
  document.getElementById("demo1").innerHTML = a * a;
}

let a = 4;
myFunction1();

function myFunction1() {
  document.getElementById("demo2").innerHTML = a * a;
} 

myFunction3();
document.getElementById("demo3").innerHTML = a * a;

function myFunction3() {
  a = 4;
} 

// Initiate counter
let counter = 0;

// Function to increment counter
function add() {
  counter += 1;
}

// Call add() 3 times
add();
add();
add();

// The counter should now be 3
document.getElementById("demo4").innerHTML = "The counter is: " + counter;

let counter1 = 0;

// Function to increment counter
function add1() {
  let counter1 = 0; 
  counter1 += 1;
}

// Call add() 3 times
add1();
add1();
add1();

// The result is not 3 because you mix up the globaland local counter
document.getElementById("demo5").innerHTML = "The counter is: " + counter1;

// Nested Functions
document.getElementById("demo6").innerHTML = add3();
function add3() {
  let counter3 = 0;
  function plus() {counter3 += 1;}
  plus();  
  return counter3; 
}

const add4 = (function () {
    let counter4 = 0;
    return function () {
        counter4 += 1; return counter4;
    }
  })();
  
  function myFunction4(){
    document.getElementById("demo7").innerHTML = add4();
  }