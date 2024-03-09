// Declarations on Top

// Declare at the beginning
let firstName, lastName, price, discount, fullPrice;

// Use later
firstName = "John";
lastName = "Doe";

price = 19.90;
discount = 0.10;

fullPrice = price - discount;

// display output
document.getElementById("demo1").innerHTML = "Total Price : "+fullPrice;

// Initialize Variables
// Declare and initiate at the beginning
let firstName1 = "";
let lastName1 = "";
let price1 = 0;
let discount1 = 0;
let fullPrice1 = 0;
const myArray = [];
const myObject = {}; 

// Declare Objects with const

let car1 = {type:"Thar", model:"500", color:"Black"};
car1 = "Thar"; // Changes object to string

let car2 = {type:"Thar", model:"500", color:"Black"};
car2 = "Thar";  //Not possible


// Don't Use new Object()
let x1 = "";
let x2 = 0;
let x3 = false;
const x4 = {};
const x5 = [];
const x6 = /()/;
const x7 = function(){};

document.getElementById("demo2").innerHTML =
"x1: " + typeof x1 + "<br>" +
"x2: " + typeof x2 + "<br>" +
"x3: " + typeof x3 + "<br>" +
"x4: " + typeof x4 + "<br>" +
"x5: " + typeof x5 + "<br>" +
"x6: " + typeof x6 + "<br>" +
"x7: " + typeof x7 + "<br>";

// Beware of Automatic Type Conversions
let x = "Hello";
x = 5;
document.getElementById("demo3").innerHTML = "Types of : "+ typeof x;

let y1 = 5 + 7;       // x.valueOf() is 12,  typeof x is a number
let y2 = 5 + "7";     // x.valueOf() is 57,  typeof x is a string
let y3 = "5" + 7;     // x.valueOf() is 57,  typeof x is a string
let y4 = 5 - 7;       // x.valueOf() is -2,  typeof x is a number
let y5 = 5 - "7";     // x.valueOf() is -2,  typeof x is a number
let y6 = "5" - 7;     // x.valueOf() is -2,  typeof x is a number
let y7 = 5 - "x";     // x.valueOf() is NaN, typeof x is a number

document.getElementById("demo4").innerHTML =
" 5 + 7  🟰 "+ y1.valueOf() + " "+ typeof y1 + "<br>"+
" 5 + '7'  🟰 "+ y2.valueOf() + " "+ typeof y2 + "<br>"+
" '5' + 7  🟰 "+ y3.valueOf() + " "+ typeof y3 + "<br>"+
" 5 - 7  🟰 "+ y4.valueOf() + " "+ typeof y4 + "<br>"+
" 5 - '7'  🟰 "+ y5.valueOf() + " "+ typeof y5 + "<br>"+
" '5' - 7  🟰 "+ y6.valueOf() + " "+ typeof y6 + "<br>"+
" 5 - 'x'  🟰 "+ y7.valueOf() + " "+ typeof y7;

document.getElementById("demo5").innerHTML = "'Hello' - 'Disha' : "+ "Hello"-"Disha"; 

// Use === Comparison
document.getElementById("demo6").innerHTML = 
'(0 == "") : '+(0 == "") + "<br>"+
'(1 == "1") : '+(1 == "1")+ "<br>"+
'(1 == true) : ' +(1 == true) +"<br>"+
'(0 === "") : '+(0 === "") + "<br>"+
'(1 === "1") : '+(1 === "1")+ "<br>"+
'(1 === true) : ' +(1 === true);

// Use Parameter Defaults
function myFunction(x, y) {
    if (y === undefined) {
      y = 0;
    }  
    return x * y;
  }
  document.getElementById("demo7").innerHTML = "Multiplication : "+ myFunction(4);


//   End Your Switches with Defaults
let day;
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case  6:
    day = "Saturday";
    break;
  default:
     day = "unknown";
}
document.getElementById("demo8").innerHTML = "Today is " + day;

// Avoid Number, String, and Boolean as Objects
let a = "John";       
let b = new String("John");
let c = new String("John"); 

document.getElementById("demo9").innerHTML =
"(a === b) : " +(a === b) + "<br>"+
"(b == c) : " +(b == c);