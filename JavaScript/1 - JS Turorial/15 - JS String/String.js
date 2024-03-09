let name = "Disha";
document.getElementById("demo1").innerHTML = name;

let userName1 = "Disha Khunt"; //Single  quote
let userName2 = 'Disha Khunt'; //Double quote

document.getElementById("demo2").innerHTML = '"Disha Khunt" = '+userName1 +"<br>"+"'Disha Khunt' = "+userName2;

// Quotes Inside Quotes
let str1 = "It's alright";
let str2 = "She is called 'Disha'";
let str3 = 'She is called "Disha"';

document.getElementById("demo3").innerHTML = str1+"<br>"+str2+"<br>"+str3;

// Template Strings
let text = `She's often called "Disha."`;
document.getElementById("demo4").innerHTML = text;

// String Length
let text1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
document.getElementById("demo5").innerHTML = "ABCDEFGHIJKLMNOPQRSTUVWXYZ = "+text1.length;

// Escape Characters
let text2 = "We are the so-called \"Vikings\" from the north.";
let text3= 'It\'s alright.';
let text4 = "The character \\ is called backslash.";
document.getElementById("demo6").innerHTML = text2+"<br>"+text3+"<br>"+text4;


// Strings as Objects
let firstName = "Disha";
let firstName1 = new String("Disha");
let firstName2 = new String("Disha");
document.getElementById("demo7").innerHTML = firstName1 + " types of : "+ typeof firstName1;

document.getElementById("demo8").innerHTML = "== operator : "+ (firstName == firstName1);
document.getElementById("demo9").innerHTML = "=== operator : "+ (firstName === firstName1);

document.getElementById("demo10").innerHTML = "== Operator : "+ (firstName1 == firstName2);
document.getElementById("demo11").innerHTML = "=== operator : "+ (firstName1 === firstName2);