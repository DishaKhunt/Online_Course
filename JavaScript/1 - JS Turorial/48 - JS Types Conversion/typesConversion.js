//  Number() Method
document.getElementById("demo1").innerHTML =
"Number(3.14) 🟰 "+ Number(3.14) + "<br>"+
"Number(Math.PI) 🟰 "+ Number(Math.PI) + "<br>"+
"Number(' ') 🟰 "+ Number("   ")+"<br>"+
"Number('') 🟰 "+ Number("")+"<br>"+
"Number('99 88') 🟰 "+ Number("99 88")+ "<br>"+
"Number('Disha') 🟰 "+ Number("Disha");  

// Unary + Operator
let y = "5";
let x = +y;
let y1 = "Disha";
let x1 = +y1;
document.getElementById("demo2").innerHTML = 
"y = '5' 🟰 "+ typeof y + "<br>"+
"x = +y 🟰  "+ typeof x + "<br>"+
"y1 = 'Disha' 🟰 "+ typeof y1 + "<br>"+
"x1 = +y1 🟰  "+ typeof x1;

// Converting Numbers to Strings
let a = 523;
document.getElementById("demo3").innerHTML =
"String(a) 🟰 "+ String(a) + "<br>" +
"String(523) 🟰 "+ String(523) + "<br>" +
"String(500+23) 🟰 "+ String(500 + 23) +"<br>"+
"a.toString() 🟰 " +a.toString() + "<br>" +
"(523).toString() 🟰 " +(523).toString() + "<br>" +
"(500+23).toString() 🟰 " +(500 + 23).toString();


// Converting Dates to Numbers
let date = new Date();
document.getElementById("demo4").innerHTML =
"Number(date) 🟰 " +Number(date)+ "<br>"+
"date.getTime() 🟰 " +date.getTime();

// Converting Dates to Strings
document.getElementById("demo5").innerHTML = 
"String(Date()) 🟰 " +String(Date()) + "<br>"+
"Date().toString() 🟰 " +Date().toString();

// Converting Booleans to Numbers
document.getElementById("demo6").innerHTML =
 "Number(false) 🟰 "+Number(false) +"<br>"+
 "Number(True) 🟰  "+ Number(true) ;
 
//  Converting Booleans to Strings
document.getElementById("demo7").innerHTML = 
"String(false) 🟰 " +String(false) + "<br>"+
"String(true) 🟰 " +String(true) + "<br>"+
"false.toString() 🟰 " +false.toString() + "<br>"+
"true.toString() 🟰 " +true.toString();

// Automatic Type Conversion
document.getElementById("demo8").innerHTML =
'(5 + null)  🟰  ' +(5 + null) + "<br>"  +
'("5" + null)  🟰 ' +("5" + null) + "<br>" +
'("5" + 2) 🟰  ' +("5" + 2) + "<br>" +
'("5" - 2)  🟰 ' +("5" - 2) + "<br>" +
'("5" * "2")  🟰 ' +("5" * "2") + "<br>" +
'("5" / "2")  🟰 ' +("5" / "2") + "<br>";""

// Automatic String Conversion
let myVar1 = {name:"Disha"} ;
let myVar2 = [1,2,3,4] ;      
let myVar3 = new Date() ;
let myVar4 = 123;
let myVar5 = false;
let myVar6 = true;

document.getElementById("demo9").innerHTML = 
"{name:'Disha'} 🟰 " +myVar1+ "<br>"+
"[1,2,3,4] 🟰 " +myVar2+ "<br>"+
"new Date() 🟰 " +myVar3 + "<br>"+
"123.toString() 🟰 "+myVar4.toString()+ "<br>"+
"false.toString() 🟰 " + myVar5.toString() + "<br>"+
"true.toString() 🟰 " + myVar6.toString();