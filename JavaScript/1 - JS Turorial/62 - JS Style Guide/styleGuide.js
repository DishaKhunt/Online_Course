// Variable Names
firstName = "John";
lastName = "Doe";

price = 19.90;
tax = 0.20;

fullPrice = price + (price * tax);
document.getElementById("demo1").innerHTML = "Full Price : "+fullPrice;

// Spaces Around Operators
// let x = y +z;
const myArray = ["Verna", "Thar", "BMW"];

// Code Indentation
function toCelsius(f){
    return (5/9) * (f-32);
}
document.getElementById("demo2").innerHTML = "The temperature is " + toCelsius(77) + " Celsius."

// Statement Rules
const person = {
    firstName: "Disha",
    lastName: "Khunt",
    age: 21,
    eyeColor: "blue"
  };

// looping
let x;
for (let i = 0; i < 5; i++) {
    x += i;
  }

// Conditionals:
let time;
if (time < 20) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}

// Objeect rules:
const person1 = {
    firstName: "Disha",
    lastName: "Khunt",
    age: 21,
    eyeColor: "blue"
  };

// Short objects can be written compressed, on one line, using spaces only between properties
const person3 = {firstName: "Disha", lastName: "Khunt", age: 21,eyeColor: "blue"};

// Line Length < 80
document.getElementById("demo4").innerHTML = "Hello Disha.";