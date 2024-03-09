const person = {
    firstName: "Disha",
    lastName: "Khunt",
    id : 200200107025,
    fullName : function(){
        return this.firstName + " "+this.lastName;
    }
}
 document.getElementById("demo1").innerHTML =
"<b>Full Name : </b>" + person.fullName();

// this Alone
"use strict";
let x = this;
document.getElementById("demo2").innerHTML = x; 

// this in a Function (Default)
document.getElementById("demo3").innerHTML = myFunction();

function myFunction() {
  return this;
}

// this in a Function (Strict)
"use strict";
document.getElementById("demo4").innerHTML = myFunction1();

function myFunction1() {
  return this;
}


// Explicit Function Binding
const person1 = {
    fullName: function(){
        return this.firstName + " "+this.lastName;
    }
}
const person2 = {
    firstName: "Disha",
    lastName: "Khunt"
}
let call = person1.fullName.call(person2);
document.getElementById("demo5").innerHTML = 
"FullName : " +call;

// Function Borrowing
const member = {
    firstName:"Manshi",
    lastName: "Knunt",
  }
  
let fullName = person.fullName.bind(member);
  
document.getElementById("demo6").innerHTML = fullName();