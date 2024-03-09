// Invoking a Function as a Function
function myFunction(a, b) {
    return a * b;
  }
document.getElementById("demo1").innerHTML = 
"Multiplication : " +myFunction(10, 2) + "<br>"+
"window.myFunction(10,2) : "+window.myFunction(10,2); 

// The Global Object
let x = myFunction();
function myFunction() {
  return this;
}
document.getElementById("demo2").innerHTML = x; 

// Invoking a Function as a Method
const myObject = {
    firstName:"Disha",
    lastName: "Khunt",
    fullName: function() {
      return this.firstName + " " + this.lastName;
    },
    fullName1: function(){
        return this;
    }
  }
  document.getElementById("demo3").innerHTML =
   myObject.fullName() + "<br>"+
   myObject.fullName1() ; 

// Invoking a Function with a Function Constructor
function myFunction1(arg1, arg2) {
    this.firstName = arg1;
    this.lastName  = arg2;
  }
  
  const myObj = new myFunction1("Disha","Khunt");
  
  document.getElementById("demo4").innerHTML = myObj.firstName; 