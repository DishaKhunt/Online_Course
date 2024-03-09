const person = {
    name: "Disha",
    age: 21,
    city: "Londan"
  };
  
  document.getElementById("demo1").innerHTML = person;

//   Displaying Object Properties
document.getElementById("demo2").innerHTML = 
person.name +" , " + person.age+ " , "+person.city;

// Displaying the Object in a Loop
let txt = "";
for (let x in person) {
  txt += person[x] + " ";
};

document.getElementById("demo3").innerHTML = txt;

// Using Object.values()
const myArray = Object.values(person);
document.getElementById("demo4").innerHTML = myArray;

// Using JSON.stringify()
let myString = JSON.stringify(person);
document.getElementById("demo5").innerHTML = myString;

// Stringify Dates
const person1 = {
    today : new Date()
};
let date = JSON.stringify(person1);
document.getElementById("demo6").innerHTML = date;

// Stringify Functions
const person2 = {
    name: "John",
    age: function () {return 30;}
  };
//   person2.age = person2.age.toString();
  let myString1 = JSON.stringify(person2);
  document.getElementById("demo7").innerHTML = myString1;

//   Stringify Arrays
const arr = ["Disha", "Isha", "Manshi", "Harshi"];

let myString2 = JSON.stringify(arr);
document.getElementById("demo8").innerHTML = myString2;