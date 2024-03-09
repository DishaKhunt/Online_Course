//Declaring Strict Mode

"use strict";
x = 3.14;    

"use strict";
myFunction();

function myFunction(){
    y = 3.14;
}

// Using an object, without declaring it, is not allowed
"use strict";
x = {p1:10, p2:20};


// Deleting a variable (or object) is not allowed
"use strict";
// let x1 = 3.14;
// delete x1;       

// Deleting a function is not allowed.
"use strict";
// function x(p1, p2) {};
// delete x;     

// Duplicating a parameter name is not allowed
"use strict";
function x(p1, p1) {}; 

// Octal numeric literals are not allowed
"use strict";
// let x = 010; 

// Octal escape characters are not allowed
"use strict";
// let x = "\010";      

// Writing to a read-only property is not allowed
"use strict";
const obj = {};
Object.defineProperty(obj, "x", {value:0, writable:false});

obj.x = 3.14; 

// Writing to a get-only property is not allowed
"use strict";
const obj = {get x() {return 0} };

obj.x = 3.14;      

// Deleting an undeletable property is not allowed
"use strict";
delete Object.prototype; 

// The word eval cannot be used as a variable
"use strict";
// let eval = 3.14;  

// The word arguments cannot be used as a variable
"use strict";
// let arguments = 3.14; 

// The with statement is not allowed
"use strict";
// with (Math){x = cos(2)}; 

// For security reasons, eval() is not allowed to create variables in the scope from which it was called.
"use strict";
eval ("x = 2");
alert (x);  

// In strict mode, eval() can not declare a variable using the var keyword
"use strict";
eval ("var x = 2");
alert (x);  

// eval() can not declare a variable using the let keyword
eval ("let x = 2");
alert (x);     

"use strict";
function myFunction() {
  alert(this); // will alert "undefined"
}
myFunction();