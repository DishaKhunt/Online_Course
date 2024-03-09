// 
let x = 0;
document.getElementById("demo1").innerHTML =
"Boolean(x == 10) : " +Boolean(x == 10)+ "<br>"+
"Boolean(x = 10) : " +Boolean(x = 10)+ "<br>"+
"Boolean(x = 0) : "+ Boolean(x = 0);

// Expecting Loose Comparison
let x1 = 10;
let x2 = "10";
document.getElementById("demo2").innerHTML =
"(x1 == x2) : " +(x1 == x2) + "<br>"+
"(x1 === x2) : " +(x1 === x2);

// 
switch(x1){
    case 10:
    document.getElementById("demo3").innerHTML = "Hello";
}

// Confusing Addition & Concatenation

document.getElementById("demo4").innerHTML = 
"10 +5 : "+(10 +5) + "<br>"+
"10 +'5' : "+(10 +"5");

// Misunderstanding Floats
document.getElementById("demo5").innerHTML = 
"0.1+0.2 : "+ (0.1+0.2) + "<br>"+
" (0.1 * 10 + 0.2 *10) / 10 : " +((0.1 * 10 + 0.2 *10) / 10);

// Breaking a JavaScript String
document.getElementById("demo6").innerHTML = "Hello Dishaaa";
// document.getElementById("demo7").innerHTML = "Hello
// Disha";
document.getElementById("demo7").innerHTML = "Hello \
Disha";

// Misplacing Semicolon
let x3 = 5;
if (x3 == 19);
{
document.getElementById("demo8").innerHTML = "Hello";
}

// Breaking a Return Statement
document.getElementById("demo9").innerHTML = myFunction(55) + "<br>"+myFunction2(55)+ "<br>"+ myFunction3(55) + "<br>" + myFunction4(55);
function myFunction(a) {
  let power = 10
  return a * power
}
function myFunction2(a) {
    let power = 10;
    return a * power;
  }
function myFunction3(a) {
    let 
    power = 10;
    return a * power;
  }
function myFunction4(a) {
    let 
    power = 10;
    return 
    a * power;
  }

// Accessing Arrays with Named Indexes
const person = [];
person[0] = "Disha";
person[1] = "Khunt";
person[2] = 21; 
document.getElementById("demo10").innerHTML =
person[0] + " " + person.length;


// Ending Definitions with a Comma
// person = {firstName:"John", lastName:"Doe", age:46,}
// points = [40, 100, 1, 5, 25, 10,];

// JSON:
// person = {"firstName":"John", "lastName":"Doe", "age":46}
// points = [40, 100, 1, 5, 25, 10];

// Undefined is Not Null

document.getElementById("demo11").innerHTML = `typeof myObj === "undefined" : `+( typeof myObj === "undefined") + "<br>"+
 `typeof myObj !== "undefined" && myObj !== null : `   +(typeof myObj !== "undefined" && myObj !== null);
