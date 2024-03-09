// Creating an Array from JSON

const myJSON = '["Thar", "BMW", "Verna"]';
const myArray = JSON.parse(myJSON);
document.getElementById("demo1").innerHTML = "Array is : "+ myArray;

// Accessing Array Values
document.getElementById("demo2").innerHTML =  "1st index of Array : "+myArray[0];

// Arrays in Objects
const myJSON1 = '{"name":"Disha", "age":21, "cars":["Thar", "BMW", "verna"]}';

const myObj = JSON.parse(myJSON1);
document.getElementById("demo3").innerHTML = "myObj.cars[0] : "+ myObj.cars[0];

// Looping Through an Array
let text = "";
for (let i in myObj.cars) {
  text += myObj.cars[i] + ", ";
}

document.getElementById("demo4").innerHTML = text;
