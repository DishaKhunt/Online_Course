// properties
const person = {
    firstName: "Disha", 
    lastName: "Khunt", 
    age: "21"
}
document.getElementById("demo1").innerHTML =
person.firstName + " is "+person.age + " year old. "+"<br>"+
person["firstName"] + "  "+person["lastName"];

//  for...in Loop
let txt = "";
for(let x in person){
    txt += person[x] + " ";
}
document.getElementById("demo2").innerHTML = txt;

// Adding New Properties
person.nationality = "English";
document.getElementById("demo3").innerHTML = person.firstName + " is "+person.nationality;

// Deleting Properties
delete person.age;
// delete person["age"];
document.getElementById("demo4").innerHTML =
person.firstName + " is " + person.age + " years old.";

// Nested Objects
const myObj = {
    name: "Disha",
    age: 21,
    cars: {
    car1: "Thar",
    car2: "BMW",
    car3: "Verna"
    }
  }
  document.getElementById("demo5").innerHTML = 
  myObj.cars.car2 + "<br>"+
  myObj.cars["car1"] + "<br>"+
  myObj["cars"]["car3"];


//   Nested Arrays and Objects
const myObj1 = {
    name: "Disha",
    age: 21,
    cars: [
        {name:"Ford", models:["Fiesta", "Focus", "Mustang"]},
        {name:"BMW", models:["320", "X3", "X5"]},
        {name:"Fiat", models:["500", "Panda"]}
    ]
}
let x = "";
for( let i in myObj1.cars){
    x += "<h3>" + myObj1.cars[i].name + "</h3>";
    for(let j in myObj1.cars[i].models){
        x += myObj1.cars[i].models[j] + "<br>"; 
    }
}
document.getElementById("demo6").innerHTML = x;