// Multiplication
function Multiplication(x,y){
    return x*y;
}

let mul = Multiplication(5,2);
document.getElementById("demo1").innerHTML = "Multiplication is : "+mul;

// Fahrenheit to celsius
function toCelsius(f){
    return (5/9) * (f-32);
}
document.getElementById("demo2").innerHTML = "The temperature is " + toCelsius(77) + " Celsius."

// inside outside function
let text = "Outside: " + typeof name;
document.getElementById("demo3").innerHTML = text;

function myFunction() {
  let name = "disha";
  let text = "Inside: " + typeof name + " " + name; 
  document.getElementById("demo4").innerHTML = text;
}

myFunction();