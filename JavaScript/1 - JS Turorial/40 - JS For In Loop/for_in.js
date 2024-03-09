const person = {fname: "Disha", lname: "Khunt" , age: 20};

let txt = "";
for(let x in person){
    txt += person[x] + " ";
}
document.getElementById("demo1").innerHTML = txt;

// For In Over Arrays
const numbers = [5, 2, 20, 3 ,11, 23];
let number = "";
for(let n in numbers){
    number += numbers[n] + "<br>";
}
document.getElementById("demo2").innerHTML = number;

// Array.forEach()
let txt1 = "";
numbers.forEach(myFunction);
document.getElementById("demo3").innerHTML = txt1;

function myFunction(value, index, array) {
  txt1 += value + "<br>"; 
}
