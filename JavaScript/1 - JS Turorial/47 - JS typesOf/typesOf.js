// The typeof Operator

document.getElementById("demo1").innerHTML =
"'Disha' is 🟰 " + typeof "Disha" + "<br>" +
"3.14 is 🟰 " + typeof 3.14 + "<br>" +
"NaN is 🟰 " + typeof NaN + "<br>" +
"false is 🟰 " + typeof false + "<br>" +
"[1, 2, 3, 4] is 🟰 " + typeof [1, 2, 3, 4] + "<br>" +
"{name:'John', age:34} is 🟰 " + typeof {name:'John', age:34} + "<br>" +
"new Date() is 🟰 " + typeof new Date() + "<br>" +
"function () {} is 🟰 " + typeof function () {} + "<br>" +
"myCar is 🟰 " + typeof myCar + "<br>" +
"null is 🟰 " + typeof null;

// Primitive Data
document.getElementById("demo2").innerHTML = 
"Disha 🟰 "+ typeof "disha" + "<br>" + 
"3.14 🟰 "+ typeof 3.14 + "<br>" +
"true 🟰 "+ typeof true + "<br>" +
"false 🟰 "+ typeof false + "<br>" +
"x  🟰 "+ typeof x;

// Complex Data
document.getElementById("demo3").innerHTML = 
" {name:'Disha', age:20} 🟰 " + typeof {name:'Disha', age:20} + "<br>" +
"[5,2,20,0,3] 🟰 " + typeof [5,2,20,0,3] + "<br>" +
"null 🟰 " + typeof null + "<br>" +
" myFunc(){} 🟰 " + typeof function myFunc(){};

// The constructor Property
document.getElementById("demo4").innerHTML = 
"'Disha'.constructor 🟰 " + "Disha".constructor +"<br>"+
"(3.14).constructor 🟰 " + (3.14).constructor + "<br>"+
"false.constructor 🟰 " + false.constructor + "<br>"+
" [1,2,3,4,5].constructor 🟰 " + [1,2,3,4,5].constructor + "<br>"+
"{name: 'Disha', age: 20}.constructor 🟰 " + {name: "Disha", age: 20}.constructor + "<br>"+
"new Date().constructor 🟰 " + new Date().constructor +"<br>"+       
"function () {}.constructor 🟰 " + function () {}.constructor;

// Use isArray() function  
const fruits = ["Banana", "Orange", "Apple"];
document.getElementById("demo5").innerHTML = isArray(fruits);

function isArray(myArray){
    return myArray.constructor.toString().indexOf("Array") > -1;
}


document.getElementById("demo6").innerHTML = isArray1(fruits);
function isArray1(myArray){
    return myArray.constructor === Array;
}

const myDate = new Date();
document.getElementById("demo7").innerHTML = isDate(myDate);

function isDate(myDate){
    return myDate.constructor.toString().indexOf("Date") > -1;
}

document.getElementById("demo8").innerHTML = isDate1(myDate);

function isDate1(myDate) {
  return myDate.constructor === Date;
}


// Undefined
let car;
document.getElementById("demo9").innerHTML = car + "<br>"+ typeof car;

let  carName = "Verna";
carName = undefined;

document.getElementById("demo10").innerHTML = carName + "<br>" + typeof carName;

// Empty Values
let name = "";
document.getElementById("demo11").innerHTML = "The value is : "+ name + "<br>"+ "The type is : "+ typeof name;

// Null
let person = {firstName: "Disha", lastName: "Khunt", age: 20};
person = null;

document.getElementById("demo12").innerHTML = "types of person : " + typeof person;
person = undefined;
document.getElementById("demo13").innerHTML = "value is : "+person;


// Difference Between Undefined and Null
document.getElementById("demo14").innerHTML = 
"typeof undefined : 🟰 " +typeof undefined + "<br>" +
"typeof null : 🟰 " +typeof null + "<br><br>" +
"(null === undefined) : 🟰 " +(null === undefined) + "<br>" +
"(null == undefined) : 🟰 " +(null == undefined);

// The instanceof Operator
const cars = ["Thar", "Verna", "BMW"];

document.getElementById("demo15").innerHTML =
"(cars instanceof Array) 🟰 "+(cars instanceof Array) + "<br>" + 
"(cars instanceof Object) 🟰 " +(cars instanceof Object) + "<br>" +
"(cars instanceof String) 🟰 " +(cars instanceof String) + "<br>" +
"(cars instanceof Numbers) 🟰 "+(cars instanceof Number);

// The void Operator
