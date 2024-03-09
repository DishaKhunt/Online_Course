// Arrow Function
let myFunction = (a,b) => a*b;
document.getElementById("demo1").innerHTML = "Multiplication : "+ myFunction(4,5);

// Before Arrow:
let hello = "";

hello = function() {
    document.getElementById("demo2").innerHTML =  "Hello Disha!!!!"
}

// With Arrow Function:
let hello1 = "";
hello1 = () => {
    document.getElementById("demo3").innerHTML =  "Hello...... Disha!!!!"
}

// Arrow Functions Return Value by Default:
let hello2 = "";

hello2 = () => "Hello World!!!!!";

document.getElementById("demo4").innerHTML = hello2();

// Arrow Function With Parameters:
let hello3 = "";

hello3 = (val) => "Hello " + val;

document.getElementById("demo5").innerHTML = hello3("Universe!");


// Arrow Function Without Parentheses:
let hello4 = "";

hello4 = val => "Hello " + val;

document.getElementById("demo6").innerHTML = hello4("Universe!");

// this keywowrd
let hello5 = "";
hello5 = function(){
    document.getElementById("demo7").innerHTML += this; 
}

//The window object calls the function:
window.addEventListener("load",hello5);

//A button object calls the function:
document.getElementById("btn").addEventListener("click",hello5);


// 
let hello6 = "";
hello6 = () => {
    document.getElementById("demo8").innerHTML += this;
  }
  
  //The window object calls the function:
  window.addEventListener("load", hello6);
  
  //A button object calls the function:
  document.getElementById("btn1").addEventListener("click", hello6);