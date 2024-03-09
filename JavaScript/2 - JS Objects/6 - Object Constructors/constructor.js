// JavaScript Object Constructors

// Constructor function for Person objects
function Person(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
}

// create a person object
const myFather = new Person("Sanjaybhai", "Khunt" , 50, "blue");

// display age
document.getElementById("demo1").innerHTML = "My Father name is  "+myFather.firstName +" "+ myFather.lastName +". He is "+myFather.age+ " year old."

// Object Types (Blueprints) (Classes)

const myMother = new Person("Bhavanaben" , "Khunt", 48 , "brown");
document.getElementById("demo2").innerHTML = 
`My Father name is `+ myFather.firstName + ". <br>"+
`My Mother name is `+ myMother.firstName + "." ;

// Adding a Property to an Object
myFather.nationality = "English";
document.getElementById("demo3").innerHTML =
"My father is " + myFather.nationality; 

// Adding a Method to an Object
myFather.name = function(){
    return this.firstName + " "+ this.lastName;
}

// Display full name
document.getElementById("demo4").innerHTML = "My Father name is  "+myFather.name() +".";

// Adding a Property to a Constructor
// You can NOT add a new property to a constructor function
Person.nationality = "English";
document.getElementById("demo5").innerHTML = "The nationality of my father is "+myFather.nationality;

// Adding a Method to a Constructor
function Person1(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
    this.name = function() {
      return this.firstName + " " + this.lastName
    };
    this.changeName = function (name) {
        this.lastName = name;
  }
} 
// Create a Person object
const myFather1 = new Person1("Sanjaybhai", "Khunt", 50, "blue");
const myMother1 = new Person1("Bhvanaben","Khunt",48,"Brown");

// Display full name
document.getElementById("demo6").innerHTML =
  "My father is " + myFather1.name(); 

// Adding a Method to a Constructor
myMother1.changeName("Dangariya");

// display last name
document.getElementById("demo7").innerHTML = "My Mother last name is "+ myMother1.lastName;


// Built-in JavaScript Constructors
const x1 = new String();   // A new String object
const x2 = new Number();   // A new Number object
const x3 = new Boolean();  // A new Boolean object
const x4 = new Object();   // A new Object object
const x5 = new Array();    // A new Array object
const x6 = new RegExp();   // A new RegExp object
const x7 = new Function(); // A new Function object
const x8 = new Date();     // A new Date object

// Display the type of all objects
document.getElementById("demo8").innerHTML =
"x1: " + typeof x1 + "<br>" +
"x2: " + typeof x2 + "<br>" +
"x3: " + typeof x3 + "<br>" +
"x4: " + typeof x4 + "<br>" +
"x5: " + typeof x5 + "<br>" +
"x6: " + typeof x6 + "<br>" +
"x7: " + typeof x7 + "<br>" +
"x8: " + typeof x8 + "<br>";


let y1 = "";      // string 
let y2 = 0;       // number
let y3 = false;   // boolean
const y4 = {};    // Object object
const y5 = [];    // Array object
const y6 = /()/;  // RegExp object
const y7 = function(){};  // function

// Display the type of all
document.getElementById("demo9").innerHTML =
"y1: " + typeof y1 + "<br>" +
"y2: " + typeof y2 + "<br>" +
"y3: " + typeof y3 + "<br>" +
"y4: " + typeof y4 + "<br>" +
"y5: " + typeof y5 + "<br>" +
"y6: " + typeof y6 + "<br>" +
"y7: " + typeof y7 + "<br>";