let i = 0;
let num = "";

while(i<10){
    num += "The number is : "+ i +"<br>";
    i++;
}
document.getElementById("demo1").innerHTML= num;

// Do While Loop
let j = 11;
let no  = "";
do{
    no += "Number is : "+ j +"<br>"; 
    j++;
}
while(j < 21)
document.getElementById("demo2").innerHTML = no;

//Comparing For and While
const cars = ["Thar" , "BMW" , "Verna", "Audi"];
let k = 0;
let car = "";
for(; cars[k] ;){
    car += cars[k] + "<br>";
    k++;
}
document.getElementById("demo3").innerHTML = car;

let l = 0;
let str = "";
while(cars[l]){
    str += cars[l] + "<br>";
    l++;
}
document.getElementById("demo4").innerHTML = str;