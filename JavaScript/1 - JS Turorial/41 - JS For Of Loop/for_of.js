// Looping over an Array
const cars = ["Thar", "BMW",  "Verna"];

let car = "";
for(let x of cars){
    car += x +"<br>";
}
document.getElementById("demo1").innerHTML = car;

// Looping over a String
let userName = "DishaKhunt";

let str = "";
for(let s of userName){
    str += s +"<br>";
}
document.getElementById("demo2").innerHTML = str;