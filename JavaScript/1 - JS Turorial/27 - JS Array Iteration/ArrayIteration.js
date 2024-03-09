// Array forEach()
const numbers = [11,45,65,33,23,1];

let text = "";
numbers.forEach(myFunction1);
document.getElementById("demo1").innerHTML = text;

function myFunction1(value, index, array) {
  text += value + "<br>"; 
}

// Array map()

const numbers_map = numbers.map(myFunction2);
document.getElementById("demo2").innerHTML = numbers_map;

function myFunction2(value, index, array) {
    return value * 2;
  }

//  Array flatMap()
const numbers_flatMap = numbers.flatMap((x) => x * 2);
document.getElementById("demo3").innerHTML = numbers_flatMap;

// Array filter()

const numbers_filter = numbers.filter(myFunction3);
document.getElementById("demo4").innerHTML = numbers_filter;

function myFunction3(value, index, array){
  return value >30;
}

// Array reduce()
// works from left-to-right in the array.
// this method can accept an intial state.
let sum_reduce = numbers.reduce(myFunction4);
document.getElementById("demo5").innerHTML =  "The sum of all element in an Array : "+sum_reduce;

function myFunction4(total, value){
  return total+value;
}

// Array reduceRight()
let sum_reduceRight = numbers.reduceRight(myFunction4);
document.getElementById("demo6").innerHTML = "The sum of all element in Array : "+ sum_reduceRight;

// Array every()
// all the array value pass a test
let numbers_every = numbers.every(myFunction3);
document.getElementById("demo7").innerHTML = "all over 30 is : "+numbers_every;

// Array some()
// check if aome array values pass test.
let numbers_some = numbers.some(myFunction3);
document.getElementById("demo8").innerHTML = "Some over 30 is : "+numbers_some;

//  Array.from()
const myArr = Array.from("DISHA");
document.getElementById("demo9").innerHTML = myArr;

// Array keys()
const fruits = ["Banana" , "Orange", "Apple", "Mango"];
const keys = fruits.keys();

let txt = "";
for(let x of keys){
  txt +=  x +"<br>";
}
document.getElementById("demo10").innerHTML = txt;


// Array entries()
const entries = fruits.entries();

for(let x of entries){
  document.getElementById("demo11").innerHTML += x+"<br>";
}

//  Array with() Method
const months = ["Jan", "Feb", "Mar", "Apr"];
const myMonths = months.with(2, "March");

document.getElementById("demo12").innerHTML = myMonths;

// Array Spread (...)
const arr1 = ["Jan", "Feb", "Mar"];
const arr2 = ["Apr", "May", "Jun"];
const arr3 = ["Jul", "Aug", "Sep"];
const arr4 = ["Oct", "Nov", "Dec"];

const year = [...arr1, ...arr2, ...arr3, ...arr4];
document.getElementById("demo13").innerHTML = year;