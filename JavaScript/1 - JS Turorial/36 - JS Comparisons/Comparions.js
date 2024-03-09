// Comparison Operators
document.getElementById("demo1").innerHTML =
" 8 == 5 🟰 "+(8 == 5)+"<br>"+
" 5 == 5 🟰 "+(5 == 5)+"<br>"+
" 5 == '5' 🟰 "+(5 == "5")+"<br>"+
" 5 === 5 🟰 "+( 5 === 5)+"<br>"+
" 5 === '5' 🟰 "+( 5 === "5")+"<br>"+
" 5 != 8  🟰 "+(5!= 8)+"<br>"+
" 5 !== 5 🟰 "+(5!==5)+"<br>"+
" 5 !== '5'  🟰 "+(5 !== '5')+"<br>"+
" 5 !== 8  🟰 "+(5 !== 8)+"<br>"+
" 5 > 8  🟰 "+(5 > 8)+"<br>"+
" 5 < 8  🟰 "+(5 < 8)+"<br>"+
" 5 >= 8  🟰 "+(5 >= 8)+"<br>"+
" 5 <= 8  🟰 "+(5 <= 8);

// Logical Operators
let x = 5;
let y = 2;
document.getElementById("demo2").innerHTML = 
" x = 5 , y = 2"+"<br>"+
"(x < 10 && y > 1) 🟰 "+(x < 10 && y > 1) +"<br>"+
"(x < 10 && y < 1) 🟰 "+(x < 10 && y < 1)+ "<br>"+
"(x == 6 || y == 6) 🟰 "+(x == 6 || y == 6)+"<br>"+
"(x == 5 || y == 0) 🟰 "+(x == 5 || y == 0)+"<br>"+
"(x == 6 || y == 2) 🟰 "+(x == 6 || y == 2)+"<br>"+
"(x == 5 || y == 2) 🟰 "+(x == 5 || y == 2)+"<br>"+
"!(x == y) 🟰 "+!(x == y)+"<br>"+
"!(x > y) 🟰 "+!(x > y);

// Conditional (Ternary) Operator
function myFunction(){
    let age = document.getElementById("age").value;
    let voteable = (age<18)? "Not valid your vote.":"valid your vote.";

    document.getElementById("demo3").innerHTML = voteable;
}

// Comparing Different Types
document.getElementById("demo4").innerHTML = 
" 2 < 15 🟰 "+(2 < 15) +"<br>"+
" 2 < '15' 🟰 "+(2 < "15") +"<br>"+
" 2 < 'Disha' 🟰 "+(2 < 'Disha') +"<br>"+
" 2 > 'Disha' 🟰 "+(2 > 'Disha') +"<br>"+
" 2 == 'Disha' 🟰 "+(2 == 'Disha') +"<br>"+
" '2' < '15' 🟰 "+("2" < "15") +"<br>"+
" '2' > '15' 🟰 "+("2" > "15") +"<br>"+
" '2' == '15' 🟰 "+("2" == "15") +"<br>";

// function 
function myFunction1(){
    let voteable;
    let age = document.getElementById ("age1").value;

    if(isNaN(age)){
        voteable = "Input is not a number";
    }
    else{
        voteable = (age<18)? "Not valid your vote.":"valid your vote.";
    }
    document.getElementById("demo5").innerHTML = voteable;
}

// The Nullish Coalescing Operator (??)
let name = null;
let text = "missing";
let result = name ?? text;
document.getElementById("demo6").innerHTML = "The name is " + result; 

// The Optional Chaining Operator (?.)
// The ?. operator returns undefined if an object is undefined or null (instead of throwing an error).
const car = {type:"Thar", model:"500", color:"black"};
let carName = car?.name;
document.getElementById("demo7").innerHTML = carName;