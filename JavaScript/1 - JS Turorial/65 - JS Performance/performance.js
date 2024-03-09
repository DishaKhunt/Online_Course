// Reduce Activity in Loops
const car = ["Thar", "Verna", "BMW"];
let l = car.length;

let arr = "<ul>";
for(let i=0 ; i < l; i++){
    arr += "<li>"+car[i]+"</li>";
}
arr += "</ul>";
document.getElementById("demo1").innerHTML = arr;

// Reduce DOM Access
const obj = document.getElementById("demo2");
obj.innerHTML = "Hello Disha!";


