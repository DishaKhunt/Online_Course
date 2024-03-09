// Using String search() With a String
let userName = "Disha Khunt !!!!";
let search = userName.search("Khunt");

document.getElementById("demo1").innerHTML = 
userName + "<br>"+
"userName.search('Khunt') 🟰 " + search;

// Using String search() With a Regular Expression
let search1 = userName.search(/Khunt/i);
document.getElementById("demo2").innerHTML = "userName.search(/Khunt/i) 🟰 " + search1;

// Using String replace() With a String
let replace = userName.replace(/Disha/i, "Manshi");
document.getElementById("demo3").innerHTML = ' userName.replace(/Disha/i, "Manshi") 🟰 ' +replace;

// Regular Expression Modifiers
let result1 = userName.match(/Disha/i);

let str =  "\nIs th\nis all there is ?"
let result2 = str.match(/is/g);

let result3 = str.match(/^is/m);

document.getElementById("demo4").innerHTML = 
"userName.match(/Disha/i) 🟰 " +result1 + "<br>"+
"str.match(/is/g) 🟰 " +result2 +"<br>"+
"str.match(/^is/m) 🟰 "+result3;

// Regular Expression Patterns

let result4 = userName.match(/[h]/g);

let num = "123456789";
let result5 = num.match(/[2-5]/g);

let text = "re, green, red, green , gren, gr, yellow, blue";
let result6 = text.match(/(red|green)/g);

document.getElementById("demo5").innerHTML = 
"userName.match(/[h]/g) 🟰 " +result4 + "<br>"+
"num.match(/[2-5]/g) 🟰 " +result5+ "<br>"+
"text.match(/(red|green)/g) 🟰 "+result6;

// Metacharacters
let str1 = "Disha khunt 52";
let result7 = str1.match(/\d/g); //	Find a digit

let result8 = str1.match(/\s/g); //Find a whitespace character

let result9 = str1.search(/\bkh/g);
let result10 = str1.search(/kh\b/g)
document.getElementById("demo6").innerHTML = 
str1+ "<br>" +
"str1.match(/\d/g) 🟰 " +result7+ "<br>"+
"str1.match(/\s/g) 🟰 " +result8 + "<br>"+
"str1.match(/\bkh/g) 🟰 "+result9 + "<br>"+
"str1.search(/kh\b/g) 🟰 "+result10;

// Quantifiers 
let str2 = "Hellooo World! Hello W3Schools!";

//	Matches any string that contains at least one n
let result11 = str2.match(/o+/g);

// 	Matches any string that contains zero or more occurrences of n
let result12 = str2.match(/lo*/g);

// 	Matches any string that contains zero or one occurrences of n
let str3 = "1, 100 or 1000?";
let result13 = str3.match(/10?/g);


document.getElementById("demo7").innerHTML =
str2 + "<br>"+
"str2.match(/o+/g) 🟰 " + result11 + "<br>"+
"str2.match(/lo*/g) 🟰 "+ result12 + "<br>" +
"str3.match(/10?/g) 🟰 "+ result13;

// Using the RegExp Object

// Using test()
let str4 = "Disha Khunt";
const pattern = /s/;

const str5 = /a/.exec(str4);

document.getElementById("demo8").innerHTML =
str4+ "<br>"+
"pattern = /s/ 🟰 " +pattern.test(str4) + "<br>"+
"Found " + str4[4] + " in position " + str5.index + " in the text: " + str4;


