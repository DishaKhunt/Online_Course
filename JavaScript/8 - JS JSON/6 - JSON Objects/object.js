// Creating an Object from a JSON Literal
const myObj = {"name":"Disha", "age":21, "car":null};
document.getElementById("demo1").innerHTML = "Name : "+ myObj.name;

// Creating an Object Parsing JSON
// or
// Accessing Object Values
const myJSON = '{"name":"Disha", "age": 21, "car": null}';
const myObj1 = JSON.parse(myJSON);
document.getElementById("demo2").innerHTML = myObj1.name;
// document.getElementById("demo2").innerHTML = myObj1["name"];


// Looping an Object
let text = "";
for(const x in myObj1){
    text += x+ ", ";
}
document.getElementById("demo3").innerHTML = text;


// Looping JavaScript Object Values
let text1 = "";
for(const x in myObj1){
    text1 += myObj1[x]+ ", ";
}
document.getElementById("demo4").innerHTML = text1;