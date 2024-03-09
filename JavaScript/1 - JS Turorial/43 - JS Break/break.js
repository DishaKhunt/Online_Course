// Break Statement

let text = "";
for(let i = 0; i<10 ; i++){
    if(i === 5){
        break;
    }
    text += "The number is "+ i + "<br>";
}
document.getElementById("demo1").innerHTML = text;

// Continue Statement 

let text1 = "";
for(let j = 0 ; j < 10 ; j++){
    if(j === 5){
        continue;
    }
    text1 += "The number is "+ j + "<br>";
}
document.getElementById("demo2").innerHTML = text1;

// JavaScript Labels
const cars = ["Thar", "BMW", "Verna", "Audi"];
let str = "";

list: {
    str += cars[0] + "<br>";
    str += cars[1] + "<br>";
    break list;
    str += cars[2] + "<br>";
    str += cars[3] + "<br>";
}

document.getElementById("demo3").innerHTML = str;