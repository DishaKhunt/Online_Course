document.getElementById("demo1").innerHTML = 
"Boolean(10 > 9) 🟰 "+Boolean(10 > 9)+"<br>"+
"10>9 🟰 " + (10>9);

// Everything With a "Value" is True
document.getElementById("demo2").innerHTML =
"Boolean(100) 🟰 " + Boolean(100) + "<br>" +
"Boolean(3.14) 🟰 " + Boolean(3.14) + "<br>" +
"Boolean(-15)  🟰 " + Boolean(-15) + "<br>" +
"Boolean('Hello')  🟰 " + Boolean("Hello") + "<br>" +
"Boolean('false') 🟰 " + Boolean('false') + "<br>" +
"Boolean(1 + 7 + 3.14) 🟰 " + Boolean(1 + 7 + 3.14);

// Everything Without a "Value" is False
let x1 = 0;
let x2 = -0;
let x3 = "";
let x4;
let x5 = null;
let x6 = false;
let x7 = 10/"Hello";

document.getElementById("demo3").innerHTML = 
"0 🟰 "+Boolean(x1)+"<br>"+
"-0 🟰 "+Boolean(x2)+"<br>"+
"'' 🟰 "+Boolean(x3)+"<br>"+
" 🟰 "+Boolean(x4)+"<br>"+
"null 🟰 "+Boolean(x5)+"<br>"+
"false 🟰 "+Boolean(x6)+"<br>"+
"10/'Hello' 🟰 "+Boolean(x7)+"<br>";

// Booleans as Objects
// x is a boolean
let x = false;

// y is an object
let y = new Boolean(false);

let z = new Boolean(false);

document.getElementById("demo4").innerHTML = 
"x =false 🟰 "+typeof x + "<br>" +
"y =new Boolean(false) 🟰 "+typeof y+"<br>"+
"z =new Boolean(false) 🟰 "+typeof y+"<br>"+
"x==y 🟰 "+(x==y)+"<br>"+
"x===y 🟰 "+(x===y)+"<br>"+
"y==z 🟰 "+(y==z)+"<br>"+
"y===z 🟰 "+(y===z);