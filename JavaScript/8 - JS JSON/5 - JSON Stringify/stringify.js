// Stringify a JavaScript Object
const obj = {name: "Disha", age: 21, city: "Rajkot"};
const myJSON = JSON.stringify(obj);
document.getElementById("demo1").innerHTML = myJSON;

// Stringify a JavaScript Array
const arr = ["Disha", "Isha", "Manshi", "Vaibhavi"];
const myJSON1 = JSON.stringify(arr);
document.getElementById("demo2").innerHTML = myJSON1;

// Storing Data
const myObj = { name: "Disha", age:21, city: "Rajkot"};

const myJSON2 = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON2);

// Retrieving date
let text = localStorage.getItem("testJSON");
let obj1 = JSON.parse(text);
document.getElementById("demo3").innerHTML = obj1.name;

// Stringify Dates
const myObj1 = {name:"disha", age:21 , today: new Date(), city:"Rajkot"};
const myJSON3 = JSON.stringify(myObj1);

document.getElementById("demo4").innerHTML = myJSON3;


// JSON.stringify() will remove any functions from an object.
const myObj2 = {name: "Disha", age: function () {return 21;}, city: "Rajkot"};
myObj2.age = myObj2.age.toString(); // Convert the age property to string
const myJSON4 = JSON.stringify(myObj2);
document.getElementById("demo5").innerHTML = myJSON4;