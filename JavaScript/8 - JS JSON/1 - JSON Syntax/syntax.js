// JSON Data - A Name and a Value
// "name" : "Disha"

// JSON - Evaluates to JavaScript Objects
// {"name" :"Disha"} json
// {name : "Disha"} js

// Javascript Object
const myObj = {
    name: "Disha",
    age: 20,
    city: "Rajkot"
};
document.getElementById("demo1").innerHTML =
"myObj.name : "+ myObj.name + "<br>"+
"myObj['name'] : "+myObj['name'];

// chnage the object name
myObj.name = "Isha";
// myObj["name"] = "Manshi";
document.getElementById("demo2").innerHTML =  "Change the name : "+myObj.name;