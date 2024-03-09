// Operator Precedence

document.getElementById("demo1").innerHTML = 
" 100 + 50 * 3 🟰 " + (100 + 50 * 3) + "<br>"+
" ( 100 + 50 )* 3 🟰 " + ((100 + 50) * 3) + "<br>"+
"  100 / 50 * 3 🟰 " + ( 100 / 50 * 3);

// Operator Precedence Values
const person = {name : "Disha", age : 21};

let firstName = person?.firstName;

function myFunction(p1,p2){
    return p1*p2;
}
let result = myFunction(5,2);

const date = new Date("feb 5, 2003");
const date1 = new Date();



document.getElementById("demo2").innerHTML = 
person.name + "<br>"+
person["name"] + "<br>"+
firstName + "<br>"+
"Multiplication is : "+result + "<br>"+
date + "<br>"+
date1;

// Increment Operators
let x = 5;
let y1 = x++;
let y2 = x--;
let y3 = ++x;
let y4 = --x;
document.getElementById("demo3").innerHTML =  
"5++ 🟰 " +y1 + "<br>"+
"5-- 🟰 " +y2 + "<br>"+
"++5 🟰 " +y3 + "<br>"+
"--5 🟰 " +y4 + "<br>";

// NOT Operators
document.getElementById("demo4").innerHTML = 
"!( 5 == 2) 🟰 " +!( 5 == 2) + "<br>"+
"~ 5 🟰 " + ~ 5;


// Unary Operators
delete person.age;
document.getElementById("demo5").innerHTML = 
+x + "<br>"+
-x + "<br>" +
"'Disha' is " + typeof "Disha" + "<br>" +
"3.14 is " + typeof 3.14 + "<br>" +
"NaN is " + typeof NaN + "<br>" +
"false is " + typeof false + "<br>" +
"[1, 2, 3, 4] is " + typeof [1, 2, 3, 4] + "<br>" +
"{name:'Disha', age:21} is " + typeof {name:'Disha', age:21} + "<br>" +
"new Date() is " + typeof new Date() + "<br>" +
"function () {} is " + typeof function () {} + "<br>" +
"myCar is " + typeof myCar + "<br>" +
"null is " + typeof null +"<br>"+
person.age;

// Arithmetic Operators
let  text1= "Disha";
let text2 = "Khunt";
document.getElementById("demo6").innerHTML =
 "5**2 🟰 " +(5**2) + "<br>" +
 "5*2 🟰 " +(5*2) + "<br>" +
 "5/2 🟰 " +(5/2) + "<br>" +
 "5%2 🟰 " +(5%2) + "<br>"+
 "5+2 🟰 " +(5+2) + "<br>"+
 "5-2 🟰 " +(5-2) + "<br>" +
 "'Disha' + 'Khunt' 🟰 " +text1 +text2;

//  Shift Operators
document.getElementById("demo7").innerHTML = 
"(5 << 1) 🟰 "+ (5 << 1)+ "<br>"+
"(-5 >> 1) 🟰 " +(-5 >> 1) + "<br>"+
"(5 >>> 1) 🟰 " +(5 >>> 1);

// Relational Operators
const cars = ["Saab", "Volvo", "BMW"];
document.getElementById("demo8").innerHTML =
"('PI' in Math) 🟰 " +("PI" in Math) + "<br>"+
"(cars instanceof Array) 🟰 " +(cars instanceof Array) + "<br>" + 
"(cars instanceof Object) 🟰 " +(cars instanceof Object) + "<br>" +
"(cars instanceof String) 🟰 " +(cars instanceof String) + "<br>" +
"(cars instanceof Number) 🟰 " +(cars instanceof Number);

// Comparison Operators
document.getElementById("demo9").innerHTML = 
" 5 < 8  🟰 "+(5 < 8)+"<br>"+
" 5 <= 8  🟰 "+(5 <= 8) + "<br>" +
" 5 > 8  🟰 "+(5 > 8)+"<br>"+
" 5 >= 8  🟰 "+(5 >= 8)+"<br>" +
" 8 == 5 🟰 "+(8 == 5)+"<br>"+
" 8 === 5 🟰 "+(8 === 5)+"<br>"+
" 5 != 8  🟰 "+(5!= 8)+"<br>"+
" 5 !== 8  🟰 "+(5 !== 8)+"<br>";

// Bitwise Operators
document .getElementById("demo10").innerHTML = 
"5 & 1 🟰 "+(5&1) + "<br>"+
"5 ^ 1 🟰 "+(5^1) + "<br>"+
"5 | 1 🟰 "+ (5|1);

// Logical Operators
let x1 = 5;
let x2 = 2;
let name = null;
let text = "missing";
let result1 = name ?? text;
document.getElementById("demo11").innerHTML = 
" x1 = 5 , x2 = 2"+"<br>"+
"(x1 < 10 && x2 > 1) 🟰 "+(x1 < 10 && x2 > 1) +"<br>"+
"(x1 < 10 && x2 < 1) 🟰 "+(x1 < 10 && x2 < 1)+ "<br>"+
"(x1 == 6 || x2 == 6) 🟰 "+(x1 == 6 || x2 == 6)+"<br>"+
"(x1 == 5 || x2 == 0) 🟰 "+(x1 == 5 || x2 == 0)+"<br>"+
"(x1 == 6 || x2 == 2) 🟰 "+(x1 == 6 || x2 == 2)+"<br>"+
"(x1 == 5 || x2 == 2) 🟰 "+(x1 == 5 || x2 == 2)+ "<br>"+
"The name is " + result1;

// Conditional (ternary) Operator
function myFunction(){
    let age = document.getElementById("age").value;
    let voteable = (age<18)? "Not valid your vote.":"valid your vote.";

    document.getElementById("demo12").innerHTML = voteable;
}

// Assignment Operators
let a1 = 10;
const size = {x: 5, y:10 , z: 1};
let a2 = 2;
a2 += 5;
let a3 = 10;
a3 -= 5;
let a4 = 5;
a4 *= 5;
let a5 = 3;
a5 **=2;
let a6 = 5;
a6 /=2;
let a7 = 10;
a7 %=2;
let a8 = 5;
a8 <<= 2;
let a9 = 5;
a9 >>= 2;
let a10 = 100;
a10 >>>= 5;
let a11 = 10;
a11 &= 5;
let a12 = 100;
a12 |= 2;
let a13 = 25;
a13 ^= 5;
let a14 = 10;
a14 &&= 5;
let a15 = 50;
a15 ||= 3;

let hello = "";
hello = (val) => "Hello " + val;

const numbers = [23,55,21,87,56];
let maxValue = Math.max(...numbers);

document.getElementById("demo13").innerHTML = 
" = Operator : value of a1 is  🟰 "+ a1 +"<br>"+
" : Operator : the width is 🟰 "+size.x + "<br>"+
" += Operator : value of a2 is 🟰 "+a2 + "<br>"+
"-= Operator : value of a3 is 🟰 "+a3 +"<br>"+
"*= Operator : value of a4 is 🟰 "+a4 + "<br>"+
"**= Operator : value of a5 is 🟰 "+a5 + "<br>"+
"/= Operator : value of a6 is 🟰 "+a6 + "<br>"+
"%= Operator : value of a7 is 🟰 "+a7 + "<br>"+
"<<= Operator : value of a8 is 🟰 "+a8 + "<br>"+
">>= Operator : value of a9 is 🟰 "+a9 + "<br>"+
">>>= Operator : value of a10 is 🟰 "+a10 + "<br>"+
" &= Operator : value of a11 is 🟰 "+a11 + "<br>"+
" |= Operator : value of a12 is 🟰 "+a12 + "<br>"+
" ^= Operator : value of a13 is 🟰 "+a13 + "<br>"+
" &&= Operator : value of a14 is 🟰 "+a14 + "<br>"+
" ||= Operator : value of a15 is 🟰 "+a15 + "<br>"+
"Arrow function : "+hello("Disha")+ "<br>"+
"... Operator : max value is 🟰 "+ maxValue;