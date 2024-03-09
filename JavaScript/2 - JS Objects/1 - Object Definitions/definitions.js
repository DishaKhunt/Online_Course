// Objects are Variables

let person = "Disha";
document.getElementById("demo1").innerHTML = person;


let person1 = {firstName: "Disha", lastName: "Khunt", age: "21"};
document.getElementById("demo2").innerHTML = person1.firstName + " "+person1.lastName;

// object definition can span multiple lines
// let person1 = {
//     firstName: "Disha", 
//     lastName: "Khunt", 
//     age: "21"
// };

// Using the JavaScript Keyword new
const person2 = {};
person2.firstName = "Disha";
person2.lastName = "Khunt";
person2.age = 21;
document.getElementById("demo3").innerHTML = person2.firstName + " is "+
person2.age+ " year old.";

// JavaScript Objects are Mutable
const person3 = {
    firstName: "Disha", 
    lastName: "Khunt", 
    age: "21"
}
const x = person3;
x.age = 20;
document.getElementById("demo4").innerHTML = person3.firstName + " is "+ person3.age + " year old.";