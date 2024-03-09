function myFunction(x, y) {
    if (y === undefined) {
      y = 2;
    }  
    return x * y;
  }
  document.getElementById("demo1").innerHTML = myFunction(4);

//  Default Parameter Values
function myFunction1(x, y = 10) {
    return x + y;
}
document.getElementById("demo2").innerHTML = myFunction1(5);

// Function Rest Parameter
function sum(...args) {
    let sum = 0;
    for (let arg of args) sum += arg;
    return sum;
}
  
  let x = sum(4, 9, 16, 25, 29, 100, 66, 77);
  
document.getElementById("demo3").innerHTML = "Total sum : "+ x;

// Arguments Object
function findMax() {
    let max = -Infinity;
    for(let i = 0; i < arguments.length; i++) {
      if (arguments[i] > max) {
        max = arguments[i];
      }
    }
    return max;
} 
document.getElementById("demo4").innerHTML = "Max value : "+ findMax(4, 5, 6);

function sumAll() {
  let sum = 0;
  for(let i = 0; i < arguments.length; i++) {
    sum += arguments[i];
  }
  return sum;
}
document.getElementById("demo5").innerHTML = "Sum : " +sumAll(1, 123, 500, 115, 44, 88);

